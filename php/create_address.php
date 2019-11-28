<?php

echo "Example 1\n\n";
echo "Create payment address:\n";
$params = array("forwarding_address"=> "1Bitapsw1aT8hkLXFtXwZQfHgNwNJEyJJ1",
                 "callback_link" => "http://testx.bitaps.com/simple/callback");

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.bitaps.com/btc/v1/create/payment/address",
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
}

echo "Example 2\n\n";
echo "Create payment P2WPKH address:\n";
$params = array("forwarding_address"=> "1Bitapsw1aT8hkLXFtXwZQfHgNwNJEyJJ1",
                 "callback_link" => "http://testx.bitaps.com/simple/callback",
                 "bech32" => "true");

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.bitaps.com/btc/v1/create/payment/address",
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
}

echo "Example 3\n\n";
echo "Create payment address with distribution(percent):\n";
$params = array("forwarding_address_primary"=> "1Bitapsw1aT8hkLXFtXwZQfHgNwNJEyJJ1",
                "forwarding_address_secondary"=> "37P8thrtDXb6Di5E7f4FL3bpzum3fhUvT7",
                "forwarding_address_primary_share" => "10%",
                "confirmations" => 1,
                "callback_link" => "http://testx.bitaps.com/simple/callback",
                "bech32" => "true");

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.bitaps.com/btc/v1/create/payment/address/distribution",
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
}

echo "Example 4\n\n";
echo "Create payment address with distribution(amount):\n";
$params = array("forwarding_address_primary"=> "1Bitapsw1aT8hkLXFtXwZQfHgNwNJEyJJ1",
                "forwarding_address_secondary"=> "37P8thrtDXb6Di5E7f4FL3bpzum3fhUvT7",
                "forwarding_address_primary_share" => "30000",
                "confirmations" => 1,
                "callback_link" => "http://testx.bitaps.com/simple/callback",
                "bech32" => "true");

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.bitaps.com/btc/v1/create/payment/address/distribution",
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
}