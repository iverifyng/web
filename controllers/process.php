<?php
//Connect Database
include "../config/db.php";
if(isset($_GET['status']))
{
    //* check payment status
    if($_GET['status'] == 'cancelled')
    {
        // echo 'YOu cancel the payment';
        echo "<script type='text/javascript'>document.location.href='http://localhost/web/auth/topup';</script>";
    }
    elseif($_GET['status'] == 'successful')
    {
        $txid = $_GET['transaction_id'];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
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

        curl_close($curl);

        $res = json_decode($response);
        if($res->status)
        {
            $amountPaid = $res->data->charged_amount;
            $amountToPay = $res->data->meta->price;
            if($amountPaid >= $amountToPay)
            {
                echo 'Payment Successful';
                $query = "INSERT INTO wallet_topup (userID, sendersAccName, sendersBank, amount, proof, transRef, paymentType, paymentStatus)"
                    . "VALUES ('$userID', '$sendersAccName', '$sendersBank', '$amount', '$proof_path', '$transRef', 'Bank Transfer', 'Pending')";

                $_SESSION['success_message_title'] = "Payment successful";
                $_SESSION['success_message'] = "Your wallet has been funded👍";

                //* Continue to give item to the user
            }
            else
            {
                echo 'Fraud transactio detected';
            }
        }
        else
        {
            echo 'Can not process payment';
        }
    }
}