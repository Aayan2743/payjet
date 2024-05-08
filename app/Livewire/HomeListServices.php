<?php

namespace App\Livewire;

use Livewire\Component;

class HomeListServices extends Component
{





    public function render()
    {
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
        
        //Display
        // echo "secret-key: " . $secret_key. "\n";
        // echo "secret-key-timestamp: " . $secret_key_timestamp . "\n";
        
        $this->secret_keys=$secret_key;
        $this->secret_key_timestamps=$secret_key_timestamp;
        
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.eko.in:25002/ekoicici/v2/billpayments/operators_category',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'developer_key: 96068e12494dda59df8b55799fa519b5',
        'secret-key:'.$secret_key,
        'secret-key-timestamp:'.$secret_key_timestamp
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);

    $data = json_decode($response, true);

    // $data = json_decode($response, true);
    
    // dd($data);
    // echo $response;
    // dd($response->data.operator_category_name);



        return view('livewire.home-list-services',compact('data'));
    }
}
