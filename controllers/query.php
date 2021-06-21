<?php
//Connect Database
include "../config/db.php";

//Upload Proof of Payment
if (isset($_POST['pop_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $sendersAccName = $conn->real_escape_string($_POST['sendersAccName']);
    $sendersBank = $conn->real_escape_string($_POST['sendersBank']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $proof_path  = $conn->real_escape_string('upload/'.$_FILES['proof']['name']);
    $transRef = 'REF'.rand(10000000000, 9999);
    $paymentType = $conn->real_escape_string($_POST['paymentType']);
    $status = $conn->real_escape_string($_POST['status']);

    if (file_exists($proof_path))
    {
        $proof_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['proof']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['proof']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }


    $query = "INSERT INTO topup (userid, firstname, lastname, sendersaccname, sendersbank, amount, proof, transref, paymenttype, status)"
        . "VALUES ('$userID', '$firstName', '$lastName', '$sendersAccName', '$sendersBank', '$amount', '$proof_path', '$transRef', '$paymentType', '$status')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        //copy image to upload folder
        copy($_FILES['proof']['tmp_name'], $proof_path);

        $_SESSION['report_title'] = "Report Added";
        $_SESSION['report_message'] = "Gurantor Verification has been added 👍";
    }
    else {
        $error=$conn->error;
        $_SESSION['error_report_title'] = "Error Occurred";
        $_SESSION['error_report_message'] = $error;
    }
}
