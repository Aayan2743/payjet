<div>
    {{-- Be like water. --}}
    <div class="row mt-3">
        <div class="d-flex mb-3 justify-content-between">
            <h4>User Management  {{$secret_key_timestamps}} {{$secret_keys}}</h4>
            <div class="me-1 d-flex ">
                <span class="mt-3"><i class="bi bi-funnel-fill mx-3"></i></span>
                <select class="form-select mx-2" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button class="btn btn-warning w-50 mx-2" type="button" data-bs-toggle="modal"
                    data-bs-target="#adduser" wire:click="resetall">Add
                    User</button>

                    <button class="btn btn-warning w-50 mx-2" type="button" wire:click="pp">Add
                    Test Api</button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card p-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name  {{$res}}</th>
                            <th scope="col">Mobile Number {{$res1}}</th>
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
                                {{$users->Companyname}}
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
                            <td class="align-content-center"><span><i class="bi bi-eye-fill"></i></span>
                                <span><i class="bi bi-trash-fill mx-2"></i></span>
                                <span><a href="#"data-bs-toggle="modal" wire:click="getdata({{$users->id}})"
                    data-bs-target="#edituser">edit</a><i class="bi bi-pencil-fill"></i>edit</span>
                            </td>
                        </tr>
                            
                        @endforeach


                       
                    </tbody>
                </table>
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
                                <label for="">Name *</label>
                                <input type="text" wire:model="name" class="form-control mb-2">
                                @error('name')
                                        <div style="color: red"> {{$message}} </div>
                                @enderror
                                <label for="">S/o *</label>
                                <input type="text" wire:model="so" class="form-control mb-2">
                                @error('so')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                <label for="">Date Of Birth</label>
                                <input type="date" wire:model="dob"  class="form-control mb-2">
                                @error('dob')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                <label for="">PAN Card </label>
                                <input type="text" wire:model="pan" class="form-control mb-2">
                                @error('pan')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                  <label for="">Address *</label>
                                <input type="tel" wire:model="address" class="form-control mb-2">
                                @error('address')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                      <label for="">State *</label>
                                <input type="tel" wire:model="state" class="form-control mb-2">
                                @error('state')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Mobile Number *</label>
                                <input type="tel" wire:model="mobs" class="form-control mb-2">
                                @error('mobs')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror

                                <label for="">Alternate Mobile Number *</label>
                                <input type="tel" wire:model="whatappmob" class="form-control mb-2">
                                @error('whatappmob')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror

                                <label for="exampleInputEmail1" class="form-label">Email address</label>
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

                                  
                                
                                   <label for="">City *</label>
                                <input type="tel" wire:model="city" class="form-control mb-2">
                                @error('city')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                               
                                  <label for="">Zipcode *</label>
                                <input type="tel" wire:model="zipcode" class="form-control mb-2">
                                @error('zipcode')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                            
                            </div>
                            <div class="container">
                                <label for="">Company Name </label>
                                <input type="text" wire:model="cname" class="form-control mb-2">
                                @error('cname')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                            </div>
                            <div class="container">
                                <label for="">Select User </label>
                                <select class="form-select" wire:model="usertype">

                                    <option value="">Select User Type </option>
                                    @foreach ($getusers as $item)
                                    <option value="{{$item->Role}}">{{$item->Name}}  </option>
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

    <div wire:ignore.self class="modal fade" id="edituser" tabindex="-1" aria-labelledby="edituser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EDIT User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form wire:submit.prevent="Update">      
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Name *</label>
                                <input type="text" wire:model="name" class="form-control mb-2">
                                @error('name')
                                        <div style="color: red"> {{$message}} </div>
                                @enderror
                                <label for="">S/o *</label>
                                <input type="text" wire:model="so" class="form-control mb-2">
                                @error('so')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                <label for="">Date Of Birth</label>
                                <input type="date" wire:model="dob"  class="form-control mb-2">
                                @error('dob')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                <label for="">PAN Card </label>
                                <input type="text" wire:model="pan" class="form-control mb-2">
                                @error('pan')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                  <label for="">Address *</label>
                                <input type="tel" wire:model="address" class="form-control mb-2">
                                @error('address')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                      <label for="">State *</label>
                                <input type="tel" wire:model="state" class="form-control mb-2">
                                @error('state')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Mobile Number *</label>
                                <input type="tel" wire:model="mobs" class="form-control mb-2">
                                @error('mobs')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                <label for="">Alternate Mobile Number *</label>
                                <input type="tel" wire:model="whatappmob" class="form-control mb-2">
                                @error('whatappmob')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" wire:model="email" class="form-control mb-2" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" readonly>
                                    @error('email')
                                    <div style="color: red"> {{$message}} </div>
                                      @enderror
                                <label for="">Aadhaar Card Number *</label>
                                <input type="tel" wire:model="aadhaar" class="form-control mb-2">
                                @error('aadhaar')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                   
                                   <label for="">City *</label>
                                <input type="tel" wire:model="city" class="form-control mb-2">
                                @error('city')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                                  
                                  <label for="">Zipcode *</label>
                                <input type="tel" wire:model="zipcode" class="form-control mb-2">
                                @error('zipcode')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                            </div>
                            <div class="container">
                                <label for="">Company Name </label>
                                <input type="text" wire:model="cname" class="form-control mb-2">
                                @error('cname')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                          </div>
                            <div class="container">
                                <label for="">Select User </label>
                                <select class="form-select" wire:model="usertype">

                                    <option value="">Select User Type </option>
                                    @foreach ($getusers as $item)
                                    <option value="{{$item->Role}}">{{$item->Name}}  </option>
                                    @endforeach
                                    </select>
                                @error('usertype')
                                <div style="color: red"> {{$message}} </div>
                                  @enderror
                            </div>
                            <div class=" d-flex justify-content-end mt-2">
                                <button type="submit" class="btn btn-primary">SaveChanges</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
