<?php
header('Access-Control-Allow-Origin: *');
header('Response: HTTP/1.1 200 OK');
require('../wp-config.php');

$consumer_key = '******************************';
$consumer_secret = '**************************';

$ch = curl_init('https://wownow.pk/wp-json/wc/v2/orders?consumer_key='.$consumer_key.'&consumer_secret='.$consumer_secret);

$result = curl_exec($ch);
curl_close($ch);

print_r($result);

    // echo json_encode(array('Data' => $result));
