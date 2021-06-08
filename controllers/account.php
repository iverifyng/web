<?php
session_start();

// Connect database
include "../config/db.php";


// User registration script
if (isset($_POST['signup_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $stat = $conn->real_escape_string($_POST['state']);
    $accountType = $conn->real_escape_string($_POST['accountType']);
    $securityKey = 'ISC'.rand(1000, 9999);


            $user_check_query = "SELECT * FROM users WHERE email='$email' and status='true' and firstName not null";
            $result = mysqli_query($conn, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            if ($user) { // if user exists
                if ($user['email'] === $email) {
                $_SESSION['message'] = "User already exist!";
                }
            }else { 

                $sql = "INSERT INTO users (fname, lname, email, phone, state, age, city, ighandle, address, picture, proof, regno, status)"
                    . "VALUES ('$fname', '$lname', '$email', '$phone', '$state', '$age', '$city', '$ighandle', '$address', '$picture_path', '$proof_path', '$regno', 'false')";
                    mysqli_query($conn, $sql);
            }
                if(mysqli_affected_rows($conn)>0){
                    //Send Verification Mail
                  $to = $email;
                  $subject = "Registration Successful";

                  $message = "
                    
                  ";

                  // Always set content-type when sending HTML email
                  $headers = "MIME-Version: 1.0" . "\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                  // More headers
                  $headers .= 'From: Nigerian Queen™ <donotreply@nigerianqueen.org>' . "\r\n";

                  mail($to,$subject,$message,$headers);
                }else{
                  error_log("Error is " .mysqli_error($conn));
                }
                    $_SESSION['email'] = $email;
                    header("Location: index");
                    exit();
}


//User login script
if (isset($_POST['admin_btn'])) {

    $username       = $conn->real_escape_string($_POST['username']);
    $password       = $conn->real_escape_string($_POST['password']);
    $firstName      = $conn->real_escape_string($_POST['firstName']);
    $lastName       = $conn->real_escape_string($_POST['lastName']);
    $email          = $conn->real_escape_string($_POST['email']);
    $position       = $conn->real_escape_string($_POST['position']);
    $status         = $conn->real_escape_string($_POST['status']);
    $phone          = $conn->real_escape_string($_POST['phone']);

    $password = sha1($password);
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName          = $row['firstName'];
        $lastName           = $row['lastName'];
        $email              = $row['email'];
        $username           = $row['username'];
        $id                 = $row['id'];
        $status             = $row['status'];
        $position           = $row['position'];
        $picture            = $row['picture'];
        $phone              = $row['phone'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['username']       = $username;
        $_SESSION['firstName']      = $firstName;
        $_SESSION['lastName']       = $lastName;
        $_SESSION['position']       = $position;
        $_SESSION['picture']        = $picture;
        $_SESSION['email']          = $email;
        $_SESSION['phone']          = $phone;
        $_SESSION['id']             = $id;
        if ($status == 'Inactive'){
            $_SESSION['message_title'] = "Account Inactive";
            $_SESSION['message'] = "Please contact admin!";
        }if ($status == 'Active') {
            if ($position == 'Admin') {
                header('location: dashboard');
            }if ($position == 'Super Admin') {
                header('location: dashboard');
            }
        }
    }else {
        $_SESSION['message_title'] = "Incorrect Details";
        $_SESSION['message'] = "Please login with correct credentials!";
    }
}

