<?php
$zapierWebhook = 'https://hooks.zapier.com/hooks/catch/23020768/27j9jpi/';

$name = "Samukelo";
$email = "samkelokay2@gmail.com";
$subject = "Testing Dubsado Integration";
$message = "This is a test message sent to Zapier webhook.";
$date = date('Y-m-d H:i:s');

$data = [
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'message' => $message,
    'date' => $date
];

$ch = curl_init($zapierWebhook);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
curl_close($ch);

echo "Sent! Response: " . $response;
?>
