@extends('layouts.master')

@section('content')

<div id="content mt-5" style="background-color: #242424;">
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
                        </div>
                    </div>
                </div>
               
                <!-- Banner============================================= -->
                <livewire:changePassword/>
                <!--------------------------------Cards beings------------------------>
                <!------------------------------cards end------------------------>
                <!-- Modal -->
            </div>

            <script>
    window.addEventListener('alert', (event) => {
        // console.log(event);
        $('#changeBox');
       
        let data = event.detail;
        Swal.fire({
            position: 'center',
             icon: "success",
            //  icon: data.icon,
            title: data.title,
            showConfirmButton: false,
            timer: 1500
        });
    })
    </script>


@endsection