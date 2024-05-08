<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h1></h1>
    <ul class="nav nav-tabs border-bottom style-3 mx-auto" id="myTab" role="tablist">
        @foreach ($data['data'] as $item)
        <li class="nav-item">
            <a class="nav-link active" id="first-tab" data-bs-toggle="tab" href="#first1" role="tab"
                aria-controls="first" aria-selected="true">
                <span>
                    <i class="fa-solid fa-mobile-screen"></i>
                </span>
                {{ $item['operator_category_name'] }}</a>
        </li>



        @endforeach

   
    {{-- <li class="nav-item">
        <a class="nav-link" id="second-tab" data-bs-toggle="tab" href="#second" role="tab"
            aria-controls="second" aria-selected="false">
            <span>
                <i class="fa-solid fa-mobile-screen"></i>
            </span>
            Post Paid</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="third-tab" data-bs-toggle="tab" href="#third" role="tab"
            aria-controls="third" aria-selected="false">
            <span>
                <div class="icon-container">
                    <i class="fa-solid fa-credit-card"></i>
                    <span class="badge" style="font-size: 11px;">New</span>
                </div>
            </span>
            Card Payment</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="fourth-tab" data-bs-toggle="tab" href="#fourth" role="tab"
            aria-controls="fourth" aria-selected="false">
            <span>
                <i class="fa-solid fa-tv"></i>
            </span>
            DTH</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="fifth-tab" data-bs-toggle="tab" href="#fifth" role="tab"
            aria-controls="fifth" aria-selected="false">
            <span>
                <i class="fa-solid fa-money-bill-transfer"></i>
            </span>
            Money Transfer</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="sixth-tab" data-bs-toggle="tab" href="#sixth" role="tab"
            aria-controls="sixth" aria-selected="false">
            <span>
                <img src="images/Aadhaar.svg"></span>
            Aadhar Pay</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="seventh-tab" data-bs-toggle="tab" href="#seventh" role="tab"
            aria-controls="seventh" aria-selected="false">
            <span>
                <i class="fa-solid fa-lightbulb"></i>
            </span>
            Electricity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="eighth-tab" data-bs-toggle="tab" href="#eighth" role="tab"
            aria-controls="eighth" aria-selected="false">
            <span>
                <img src="images/car.svg"></span>
            Fast Tag
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="ninth-tab" data-bs-toggle="tab" href="#ninth" role="tab"
            aria-controls="ninth" aria-selected="false">
            <span>
                <img src="images/gas.svg"></span>
            Gas</a>
    </li> 
     <li class="nav-item">
        <a class="nav-link" href="Insurance.html" aria-selected="false">
            <span>
                <img src="images/insurance.svg"></span>
            Insurance</a>
    </li> 
     <li class="nav-item">
        <a class="nav-link" id="tenth-tab" data-bs-toggle="tab" href="#tenth" role="tab"
            aria-controls="tenth" aria-selected="false">
            <span>
                <i class="fa-solid fa-globe"></i>
            </span>Payment Gateway</a>
    </li> --}}
</ul>


<div id="myTabContent" class="tab-content pt-4 pb-2">
    <div class="tab-pane fade " id="first" role="tabpanel" aria-labelledby="first-tab">
        <form id="recharge-bill" method="post">
            <div class="row g-3">
                <div class="card p-4">
                    <h4>Mobile Recharge</h4>
                    <div class="container">
                        <div class="row">
                            <form action="" id="form" onsubmit="sConsole(event)">
                                <div class="col-md-6 col-12 col-sm-6 col-xl-2">
                                    <label for="">Mobile Number</label>
                                    <input type="tel" name="data" id="data" class="form-control"
                                        placeholder="Enter Mobile number">
                                </div>
                                <div class=" col-md-6 col-12 col-sm-6 col-xl-2">
                                    <label for="">Select Your Operator</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected="selected">Select Your Operator</option>
                                        <option value="1">Airtel Prepaid
                                        </option>
                                        <option value="2">BSNL Prepaid</option>
                                        <option value="3">Vi Prepaid</option>
                                        <option value="4">
                                            Jio</option>
                                    </select>
                                </div>
                                <div class=" col-md-6 col-12 col-sm-6 col-xl-2">
                                    <label for="">Amount</label>
                                    <input type="tel" class="form-control " placeholder="Enter amount">
                                </div>
                                <div class="col-md-6 col-12 col-sm-6 col-xl-2">
                                    <label for="">Tpin</label>
                                    <input type="text" class="form-control" placeholder="Enter Tpin">
                                </div>
                                <div class="col-md-12 col-12 col-sm-6 col-xl-4 align-self-center mt-4">
                                    <!-- Button trigger modal -->
                                    <!-- <div class="modal-dialog modal-dialog-centered"> -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#example">Submit</button>
                                    <button class="btn btn-success mx-2" type="button"
                                        onclick="toggle_div_fun('sectiontohide');">View Plans</button>
                                    <!-- </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row mt-4">
            <!-- <button onclick="toggle_div_fun('sectiontohide');">Click here</button> -->
            <div class="card p-4" id="sectiontohide">
                <h4>Browse Plan</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Demonination</th>
                                <th>Commission</th>
                                <th>Offer Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button class="btn btn-success">Rs. 349</button>
                                </td>
                                <td>
                                    <p>Rs. 0.00</p>
                                </td>
                                <td>
                                    <p>Rs 349-30D-2.5GB/D -> Benefits: 1. UNLIMITED DATA - 75 GB (2.5
                                        GB/Day) 2.
                                        UNLIMITED CALLS3. 100 SMS/Day4. Complimentary Jio AppsValidity -
                                        30 days Rs.
                                        2999</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-success">Rs. 2999</button>
                                </td>
                                <td>
                                    <p>Rs. 0.00</p>
                                </td>
                                <td>
                                    <p>Rs 2999-12m-2.5GB/D -> Benefits of 2999: 1. UNLIMITED DATA -
                                        912.5 GB (2.5
                                        GB/Day) 2. UNLIMITED CALLS 3. 100 SMS/Day 4. Complimentary Jio
                                        AppsValidity -
                                        365 days. Rs. 399</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-success">Rs. 399</button>
                                </td>
                                <td>
                                    <p>Rs. 0.00</p>
                                </td>
                                <td>
                                    <p>Rs 399-28D-90GB -> Benefits: 1. Unlimited Data - 3GB/Day + 6GB2.
                                        Unlimited
                                        Voice Calls3. 100 SMS/Day4. Complimentary subscription to Jio
                                        AppsValidity - 28
                                        Days Rs. 2999</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
