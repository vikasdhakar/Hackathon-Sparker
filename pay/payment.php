<?php
include 'pay/src/instamojo.php';

$item = $_POST["item"];
$amount = $_POST["amount"];
$name = $_POST["name"];
$num = $_POST["num"];
$email = $_POST["email"];
$add = $_POST["add"];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:05680d606becccf9b783dd4daa03508b",
                  "X-Auth-Token:26036328db5d92957592704fd5f8f361"));
$payload = Array(
    'purpose' => $item,
    'amount' => $amount,
    'phone' => $num,
    'buyer_name' => $name,
    'redirect_url' => 'http://erento.unaux.com/pay/thankyou.php',
    'send_email' => true,
    'webhook' => 'http://erento.unaux.com/index.php',
    'send_sms' => true,
    'shipping_address' => $add,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo "<br>";
echo "Copy & Paste Following URL in Your Browser to make Payment         ";
echo "<br>";
echo "<br>";
echo $response;

?>