<?php
//Connect Database
include "../config/db.php";

//Upload Proof of Payment
if (isset($_POST['pop_btn'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $userID = $conn->real_escape_string($_POST['userID']);
    $sendersAccName = $conn->real_escape_string($_POST['sendersAccName']);
    $sendersBank = $conn->real_escape_string($_POST['sendersBank']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $proof_path  = $conn->real_escape_string('../upload/'.$_FILES['proof']['name']);
    $transRef = 'REF_'.rand(10000000000, 9999);
    $paymentType = $conn->real_escape_string($_POST['paymentType']);
    $paymentStatus = $conn->real_escape_string($_POST['paymentStatus']);

    if (file_exists($proof_path))
    {
        $proof_path = $conn->real_escape_string('../upload/'.uniqid().rand().$_FILES['proof']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['proof']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }


    $query = "INSERT INTO wallet_topup (userID, sendersAccName, sendersBank, amount, proof, transRef, paymentType, paymentStatus)"
        . "VALUES ('$userID', '$sendersAccName', '$sendersBank', '$amount', '$proof_path', '$transRef', 'Bank Transfer', 'Pending')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        //copy image to upload folder
        copy($_FILES['proof']['tmp_name'], $proof_path);

        $_SESSION['pop_success_message_title'] = "Payment Proof Uploaded";
        $_SESSION['pop_success_message'] = "Wallet will be credited once payment is verified.";
    }
    else {
        $error=$conn->error;
        $_SESSION['message_title'] = "Error Occurred";
        $_SESSION['message'] = $error;
    }
}


//Corporate Employee Search
if (isset($_POST['domestic_employee_btn'])) {

    $status = $conn->real_escape_string($_POST['status']);
    $id = $conn->real_escape_string($_POST['id']);
    $userID = $conn->real_escape_string($_POST['userID']);
    $employee_firstName = $conn->real_escape_string($_POST['employee_firstName']);
    $employee_lastName = $conn->real_escape_string($_POST['employee_lastName']);
    $meansOfID_path  = $conn->real_escape_string('../upload/'.$_FILES['meansOfID']['name']);
    $curriculumVitae_path  = $conn->real_escape_string('../upload/'.$_FILES['curriculumVitae']['name']);
    $searchRef = 'REF'.rand(10000000000, 9999);

    if (file_exists($meansOfID_path))
    {
        $meansOfID_path = $conn->real_escape_string('../upload/'.uniqid().rand().$_FILES['meansOfID']['name']);
    }
    if (file_exists($curriculumVitae_path))
    {
        $curriculumVitae_path = $conn->real_escape_string('../upload/'.uniqid().rand().$_FILES['curriculumVitae']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['meansOfID']['type'])) {
        $checker ++;
    }
    if (preg_match("!pdf!", $_FILES['curriculumVitae']['type'])) {
        $checker ++;
    }
    if ($checker < 2){
        exit;
    }


    $query = "INSERT INTO corp_employee_search (userID, employee_firstName, employee_lastName, meansOfID, curriculumVitae, searchRef, status)"
        . "VALUES ('$userID', '$employee_firstName', '$employee_lastName', '$meansOfID_path', '$curriculumVitae_path', '$searchRef', 'Pending')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        if ($wallet)

        //copy image to upload folder
        copy($_FILES['meansOfID']['tmp_name'], $meansOfID_path);
        copy($_FILES['curriculumVitae']['tmp_name'], $curriculumVitae_path);

        $_SESSION['success_message_title'] = "Data uploaded";
        $_SESSION['success_message'] = "Corporate employee search request sent 👍";
    }
    else {
        $error=$conn->error;
        $_SESSION['message_title'] = "Error Occurred";
        $_SESSION['message'] = $error;
    }
}
