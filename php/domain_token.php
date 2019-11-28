<?php

echo "Example 1\n\n";
echo "Create domain access token:\n";
$params = array("callback_link" => "http://testx.bitaps.com/simple/callback");

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.bitaps.com/btc/v1/create/domain/authorization/code",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($params)
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  print_r(json_decode($response));

  $d = json_decode($response, true);
  $domain_hash = $d['domain_hash'];
  $authorization_code = $d['authorization_code'];
  echo "Authorization_code: ".$authorization_code."\n";
  echo "Callback handler MUST reply for GET request  with created authorization code\n";
  echo "In this example we use special crafted callback handler that reply with content of hash GET parameter \n";
  echo "http://testx.bitaps.com/simple/callback?hash={$authorization_code} \n\n";
  echo "Authorization code valid only for 1 success request from forwarding service \n";
  echo "Create domain token using authorization code: \n";

  $params = array("callback_link" => "http://testx.bitaps.com/simple/callback?hash=".$authorization_code);


    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.bitaps.com/btc/v1/create/domain/access/token",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($params)
    ));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  print_r(json_decode($response));}

  $d = json_decode($response, true);
  $access_token =  $d['access_token'];
    echo "Access_token: ".$access_token."\n";



}