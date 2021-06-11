<?php
//Add database
include "../config/db.php";

$fullName  = $conn->real_escape_string($_POST['fullName']);
$phoneNum   = $conn->real_escape_string($_POST['phoneNum']);
$email      = $conn->real_escape_string($_POST['email']);
$comment    = $conn->real_escape_string($_POST['comment']);


$sql = "INSERT INTO contact (fullName, phoneNum, email, comment)"
    . "VALUES ('$fullName', '$phoneNum', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error";
}