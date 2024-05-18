<div>
    {{-- Be like water. --}}
    <div class="row mt-3">
        <div class="d-flex mb-3 justify-content-between">
            <h4>User Management </h4>
            
            <div class="me-1 d-flex ">
                <span class="mt-3"><i class="bi bi-funnel-fill mx-3"></i></span>
                <select class="form-select mx-2" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button class="btn btn-warning w-50 mx-2" type="button" data-bs-toggle="modal" data-bs-target="#edit"
                    wire:click="resetall">Add
                    User</button>

                <button class="btn btn-warning w-50 mx-2" type="button" wire:click="panverify">Verify PAN
                    </button>

                <button class="btn btn-warning w-50 mx-2" type="button" wire:click="activateService">
                    Active service code 45</button>

                <button class="btn btn-warning w-50 mx-2" type="button" wire:click="listallservice">
                    List Service</button>


            </div>
        </div>
        <div class="col-md-12">
            <div class="card p-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name </th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">User Type</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($getallusers as $users)

                        <tr>
                            <th scope="row">
                                {{$users->name}}
                            </th>
                            <td class="align-content-center">{{$users->mobile}}</td>
                            <td class="align-content-center">{{$users->email}}</td>
                            <td class="align-content-center">
                                {{$users->Companyname}} <br>
                                {{$users->pan}}<br>
                                {{$users->USERCODE}}
                            </td>
                            <td class="align-content-center">

                                @if($users->role==2)
                                <span class="badge bg-primary"> Super Distributor</span>

                                @elseif($users->role==3)
                                <span class="badge bg-secondary">Master Distributor</span>

                                @elseif($users->role==4)
                                <span class="badge bg-success">Distributor</span>

                                @elseif($users->role==5)
                                Agent
                                @endif

                            </td>
                            <td class="align-content-center">
                                <span>
                                    <a href="#" wire:click="listallservice" data-bs-toggle="modal" data-bs-target="#listofservices"
                                   > 
                                     <i class="bi bi-eye-fill"></i></a>
                                </span>
                                <span>
                                    <i class="bi bi-trash-fill mx-2"></i>
                                </span>
                                <span>
                                    <i class="bi bi-pencil-fill"></i>
                                </span>
                            </td>
                        </tr>

                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div  wire:ignore.self class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Create User Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form wire:submit.prevent="addnewuser">

                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                          
                        </div>

                        <div class="row mb-1">
                        <div class="col-12">
                               

                            <label for="" style="font-size: 14px !important">Pan Card *</label>
                            <input type="text"  wire:model="pan" class="form-control h-50">
                            @error('pan')
                            <div style="color: red"> {{$message}} </div>
                            @enderror

                        </div>
                        </div>
                      
                        <div class="row mb-1">
                            <div class="col-6">
                                <label for="" style="font-size: 14px !important">First Name * (As per PAN Card)</label>
                                <input type="text" wire:model="name" class="form-control h-50">
                              
                                @error('name')
                                <div style="color: red"> {{$message}}  </div>
                                @enderror
                            </div>


                            <div class="col-6">
                                <label for="" style="font-size: 14px !important">Last Name * (As per PAN Card)</label>
                                <input type="text" wire:model="lname" class="form-control h-50">
                                  @error('lname')
                                <div style="color: red"> {{$message}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            {{-- <div class="col-6">
                                <label for="" style="font-size: 14px !important">Full Name *</label>
                                <input type="text" wire:model="name" class="form-control h-50">
                              
                                @error('name')
                                <div style="color: red"> {{$message}}  </div>
                                @enderror
                            </div> --}}

                            
                            <div class="col-12">
                                <label for="" style="font-size: 14px !important">Phone Number *</label>
                                <input type="tel" wire:model="mobs" class="form-control h-50">
                                  @error('mobs')
                                <div style="color: red"> {{$message}} </div>
                                @enderror
                            </div>
                        </div>
                     
                        <div class="row mb-1">
                            <div class="col-6">
                                <label for="" style="font-size: 14px !important">Email id *</label>
                                <input type="email" wire:model="email" class="form-control h-50">
                                @error('email')
                                <div style="color: red"> {{$message}} </div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="" style="font-size: 14px !important">Date of Birth *</label>
                                <input type="date" wire:model="dob" class="form-control h-50">
                                @error('dob')
                                <div style="color: red"> {{$message}} </div>
                                @enderror

                            </div>
                        </div>
                    
                        <div class="row mb-1">
                            {{-- <div class="col-6">
                               

                                <label for="" style="font-size: 14px !important">Pan Card *</label>
                                <input type="text"  wire:model="pan" class="form-control h-50">
                                @error('pan')
                                <div style="color: red"> {{$message}} </div>
                                @enderror

                            </div> --}}

                            <div class="col-12">
                               

                                <label for="" style="font-size: 14px !important">Aadhaar Card Number *</label>
                                <input type="text"  wire:model="aadhaar" class="form-control h-50">
                                @error('aadhaar')
                                <div style="color: red"> {{$message}} </div>
                                @enderror

                            </div>
                        </div>

                     
                        <div class="row mb-1">
                            <div class="col-6">
                               

                                <label for="" style="font-size: 14px !important">Shop Name *</label>
                                <input type="text"  wire:model="cname" class="form-control h-50">
                                @error('cname')
                                <div style="color: red"> {{$message}} </div>
                                @enderror

                            </div>

                            <div class="col-6">
                                <label for="" style="font-size: 14px !important">Select User Type *</label>
                                <select class="form-select h-50"  wire:model="usertype">

                                    <option value="">Select User Type </option>
                                    @foreach ($getusers as $item)
                                    <option value="{{$item->Role}}">{{$item->Name}} </option>
                                    @endforeach
                                </select>
                                @error('usertype')
                                <div style="color: red"> {{$message}} </div>
                                @enderror

                                {{-- <label for="" style="font-size: 14px !important">Select User Type *</label>
                                <input type="text"  wire:model="aadhaar" class="form-control h-50">
                                @error('aadhaar')
                                <div style="color: red"> {{$message}} </div>
                                @enderror --}}

                            </div>

                            {{-- <div class="col-12">
                                <label for="" style="font-size: 14px !important">Address *</label>
                                <textarea  wire:model="address" class="form-control h-50"> </textarea>
                                @error('address')
                                <div style="color: red"> {{$message}} </div>
                                @enderror

                             

                            </div> --}}


                            <div class="col-6">

                              

                             

                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-6">
                                <label for="" style="font-size: 14px !important">City *</label>
                                <input type="text" wire:model="city" class="form-control h-50">
                                @error('city')
                                <div style="color: red"> {{$message}} </div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="" style="font-size: 14px !important">State *</label>
                                <input type="text" wire:model="state" class="form-control h-50">
                                @error('state')
                                <div style="color: red"> {{$message}} </div>
                                @enderror

                            </div>
                        </div>



                        <div class="row mb-1">
                           

                            <div class="col-12">
                                <label for="" style="font-size: 14px !important">Address *</label>
                                <textarea  wire:model="address" class="form-control h-50"> </textarea>
                                @error('address')
                                <div style="color: red"> {{$message}} </div>
                                @enderror

                             

                            </div>


                           
                        </div>
                      
                    
                      
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-secondary w-100"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Create User</button>
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div  wire:ignore.self class="modal fade" id="listofservices" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">List Of Services</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form wire:submit.prevent="addnewuser">

                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                          
                        </div>
                        @foreach ($services as $item)
                        <div class="row mb-1">
                            <div class="col-4">
                               

                                <label for="" style="font-size: 14px !important">{{$item['service_name']}}</label>
                               
                            </div>

                            <div class="col-4">
                                <label for="" style="font-size: 14px !important">{{$item['service_code']}}</label>
                             

                              

                            </div>
                            <div class="col-4">
                                <label for="" style="font-size: 14px !important">{{$item['provider_name']}}</label>
                             

                              

                            </div>
                      
                        </div>
                            
                        @endforeach
                      
                     
                      

                     
                      
                    
                        <!--end::Input group-->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="adduser" tabindex="-1" aria-labelledby="adduser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form wire:submit.prevent="addnewuser">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for=""> Full Name *</label>
                                    <input type="text" wire:model="name" class="form-control mb-2">
                                    @error('name')
                                    <div style="color: red"> {{$message}} </div>
                                    @enderror

                                    


                                    {{-- <label for="">S/o *</label>
                                <input type="text" wire:model="so" class="form-control mb-2">
                                @error('so')
                                <div style="color: red"> {{$message}} </div>
                                @enderror --}}
                                <label for="">Date Of Birth *</label>
                                <input type="date" wire:model="dob" class="form-control mb-2">
                                @error('dob')
                                <div style="color: red"> {{$message}} </div>
                                @enderror
                                <label for="">PAN Card *</label>
                                <input type="text" wire:model="pan" class="form-control mb-2">
                                @error('pan')
                                <div style="color: red"> {{$message}} </div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Mobile Number *</label>
                                <input type="tel" wire:model="mobs" class="form-control mb-2">
                                @error('mobs')
                                <div style="color: red"> {{$message}} </div>
                                @enderror
                                {{-- <label for="">Alternate Mobile Number *</label>
                                <input type="tel" wire:model="whatappmob" class="form-control mb-2">
                                @error('whatappmob')
                                <div style="color: red"> {{$message}} </div>
                            @enderror --}}
                            <label for="exampleInputEmail1" class="form-label">Email address *</label>
                            <input type="email" wire:model="email" class="form-control mb-2" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('email')
                            <div style="color: red"> {{$message}} </div>
                            @enderror
                            <label for="">Aadhaar Card Number *</label>
                            <input type="tel" wire:model="aadhaar" class="form-control mb-2">
                            @error('aadhaar')
                            <div style="color: red"> {{$message}} </div>
                            @enderror
                    </div>
                    <div class="container">
                        <label for="">Shop Name * </label>
                        <input type="text" wire:model="cname" class="form-control mb-2">
                        @error('cname')
                        <div style="color: red"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="container">
                        <label for="">Select User * </label>
                        <select class="form-select" wire:model="usertype">

                            <option value="">Select User Type </option>
                            @foreach ($getusers as $item)
                            <option value="{{$item->Role}}">{{$item->Name}} </option>
                            @endforeach
                        </select>
                        @error('usertype')
                        <div style="color: red"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class=" d-flex justify-content-end mt-2">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
