<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.svg" rel="icon" />
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <link rel="canonical" href="" />
    <meta property="og:image" content="" />
    <meta property="og:title" content="" />
    <meta property="fb:admins" content="" />
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <link href="images/favicon.svg" rel="icon" />
    <title>Dashboard</title>
    <meta name="description" content="#">
    <meta name="author" content="#">
    <!-- Web Fonts============================================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Stylesheet============================================= -->
    <!-- <link rel="stylesheet" type="text/css" href="vendor-bootstrap.css"/> -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendor-font-awesome.css')}}" />
    <!-- <link rel="stylesheet" type="text/css" href="owl-carasouel.css"/> -->
    <!-- <link rel="stylesheet" href="navbar.scss"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/stylesheet1.css')}}" />
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
    <!---custome css file-->
    <link href="{{asset('vendor/menu.css')}}" rel="stylesheet">
    <!--bootsrtap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--bootsrtap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!---cdn fafa-icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    body {
        background-color: #F5F3FF;
    }

    /* chart css */
    .svg-item {
        width: 100%;
        font-size: 16px;
        margin: 0 auto;
        animation: donutfade 1s;
    }

    @keyframes donutfade {

        /* this applies to the whole svg item wrapper */
        0% {
            opacity: .2;
        }

        100% {
            opacity: 1;
        }
    }

    @media (min-width: 992px) {
        .svg-item {
            width: 80%;
        }
    }

    .donut-ring {
        stroke: #EBEBEB;
    }

    .donut-segment {
        transform-origin: center;
        stroke: #FF6200;
    }

    .donut-segment-2 {
        stroke: rgba(255, 122, 47, 1) !important;
        animation: donut1 3s;
    }


    .segment-1 {
        fill: #ccc;
    }

    .segment-2 {
        fill: rgb(0, 0, 0) !important;
    }

    .segment-3 {
        fill: #d9e021;
    }

    .segment-4 {
        fill: #ed1e79;
    }

    .donut-percent {
        animation: donutfadelong 1s;
    }

    @keyframes donutfadelong {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes donut1 {
        0% {
            stroke-dasharray: 0, 100;
        }

        100% {
            stroke-dasharray: 69, 31;
        }
    }


    .donut-text {
        font-family: Arial, Helvetica, sans-serif;
        fill: #FF6200;
    }

    .donut-text-1 {
        fill: rgb(0, 0, 0);
    }

    .donut-text-2 {
        fill: #d9e021;
    }

    .donut-text-3 {
        fill: #ed1e79;
    }

    .donut-label {
        font-size: 0.28em;
        font-weight: 700;
        line-height: 1;
        fill: #000;
        transform: translateY(0.25em);
    }

    .donut-percent {
        font-size: 0.5em;
        line-height: 1;
        transform: translateY(0.5em);
        font-weight: bold;
    }

    .donut-data {
        font-size: 0.12em;
        line-height: 1;
        transform: translateY(0.5em);
        text-align: center;
        text-anchor: middle;
        color: #666;
        fill: #666;
        animation: donutfadelong 1s;
    }
</style>

<body>
    <!-- Preloader -->
    <div id="preloade">
        <div data-loader="dual-ring"></div>
    </div>
    <!-- Preloader End -->
    <!-- Document Wrapper============================================= -->
    <div id="main-wrapper">
        <!-- Header============================================= -->
        <header id="header">
            <div class="container-fluid navbar fixed-top">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <!-- Logo============================================= -->
                        <div class=" col-md-2 logo mx-4 ">
                            <a class="navbar-brand" href="{{route('superadmin.home')}}">
                                <img src="{{asset('images/logoooo.svg')}}">
                            </a>
                        </div>
                        <!-- Logo end -->
                        <!-- Primary Navigation ============================================= -->
                        <nav class=" col-md-12 primary-menu navbar navbar-expand-lg">
                            <div id="header-nav" class="collapse navbar-collapse">
                                <ul class=" col-md-7 navbar-nav">
                                    <li>
                                        <a href="Dashboard.html">
                                            <i class="bi bi-grid-fill fs-4" style="color: rgba(255, 122, 47, 1);"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown ">
                                        <a href="{{route('superadmin.homeservices')}}">Home</a>
                                    </li>
                                    <li class="dropdown ">
                                        <a href="epos.html">Epos Settlement</a>
                                    </li>
                                    <li class="dropdown dropdown-mega">
                                        <a class="dropdown-toggle" href="#">Report</a>
                                        <ul class="dropdown-menu">
                                            <div class="row">
                                                <div class="col-12 col-lg-2">
                                                    <div style="overflow: hidden; transition: transform 0.5s;"
                                                        onmouseover="this.children[0].style.transform='scale(1.1)'"
                                                        onmouseout="this.children[0].style.transform='scale(1)'">
                                                        <img src="images/card.svg" class="dropdown-img"
                                                            style="display: block; width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <ul class="dropdown-mega-submenu">
                                                        <li>
                                                            <a class="dropdown-item" href="report.html">Report</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="searchrecharge.html">Search
                                                                Recharge</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="fastrecharge.html">Fastag
                                                                Recharges</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="dmtreport.html">DMT</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="dmt-transaction-Search.html">DMT Transaction
                                                                Search</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="DMT-KYC.html">DMT-KYC</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <ul class="dropdown-mega-submenu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="Credit-Card-Bill-Payment-Report.html">Credit Card
                                                                Bill Payment</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="Aeps-Xpress-Report.html">Aeps
                                                                Xpress</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="Aeps-tez-Report.html">Aeps
                                                                Tez</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="Aeps-Report.html">Aeps</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="Aadhar-Pay-Report.html">Aadhar Pay</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="Insurance-Report.html">Insurance</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <ul class="dropdown-mega-submenu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="Bill-Payment-Report.html">Bill Payment</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="Account-Report.html">Account
                                                                Report</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="Balance-TopUp-History.html">Balance TopUp
                                                                History</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="Bank-List.html">Bank List</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="Payment-Withdrawal-report.html">Payment
                                                                Withdrawal</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" target="_blank"
                                                                href="CMS-Bill-Report.html">CMS Bill</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <ul class="dropdown-mega-submenu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="Postpaid-Bill-Transaction.html">Postpaid Bill
                                                                Transaction</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="EPOS-Pending-Transaction-Report.html">EPOS Pending
                                                                Transaction</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="Turbo-E-Payment-Request.html">Turbo E Payment
                                                                Request</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="Rupay-Card-Report.html">Rupay
                                                                Card</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="Payment-Gateway-Report.html">Payment Gateway</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="complain.html">Complain</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="payout.html">Payout</a>
                                    </li>
                                </ul>
                                <!-- Button trigger modal -->
                                <div class="col-md-5 nav-end-lagout ">
                                    <div class="paids">
                                        <div class="row p-2 align-items-center paidrow">
                                            <!----postpaid col end/-->
                                            <div class="nav-prepaid dropdown  text-center">
                                                <div class="dropdown-center">
                                                    <div class=" dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="images/postpaid.svg">
                                                        <span class="nav-smartphone dropdown">Wallet
                                                            <b>₹14.12</b>
                                                        </span>
                                                    </div>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="walt-creditcard.html">Credit
                                                                Card</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="wallet-Debitcard.html">Debit
                                                                Card</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="pro-payment-gtway-wallet-topup.html">Payment
                                                                Wallet</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!----postpaid col end/-->
                                        </div>
                                    </div>
                                    <div class="qr-code">
                                        <div type="button" class="" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="bi bi-qr-code fs-2"></i>
                                        </div>
                                        <!-- Modal -->
                                    </div>
                                    <div class="EMI-calculator">
                                        <button type="button" class="btn btn-outline-danger btn-text">
                                            <img src="images/calculate-fill.svg">
                                            <span>
                                                EMI Calculator</span>
                                        </button>
                                    </div>
                                    <div class="dropstart">
                                        <div class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <a href="{{route('superadmin.profile')}}">
                                                <i class="bi bi-person-circle fs-2"></i>
                                            </a>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="{{route('superadmin.profile')}}">Profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{route('superadmin.usermangement')}}">User Management</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="password-change.html">Password Change</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="Create-T-Pin.html">Create Tpin</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item"  href="{{route('superadmin.userservice')}}">My Services</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{route('superadmin.logout')}}">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="header-column justify-content-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#header-nav">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
        </header>
    </div>
    <!-- Header end -->
    <marquee behavior="" direction="" style="margin-top: 70px;">
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