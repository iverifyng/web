<?php
//Connect Database
include "../config/db.php";

// User registration script
if (isset($_POST['promo_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $userFullName = $conn->real_escape_string($_POST['userFullName']);
    $reason = $conn->real_escape_string($_POST['reason']);

    $check_user_query = "SELECT * FROM promo WHERE userID='".$_SESSION['id']."'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['message_title_promo'] = "Entry already sent!";
        $_SESSION['message_promo'] = "Winners will be announced on social media.";
    }else {
       
        $query = "INSERT INTO promo (userID, userFullName, reason) 
  			        VALUES('$userID', '$userFullName', '$reason')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['success_message_title_promo'] = "Entry Received👏";
            $_SESSION['success_message_promo'] = "Winners will be announced on social media.";
        }else {
            $_SESSION['message_title_promo']  = "Submission Failed";
            $_SESSION['message_promo']    = "Error submitting entry now: ".mysqli_error($conn);
        }
    }
}
