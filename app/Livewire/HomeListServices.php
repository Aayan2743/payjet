<?php

namespace App\Livewire;

use Livewire\Component;

class HomeListServices extends Component
{


  public function gettimestamp(){
    $key = "a2e7f799-fdd3-4718-a6c9-52f3046fe0f7";

    // Encode it using base64
    $encodedKey = base64_encode($key);
    
   
    $secret_key_timestamp = (int)(round(microtime(true) * 1000));
    
    
    $signature = hash_hmac('SHA256', $secret_key_timestamp, $encodedKey, true);
    
    // Encode it using base64
    $secret_key = base64_encode($signature);
    
    //Display
    // echo "secret-key: " . $secret_key. "\n";
    // echo "secret-key-timestamp: " . $secret_key_timestamp . "\n";
    
    $this->secret_keys=$secret_key;
    $this->secret_key_timestamps=$secret_key_timestamp;


  }


  public function paybill(){

 

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.eko.in:25002/ekoicici/v2/billpayments/paybill?initiator_id=9962981729',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>'{
        
        "source_ip":"121.121.1.1",
        "user_code":"35854001",
        
        "amount":"50" ,
        "client_ref_id":"202105311125123456",
        "utility_acc_no":"151627591",
        "confirmation_mobile_no":"9999999999",
        "sender_name":"Kaushik",
        "operator_id":"22",
        "latlong":"77.06794760,77.06794760"
    }
    ',
      CURLOPT_HTTPHEADER => array(
        'developer_key: becbbce45f79c6f5109f848acd540567',
        'secret-key-timestamp: 1626696381248',
        'secret-key: I/EzGL4m0Bxu9OHW45iW/jVrOej8tEqfnDEplyVeVTc=',
        'request_hash: Fsn/3iuQole5Ka30N0QW1Dku/YwCZqh8gWFtX2MNNtE=',
        'Content-Type: application/json',
        'Connection: Keep-Alive',
        'Accept-Encoding: gzip',
        'User-Agent: okhttp/3.9.0'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    


  }



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
