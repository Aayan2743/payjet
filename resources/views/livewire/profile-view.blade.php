<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="card p-3">
        <h4>
            <i class="bi bi-caret-left-fill"></i>
            Profile</h4>
        <div class="container p-4 rounded-2" style="background-color: rgba(255, 122, 47, 1);">
            <img src="{{asset('images/profile1.png')}}" alt="fff">
            <span class="text-white mx-2 fs-3">
                <b>{{$getuserdetails[0]->name}}</b>
            </span>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-6">
                    <h4>Personal Details</h4>
                </div>
                <div class="col-6 text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#editprofile" wire:click="getdata({{$getuserdetails[0]->id}})"
                        style="align-items: end;">
                        Edit Profile
                    </button>
                    <!-- Modal -->
                </div>
            </div>
            <hr>
        </div>
        <div class="container ">
            <div class="row mt-4">
                <div class="col-md-3">
                    <h6>
                        Shop Name
                    </h6>
                    <p>{{$getuserdetails[0]->Companyname}}</p>
                </div>
                <div class="col-md-3">
                    <h6>
                        Contact Person
                    </h6>
                    <p>{{$getuserdetails[0]->name}}</p>
                </div>
                <div class="col-md-3">
                    <h6>
                        Date Of Birth
                    </h6>
                    <p>
                        {{Carbon\Carbon::parse($getuserdetails[0]->dob)->format('d-M-Y')}}
                        
                        </p>
                </div>
                <div class="col-md-3">
                    <h6>
                        Address
                    </h6>
                    <p>S/O {{$getuserdetails[0]->so}}, {{$getuserdetails[0]->address}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h6>
                        State
                    </h6>
                    <p> {{$getuserdetails[0]->state}}</p>
                </div>
                <div class="col-md-3">
                    <h6>
                        City
                    </h6>
                    <p>{{$getuserdetails[0]->city}}</p>
                </div>
                <div class="col-md-3">
                    <h6>
                        Zip Code
                    </h6>
                    <p>{{$getuserdetails[0]->zipcode}}</p>
                </div>
                <div class="col-md-3">
                    <h6>
                        Email Address
                    </h6>
                    <p>{{$getuserdetails[0]->email}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h6>
                        Mobile Number
                    </h6>
                    <p>{{$getuserdetails[0]->mobile}}</p>
                </div>
                <div class="col-md-3">
                    <h6>
                        Whatsapp
                    </h6>
                    <p>{{$getuserdetails[0]->altmobile}}</p>
                </div>
                <div class="col-md-3">
                    <h6>
                        Aadhar Number
                    </h6>
                    <p>{{$getuserdetails[0]->aadheer}}</p>
                </div>
                <div class="col-md-3">
                    <h6>
                        Pan Number
                    </h6>
                    <p>{{$getuserdetails[0]->pan}}</p>
                </div>
            </div>
        </div>
        <div class="container text-end">
            <button class="btn btn-outline-danger px-5">Cancel</button>
            <button class="btn btn-danger px-5 mx-2">Save</button>
        </div>
    </div>



    {{-- model start here --}}
    <div wire:ignore.self class="modal p-3 fade" id="editprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-6 text-start">
                            <h5>Edit Profile</h5>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-4 text-start">
                                <img src="{{asset('images/profile1.png')}}" alt="" width="100">
                                <h5>
                                    <b>{{$cname}}</b>
                                </h5>
                            </div>
                            <div class="col-8 text-start">
                                <button class="btn btn-outline-danger w-25">Change Picture</button>
                                <br>
                                <button class="btn btn-danger mt-2 w-25">Delete Picture</button>
                            </div>
                        </div>
                    </div>
                    <form wire:submit.prevent="update">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label ">Shop Name</label>
                                    <input type="text" class="form-control" id="Shop Name" wire:model="sname" aria-describedby="Shop Name"
                                        placeholder="Cred Pay Services HYD">
    
                                        
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Contact Person</label>
                                    <input type="text" class="form-control" id="Contact Person" wire:model="cname"
                                        aria-describedby="Contact Person">
                                </div>
                            </ div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label ">Date Of Birth</label>
                                    <input type="date" class="form-control" id="Date Of Birth" wire:model="dob"
                                        aria-describedby="Date Of Birth" placeholder="Date Of Birth">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="Address" aria-describedby="Address" wire:model="address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label ">State</label>
                                    <input type="text" class="form-control" id="State" aria-describedby="State" wire:model="State"
                                        placeholder="State">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">City</label>
                                    <input type="text" class="form-control" id="City" aria-describedby="City" wire:model="City">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label ">Zip Code</label>
                                    <input type="text" class="form-control" id="Zip Code" aria-describedby="Zip Code" wire:model="zipcode"
                                        placeholder="Zip Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="Email Address" wire:model="email"
                                        aria-describedby="Email Address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label ">Mobile Number</label>
                                    <input type="tel" class="form-control" id="Mobile Number" wire:model="mob"
                                        aria-describedby="Mobile Number" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Whatsapp</label>
                                    <input type="tel" class="form-control" id="Whatsapp" aria-describedby="Whatsapp" wire:model="wmob"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label ">Aadhar Number</label>
                                    <input type="text" class="form-control" id="Aadhar Number"
                                        aria-describedby="Aadhar Number" placeholder="Aadhar Number" wire:model="Aadhar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pan Number</label>
                                    <input type="text" class="form-control" id="Pan Number" aria-describedby="Pan Number" wire:model="pan"
                                        placeholder="Pan Number">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="container text-end">
                        <button type="button" class="btn btn-outline-danger px-5">Cancel</button>
                        <button type="submit" class="btn btn-danger px-5" 
                           >Save</button>
                    </div>
                </form>
    
                </div>
            </div>
        </div>
    </div>



</div>
