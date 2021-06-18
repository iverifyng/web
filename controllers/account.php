<?php
//Connect email sending
require_once "../auth/sendmail.php";

session_start();

//Connect database
include "../config/db.php";

// User registration script
if (isset($_POST['signup_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $accountType = $conn->real_escape_string($_POST['accountType']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $securityKey = 'ISC'.rand(1000, 9999);
    $token = bin2hex(random_bytes(50)); // generate unique token

    $check_user_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['message_title'] = "Agent Already Exist!";
        $_SESSION['message'] = "Modify or Delete user details";
    }else {
        // Finally, register agent if there are no errors in the form
        $password = sha1($password);//encrypt the password before saving in the database
        $query = "INSERT INTO users (firstName, lastName, email, password, securityKey, accountType, companyName, token, status) 
  			        VALUES('$firstName', '$lastName', '$email', '$password', '$securityKey', '$accountType', '$companyName', '$token', 'Active')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            sendVerificationEmail($email, $token);

            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['firstName'] = $firstName;
            header('location: joined-tribe');
        }else {
            $_SESSION['message_title']  = "Update Failed";
            $_SESSION['message']    = "Error updating record now: ".mysqli_error($conn);
        }
    }
}



//User login script
if (isset($_POST['user_login_btn'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $position = $conn->real_escape_string($_POST['position']);
    $status = $conn->real_escape_string($_POST['status']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $verified = $conn->real_escape_string($_POST['verified']);

    $password = sha1($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $id = $row['id'];
        $status = $row['status'];
        $verified = $row['verified'];
        $picture = $row['picture'];
        $phone = $row['phone'];

    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['position'] = $position;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['id'] = $id;
        if ($status == 'Inactive'){
            $_SESSION['message_title'] = "Account Inactive";
            $_SESSION['message'] = "Please contact our customer care.";
        }if ($status == 'Active') {
            if ($verified == 0) {
                $_SESSION['message_title'] = "Email not Verified";
                $_SESSION['message'] = "Check your email to verify account.";
            }if ($verified == 1) {
                header('location: dashboard');
            }
        }
    }else {
        $_SESSION['message_title'] = "Incorrect Details";
        $_SESSION['message'] = "Please login with correct credentials!";
    }
}

