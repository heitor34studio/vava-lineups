<?php
$email = addslashes($_POST['key1']);
$aprovado = 'aprovado';
function encryptData($data, $key, $iv) {
  $cipher = "AES-256-CBC";
  $options = OPENSSL_RAW_DATA;
  $encryptedData = openssl_encrypt($data, $cipher, $key, $options, $iv);
  return base64_encode($encryptedData);
}
$key = "k9AA64L&E!*0#23cNJo%o7tUF!l2M0aQ";
$iv = openssl_random_pseudo_bytes(16);
$ivString = base64_encode($iv);
$emailEncryptado = encryptData($email,$key,$iv);
$securityCode = encryptData($aprovado,$key,$iv);



require_once 'vendor/autoload.php';
require_once 'secrets.php';

\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1Nf7V3HU6bx05X8GAKJx3V6D',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/api/st-success.php?token='.urlencode($emailEncryptado).'&iv='.urlencode($ivString).'&securitycode='.$securityCode.'',
  'cancel_url' => $YOUR_DOMAIN . '/api/st-cancel.php?token='.urlencode($emailEncryptado).'&iv='.urlencode($ivString).'&securitycode='.$securityCode.'',
  'customer_email' => $email,
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
?>