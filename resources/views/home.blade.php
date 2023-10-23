@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
<style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap');




    #sidebar {
        padding: 15px 0px 15px 0px;
        border-radius: 10px;
    }

    #sidebar .h4 {
        font-weight: 500;
        padding-left: 15px;
    }

    #sidebar ul {
        list-style: none;
        margin: 0;
        padding-left: 0rem;
    }

    #sidebar ul li {
        padding: 10px 0;
        display: block;
        padding-left: 1rem;
        padding-right: 1rem;
        border-left: 5px solid transparent;
    }

    #sidebar ul li:hover {
        border-left: 5px solid #ffe552;
        background-color: rgb(63, 62, 59);
        color: black;
    }

    #sidebar ul li a {
        display: block;
    }

    #sidebar ul li a .fas,
    #sidebar ul li a .far {
        color: #ddd;
    }

    #sidebar ul li a .link {
        color: #fff;
        font-weight: 500;
    }

    #sidebar ul li a .link-desc {
        font-size: 0.8rem;
        color: #ddd;
    }

    #main-content {
        padding: 30px;
        border-radius: 15px;
    }

    #main-content .h5,
    #main-content .text-uppercase {
        font-weight: 600;
        margin-bottom: 0;
    }

    #main-content .h5+div {
        font-size: 0.9rem;
    }

    #main-content .box {
        padding: 10px;
        border-radius: 6px;
        width: 170px;
        height: 90px;
    }

    #main-content .box img {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }

    #main-content .box .tag {
        font-size: 0.9rem;
        color: #000;
        font-weight: 500;
    }

    #main-content .box .number {
        font-size: 1.5rem;
        font-weight: 600;
    }

    .order {
        padding: 10px 30px;
        min-height: 150px;
    }

    .order .order-summary {
        height: 100%;
    }

    .order .blue-label {
        background-color: #ffffff;
        color: #00dd42;
        font-size: 0.9rem;
        padding: 0px 3px;
    }

    .order .green-label {
        background-color: #ffffff;
        color: gold;
        font-size: 0.9rem;
        padding: 0px 3px;
    }

    .order .fs-8 {
        font-size: 0.85rem;
    }

    .order .rating img {
        width: 20px;
        height: 20px;
        object-fit: contain;
    }

    .order .rating .fas,
    .order .rating .far {
        font-size: 0.9rem;
    }

    .order .rating .fas {
        color: #daa520;
    }

    .order .status {
        font-weight: 600;
    }

    .order .btn.btn-primary {
        background-color: gold;
        color: #fff;
        border: none;
    }

    .order .btn.btn-primary:hover {
        background-color: transparent;
        color: gold;
        border: 1px
    }

    .order .progressbar-track {
        margin-top: 20px;
        margin-bottom: 20px;
        position: relative;
    }

    .order .progressbar-track .progressbar {
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-left: 0rem;
    }

    .order .progressbar-track .progressbar li {
        font-size: 1.5rem;
        border: 1px solid #000000;
        padding: 12px;
        text-align: center;
        width: 57px;
        border-radius: 50px;
        background-color: #ffffff;
        z-index: 100;
        position: relative;
    }

    .order .progressbar-track .progressbar li.green {
        border: 1px solid gold;
        background-color: #ffffff;
    }

    .order .progressbar-track .progressbar li::after {
        position: absolute;
        font-size: 0.9rem;
        top: 50px;
        left: 0px;
    }

    #tracker {
        position: absolute;
        border-top: 3px solid #ffe600;
        width: 100%;
        /* height: 200px; */
        top: 25px;
    }

    #step-1::after {
        content: 'Placed';
    }

    #step-2::after {
        content: 'Accepted';
        left: -10px;
    }

    #step-3::after {
        content: 'Packed';
    }

    #step-4::after {
        content: 'Shipped';
    }

    #step-5::after {
        content: 'Delivered';
        left: -10px;
    }



    /* Backgrounds */
    .bg-purple {
        background-color: #000000;
    }

    .bg-light {
        background-color: #ffffff !important;
    }

    .green {
        color: gold !important;
    }

    /* Media Queries */
    @media(max-width: 1199.5px) {
        nav ul li {
            padding: 0 10px;
        }
    }

    @media(max-width: 500px) {
        .order .progressbar-track .progressbar li {
            font-size: 1rem;
        }

        .order .progressbar-track .progressbar li::after {
            font-size: 0.8rem;
            top: 35px;
        }

        #tracker {
            top: 20px;
        }
    }

    @media(max-width: 440px) {
        #main-content {
            padding: 20px;
        }

        .order {
            padding: 20px;
        }

        #step-4::after {
            left: -5px;
        }
    }

    @media(max-width: 395px) {
        .order .progressbar-track .progressbar li {
            font-size: 0.8rem;
        }

        .order .progressbar-track .progressbar li::after {
            font-size: 0.7rem;
            top: 35px;
        }

        #tracker {
            top: 15px;
        }

        .order .btn.btn-primary {
            font-size: 0.85rem;
        }
    }

    @media(max-width: 355px) {
        #main-content {
            padding: 15px;
        }

        .order {
            padding: 10px;
        }
    }
</style>
@section('content')
<div class="container">

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3 my-lg-0 my-md-1">
                <div id="sidebar" class="bg-purple">
                    <div class="h4 text-white">Account</div>
                    <ul>
                        <li class="active">
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-box pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">My Account</div>
                                    <div class="link-desc">View & Manage orders and returns</div>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-box-open pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">My Orders</div>
                                    <div class="link-desc">View & Manage orders and returns</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="far fa-address-book pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">Address Book</div>
                                    <div class="link-desc">View & Manage Addresses</div>
                                </div>
                            </a>
                        </li>
                        <li>

                            <a href="{{ url('/user', $user->id ) }}" class="text-decoration-none d-flex align-items-start">
                                <div class="far fa-user pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">My Profile</div>
                                    <div class="link-desc">Change your profile details & password</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-headset pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">Help & Support</div>
                                    <div class="link-desc">Contact Us for help and support</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 my-lg-0 my-1">
                <div id="main-content" class="bg-white border">
                    <div class="d-flex flex-column">
                        <div class="h5">Hello {{ Auth::user()->name }}</div>
                        <div>Logged in as: {{ Auth::user()->email }}</div>
                    </div>
                    <div class="d-flex my-4 flex-wrap">
                        <div class="box me-4 my-1 bg-light">
                            <i style="font-size: 30px;" class="fa fa-box"></i>
                            <div class="d-flex align-items-center mt-2">
                                <div class="tag">Orders placed</div>
                                <div class="ms-auto number">10</div>
                            </div>
                        </div>
                        <div class="box me-4 my-1 bg-light">
                            <i style="font-size: 30px;" class="fa fa-shopping-cart"></i>
                            <div class="d-flex align-items-center mt-2">
                                <div class="tag">Items in Cart</div>
                                <div class="ms-auto number">10</div>
                            </div>
                        </div>
                        <div class="box me-4 my-1 bg-light">
                            <i style="font-size: 30px;" class="fa fa-heart"></i>
                            <div class="d-flex align-items-center mt-2">
                                <div class="tag">Wishlist</div>
                                <div class="ms-auto number">10</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-uppercase">My recent orders</div>
                    <div class="order my-3 bg-light">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex flex-column justify-content-between order-summary">
                                    <div class="d-flex align-items-center">
                                        <div class="text-uppercase">Order 8</div>
                                        <div class="blue-label ms-auto text-uppercase">paid</div>
                                    </div>
                                    <div class="fs-8">Products #03</div>
                                    <div class="fs-8">22 August, 2020 | 12:05 PM</div>
                                    <div class="rating d-flex align-items-center pt-1">
                                       <i class="fa fa-like"></i><span class="px-2">Rating:</span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
                                    <div class="status">Status : Delivered</div>
                                    <div class="btn btn-primary text-uppercase">order info</div>
                                </div>
                                <div class="progressbar-track">
                                    <ul class="progressbar">
                                        <li id="step-1" class="text-muted green">
                                            <span class="fas fa-gift"></span>
                                        </li>
                                        <li id="step-2" class="text-muted green">
                                            <span class="fas fa-check"></span>
                                        </li>
                                        <li id="step-3" class="text-muted green">
                                            <span class="fas fa-box"></span>
                                        </li>
                                        <li id="step-4" class="text-muted green">
                                            <span class="fas fa-truck"></span>
                                        </li>
                                        <li id="step-5" class="text-muted green">
                                            <span class="fas fa-box-open"></span>
                                        </li>
                                    </ul>
                                    <div id="tracker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order my-3 bg-light">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex flex-column justify-content-between order-summary">
                                    <div class="d-flex align-items-center">
                                        <div class="text-uppercase">Order 9</div>
                                        <div class="blue-label ms-auto text-uppercase">paid</div>
                                    </div>
                                    <div class="fs-8">Products #03</div>
                                    <div class="fs-8">22 August, 2020 | 12:05 PM</div>
                                    <div class="rating d-flex align-items-center pt-1">
                                       <i class="fa fa-like"></i><span class="px-2">Rating:</span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
                                    <div class="status">Status : Delivered</div>
                                    <div class="btn btn-primary text-uppercase">order info</div>
                                </div>
                                <div class="progressbar-track">
                                    <ul class="progressbar">
                                        <li id="step-1" class="text-muted green">
                                            <span class="fas fa-gift"></span>
                                        </li>
                                        <li id="step-2" class="text-muted green">
                                            <span class="fas fa-check"></span>
                                        </li>
                                        <li id="step-3" class="text-muted green">
                                            <span class="fas fa-box"></span>
                                        </li>
                                        <li id="step-4" class="text-muted green">
                                            <span class="fas fa-truck"></span>
                                        </li>
                                        <li id="step-5" class="text-muted green">
                                            <span class="fas fa-box-open"></span>
                                        </li>
                                    </ul>
                                    <div id="tracker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order my-3 bg-light">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex flex-column justify-content-between order-summary">
                                    <div class="d-flex align-items-center">
                                        <div class="text-uppercase">Order 10</div>
                                        <div class="blue-label ms-auto text-uppercase">paid</div>
                                    </div>
                                    <div class="fs-8">Products #03</div>
                                    <div class="fs-8">22 August, 2020 | 12:05 PM</div>
                                    <div class="rating d-flex align-items-center pt-1">
                                       <i class="fa fa-like"></i><span class="px-2">Rating:</span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
                                    <div class="status">Status : Pending</div>
                                    <div class="btn btn-primary text-uppercase">order info</div>
                                </div>
                                <div class="progressbar-track">
                                    <ul class="progressbar">
                                        <li id="step-1" class="text-muted green">
                                            <span class="fas fa-gift"></span>
                                        </li>
                                        <li id="step-2" class="text-muted green">
                                            <span class="fas fa-check"></span>
                                        </li>
                                        <li id="step-3" class="text-muted green">
                                            <span class="fas fa-box"></span>
                                        </li>
                                        <li id="step-4" class="text-muted green">
                                            <span class="fas fa-truck"></span>
                                        </li>
                                        <li id="step-5" class="text-muted green">
                                            <span class="fas fa-box-open"></span>
                                        </li>
                                    </ul>
                                    <div id="tracker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="order my-3 bg-light">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex flex-column justify-content-between order-summary">
                                    <div class="d-flex align-items-center">
                                        <div class="text-uppercase">Order #fur10001</div>
                                        <div class="green-label ms-auto text-uppercase">cod</div>
                                    </div>
                                    <div class="fs-8">Products #03</div>
                                    <div class="fs-8">22 August, 2020 | 12:05 PM</div>
                                    <div class="rating d-flex align-items-center pt-1">
                                        <i class="fa fa-like"><span class="px-2">Rating:</span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
                                    <div class="status">Status : Delivered</div>
                                    <div class="btn btn-primary text-uppercase">order info</div>
                                </div>
                                <div class="progressbar-track">
                                    <ul class="progressbar">
                                        <li id="step-1" class="text-muted green">
                                            <span class="fas fa-gift"></span>
                                        </li>
                                        <li id="step-2" class="text-muted">
                                            <span class="fas fa-check"></span>
                                        </li>
                                        <li id="step-3" class="text-muted">
                                            <span class="fas fa-box"></span>
                                        </li>
                                        <li id="step-4" class="text-muted">
                                            <span class="fas fa-truck"></span>
                                        </li>
                                        <li id="step-5" class="text-muted">
                                            <span class="fas fa-box-open"></span>
                                        </li>
                                    </ul>
                                    <div id="tracker"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

    </div>
</div>
@if (session('status'))
    <div id="login-success-message">
        {{ session('status') }}
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                title: 'Good job!',
                text: 'You Logged In Successfully',
                icon: 'success'
            });
        });
    </script>
@endif
@endsection


