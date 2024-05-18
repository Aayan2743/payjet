<?php

    if(!function_exists('pp')){
        function pp(){
            $key = "a2e7f799-fdd3-4718-a6c9-52f3046fe0f7";
            $encodedKey = base64_encode($key);
            $secret_key_timestamp = (int)(round(microtime(true) * 1000));
            // Computes the signature by hashing the salt with the encoded key 
            $signature = hash_hmac('SHA256', $secret_key_timestamp, $encodedKey, true);
            // Encode it using base64
            $secret_key = base64_encode($signature);
            //Display
            // $this->secret_keys=$secret_key;
            // $this->secret_key_timestamps=$secret_key_timestamp;


            $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.eko.in:25002/ekoicici/v2/customers/mobile_number:9705708003/balance?initiator_id=9705708003&user_code=35854001',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'developer_key: 96068e12494dda59df8b55799fa519b5',
    "secret-key:".$secret_key,
    "secret-key-timestamp:".$secret_key_timestamp
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$responseArray = json_decode($response, true);

// dd($responseArray['data']['balance']);

return $responseArray['data']['balance'];
        }
    }



