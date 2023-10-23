@extends('layouts.app')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@section('content')
    <div class=" mb-4"
        style="background-image: url('https://farmart.botble.com/storage/general/slider-bg.jpg'); width:100%;">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-md-8 mt-5">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active arosel">
                                <img src="{{ asset('img/02.jpg') }}"  alt="">

                            </div>
                            <div class="carousel-item arosel">
                                <img src="{{ asset('img/01.jpg') }}" alt="">

                            </div>
                            {{-- <div class="carousel-item">
                    <img src="{{ asset('img/01.jpg') }}" class="" alt="...">
                  </div> --}}
                        </div>
                        <div class="caro">
                            <button class="carousel-contro-prev" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="prev">
                                <span style="color: orange;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-contro-next" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="next">
                                <span style="color: orange;" class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <img src="{{ asset('img/side.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="ani mt-5 container-fluid">
        <h4 class="ms-2">Browser By Category</h4>
        <div class=" wow slideInRight" data-wow-duration="2s" data-wow-delay="1">
            <div class="d-flex  anim" style="flex-wrap: wrap">
                <div class=" hove mb-4"
                    style="padding: 40px; height:200px; width:190px; background-color:rgb(236, 236, 236); border-radius:20px;">
                    <img src="https://farmart.botble.com/storage/product-categories/1-300x300.png" width="110px"
                        alt="">
                    <p style="font-size: 13px; text-align:center;">Fruit & Vegetable</p>
                </div>
                {{-- <div class="">Div 2</div> --}}
                <div class=" hove mb-4"
                    style="padding: 40px; height:200px; width:190px; background-color:rgb(236, 236, 236); border-radius:20px;">
                    <img src="https://farmart.botble.com/storage/product-categories/2-300x300.png" width="110px"
                        alt="">
                    <p style="font-size: 13px; text-align:center;">Bread Sweet</p>
                </div>
                <div class=" hove mb-4"
                    style="padding: 40px; height:200px; width:190px; background-color:rgb(236, 236, 236); border-radius:20px;">
                    <img src="https://farmart.botble.com/storage/product-categories/3-300x300.png" width="110px"
                        alt="">
                    <p style="font-size: 13px; text-align:center;">Frozen Seafood</p>
                </div>
                <div class="hove mb-4"
                    style="padding: 40px; height:200px; width:190px; background-color:rgb(236, 236, 236); border-radius:20px;">
                    <img src="https://farmart.botble.com/storage/product-categories/4-300x300.png" width="110px"
                        alt="">
                    <p style="font-size: 13px; text-align:center;">Raw Meats</p>
                </div>
                <div class="hove mb-4"
                    style="padding: 40px; height:200px; width:190px; background-color:rgb(236, 236, 236); border-radius:20px;">
                    <img src="https://farmart.botble.com/storage/product-categories/5-300x300.png" width="110px"
                        alt="">
                    <p style="font-size: 13px; text-align:center;">Wines & Alcohol</p>
                </div>
                <div class="hove mb-4"
                    style="padding: 40px; height:200px; width:190px; background-color:rgb(236, 236, 236); border-radius:20px;">
                    <img src="https://farmart.botble.com/storage/product-categories/6-300x300.png" width="110px"
                        alt="">
                    <p style="font-size: 13px; text-align:center;">Tea & Coffee</p>
                </div>
                <div class="hove mb-4"
                    style="padding: 40px; height:200px; width:190px; background-color:rgb(236, 236, 236); border-radius:20px;">
                    <img src="https://farmart.botble.com/storage/product-categories/7-300x300.png" width="110px"
                        alt="">
                    <p style="font-size: 13px; text-align:center;">Milk & Diaries</p>
                </div>
                {{-- <div class="" style="padding: 40px; height:200px; width:190px; background-color:rgb(236, 236, 236); border-radius:20px;" >
        <img src="https://farmart.botble.com/storage/product-categories/1-300x300.png" width="110px" alt="">
        <p style="font-size: 13px; text-align:center;">Fruit & Vegetable</p>
    </div> --}}
            </div>
        </div>
    </div>
    <br><br>
    <div>
        <h4 class="ms-2">Featured Brands</h4>
        <div class=" wow slideInLeft" data-wow-duration="2s" data-wow-delay="1ms">
            <div class="owl-carousel owl-theme mt-5">
                <div class="item" style="width: 100%;  background:whitesmoke;"><img
                        src="https://farmart.botble.com/storage/brands/1.png" alt=""><br>
                    <div class="">
                        <h3 style="color: rgb(180, 180, 180)">FOODPOUND</h3>
                        <h5 style="color: black">New Snacks Release</h5>
                    </div>
                    <br>
                </div>
                <div class="item" style="width: 100%;  background:whitesmoke;"><img
                        src="https://farmart.botble.com/storage/brands/2.png" alt="">
                    <br>
                    <div class="">
                        <h3 style="color: rgb(180, 180, 180)">ITEA JSC</h3>
                        <h5 style="color: black">Happy Tea 100% Organic. From $29.9</h5>
                    </div>
                    <br>
                </div>
                <div class="item" style="width: 100%;  background:whitesmoke;"><img
                        src="https://farmart.botble.com/storage/brands/3.png" alt="">
                    <br>
                    <div class="">
                        <h3 style="color: rgb(180, 180, 180)">SODA BRAND</h3>
                        <h5 style="color: black">Fresh Meat Sausage. BUY 2 GET 1!</h5>
                    </div>
                    <br>
                </div>
                <div class="item" style="width: 100%;  background:whitesmoke;"><img
                        src="https://farmart.botble.com/storage/brands/4.png" alt="">
                    <br>
                    <div class="">
                        <h3 style="color: rgb(180, 180, 180)">ITEA JSC</h3>
                        <h5 style="color: black">Happy Tea 100% Organic. From $29.9</h5>
                    </div>
                    <br>
                </div>
                <div class="item" style="width: 100%;  background:whitesmoke;"><img
                        src="https://farmart.botble.com/storage/brands/3.png" alt="">
                    <br>
                    <div class="">
                        <h3 style="color: rgb(180, 180, 180)">SODA BRAND</h3>
                        <h5 style="color: black">Fresh Meat Sausage. BUY 2 GET 1!</h5>
                    </div>
                    <br>
                </div>
                {{-- <div class="item" style="width: 100%;  background:whitesmoke;" ><img src="https://farmart.botble.com/storage/brands/2.png" alt=""></div> --}}

            </div>

        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="row align-items-center widget-header">
            <h2 class="col-auto mb-0 py-2" style="font-weight: bolder;">Top Saver Today</h2>
            <!-- Other elements here -->

            <!-- Countdown timer -->
            <div class="countdown-wrapper col-auto ps-md-5 py-2  ms-5"
                style="padding: 10px; width:470px; background:rgba(241, 32, 32, 0);  color:white;">
                <div class="header-countdown row align-items-center justify-content-center gx-2">
                    <div class="header-countdown row align-items-center justify-content-center gx-2">
                        <div class="ends-text col-auto">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="svg-icon me-2"><i class="fa-solid fa-gauge"></i></span>Expires in:
                            </div>
                        </div>
                        <div class="expire-countdown col-auto" data-expire="2366890">
                            <span class="days timer">
                                <span class="digits" id="days">27</span>
                                <span class="text">days</span>
                            </span>
                            <span class="divider">:</span>
                            <span class="hours timer">
                                <span class="digits" id="hours">09</span>
                                <span class="text">hours</span>
                            </span>
                            <span class="divider">:</span>
                            <span class="minutes timer">
                                <span class="digits" id="minutes">20</span>
                                <span class="text">mins</span>
                            </span>
                            <span class="divider">:</span>
                            <span class="seconds timer">
                                <span class="digits" id="seconds">00</span>
                                <span class="text">secs</span>
                            </span>
                            {{-- <span class="divider">:</span> --}}

                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="productcontainer">
            @foreach ($products as $product)
                <div class="overall">
                    <div class="productItems">
                        <div class="hidicon">
                            <a href="{{ route('product.show', ['id' => $product->id]) }}" class="">
                                <i class="fa-solid fa-expand"></i>
                            </a>
                            <i class="fa-regular fa-heart"></i>
                            <span class="material-symbols-outlined">
                                compare_arrows
                            </span>

                        </div>
                        <a style="text-decoration: none; color:black;"
                            href="{{ route('product.show', ['id' => $product->id]) }}">
                            <div class="card-one">
                                <div class="bage">-{{ $product->quantity }}%</div>
                                <img src="{{ $product->picture }}" alt="">
                                <div class="m-3">

                                    <h5 class="card-title text">{{ $product->title }}</h5>
                                    {{-- <br> --}}
                                    <div class="rating-box mt-3 d-flex">
                                        {{-- <header>How was your experience?</header> --}}
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>


                                    <p class="card-text price"> ${{ $product->price }}</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="card-text">Quantity: {{ $product->quantity }} in stock</p>




                                    {{-- <a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn btn-secondary">View Details</a> --}}
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="add">
                        <!-- Add to Cart Form -->
                        <form method="POST" action="{{ route('cart.add', ['id' => $product->id]) }}">
                            @csrf
                            <button type="submit" class=""><i class="fa-solid fa-cart-shopping"></i> Add to
                                Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>





    <script>
        // JavaScript to update the countdown timer
        function updateTimer() {
            const countdownElement = document.querySelector('.expire-countdown');
            const countdownData = countdownElement.dataset.expire;
            const now = Math.floor(new Date().getTime() / 1000);
            const remainingTime = countdownData - now;

            const days = Math.floor(remainingTime / (60 * 60 * 24));
            const hours = Math.floor((remainingTime % (60 * 60 * 24)) / (60 * 60));
            const minutes = Math.floor((remainingTime % (60 * 60)) / 60);
            const seconds = remainingTime % 60;

            document.getElementById('days').textContent = days;
            document.getElementById('hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
            document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
        }

        // Update the timer initially
        updateTimer();

        // Update the timer every second
        setInterval(updateTimer, 1000);


        const stars = document.querySelectorAll(".stars i");
        stars.forEach((star, index1) => {
            star.addEventListener("click", () => {
                stars.forEach((star, index2) => {
                    index1 >= index2 ? star.classList.add("active") : star.classList.remove(
                        "active");
                });
            });
        });

        function truncateText(textElements, maxLength) {
            textElements.forEach(function(textElement) {
                if (textElement.textContent.length > maxLength) {
                    textElement.textContent = textElement.textContent.slice(0, maxLength) + '...';
                }
            });
        }

        // Call the function on all elements with class "text"
        const textElements = document.querySelectorAll('.text');
        truncateText(textElements, 30);
    </script>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 5, // Number of items to display at a time
                loop: true, // Infinite loop
                margin: 13, // Margin between items
                nav: true, // Show navigation arrows
                autoplay: true, // Auto-play the carousel
                autoplayTimeout: 7000, // Auto-play interval in milliseconds
                responsive: {
                    0: {
                        items: 1 // Number of items to display on smaller screens
                    },
                    600: {
                        items: 3 // Number of items to display on medium screens
                    },
                    1000: {
                        items: 4 // Number of items to display on larger screens
                    }
                }
            });
        });
    </script>
    <script src="{{ asset('dist/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
@endsection
