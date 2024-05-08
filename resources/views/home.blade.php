@extends('layouts.master')

@section('content')
<div id="content mt-5">
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
    <!-- table -->
    <marquee behavior="" direction="" class="">
        Join PayJet as a Financial Advisor. Be a part of a large and growing family of
        25,000+ partners
        <i class="bi bi-record-circle-fill"></i>
        Partner with PayJet and get closer to financial freedom
        <i class="bi bi-record-circle-fill"></i>
        Join PayJet as a Financial Advisor. Be a part of a large and growing family of
        25,000+ partners
        <i class="bi bi-record-circle-fill"></i>
        Partner with PayJet and get closer to financial freedom
    </marquee>
    <!-- Banner============================================= -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3 col-6 mt-2">
                <div class="card p-3 box-shadow">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-4 col-sm-12">
                            <img src="images/flight.svg" alt="" class="grow">
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-8 col-sm-12 align-self-center mt-2">
                            <h4 class="text-violet">Flight Ticket</h4>
                            <p class="text-violet">Booking</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mt-2">
                <div class="card p-3 box-shadow">
                    <div class="row">
                        <div class="col-md-12 col-md-4 col-lg-12 col-xl-4 col-sm-12">
                            <img src="images/train.svg" alt="" class="grow">
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-8 col-sm-12 align-self-center mt-2">
                            <h4 class="text-violet">Bus Ticket</h4>
                            <p class="text-violet">Booking</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mt-2 ">
                <div class="card p-3 box-shadow">
                    <div class="row">
                        <div class="col-md-12 col-md-4 col-lg-12 col-xl-4 col-sm-12">
                            <img src="images/cms.svg" alt="" class="grow">
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-8 col-sm-12 align-self-center mt-2">
                            <h4 class="text-dark-pnk">CMS</h4>
                            <p class="text-dark-pnk">Collect Payment</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mt-2">
                <div class="card p-3 box-shadow">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 col-xl-4 col-sm-12">
                            <img src="images/mark.svg" alt="" class="grow">
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-8 col-sm-12 align-self-center mt-2">
                            <h4 class="text-drk-vilt">Whole Sale</h4>
                            <p class="text-drk-vilt">Market</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------Cards beings------------------------>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card p-4 h-100" style="background: #EEB900;">
                    <div class="row g-0">
                        <div class="col-sm-6 col-md-6 col-6">
                            <div class="card-body">
                                <h4>
                                    <b>Loan</b>
                                </h4>
                                <h4>
                                    <b>
                                        Payment</b>
                                </h4>
                                <p class="card-text text-dark">Get
                                    <br>
                                    assured cashback*
                                    <br>
                                    up to ₹100
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-6">
                            <img src="images/loan.svg" class="img-fluid rounded-start ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card p-4 h-100" style="background: #2A2B3D">
                    <div class="row g-0">
                        <div class="col-sm-6 col-md-8 col-6">
                            <div class="card-body mt-4">
                                <h4 class="text-white">
                                    <b>Demat Account Service</b>
                                </h4>
                                <p class="card-text">Get assured cashback*
                                    <br>
                                    up to ₹100</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-6">
                            <img src="images/lastmint.svg" class="img-fluid rounded-start h-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card h-100" style="background: #ED2D3C;">
                    <div class="row g-0">
                        <div class="col-md-8 col-8">
                            <div class="card-body mt-3">
                                <h4 class="text-white">
                                    <b>Card
                                        <br>
                                        Payment</b>
                                </h4>
                                <p class="text-white">Get assured cashback*
                                    <br>
                                    up to ₹100</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/sbi.svg" alt="">
                                    </div>
                                    <div class="col-md-8 text-start">
                                        <img src="images/federal.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-4 cashback">
                            <img src="images/cred.svg" class="w-100" style="margin-top: 148px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------cards end------------------------>
    <!-- Modal -->
    <!-- mobile rechar popup -->
    <div
        class="modal fade centered"
        id="example"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel1">Response</h3>
                    <!-- <button type="button1" class="btn-close" data-bs-dismiss="modal1"
                    aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h5
                            class="bg-danger-subtle border border-danger-subtle rounded-2 text-danger px-2 py-4">
                            Invalid Tpin Number
                        </h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end mobile -->
    <!-- postapaid popup -->
    <div
        class="modal fade centered"
        id="example1"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container text-center">
                        <img src="images/Success Icon.svg" alt="">
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h5>Payment Successful</h5>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="mt-3">Mobile Number</h6>
                                <h6 class="mt-3">Company</h6>
                                <h6 class="mt-3">Amount</h6>
                                <h6 class="mt-3">
                                    Plan Name</h6>
                                <h6 class="mt-3">Date & Time</h6>
                                <h6 class="mt-3">Payment Status</h6>
                            </div>
                            <div class="col-6">
                                <h6 class="mt-3">9876543210</h6>
                                <h6 class="mt-3">Airtel Postpaid</h6>
                                <h6 class="mt-3">499</h6>
                                <h6 class="mt-3">Airtel MRP 499 Plan</h6>
                                <h6 class="mt-3">01/03/2024
                                </h6>
                                <h6 class="mt-3 text-success">
                                    Success
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="col-md-6">
                            <button
                                type="button"
                                class="btn btn-success w-100 mt-3"
                                data-bs-dismiss="modal">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end postpaid -->
    <!-- credit poput -->
    <div
        class="modal fade centered"
        id="example2"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container text-center">
                        <img src="images/Success Icon.svg" alt="">
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h5>Payment Successful</h5>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="mt-3">Customer Mobile Number</h6>
                                <h6 class="mt-3">Mode of Payment</h6>
                                <h6 class="mt-3">Card Bank</h6>
                                <h6 class="mt-3">
                                    Card Number</h6>
                                <h6 class="mt-3">Card Owner Name</h6>
                                <h6 class="mt-3">Transaction Status</h6>
                                <h6 class="mt-3">Bill Amount</h6>
                            </div>
                            <div class="col-6">
                                <h6 class="mt-3">9876543210</h6>
                                <h6 class="mt-3">Credit Card</h6>
                                <h6 class="mt-3">Axis Bank</h6>
                                <h6 class="mt-3">3216549870</h6>
                                <h6 class="mt-3">Rambabu
                                </h6>
                                <h6 class="mt-3 text-success">
                                    Success
                                </h6>
                                <h6 class="mt-3">50000/-
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="col-md-6">
                            <button
                                type="button"
                                class="btn btn-success w-100 mt-3"
                                data-bs-dismiss="modal">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- dth popup -->
    <div
        class="modal fade centered"
        id="example3"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Plan Info</h4>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h5>Payment Successful</h5>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="mt-3">Operator :</h6>
                                <h6 class="mt-3">Number :</h6>
                                <h6 class="mt-3">Monthly Recharge :</h6>
                                <h6 class="mt-3">
                                    Balance :</h6>
                                <h6 class="mt-3">Customer Name :</h6>
                                <h6 class="mt-3">Status :</h6>
                                <h6 class="mt-3">Next Recharge Date :</h6>
                                <h6 class="mt-3">Plan :</h6>
                            </div>
                            <div class="col-6">
                                <h6 class="mt-3">Airteldth</h6>
                                <h6 class="mt-3">ravi</h6>
                                <h6 class="mt-3">undefined</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    <!--scanner -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">My QR Code</h3>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="" class="text-danger">NOTES:</label>
                    <ol class="text-danger">1.
                        <span class="text-success">
                            Rs.2+(18% GST)</span>
                        on every transaction.</ol>
                    <ol class="text-danger">2. 3%+GST on Credit Card to UPI transaction.</ol>
                    <ol class="text-danger">3. Please do not use Airtel Payment Bank</ol>
                    <ol class="text-danger">4. Use QR Code for transactions below 1,00,000 only</ol>
                </div>
                <div class="container text-center">
                    <img src="images/scanner.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- scanner end -->
    <!-- gas -->
    <div
        class="modal fade centered"
        id="example30"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container text-center">
                        <img src="images/Success Icon.svg" alt="">
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container text-center">
                        <h5>Payment Successful</h5>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="mt-3">Date & Time</h6>
                                <h6 class="mt-3">Sub Number</h6>
                                <h6 class="mt-3">Customer Mobile Number</h6>
                                <h6 class="mt-3">
                                    Company</h6>
                                <h6 class="mt-3">Payment Amount</h6>
                                <h6 class="mt-3">Payment Status</h6>
                            </div>
                            <div class="col-6">
                                <h6 class="mt-3">01/03/2024, 03:45 PM</h6>
                                <h6 class="mt-3">9876543210</h6>
                                <h6 class="mt-3">9876543210</h6>
                                <h6 class="mt-3">Gujarat Gas Limited</h6>
                                <h6 class="mt-3">540
                                </h6>
                                <h6 class="mt-3 text-success">
                                    Success
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="col-md-6">
                            <button
                                type="button"
                                class="btn btn-success w-100 mt-3"
                                data-bs-dismiss="modal">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gas -->
    <!-- payment gaTWAY -->
    <div
        class="modal fade centered"
        id="example32"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-heade">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>IM-R-041080</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center mt-3">
                        <img src="images/logoo.svg" alt="">
                    </div>
                    <div class="container text-center mt-3">
                        <img src="images/Success Icon.svg" alt="">
                        <h4 class="mt-3">Transaction Amount!</h4>
                        <h4>
                            <b class="mt-2">INR 1,000,000</b>
                        </h4>
                        <p class="mt-2">09-02-2024 19:45:38</p>
                    </div>
                    <hr>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xl-4 col-lg-12 col-sm-12">
                                <h6 class="text-secondary">Transaction Status</h6>
                                <p >
                                    <b>Success</b>
                                </p>
                            </div>
                            <div class="col-md-12 col-xl-4 col-lg-12 col-sm-12">
                                <h6 class="text-secondary">Transaction Amount</h6>
                                <p>
                                    <b>70833</b>
                                </p>
                            </div>
                            <div class="col-md-12 col-xl-4 col-lg-12 col-sm-12">
                                <h6 class="text-secondary">Outlet Name</h6>
                                <p>
                                    <b>
                                        Finasure Solutions IM-R-041080
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-md-12 col-xl-4 col-lg-12 col-sm-12">
                                <h6 class="text-secondary">Transaction ID</h6>
                                <p>
                                    <b>
                                        clce4c6e8f0cf479fcc0dfd521b4659</b>
                                </p>
                            </div>
                            <div class="col-md-12 col-xl-4 col-lg-12 col-sm-12">
                                <h6 class="text-secondary">Account Number</h6>
                                <p>
                                    <b>
                                        THANNIRU
                                    </b>
                                </p>
                            </div>
                            <div class="col-md-12 col-xl-4 col-lg-12 col-sm-12">
                                <h6 class="text-secondary">IFSC Code</h6>
                                <p>
                                    <b>
                                        HDFC0002350</b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-md-12 col-xl-4 col-lg-12 col-sm-12">
                                <h6 class="text-secondary">Bank Name</h6>
                                <p>
                                    <b>
                                        HDFC Bank</b>
                                </p>
                            </div>
                            <div class="col-md-12 col-xl-4 col-lg-12 col-sm-12">
                                <h6 class="text-secondary">Sub Product
                                </h6>
                                <p>
                                    <b>Payout4</b>
                                </p>
                            </div>
                            <div class="col-md-12 col-xl-4 col-lg-12 col-sm-12">
                                <h6 class="text-secondary">Transaction Type</h6>
                                <p>
                                    <b>imps</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Horizontal Print</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Thermal Print</button>
                        </div>
                    </div>
                </div>
                <div class="container mb-3">
                    <button class="btn btn-success w-100">Raise Ticket</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END POPUT -->
    <!-- money transfer popup -->
    <div
        class="modal fade centered"
        id="example40"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container text-start">
                        <h5>Sender Registration</h5>
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name">
                                <label for="" class="mt-3">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name">
                                <label for="" class="mt-3">Pincode</label>
                                <input type="tel" class="form-control" placeholder="Enter Pincode">
                                <label for="" class="mt-3">Mobile Number</label>
                                <input type="tel" class="form-control" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-md-6">
                                <button
                                    type="button"
                                    class="btn btn-success w-100 mt-3"
                                    data-bs-dismiss="modal">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end popup -->
    <!-- aadhar popup -->
    <div
        class="modal fade centered"
        id="example50"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container text-start">
                        <h5>Users Mobile Verification</h5>
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Mobile No
                                </label>
                                <input type="tel" class="form-control" placeholder="9876543210">
                                <label for="" class="mt-3">OTP</label>
                                <input type="tel" class="form-control" placeholder="Enter OTP">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <button
                                    type="button"
                                    class="btn btn-danger w-100 mt-3"
                                    data-bs-dismiss="modal"
                                    onclick="Alert.success('Successfully Verified Mobile Number ','Success',{displayDuration: 3000, pos: 'top'})">Submit</button>
                            </div>
                            <div class="col-md-6">
                                <button
                                    type="button"
                                    class="btn btn-success w-100 mt-3"
                                    onclick="Alert.info('Successfully sent OTP to your registered mobile number +91 96435 64721 ','OTP',{displayDuration: 3000})">Send OTP</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end popup -->
    <!-- electricity popup -->
    <div
        class="modal fade centered"
        id="example60"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container text-start">
                        <h5>Response</h5>
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h6 class="bg-danger-subtle p-4 text-danger">Incorrect / invalid customer account</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger w-100 " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end popup -->
    <!-- get balance -->
    <div
        class="modal fade centered"
        id="getbalance"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container text-start">
                        <h5>Fastag Balance</h5>
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Fastag Balance</h6>
                            </div>
                            <div class="col-md-6">
                                <h3>368.00</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Vehicle Number</h6>
                            </div>
                            <div class="col-md-6">
                                <p>AP04582C</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Tag Status</h6>
                            </div>
                            <div class="col-md-6">
                                <p>Active</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-danger w-100 " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recharge popou -->
    <div
        class="modal fade centered"
        id="recharge"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container text-start">
                        <h5>Payment Details</h5>
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Vehicle Number</h6>
                            </div>
                            <div class="col-md-6">
                                <p>AP04582C</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Company</h6>
                            </div>
                            <div class="col-md-6">
                                <p>Axis Bank Fastag</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Recharge Amount</h6>
                            </div>
                            <div class="col-md-6">
                                <p>97.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>
                                    Convenience Fee
                                </h6>
                            </div>
                            <div class="col-md-6">
                                <p>3.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>
                                    Total Amount
                                </h6>
                            </div>
                            <div class="col-md-6">
                                <p>100.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <button
                                    type="button"
                                    class="btn btn-success w-100 "
                                    data-bs-dismiss="modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#proced-to-pay">Proceed to Pay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade centered"
        id="proced-to-pay"
        tabindex="-1"
        aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container text-center">
                        <img src="images/Success Icon.svg" alt="">
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h5 class="text-center">Payment Successful</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Vehicle Number</h6>
                            </div>
                            <div class="col-md-6">
                                <p>AP04582C</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Company</h6>
                            </div>
                            <div class="col-md-6">
                                <p>Axis Bank Fastag</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Recharge Amount</h6>
                            </div>
                            <div class="col-md-6">
                                <p>97.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Convenience Fee</h6>
                            </div>
                            <div class="col-md-6">
                                <p>3.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Total Amount</h6>
                            </div>
                            <div class="col-md-6">
                                <p>100.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Close</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success w-100 mt-3 ">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end popup -->
</div>


@endsection