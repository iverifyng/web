<?php
include "../config/db.php";

if(isset($_GET["transaction_id"]) AND isset($_GET["status"])  AND isset($_GET["tx_ref"])) {
    $trans_id = htmlspecialchars($_GET['transaction_id']);
    $trans_status = htmlspecialchars($_GET['status']);
    $trans_ref = htmlspecialchars($_GET['tx_ref']);

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/" . $trans_id . "/verify",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer FLWSECK_TEST-e1b62894a3b5613602f129d7111b6727-X"
        ),
    ));

    $response = curl_exec($curl);

    //Check for erros
    $error = curl_error($curl);
    if($error){
        die("Curl returned some errors: " . $error);
    }

    $result = json_decode($response);

    echo $status = $result->data->status;
    echo $message = $result->message;
    echo $id = $result->data->id;
    echo $transRef =  $result->data->tx_ref;
    echo $amount =  $result->data->amount;
    echo $charged_amount = $result->data->charged_amount;
    echo $sendersAccName =  $result->data->customer->name;
    echo $email =  $result->data->customer->email;

    if(($status != $trans_status) OR ($trans_id != $id)){
        header("Location: index.php");
        exit;
    }else{
        $jsonString = $_REQUEST['jsonGiven'];
        /* but for the sake of an example let's just set the string here */
        $jsonString = '{"name":"jack","school":"colorado state","city":"NJ","id":null}';

        /* use json_decode to create an array from json */
        $jsonArray = json_decode($jsonString, true);

            $id = $conn->real_escape_string($_POST['id']);
            $userID = $conn->real_escape_string($_POST['userID']);
            $sendersAccName = $conn->real_escape_string($_POST['sendersAccName']);
            $amount = $conn->real_escape_string($_POST['amount']);
            $transRef = $conn->real_escape_string($_POST['transRef']);


            $query = "INSERT INTO wallet_topup (sendersAccName, amount, transRef, paymentType, paymentStatus)"
                . "VALUES ('$sendersAccName', '$amount', '$transRef', 'Online Payment', 'Approved')";

            mysqli_query($conn, $query);
            if (mysqli_affected_rows($conn) > 0) {


                echo "Payment Proof Uploaded";
                $_SESSION['pop_success_message'] = "Wallet will be credited once payment is verified.";
            }
            else {
                $error=$conn->error;
                $_SESSION['message_title'] = "Error Occurred";
                $_SESSION['message'] = $error;
            }
    }

    curl_close($curl);
}else{
    header("Location: index.php");
    exit;
}