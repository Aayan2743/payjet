<?php
namespace App\Livewire;
use Livewire\Component;
use App\Models\userdetail;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
class Addnewuser extends Component
{
    public $name;
    public $lname;
    public $so;
    public $dob;
    public $pan;
    public $mobs;
    public $whatappmob;
    public $email;
    public $aadhaar;
    public $cname;
    public $usertype;
    public $address;
    public $city;
    public $state;
    public $userCode;
    public $userpassword;
    public $secret_keys;
    public $secret_key_timestamps;
    public $res="FDGGD";
    public $res1="FDGGD";
    public $serviceactivate="FDGGD";
    public $services=[];



    public function panverify(){

      $this->createkeys();

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.eko.in:25002/ekoicici/v1/pan/verify',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'pan_number=BIGPS4358L&purpose=1&initiator_id=9705708003&purpose_desc=onboarding',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'developer_key: 96068e12494dda59df8b55799fa519b5',
    'secret-key:'.$this->secret_keys,
    'secret-key-timestamp:'.$this->secret_key_timestamps
  ),
));

$response = curl_exec($curl);

curl_close($curl);

dd($response);
echo $response;

    }

public function resetall(){
    $this->reset([
        'name',
        'so',
        'dob',
        'pan',
        'mobs',
        'whatappmob',
        'email',
        'aadhaar',
        'cname',
        'usertype',
        'userpassword',
]);
$this->resetValidation();
}



public function activateService(){
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
$url = 'https://api.eko.in:25002/ekoicici/v1/user/service/activate';
$data = array(
    'service_code' => '45',
    'initiator_id' => '9705708003',
    'user_code' => '35854005',
    'latlong' => '77.06794760,77.06794760'
);
$headers = array(
    'developer_key: 96068e12494dda59df8b55799fa519b5',
    'secret-key:'.$secret_key,
    'secret-key-timestamp:'.$secret_key_timestamp,
    'Content-Type: application/x-www-form-urlencoded'
);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
$response = curl_exec($ch);
curl_close($ch);
dd($response);
$this->serviceactivate=$response;
}




public function getbalance(){


// dd("dfgjkdg");
   $aa=pp();
  //  dd($aa);
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://api.eko.in:25002/ekoicici/v2/customers/mobile_number:9705708003/balance?initiator_id=9705708003&user_code=35854001',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
//   CURLOPT_HTTPHEADER => array(
//     'developer_key: 96068e12494dda59df8b55799fa519b5',
//     "secret-key:".$this->secret_keys,
//     "secret-key-timestamp:".$this->secret_key_timestamps
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

// dd($response);

}





public function listofcustomer(){


  $this->createkeys();


  $curl = curl_init();
  

curl_setopt_array($curl, array(
  CURLOPT_PORT => "25002",
  CURLOPT_URL => "https://api.eko.in:25002/ekoicici/v1/user/services/user_code:35854005?initiator_id=9705708003",
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
    "Host: staging.eko.in:25004",
    "cache-control: no-cache",
    "developer_key: 96068e12494dda59df8b55799fa519b5",
    "secret-key:".$this->secret_keys,
    "secret-key-timestamp:".$this->secret_key_timestamps
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }




  // curl_setopt_array($curl, array(
  //   CURLOPT_URL => 'https://api.eko.in:25002/ekoicici/v2/customers/mobile_number:9440161007?initiator_id=9705708003&user_code=35854004',
  //   CURLOPT_RETURNTRANSFER => true,
  //   CURLOPT_ENCODING => '',
  //   CURLOPT_MAXREDIRS => 10,
  //   CURLOPT_TIMEOUT => 0,
  //   CURLOPT_FOLLOWLOCATION => true,
  //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //   CURLOPT_CUSTOMREQUEST => 'GET',
  //   CURLOPT_HTTPHEADER => array(
  //     'developer_key: 96068e12494dda59df8b55799fa519b5',
  //     'secret-key:'.$this->secret_keys,
  //     'secret-key-timestamp:'.$this->secret_key_timestamps,
  //     'content-type: application/x-www-form-urlencoded'
  //   ),
  // ));
  
  // $response = curl_exec($curl);
  
  // curl_close($curl);
  // echo $response;
  
dd($response);


}


public function listallservice(){

      $jsonString = file_get_contents(public_path('json/serviceslist.json'));

        // Decode JSON string to PHP array
        $data = json_decode($jsonString, true);

        $this->services= $data['data']['service_list'];
    
        // return response()->json(['services'=>$data['data']['service_list']]);
        //  dd($services);

        // // Pass data to Blade view
        // // return view('your.blade.view', ['data' => $data]);
        return view('livewire.addnewuser',['services' => $data['data']['service_list']]);

        //  return view('livewire.list-service-fetch', ['services' => $data['data']['service_list']]);



}




    public function createkeys(){
    $key = "a2e7f799-fdd3-4718-a6c9-52f3046fe0f7";
    $encodedKey = base64_encode($key);
    $secret_key_timestamp = (int)(round(microtime(true) * 1000));
    // Computes the signature by hashing the salt with the encoded key 
    $signature = hash_hmac('SHA256', $secret_key_timestamp, $encodedKey, true);
    // Encode it using base64
    $secret_key = base64_encode($signature);
    //Display
    $this->secret_keys=$secret_key;
    $this->secret_key_timestamps=$secret_key_timestamp;

    }


    public function addnewuser(){
        $companyid=uniqid();

             $this->createkeys();
     
            $data=$this->validate([
                 'name'=>'required',
                 'lname'=>'required',
                // // 'so'=>'required',
                // // 'dob'=>'required',
                'dob'=>'required|date|date_format:Y-m-d|before:'.now()->subYears(18)->toDateString(),
                //  'pan'=>'required|unique:users,pan',
                'mobs'=>'required|numeric|digits:10|unique:users,mobile',
                // // 'whatappmob'=>'required|numeric|digits:10',
                'email'=>'required|email|unique:users,email',
                'aadhaar'=>'required|numeric|digits:12',
                'cname'=>'required',
                'city'=>'required',
                'state'=>'required',
                'address'=>'required',
            ],[
                 'name.required'=>'User Name Required',
                 'lname.required'=>'User Name Required',
                // // 'so.required'=>'S/O Name Required',
                'dob.required'=>'Date Of Birth Required',
                'dob.date_format'=>'Age Should Not Be Less than 18 years',
                'dob.before'=>'Age Should Not Be Less than 18 years',
                 'pan.required'=>'Pan Card Required',
                 'pan.unique'=>'Pan Card Already Registered',
                 'pan.digits'=>'Pan Card Allowed Only 10 Characters',
                'mobs.required'=>'Mobile Number Required',
                'mobs.numeric'=>'Mobile Number Allowed Only Numbers',
                'mobs.digits'=>'Mobile Number Allowed Only 10 Digits',
                'mobs.unique'=>'Mobile Number Already Registered',
                // 'whatappmob.required'=>'Alt Mobile Number Required',
                // 'whatappmob.digits'=>'Alt Mobile Number Allowed  Only 10 Numbers',
                // 'whatappmob.numeric'=>'Alt Mobile Number Allowed Only Digits',
                'email.required'=>'User Email id Required',
                'email.email'=>'User Email Need to Be correct format',
                'aadhaar.required'=>'Aadheer Card Number Required',
                'aadhaar.numeric'=>'Aadheer Card Number Allowed Only Numbers',
                'aadhaar.digits'=>'Aadheer Card Allowed Only 12 Numbers',
                'cname.required'=>'Shop Name Required',
                'city.required'=>'City Name Required',
                'state.required'=>'State Name Required',
                'address.required'=>'Address Name Required',
            ]);
            // $residence="%7B%22line%22%3A%20%22Eko%20India%22%2C%22city%22%3A%22Gurgaon%22%2C%22state%22%3A%22Haryana%22%2C%22pincode%22%3A%22122002%22%2C%22district%22%3A%22Banswara%22%2C%22area%22%3A%22Mongol%22%7D";
            // $residence=$this->address."city".$this->city."state".$this->state.'pincode524004district'.$this->city.'area'.$this->city;
            //  dd($residence); 
             $curl = curl_init();
             curl_setopt_array($curl, array(
               CURLOPT_URL => 'https://api.eko.in:25002/ekoicici/v1/user/onboard',
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_ENCODING => '',
               CURLOPT_MAXREDIRS => 10,
               CURLOPT_TIMEOUT => 0,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
               CURLOPT_CUSTOMREQUEST => 'PUT',
              //  CURLOPT_POSTFIELDS => 'initiator_id=9705708003&pan_number=FNCPS6909E&mobile=7794902299&first_name=SHAIK&last_name=HASEENABEGUM&email=a%40gmail.com&residence_address=%7B%22line%22%3A%20%22Eko%20India%22%2C%22city%22%3A%22Gurgaon%22%2C%22state%22%3A%22Haryana%22%2C%22pincode%22%3A%22122002%22%2C%22district%22%3A%22Banswara%22%2C%22area%22%3A%22Mongol%22%7D&dob=1992-05-10&shop_name=Akanksha%20Stores',
               CURLOPT_POSTFIELDS => 'initiator_id='.env('INITATOR_ID').'&pan_number='.$this->pan.'&mobile='.$this->mobs.'&first_name='.$this->name.'&last_name='.$this->lname.'&email='.$this->email.'&residence_address=%7B%22line%22%3A%20%22Eko%20India%22%2C%22city%22%3A%22Gurgaon%22%2C%22state%22%3A%22Haryana%22%2C%22pincode%22%3A%22122002%22%2C%22district%22%3A%22Banswara%22%2C%22area%22%3A%22Mongol%22%7D&dob='.$this->dob.'&shop_name='.$this->cname.'',
              //  CURLOPT_POSTFIELDS => 'initiator_id='.env('INITATOR_ID').'&pan_number='.$this->pan.'&mobile=9440161007&first_name='.$this->name.'&last_name=&email='.$this->email.'&residence_address='.$residence.'&dob='.$this->dob.'&shop_name='.$this->cname.'',
               CURLOPT_HTTPHEADER => array(
                 'Cache-Control: no-cache',
                 'Content-Type: application/x-www-form-urlencoded',
                 'developer_key: 96068e12494dda59df8b55799fa519b5',
                 'secret-key:'.$this->secret_keys,
                 'secret-key-timestamp:'. $this->secret_key_timestamps
               ),
             ));
             $response = curl_exec($curl);
             curl_close($curl);
       dd($response);
            $responseArray = json_decode($response, true);
            $ErrorCode=$responseArray['status'];
            //  dd($ErrorCode);
             if($ErrorCode==1428){
              // Name Not Match
              $message = $responseArray['message'];
              $this->dispatch('alert1',
                      icon:'error',
                      title:$message,
                    );
             }
             else if($ErrorCode==0)
             {
              $response_type_id = $responseArray['response_type_id'];
                if($response_type_id==1307)  {
              
                  // USER ALREADY EXIST
                        $userCode = $responseArray['data']['user_code'];
                        $getdata=user::where('pan',$this->pan)->update([
                          'USERCODE'=>$userCode
                        ]);
                        //  dd($getdata);

                         if($getdata==0){
                    $createuser=User::create([
                      'name'=>$this->name,
                      'Companyname'=>$this->cname,
                      'email'=>$this->email,
                      'mobile'=>$this->mobs,
                      // 'altmobile'=>$this->whatappmob,
                      'role'=>$this->usertype,
                      'dob'=>$this->dob,
                      'password'=>$this->name,
                      // 'so'=>$this->so,
                      'pan'=>$this->pan,
                      'aadheer'=>$this->aadhaar,
                      'companyid'=>$companyid,
                      'address'=>$this->address,
                      'state'=>$this->state,
                      'city'=>$this->city,
                      'USERCODE'=>$userCode,
                   ]);

                  }

                      
                  
                        $message = $responseArray['message'];
                        $this->dispatch('alert1',
                        icon:'error',
                        title:"The Pan Card Already Registered...",
                      );
                }
                else if($response_type_id==1290) {
               
                  $userCode = $responseArray['data']['user_code'];
                  $message = $responseArray['message'];
                     $createuser=User::create([
                      'name'=>$this->name,
                      'Companyname'=>$this->cname,
                      'email'=>$this->email,
                      'mobile'=>$this->mobs,
                      // 'altmobile'=>$this->whatappmob,
                      'role'=>$this->usertype,
                      'dob'=>$this->dob,
                      'password'=>$this->name,
                      // 'so'=>$this->so,
                      'pan'=>$this->pan,
                      'aadheer'=>$this->aadhaar,
                      'companyid'=>$companyid,
                      'address'=>$this->address,
                      'state'=>$this->state,
                      'city'=>$this->city,
                      'USERCODE'=>$userCode,
                   ]);

                   if($createuser==1){
                    $this->dispatch('alert',
                    icon:'error',
                    title:$message,
                  );

                   }
                     
                 

                
                 
                }
                else if($response_type_id==895) {
               
                  // $userCode = $responseArray['data']['user_code'];
                  $message = $responseArray['message'];
                  
                     
                  $message = $responseArray['message'];
                  $this->dispatch('alert1',
                  icon:'error',
                  title:"The Pan Card Already Registered...",
                );

                
                 
                }


              }
             else if($ErrorCode==952){
              // pan length
              $message = $responseArray['message'];
              $this->dispatch('alert1',
                      icon:'error',
                      title:$message,
                    );
             }
             else if($ErrorCode==1182){
              // invalide pan card
              $message = $responseArray['message'];
              $this->dispatch('alert1',
                      icon:'error',
                      title:$message,
                    );
             }
             else if($ErrorCode==1253){
              // PAN VERIFICATION FAILED
              $message = $responseArray['message'];
              $this->dispatch('alert1',
                      icon:'error',
                      title:$message,
                    );
             }



             
             
    }
    public function render()
    {
        $getusers=userdetail::get();
        $getallusers=user::where('role','!=',1)->get();
        return view('livewire.addnewuser',compact('getusers','getallusers'));
    }
}
