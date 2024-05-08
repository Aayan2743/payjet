<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\userdetail;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Addnewuser extends Component
{


    public $id;
    public $name;
    public $so;
    public $dob;
    public $pan;
    public $mobs;
    public $whatappmob;
    public $email;
    public $aadhaar;
    public $cname;
    public $usertype;
    public $userpassword;
    public $secret_keys;
    public $secret_key_timestamps;
    public $res="FDGGD";
    public $res1="FDGGD";
    public $address;
    public $city;
    public $state;
    public $zipcode;
    


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
        'address',
        'city',
        'state',
        'zipcode',
    
]);

$this->resetValidation();
}





  public function pp(){


// Initializing key in some variable. You will receive this key from Eko via email
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
    'service_code' => '4',
    'initiator_id' => '9705708003',
    'user_code' => '35854001'
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

$this->res1=$response;
// echo $response;




    // PAN VERIFICATION

    

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
  CURLOPT_POSTFIELDS => 'pan_number=EONPS7951R&purpose=1&initiator_id=9705708003&purpose_desc=onboarding',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'developer_key: 96068e12494dda59df8b55799fa519b5',
    'secret-key:'.$secret_key,
    'secret-key-timestamp:'.$secret_key_timestamp
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$this->res=$response;
// echo $response;


    

// $curl = curl_init();

// curl_setopt_array($curl, array(
// //   CURLOPT_URL => 'https://staging.eko.in:25004/ekoapi/v1/pan/verify',
//   CURLOPT_URL => 'https://api.eko.in:25002/ekoicici/v1/pan/verify',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS => 'pan_number=BFUPM3499K&purpose=1&initiator_id=9705708003&purpose_desc=onboarding',
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: application/x-www-form-urlencoded',
//     'developer_key: 96068e12494dda59df8b55799fa519b5',
//     'secret-key:'.$secret_key,
//     'secret-key-timestamp:'.$secret_key_timestamp 
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);

// $this->res=$response;

// // echo $response;
//  dd($response);



// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://api.eko.in:25002/ekoicici/v1/user/onboard',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'PUT',
//   CURLOPT_POSTFIELDS => 'initiator_id=9705708003&pan_number=DCUPG6617N&mobile=9440161007&first_name=SHRIYANSH&last_name=GUPTA&email=asif%40gmail.com&residence_address=%7B%22line%22%3A%20%22Eko%20India%22%2C%22city%22%3A%22Gurgaon%22%2C%22state%22%3A%22Haryana%22%2C%22pincode%22%3A%22122002%22%2C%22district%22%3A%22Banswara%22%2C%22area%22%3A%22Mongol%22%7D&dob=1992-05-10&shop_name=Akanksha%20Stores',
//   CURLOPT_HTTPHEADER => array(
//     'Cache-Control: no-cache',
//     'Content-Type: application/x-www-form-urlencoded',
//     'Content-Type: application/x-www-form-urlencoded',
//     'developer_key: 96068e12494dda59df8b55799fa519b5',
//      'secret-key:'.$secret_key,
//     'secret-key-timestamp:'.$secret_key_timestamp
// ), 

// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;


// dd($response);


  }  


public function panapi(){

    

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://staging.eko.in:25004/ekoapi/v1/pan/verify',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'pan_number=BFUPM3499K&purpose=1&initiator_id=9705708003&purpose_desc=onboarding',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'developer_key: 96068e12494dda59df8b55799fa519b5',
        'secret-key: a2e7f799-fdd3-4718-a6c9-52f3046fe0f7',
        'secret-key-timestamp: 1516705204593'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    // echo $response;
    dd($response);
    


}


    public function testapi(){
        // dd("gjsdh");

        

// Initializing key in some variable. You will receive this key from Eko via email
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

$this->secret_keys=$secret_key;
$this->secret_key_timestamps=$secret_key_timestamp;
// echo "secret-key: " . $secret_key. "\n";
// echo "secret-key-timestamp: " . $secret_key_timestamp . "\n";

    }

    public function addnewuser(){

        $companyid=uniqid();

        




        // dd($companyid);

        // $client = new Client();




        // dd($this->mobs);
            $this->validate([
                'name'=>'required',
                'so'=>'required',
                'dob'=>'required',
                'pan'=>'required|min:10|max:10',
                'mobs'=>'required|numeric|digits:10',
                'whatappmob'=>'required|numeric|digits:10',
                'email'=>'required|email:filter|unique:users,email',
                'aadhaar'=>'required|numeric|digits:12',
                'cname'=>'required',
                'address'=>'required',
                'city'=>'required',
                'state'=>'required',
                'zipcode'=>'required|digits:6',
                

            ],[

                'name.required'=>'User Name Required',
                'so.required'=>'S/O Name Required',
                'dob.required'=>'Date Of Birth Required',
                'pan.required'=>'Pan Card Required',
                'pan.min'=>'Pan Card Number must be atleast 10 digits',
                'pan.max'=>'Pan Card Number must be atleast 10 digits',
                'mobs.required'=>'Mobile Number Required',
                'mobs.numeric'=>'Mobile Number Allowed Only Numbers',
                'mobs.digits'=>'Mobile Number Allowed Only 10 Digits',
                'whatappmob.required'=>'Alt Mobile Number Required',
                'whatappmob.digits'=>'Alt Mobile Number Allowed  Only 10 Numbers',
                'whatappmob.numeric'=>'Alt Mobile Number Allowed Only Digits',
               
                'email.required'=>'User Email id Required',
                'email.email'=>'User Email Need to Be correct format',
                'aadhaar.required'=>'Aadheer Card Number Required',
                'aadhaar.numeric'=>'Aadheer Card Number Allowed Only Numbers',
                'cname.required'=>'Company Name Required',
                'address.required'=>'Address Required',
                'city.required'=>'City Required',
                'state.required'=>'State Required',
                'zipcode.required'=>'Zipcode Required',
                

            ]);

            $createuser=User::create([
                    'name'=>$this->name,
                    'Companyname'=>$this->cname,
                    'email'=>$this->email,
                    'mobile'=>$this->mobs,
                    'altmobile'=>$this->whatappmob,
                    'role'=>$this->usertype,
                    'password'=>$this->name,
                    'so'=>$this->so,
                    'pan'=>$this->pan,
                    'aadheer'=>$this->aadhaar,
                    'companyid'=>$companyid,
                    'dob'=>$this->dob,
                    'address'=>$this->address,
                    'city'=>$this->city,
                    'state'=>$this->state,
                    'zipcode'=>$this->zipcode,
                    
            ]);

            if($createuser){
                $this->dispatch('alert',
                icon:'success',
                title:'Create User',
            
            );

            }


    } 
    public function mount(){
        
    }
    public function Update(){

        $updateqry=User::where('id',$this->id)->update([
            'name'=>$this->name,
            'mobile'=>$this->mobs,
            'so'=>$this->so,
            'altmobile'=>$this->whatappmob,
            'dob'=>$this->dob,
            // 'email'=>$req->email,
            'pan'=>$this->pan,
            'aadheer'=>$this->aadhaar,
            'Companyname'=>$this->cname,
            'role'=>$this->usertype,
            'address'=>$this->address,
            'city'=>$this->city,
            'state'=>$this->state,
            'zipcode'=>$this->zipcode,

        ]);
        
        if($updateqry){
            $this->dispatch('alert',
            icon:'success',
            title:'Updated User',
        
        );

        }
      

    }
    public function getdata($id){
      //  dd($users);
      $this->id=$id;
      $details=user::where('id',$id)->get();
      //dd($details);
      $this->name=$details[0]->name;
      $this->mobs=$details[0]->mobile;
      $this->so=$details[0]->so;
      $this->whatappmob=$details[0]->altmobile;
      $this->dob=$details[0]->dob;
      $this->email=$details[0]->email;
      $this->pan=$details[0]->pan;
      $this->aadhaar=$details[0]->aadheer;
      $this->cname=$details[0]->Companyname;
      $this->usertype=$details[0]->role;
      $this->address=$details[0]->address;
      $this->city=$details[0]->city;
      $this->state=$details[0]->state;
      $this->zipcode=$details[0]->zipcode;
      
    }

    public function render()
    {
        $getusers=userdetail::get();
        $getallusers=user::where('role','!=',1)->get();

        return view('livewire.addnewuser',compact('getusers','getallusers'));
    }
}
