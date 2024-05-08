@extends('layouts.master')

@section('content')
<div id="content mt-5">
    <div class="container mt-3">
        <!-- 1st row -->
        <div class="row">
            <div class="col-md-3 mt-2">
                <div
                    class="card p-2"
                    style=" background: linear-gradient(94.12deg, #39BE3E 0.37%, #29974F 100.14%);
                            ;">
                    <div class="row">
                        <div class="col-md-3 align-self-center">
                            <img src="images/1stcrd.svg" alt="">
                        </div>
                        <div class="col-md-9">
                            <p class="text-white">FUNDS RECEIVED</p>
                            <h5 class="text-white">
                                ₹ 121275.00
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card p-2">
                    <div class="row">
                        <div class="col-md-3 align-self-center">
                            <img src="images/2ndcrd.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <p class="text-dark">TRANSACTION VOLUME</p>
                            <h5 class="text-dark">
                                ₹ 121278
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div
                    class="card p-2"
                    style="background: linear-gradient(90.65deg, #FF7A2F 0.56%, #C15315 99.76%);">
                    <div class="row">
                        <div class="col-md-3 align-self-center">
                            <img src="images/3crd.svg" alt="">
                        </div>
                        <div class="col-md-9">
                            <p class="text-white">PENDING TRANSACTION</p>
                            <h5 class="text-white">
                                ₹ 121278
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card p-2">
                    <div class="row">
                        <div class="col-md-3 align-self-center">
                            <img src="images/4crd.svg" alt="">
                        </div>
                        <div class="col-md-9">
                            <p class="text-dark">COMMISSION EARNED</p>
                            <h5 class="text-dark">
                                ₹ 00
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end 1st -->
        <!-- 2nd row -->
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="container mt-4 text-center">
                        <img src="images/Avatar.svg" alt="">
                        <h4>{{session('cname')}}</h4>
                        <p>IM-R-041080</p>
                        <div class="row">
                            <div class="col-md-5">
                                <p style="font-size: 11px;">PREPAID BALANCE</p>
                                <h6>₹ 13.6</h6>
                            </div>
                            <div class="col-md-7">
                                <p style="font-size: 11px;">POSTPAID BALANCE</p>
                                <h6>₹ 2125.72</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="card p-3">
                    <div >
                        <h4>
                            <b>Customer Growth</b>
                        </h4>
                        <canvas id="Graph" style="width:100%;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card h-100 p-3">
                    <h4>
                        <b>News & Alerts</b>
                    </h4>
                    <h6 class="mt-3">
                        <span style="border-left: 3px solid rgba(255, 122, 47, 1);">
                            <b class="mx-2">Dear User,</b>
                        </span>
                    </h6>
                    <span style="font-size: 12px;">Be Aware - Never share your Password/One time
                        Password (OTP) with anyone PayJet do not ask for OTP for any transaction.</span>
                    <h6 class="mt-3">
                        <span style="border-left: 3px solid rgba(255, 122, 47, 1);">
                            <b class="mx-2">User 01,
                            </b>
                        </span>
                    </h6>
                    <span style="font-size: 12px;">Be Aware - Never share your Password/One time
                        Password (OTP) with anyone PayJet do not ask for OTP for any transaction.</span>
                    <h6 class="mt-3">
                        <span style="border-left: 3px solid rgba(255, 122, 47, 1);">
                            <b class="mx-2">User 02,
                            </b>
                        </span>
                    </h6>
                    <span style="font-size: 12px;">Be Aware - Never share your Password/One time
                        Password (OTP) with anyone PayJet do not ask for OTP for any transaction.</span>
                </div>
            </div>
        </div>
        <!-- end 2nd -->
        <!-- 3rd row -->
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="card p-3">
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
            </div>
            <div class="col-md-4 mt-2">
            <div class="card h-100 p-3">
                <h4> <b>Service Wise Pie</b> </h4>
                <div class="svg-item">
                    <svg width="100%" height="100%" viewBox="0 0 40 40" class="donut">
                      <circle class="donut-hole" cx="20" cy="20" r="15.91549430918954" fill="#fff"></circle>
                      <circle class="donut-ring" cx="20" cy="20" r="15.91549430918954" fill="transparent" stroke-width="3.5"></circle>
                      <circle class="donut-segment donut-segment-2" cx="20" cy="20" r="15.91549430918954" fill="transparent" stroke-width="3.5" stroke-dasharray="69 31" stroke-dashoffset="25"></circle>
                      <g class="donut-text donut-text-1">
                  
                        <text y="50%" transform="translate(0, 2)">
                          <tspan x="50%" text-anchor="middle" class="donut-percent">68%</tspan>   
                        </text>
                        <text y="60%" transform="translate(0, 2)">
                          <tspan x="50%" text-anchor="middle" class="donut-data">Total Transactions</tspan>   
                        </text>
                      </g>
                    </svg>
                  </div>
            </div>    
            </div>
        </div>
        <!-- end 3rd -->
    </div>
</div>


@endsection