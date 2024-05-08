<div>
    {{-- Success is as dangerous as failure. --}}

   
                
        <div class="card p-3">
           <div> 
            <button  type="button"
            class="mt-2 btn btn primary"
            data-bs-toggle="modal"
            data-bs-target="#addmarchent"
            >Add Marchent 
        </button>


      

      
        </div>
        
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Wallet</th>
                        <th scope="col">Product</th>
                        <th scope="col">Status</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <span>
                                <b>12-03-2024</b>
                            </span>
                            <p>Tuesday, 02:23pm</p>
                        </th>
                        <td class="align-content-center">Prepaid</td>
                        <td class="align-content-center">Payout</td>
                        <td class="align-content-center">
                            <p class="bg-success-subtle rounded-4 text-center w-100 text-success">Success</p>
                        </td>
                        <td class="align-content-center">Rs. 50024</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <span>
                                <b>12-03-2024</b>
                            </span>
                            <p>Tuesday, 02:23pm</p>
                        </th>
                        <td class="align-content-center">Prepaid</td>
                        <td class="align-content-center">PayJet Remit</td>
                        <td class="align-content-center">
                            <p class="bg-danger-subtle rounded-4 text-center w-100 text-danger">Pending</p>
                        </td>
                        <td class="align-content-center">Rs. 50024</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <span>
                                <b>12-03-2024</b>
                            </span>
                            <p>Tuesday, 02:23pm</p>
                        </th>
                        <td class="align-content-center">Prepaid</td>
                        <td class="align-content-center">Payout</td>
                        <td class="align-content-center">
                            <p class="bg-success-subtle rounded-4 text-center w-100 text-success">Success</p>
                        </td>
                        <td class="align-content-center">Rs. 50024</td>
                    </tr>
                </tbody>
            </table>


           
    
        </div>

        <div wire:ignore.self  class="modal fade" id="addmarchent" tabindex="-1" aria-labelledby="addmarchent" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="addmarchent">Create Marchent</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
        
                        <form wire:submit.prevent="addNewUser" method="post">
                        <label for="email" class="form-label">Name</label>
                        <input type="text" class="form-control" id="m_name" placeholder="Enter Name"
                            aria-describedby="emailHelp" wire:model="m_name">
        
                        @error('m_name')
                        <span style="color:red">{{$message}} </span>
                        @enderror
        
                            <br>
                        <label for="email" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="m_mobile" placeholder="Enter Mobile number"
                            aria-describedby="emailHelp" wire:model="m_mobile">
        
                        @error('m_mobile')
                        <span style="color:red">{{$message}} </span>
                        @enderror


                        <label for="email" class="form-label">Email id</label>
                        <input type="text" class="form-control" id="m_email" placeholder="Enter Email Id"
                            aria-describedby="emailHelp" wire:model="m_email">
        
                        @error('m_email')
                        <span style="color:red">{{$message}} </span>
                        @enderror


                        
                        <label for="email" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="c_name" placeholder="Enter Company Name"
                            aria-describedby="emailHelp" wire:model="c_name">
        
                        @error('c_name')
                        <span style="color:red">{{$message}} </span>
                        @enderror

                        <label for="email" class="form-label">Password</label>
                        <input type="text" class="form-control" id="c_password" placeholder="Enter Password"
                            aria-describedby="emailHelp" wire:model="c_password">
        
                        @error('c_password')
                        <span style="color:red">{{$message}} </span>
                        @enderror


                        <label for="email" class="form-label">Select Type of User</label>
                        {{-- <input type="text" class="form-control" id="c_usertype" placeholder="Enter Mobile number"
                            aria-describedby="emailHelp" wire:model="c_usertype"> --}}

                            <select name="c_usertype" class="form-control" wire:change="Selectusertype($event.target.value)">
                               
                                @foreach ($alluserroles as $item)
                                <option value="{{$item->Role}}">{{$item->Name}} </option>
                                @endforeach
                                
                            </select>
        
                        @error('c_usertype')
                        <span style="color:red">{{$message}} </span>
                        @enderror

                        <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
              

                    <div class="container text-center">
        
                    </div>
                </div>
            </div>
        </div>


    
        
  
    

</div>
