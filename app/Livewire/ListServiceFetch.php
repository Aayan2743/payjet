<?php

namespace App\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;



class ListServiceFetch extends Component
{


public $message="test";

     



    public function getservicedeatils(){
//   dd("dfgmdf");


$key = "a2e7f799-fdd3-4718-a6c9-52f3046fe0f7";

    // Encode it using base64
    $encodedKey = base64_encode($key);
    
    // Get current timestamp in milliseconds since UNIX epoch as STRING
    // Check out https://currentmillis.com to understand the timestamp format
    $secret_key_timestamp = (int)(round(microtime(true) * 1000));
    
    // Computes the signature by hashing the salt with the encoded key 
    $signature = hash_hmac('SHA256', $secret_key_timestamp, $encodedKey, true);
    
    // Encode it using base64
    $secret_key = base64_encode($signature);
    

// dd($signature);


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "25002",
  CURLOPT_URL => "https://api.eko.in:25002/ekoicici/v1/user/services/user_code:35854001?initiator_id=9705708003",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: api.eko.in:25002",
    "cache-control: no-cache",
    "developer_key: 96068e12494dda59df8b55799fa519b5",
    "secret-key:".$secret_key,
    "secret-key-timestamp:".$secret_key_timestamp
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

dd($response);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;

  dd($response);
}
    }


    public function payamountbank(){

//         <?php
// require_once('vendor/autoload.php');

$key = "a2e7f799-fdd3-4718-a6c9-52f3046fe0f7";

    // Encode it using base64
    $encodedKey = base64_encode($key);
    
    // Get current timestamp in milliseconds since UNIX epoch as STRING
    // Check out https://currentmillis.com to understand the timestamp format
    $secret_key_timestamp = (int)(round(microtime(true) * 1000));
    
    // Computes the signature by hashing the salt with the encoded key 
    $signature = hash_hmac('SHA256', $secret_key_timestamp, $encodedKey, true);
    
    // Encode it using base64
    $secret_key = base64_encode($signature);





// $client = new \GuzzleHttp\Client();
$client = new Client();

$response = $client->request('POST', 'https://api.eko.in:25002/ekoicici/v1/agent/user_code:35854001/settlement', [
  'form_params' => [
    'service_code' => 45,
    'source' => 'NEWCONNECT',
    'initiator_id' => '9705708003',
    'client_ref_id' => 'sdfgh3213fgdhfgh324',
    'payment_mode' => '5',
    'recipient_name' => 'Ravi Sekhara Reddy Guttikonda',
    'account' => '916010053086238',
    'ifsc' => 'UTIB0001463',
    'amount' => '1',
    'sender_name' => 'Shaker',
  ],
  'headers' => [
    'accept' => 'application/json',
    'content-type' => 'application/x-www-form-urlencoded',
    'developer_key' => '96068e12494dda59df8b55799fa519b5',
    'secret-key' => $secret_key,
    'secret-key-timestamp' => $secret_key_timestamp,
  ],
]);


var_dump($response->getBody());
dd($response);
echo $response->getBody();

$this->message=$response->getBody();
// dd($response->getBody());


    }


    
    public function render()
    {



        // $jsonString = file_get_contents(public_path('json/serviceslist.json'));

        // // Decode JSON string to PHP array
        // $data = json_decode($jsonString, true);

        // // Pass data to Blade view
        // // return view('your.blade.view', ['data' => $data]);

        // return view('livewire.list-service-fetch', ['services' => $data['data']['service_list']]);
        return view('livewire.list-service-fetch');
    }
}
