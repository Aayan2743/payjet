<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="hero-wrap mt-5">
        <div class="hero-mask"></div>
        <div class="hero-content d-flex mt-5">
            <div class="container-fluid py-5" style="max-width: min-content;">
                <!-- Tabs -->
                <ul
                    class="nav nav-tabs border-bottom style-3 mx-auto"
                    id="myTab"
                    role="tablist">
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            id="first-tab"
                            data-bs-toggle="tab"
                            href="#first"
                            role="tab"
                            aria-controls="first"
                            aria-selected="true">
                            <span>
                                <i class="fa-solid fa-mobile-screen"></i>
                            </span>
                            Mobile</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="second-tab"
                            data-bs-toggle="tab"
                            href="#second"
                            role="tab"
                            aria-controls="second"
                            aria-selected="false">
                            <span>
                                <i class="fa-solid fa-mobile-screen"></i>
                            </span>
                            Post Paid</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="third-tab"
                            data-bs-toggle="tab"
                            href="#third"
                            role="tab"
                            aria-controls="third"
                            aria-selected="false">
                            <span>
                                <div class="icon-container">
                                    <i class="fa-solid fa-credit-card"></i>
                                    <span class="badge" style="font-size: 11px;">New</span>
                                </div>
                            </span>
                            Card Payment</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="fourth-tab"
                            data-bs-toggle="tab"
                            href="#fourth"
                            role="tab"
                            aria-controls="fourth"
                            aria-selected="false">
                            <span>
                                <i class="fa-solid fa-tv"></i>
                            </span>
                            DTH</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="fifth-tab"
                            data-bs-toggle="tab"
                            href="#fifth"
                            role="tab"
                            aria-controls="fifth"
                            aria-selected="false">
                            <span>
                                <i class="fa-solid fa-money-bill-transfer"></i>
                            </span>
                            Money Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="sixth-tab"
                            data-bs-toggle="tab"
                            href="#sixth"
                            role="tab"
                            aria-controls="sixth"
                            aria-selected="false">
                            <span>
                                <img src="images/Aadhaar.svg"></span>
                            Aadhar Pay</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="seventh-tab"
                            data-bs-toggle="tab"
                            href="#seventh"
                            role="tab"
                            aria-controls="seventh"
                            aria-selected="false">
                            <span>
                                <i class="fa-solid fa-lightbulb"></i>
                            </span>
                            Electricity</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="eighth-tab"
                            data-bs-toggle="tab"
                            href="#eighth"
                            role="tab"
                            aria-controls="eighth"
                            aria-selected="false">
                            <span>
                                <img src="images/car.svg"></span>
                            Fast Tag
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="ninth-tab"
                            data-bs-toggle="tab"
                            href="#ninth"
                            role="tab"
                            aria-controls="ninth"
                            aria-selected="false">
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
                        <a
                            class="nav-link"
                            id="tenth-tab"
                            data-bs-toggle="tab"
                            href="#tenth"
                            role="tab"
                            aria-controls="tenth"
                            aria-selected="false">
                            <span>
                                <i class="fa-solid fa-globe"></i>
                            </span>Payment Gateway</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content pt-4 pb-2">
                    <!-- Mobile -->
                    <div
                        class="tab-pane fade show active"
                        id="first"
                        role="tabpanel"
                        aria-labelledby="first-tab">
                        <form id="recharge-bill" method="post">
                            <div class="row g-3">
                                <div class="card p-4">
                                    <h4>Mobile Recharge</h4>
                                    <div class="container">
                                        <div class="row">
                                            <form action="" id="form" onsubmit="sConsole(event)">
                                                <div class="col-md-6 col-12 col-sm-6 col-xl-2">
                                                    <label for="">Mobile Number</label>
                                                    <input
                                                        type="tel"
                                                        name="data"
                                                        id="data"
                                                        class="form-control"
                                                        placeholder="Enter Mobile number">
                                                </div>
                                                <div class=" col-md-6 col-12 col-sm-6 col-xl-2">
                                                    <label for="">Select Your Location</label>
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
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#example">Submit</button>
                                                    <button
                                                        class="btn btn-success mx-2"
                                                        type="button"
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
                                <h4 >Browse Plan</h4>
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
                                                    <p>Rs 349-30D-2.5GB/D -> Benefits: 1. UNLIMITED DATA - 75 GB (2.5 GB/Day) 2.
                                                        UNLIMITED CALLS3. 100 SMS/Day4. Complimentary Jio AppsValidity - 30 days Rs.
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
                                                    <p>Rs 2999-12m-2.5GB/D -> Benefits of 2999: 1. UNLIMITED DATA - 912.5 GB (2.5
                                                        GB/Day) 2. UNLIMITED CALLS 3. 100 SMS/Day 4. Complimentary Jio AppsValidity -
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
                                                    <p>Rs 399-28D-90GB -> Benefits: 1. Unlimited Data - 3GB/Day + 6GB2. Unlimited
                                                        Voice Calls3. 100 SMS/Day4. Complimentary subscription to Jio AppsValidity - 28
                                                        Days Rs. 2999</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- postpaid -->
                    <div
                        class="tab-pane fade"
                        id="second"
                        role="tabpanel"
                        aria-labelledby="second-tab">
                        <form id="dthRechargeBill" method="post">
                            <div class="row g-3 g-lg-0 search-input-2">
                                <div class="card p-4">
                                    <h4>Postpaid Recharge</h4>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xl-2 col-lg-6 mt-3">
                                                <label for="">Mobile Number</label>
                                                <input type="tell" class="form-control" placeholder="Enter Mobile number">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xl-2 col-lg-6 mt-3">
                                                <label for="">Select Your Operator</label>
                                                <select type="select" class="form-control" aria-label="Default select example">
                                                    <option selected="selected">Select Your Operator</option>
                                                    <option value="1">Airtel Postpaid</option>
                                                    <option value="2">Idea Postpaid</option>
                                                    <option value="3">Jio Postpaid</option>
                                                    <option value="4">Vodafone Postpaid</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xl-2 col-lg-6 mt-3">
                                                <label for="">Amount</label>
                                                <input type="tel" class="form-control " placeholder="Enter amount">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xl-2 col-lg-6 mt-3">
                                                <label for="">Tpin</label>
                                                <input type="text" class="form-control" placeholder="Enter Tpin">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xl-4 col-lg-6  align-self-center mt-4 ">
                                                <button
                                                    type="button"
                                                    class="btn btn-danger mt-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#example1">Submit</button>
                                                <button type="button" class="btn btn-success mt-2">View Plans</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- card payment -->
                    <div
                        class="tab-pane fade"
                        id="third"
                        role="tabpanel"
                        aria-labelledby="third-tab">
                        <form id="datacardRechargeBill" method="post">
                            <div class="row g-3">
                                <div class="card p-4">
                                    <h4>Credit Card Bill Payment</h4>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Customer Mobile Number</label>
                                                <input
                                                    type="tel"
                                                    class="form-control"
                                                    placeholder="Enter Customer Mobile Number">
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Card Bank</label>
                                                <select name="" id="" class="form-select">
                                                    <option value="">Axis Bank Credit Card</option>
                                                    <option value="">Bank of Baroda Credit Card</option>
                                                    <option value="">Bank of India Credit Card</option>
                                                    <option value="">Canara Bank Credit Card</option>
                                                    <option value="">HDFC Bank Credit Card</option>
                                                    <option value="">ICICI Bank Credit Card</option>
                                                    <option value="">Citi Bank Credit Card</option>
                                                    <option value="">State Bank Credit Card</option>
                                                    <option value="">Union Bank Credit Card</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Card Number</label>
                                                <input type="tel" class="form-control " placeholder="Enter Card Number">
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Card Owner Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Bill Amount</label>
                                                <input type="tel" class="form-control " placeholder="Enter Bill Amount">
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Tpin</label>
                                                <input type="text" class="form-control" placeholder="Enter Tpin">
                                            </div>
                                            <div class="container text-end mt-3">
                                                <button
                                                    type="button"
                                                    class="btn btn-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#example2">Pay Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- dth -->
                    <div
                        class="tab-pane fade"
                        id="fourth"
                        role="tabpanel"
                        aria-labelledby="fourth-tab">
                        <form id="broadbanadBill" method="post">
                            <div class="row g-3 g-lg-0 search-input-2">
                                <div class="card p-4">
                                    <h4>DTH Recharge</h4>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xl-2 col-lg-6 mt-3">
                                                <label for="">Operator</label>
                                                <select name="" id="" class="form-select">
                                                    <option value="">Airtel DTH</option>
                                                    <option value="">SUN TV</option>
                                                    <option value="">Videocon D2H</option>
                                                    <option value="">Dish TV</option>
                                                    <option value="">Tata Sky</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xl-3 col-lg-6 mt-3">
                                                <label for="">Customer ID or Register Number</label>
                                                <input type="text" class="form-control" placeholder="ID or Register Number">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xl-2 col-lg-6 mt-3">
                                                <label for="">Amount</label>
                                                <input type="tel" class="form-control " placeholder="Enter amount">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xl-2 col-lg-6 mt-3">
                                                <label for="">Tpin</label>
                                                <input type="text" class="form-control" placeholder="Enter Tpin">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xl-3 col-lg-6 mt-3 align-self-center ">
                                                <button class="btn btn-danger mt-4" type="button">Submit</button>
                                                <button
                                                    type="button"
                                                    class="btn btn-success mt-4"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#example3">View Plans</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- money transfer -->
                    <div
                        class="tab-pane fade"
                        id="fifth"
                        role="tabpanel"
                        aria-labelledby="fifth-tab">
                        <form id="landlineBill" method="post">
                            <div class="row g-3 g-lg-0 search-input-2">
                                <div class="card p-4">
                                    <h4>Domestic Money Remittance</h4>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-12 col-md-12">
                                                <label for="">Sender Mobile Number</label>
                                                <input type="tel" class="form-control" placeholder="Sender Mobile Number">
                                            </div>
                                            <div
                                                class="col-xl-1  col-lg-12 col-md-12 text-center align-self-center  mt-4 mb-2">
                                                <h5 >
                                                    <span class="bg-violet mt-4 mb-2">OR</span>
                                                </h5>
                                            </div>
                                            <div class="col-xl-5 col-lg-12 col-md-12">
                                                <label for="">Recipient Account Number</label>
                                                <input type="text" class="form-control " placeholder="Recipient Account Number">
                                            </div>
                                            <div class="col-xl-1 col-lg-12 col-md-12 align-self-center mt-3">
                                                <button
                                                    type="button"
                                                    class="btn btn-danger"
                                                    value="Click me to show or hidden div"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#example40">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-5">
                                    <div class="table-responsive" id="Div_1">
                                        <table class="table">
                                            <thead class="bg-secondary">
                                                <tr>
                                                    <th scope="col" class="bg-secondary-subtle">Name</th>
                                                    <th scope="col" class="bg-secondary-subtle">Sekhar</th>
                                                    <th scope="col" class="bg-secondary-subtle">Mobile Number</th>
                                                    <th scope="col" class="bg-secondary-subtle">9705708003</th>
                                                    <th scope="col" class="bg-secondary-subtle">Available Limit
                                                    </th>
                                                    <th class="bg-secondary-subtle">25000/-</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="  mt-5" id="Div_1">
                            <div class="card p-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Receiver Accounts</h4>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <button type="button" class="btn btn-danger mt-3">Add New Receiver</button>
                                        <button type="button" class="btn btn-success mt-3">Import Payment Bene</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mt-3">
                                        <thead class="bg-secondary">
                                            <tr>
                                                <th scope="col" class="bg-secondary-subtle">Sr</th>
                                                <th scope="col" class="bg-secondary-subtle">Name</th>
                                                <th scope="col" class="bg-secondary-subtle">Bank Name</th>
                                                <th scope="col" class="bg-secondary-subtle">IFSC Code</th>
                                                <th scope="col" class="bg-secondary-subtle">Account Number
                                                </th>
                                                <th class="bg-secondary-subtle">
                                                    Verification Status</th>
                                                <th class="bg-secondary-subtle">NEFT</th>
                                                <th class="bg-secondary-subtle">IMPS</th>
                                                <th class="bg-secondary-subtle"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ravi Shekar REDDY G</td>
                                                <td>Axis Bank</td>
                                                <td>UTIB0001463</td>
                                                <td>916010053086238</td>
                                                <td>
                                                    <i class="bi bi-check-square-fill"></i>
                                                </td>
                                                <td class="text-primary">NEFT</td>
                                                <td class="text-primary">IMPS</td>
                                                <td>
                                                    <i class="bi bi-trash3-fill text-danger"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- aadhar Pay -->
                    <div
                        class="tab-pane fade"
                        id="sixth"
                        role="tabpanel"
                        aria-labelledby="sixth-tab">
                        <form id="cableTvRechargeBill" method="post">
                            <div class="row g-3 g-lg-0 search-input-2">
                                <div class="card p-4">
                                    <h4>Business Details</h4>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <label for="">Full Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter Full Name"
                                                    required="required">
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="">Mobile Number</label>
                                                <input
                                                    type="tel"
                                                    class="form-control "
                                                    placeholder="Enter Mobile Number"
                                                    required="required">
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Email</label>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    placeholder="Enter Email"
                                                    required="required">
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Shop Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control "
                                                    placeholder="Enter Shop Name"
                                                    required="required">
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">State</label>
                                                <select name="" id="" class="form-select">
                                                    <option value="">
                                                        Select Your State
                                                    </option>
                                                    <option value="">Telangana</option>
                                                    <option value="">Andhra Pradesh</option>
                                                    <option value="">Arunachal Pradesh</option>
                                                    <option value="">Assam</option>
                                                    <option value="">Bihar</option>
                                                    <option value="">Delhi</option>
                                                    <option value="">Goa</option>
                                                    <option value="">Gujarat</option>
                                                    <option value="">Haryana</option>
                                                    <option value="">Kerala</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">City</label>
                                                <select
                                                    type="text"
                                                    class="form-select"
                                                    placeholder="Enter Mobile Number"
                                                    required="required">
                                                    <option value="">Select Your City</option>
                                                    <option value="">Addanki</option>
                                                    <option value="">Adivivaram</option>
                                                    <option value="">Adoni</option>
                                                    <option value="">Aganampudi</option>
                                                    <option value="">Amur</option>
                                                    <option value="">Tanuku</option>
                                                    <option value="">Krishna</option>
                                                    <option value="">Kuppam</option>
                                                    <option value="">Tenali</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Address</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter Full Name"
                                                    required="required">
                                            </div>
                                            <div class="col-md-6 col-12 mt-3">
                                                <label for="">Pincode</label>
                                                <input
                                                    type="tel"
                                                    class="form-control "
                                                    placeholder="Enter Mobile Number"
                                                    required="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="mt-5">
                            <div class="card p-3">
                                <h4>KYC Details</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label for="">Pan Card</label>
                                        <input type="text" class="form-control" placeholder="Enter Full Name">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="">Aadhar Number</label>
                                        <input type="text" class="form-control " placeholder="Enter Mobile Number">
                                    </div>
                                </div>
                                <div class="container text-end mt-3">
                                    <button
                                        class="btn btn-danger "
                                        type="button"
                                        data-bs-toggle="modal"
                                        data-bs-target="#example50">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Electricity -->
                    <div
                        class="tab-pane fade"
                        id="seventh"
                        role="tabpanel"
                        aria-labelledby="seventh-tab">
                        <form id="electricityBill" method="post">
                            <div class="row g-3 g-lg-0 search-input-2">
                                <div class="card p-4">
                                    <h4>Electricity Bills</h4>
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-12 col-md-12 mt-3">
                                            <label for="">Operator Name</label>
                                            <select name="" id="" class="form-select">
                                                <option value="">Select Operator Name</option>
                                                <option value="">Tata Power - Delhi</option>
                                                <option value="">Tata Power - Mumbai</option>
                                                <option value="">Test Operator</option>
                                                <option value="">Torrent Power - Bhiwandi</option>
                                                <option value="">Torrent Power - Agra</option>
                                                <option value="">WESCO Utility</option>
                                                <option value="">West Bengal State Electricity Distribution co.Ltd</option>
                                                <option value="">Uttar Gujarat Vij Company Limited</option>
                                                <option value="">Tripura State Electricity Corporation Limited</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-12 col-md-12 mt-3">
                                            <label for="">Customer ID</label>
                                            <input type="text" class="form-control " placeholder="Enter Your Customer ID">
                                        </div>
                                        <div class="col-xl-3 col-lg-12 col-md-12 mt-3">
                                            <label for="">Customer Mobile Number</label>
                                            <input
                                                type="tel"
                                                class="form-control "
                                                placeholder="Enter Customer Mobile Number ">
                                        </div>
                                        <div class="col-xl-3 col-lg-12 col-md-12 align-self-center mt-4">
                                            <button
                                                class="btn btn-danger mt-2"
                                                type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#example60">
                                                Get Bill
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- fast tag -->
                    <div
                        class="tab-pane fade"
                        id="eighth"
                        role="tabpanel"
                        aria-labelledby="eighth-tab">
                        <form id="metroCardRecharge" method="post">
                            <div class="row g-3 g-lg-0 search-input-2">
                                <div class="card p-4">
                                    <h4>Fastag Recharge</h4>
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 mt-3">
                                            <label for="">Company Name</label>
                                            <select type="text" class="form-select" placeholder="Enter Mobile Number">
                                                <option value="">Select Company Name</option>
                                                <option value="">Axis Bank Fastag (minimum amount: 100)</option>
                                                <option value="">Bank of Baroda Fastag (minimum amount: 100)</option>
                                                <option value="">HDFC Bank Fastag (minimum amount: 100)</option>
                                                <option value="">ICICI Bank Fastag (minimum amount: 100)</option>
                                                <option value="">IDFC FIRST Bank Fastag (minimum amount: 100)</option>
                                                <option value="">Axis Bank Fastag (minimum amount: 100)</option>
                                                <option value="">Axis Bank Fastag (minimum amount: 100)</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 mt-3">
                                            <label for="">Vehicle Number</label>
                                            <input type="text" class="form-control " placeholder="Enter Vehicle Number">
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 mt-3">
                                            <label for="">Enter Amount</label>
                                            <input type="tel" class="form-control " placeholder="Enter Amount">
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-6 mt-3 col-sm-12">
                                            <label for="">Mobile Number</label>
                                            <input type="tel" class="form-control " placeholder="Enter Mobile Number">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 align-self-center mt-3 d-flex">
                                            <button
                                                class="btn btn-danger mt-3"
                                                type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#getbalance">
                                                Get Balance
                                            </button>
                                            <button
                                                class="btn btn-success mx-3 mt-3"
                                                type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#recharge">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card p-5 mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Recent Transactions</h4>
                                </div>
                                <div class="col-md-6 text-end"></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mt-3">
                                    <thead class="bg-secondary">
                                        <tr>
                                            <th scope="col" class="bg-secondary-subtle">Date</th>
                                            <th scope="col" class="bg-secondary-subtle">Vehicle No.</th>
                                            <th scope="col" class="bg-secondary-subtle">Company</th>
                                            <th scope="col" class="bg-secondary-subtle">Amount</th>
                                            <th scope="col" class="bg-secondary-subtle">Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>22-02-2024</td>
                                            <td>AP04582C</td>
                                            <td>Axis Bank Fastag</td>
                                            <td>500/-</td>
                                            <td class="text-success">Success</td>
                                        </tr>
                                        <tr>
                                            <td>22-02-2024</td>
                                            <td>AP04582C</td>
                                            <td>Axis Bank Fastag</td>
                                            <td>300/-</td>
                                            <td class="text-success">Success</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Gas -->
                    <div
                        class="tab-pane fade"
                        id="ninth"
                        role="tabpanel"
                        aria-labelledby="ninth-tab">
                        <form id="gasBill" method="post">
                            <div class="row g-3 g-lg-0 search-input-2">
                                <div class="card p-4">
                                    <h4>Gas Bills</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-xl-2 col-lg-6 col-sm-12 mt-3">
                                            <label for="">Company Name</label>
                                            <select type="text" class="form-select" placeholder="Select Company Name">
                                                <option value="">Select Company Name</option>
                                                <option value="">Gujarat Gas Limited</option>
                                                <option value="">Adani Gas - Gujarat</option>
                                                <option value="">Adani Gas - Haryana</option>
                                                <option value="">Haryana City Gas</option>
                                                <option value="">Mahanagar Gas</option>
                                                <option value="">Sabarmati Gas Limited</option>
                                                <option value="">Vododara Gas Limited</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-xl-2 col-lg-6 col-sm-12 mt-3">
                                            <label for="">Sub Number</label>
                                            <input type="text" class="form-control " placeholder="Enter Sub Number">
                                        </div>
                                        <div class="col-md-6 col-xl-3 col-lg-6 col-sm-12 mt-3">
                                            <label for="">Customer Mobile Number</label>
                                            <input
                                                type="tel"
                                                class="form-control "
                                                placeholder="Enter Customer Mobile Number">
                                        </div>
                                        <div class="col-md-6 col-xl-3 col-lg-6 col-sm-12 mt-3">
                                            <label for="">Enter Amount</label>
                                            <input type="text" class="form-control " placeholder="Enter Amount">
                                        </div>
                                        <div class="col-md-6 col-xl-2 col-lg-6 col-sm-12 align-self-center mt-3">
                                            <button
                                                type="button"
                                                class="btn btn-danger mt-3"
                                                data-bs-toggle="modal"
                                                data-bs-target="#example30">
                                                Pay Bill
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Water -->
                    <div
                        class="tab-pane fade"
                        href="Insurance.html"
                        id="tenth"
                        role="tabpanel"
                        aria-labelledby="tenth-tab">
                        <div class="row">
                            <div class="card p-4">
                                <h4>Payment Gateway-PG
                                    <span class="text-success mx-3">
                                        <b>
                                            IM-R-041080</b>
                                    </span>
                                </h4>
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="card mt-4 p-4" style="border: 1px solid #FF7A2F !important;">
                                            <h6>
                                                <i class="fa-solid fa-mobile-screen" style="color: #FF7A2F; font-size: 30px;"></i>
                                                <b class="mx-2">PG - TEZ 2 (Postpaid)</b>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-md-9"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 mt-3">
                                        <label for="">Card Type *</label>
                                        <select name="" id="" class="form-select">
                                            <option value="" class="form-option">Card</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="">Card Bin Number *</label>
                                        <input type="tel" class="form-control" placeholder="431256">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="">Payment Method *</label>
                                        <select name="" id="" class="form-select">
                                            <option value="" class="form-option">Debit Card</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="">Card Holder Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter Card Holder Name">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="">Card Holder Mobile Number *</label>
                                        <input
                                            type="tel"
                                            class="form-control"
                                            placeholder="Enter Customer Mobile Number">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="">Amount *</label>
                                        <input type="tel" class="form-control" placeholder="Enter Amount">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="">Confirm Amount *</label>
                                        <input type="tel" class="form-control" placeholder="Confirm Amount">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="">Narration *</label>
                                        <input type="tel" class="form-control" placeholder="Narration">
                                    </div>
                                    <div class="container text-end mt-3">
                                        <button
                                            class="btn btn-danger"
                                            type="button"
                                            data-bs-toggle="modal"
                                            data-bs-target="#example32">Get Bin Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

