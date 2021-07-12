<?php
if(isset($_POST['pay']))
{
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];

    //* Prepare our rave request
    $request = [
        'tx_ref' => 'REF_'.rand(10000000000, 9999),
        'amount' => $amount,
        'currency' => 'NGN',
        'payment_options' => '',
        'redirect_url' => 'http://localhost/web/controllers/process.php',
        'customer' => [
            'email' => $email,
            'name' => $name,
        ],
        'meta' => [
            'price' => $amount
        ],
        'customizations' => [
            'title' => 'Paying for a sample product',
            'description' => 'sample'
        ]
    ];

    //* Call flutterwave emdpoint
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($request),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer FLWSECK_TEST-e1b62894a3b5613602f129d7111b6727-X',
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $res = json_decode($response);
    if($res->status == 'success')
    {
        $link = $res->data->link;
        echo "<script type='text/javascript'>document.location.href='{$link}';</script>";
    }
    else
    {
        $_SESSION['message_title'] = "Topup Failed!";
        $_SESSION['message'] = "Payment can not be processed.";
    }
}