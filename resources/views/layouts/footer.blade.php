<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Besterio @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css2/libs/animate.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link media="all" type=text/css rel="stylesheet" href="style.css?v=1.17.0">

    <link media="all" type=text/css rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.3/nouislider.min.css">
    <link integrity="sha512-UMUaaaRK/i2ihAzNyraiLZzT8feWBDY+lLnBnhA3+MEfQn4jaNJMGBad6nyklImf7d0Id6n/Jb0ynr7RCpyNPQ==" crossorigin=anonymous referrerpolicy="no-referrer" media="all" type=text/css rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.9/css/lightgallery.min.css">



    @vite(['resources/sass/app.scss', 'resources/css/app.css','resources/css/style.css', 'resources/js/app.js'])
<body>
    <footer id="footer">
        <div class="footer-info border-top">
            <div class="container-xxxl py-3">
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center my-4 g-2">
                    <div class="col py-2">
                        <div class="site-info__item d-flex align-items-start">
                            <div class="site-info__image me-3 mt-1"><img class="lazyload" data-src="n-rocket.png" alt="Free Shipping"></div>
                            <div class="site-info__content">
                                <div class="site-info__title h4 fw-bold">Free Shipping</div>
                                <div class="site-info__desc">For all orders over $200</div>
                            </div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="site-info__item d-flex align-items-start">
                            <div class="site-info__image me-3 mt-1"><img class="lazyload" data-src="n-reload.png" alt="1 &amp; 1 Returns"></div>
                            <div class="site-info__content">
                                <div class="site-info__title h4 fw-bold">1 &amp; 1 Returns</div>
                                <div class="site-info__desc">Cancellation after 1 day</div>
                            </div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="site-info__item d-flex align-items-start">
                            <div class="site-info__image me-3 mt-1"><img class="lazyload" data-src="n-protect.png" alt="100% Secure Payment"></div>
                            <div class="site-info__content">
                                <div class="site-info__title h4 fw-bold">100% Secure Payment</div>
                                <div class="site-info__desc">Guarantee secure payments</div>
                            </div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="site-info__item d-flex align-items-start">
                            <div class="site-info__image me-3 mt-1"><img class="lazyload" data-src="n-support.png" alt="24/7 Dedicated Support"></div>
                            <div class="site-info__content">
                                <div class="site-info__title h4 fw-bold">24/7 Dedicated Support</div>
                                <div class="site-info__desc">Anywhere &amp; anytime</div>
                            </div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="site-info__item d-flex align-items-start">
                            <div class="site-info__image me-3 mt-1"><img class="lazyload" data-src="n-tag.png" alt="Daily Offers"></div>
                            <div class="site-info__content">
                                <div class="site-info__title h4 fw-bold">Daily Offers</div>
                                <div class="site-info__desc">Discount up to 70% OFF</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-widgets">
            <div class="container-xxxl">
                <div class="row border-top py-5">
                    <div class="col-xl-3">
                        <div class="widget mb-5 mb-md-0">
                            <p class="h5 fw-bold widget-title mb-4">Besterio – Your Online Foods &amp; Grocery</p>
                            <div class="widget-description mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus viverra iaculis. Etiam vulputate et justo eget scelerisque.</div>
                            <ul class="ps-0 mt-3 mb-0">
                                <li class="py-2"><span class="svg-icon me-2"><svg><use href="#svg-icon-phone" xlink:href="#svg-icon-phone" ></use></svg></span><span>Hotline 24/7: <h4 class="ms-4 mt-2"><a href="tel:(+965) 7492-4277">(+965) 7492-4277</a></h4></span></li>
                                <li
                                    class="py-2"><span class="svg-icon me-2"><svg><use href="#svg-icon-home" xlink:href="#svg-icon-home" ></use></svg></span><span>959 Homestead Street Eastlake, NYC</span></li>
                                    <li class="py-2"><span class="svg-icon me-2"><svg><use href="#svg-icon-mail" xlink:href="#svg-icon-mail" ></use></svg></span><span><a href="/cdn-cgi/l/email-protection#f1828481819e8385b19790839c908385df929e9c"><span class="__cf_email__" data-cfemail="0675737676697472466067746b6774722865696b">[email&#160;protected]</span></a>
                                        </span>
                                    </li>
                                    <li class="py-2"><span class="me-2"><i class="icon-clock3"></i></span><span>Mon - Fri: 07AM - 06PM</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="col mb-5">
                            <div class="widget widget-custom-menu">
                                <p class="h5 fw-bold widget-title mb-4">Useful Links</p>
                                <ul class="ps-0">
                                    <li><a href=""><span>Terms Of Use</span></a></li>
                                    <li><a href=""><span>Terms &amp; Conditions</span></a></li>
                                    <li><a href=""><span>Refund Policy</span></a></li>
                                    <li><a href=""><span>FAQs</span></a></li>
                                    <li><a href=""><span>404 Page</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="col mb-5">
                            <div class="widget widget-custom-menu">
                                <p class="h5 fw-bold widget-title mb-4">Help Center</p>
                                <ul class="ps-0">
                                    <li><a href=""><span>About us</span></a></li>
                                    <li><a href=""><span>Affiliate</span></a></li>
                                    <li><a href=""><span>Career</span></a></li>
                                    <li><a href=""><span>Contact us</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="col mb-5">
                            <div class="widget widget-custom-menu">
                                <p class="h5 fw-bold widget-title mb-4">Business</p>
                                <ul class="ps-0">
                                    <li><a href=""><span>Our blog</span></a></li>
                                    <li><a href=""><span>Cart</span></a></li>
                                    <li><a href=""><span>My account</span></a></li>
                                    <li><a href=""><span>Shop</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="widget mb-5">
                            <p class="h4 fw-bold widget-title mb-4">Newsletter</p>
                            <div class="widget-description pb-3 mb-4">Register now to get updates on promotions and coupon. Don’t worry! We not spam</div>
                            <div class="form-widget">
                                <form class="subscribe-form" method="POST" action="e"><input type=hidden name=_token value="vTia8iXI1ViF5MQUB3zNIUzx9ASnapOwnKXN3ebY">
                                    <div class="form-fields">
                                        <div class="input-group">
                                            <div class="input-group-text"><span class="svg-icon"><svg><use href="#svg-icon-mail" xlink:href="#svg-icon-mail" ></use></svg></span></div><input class="form-control shadow-none" name=email type=email placeholder="Your email...">
                                            <button
                                                class="btn btn-outline-secondary" type=submit>Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxxl">
            <div class="footer__links" id="footer-links">
                <div>
                    <p><strong>Consumer Electric:</strong><a href="" title="Fruits">Fruits</a><a href="" title="Apples">Apples</a><a href="bananas"
                            title="Bananas">Bananas</a><a href="" title="Berries">Berries</a><a href="oranges-easy-peelers" title="Oranges &amp; Easy Peelers">Oranges &amp; Easy Peelers</a>
                        <a
                            href="" title="Cabbage, Spinach &amp; Greens">Cabbage, Spinach &amp; Greens</a><a href="" title="Grapes">Grapes</a></p>
                </div>
                <div>
                    <p><strong>Clothing &amp; Apparel:</strong><a href="" title="Lemons &amp; Limes">Lemons &amp; Limes</a><a href="peaches-nectarines"
                            title="Peaches &amp; Nectarines">Peaches &amp; Nectarines</a><a href="pears" title="Pears">Pears</a><a href="melon" title="Melon">Melon</a>
                        <a
                            href="avocados" title="Avocados">Avocados</a>
                    </p>
                </div>
                <div>
                    <p><strong>Home, Garden &amp; Kitchen:</strong><a href="potatoes" title="Potatoes">Potatoes</a><a href="vegetables" title="Vegetables">Vegetables</a>
                        <a
                            href="" title="Carrots &amp; Root Vegetables">Carrots &amp; Root Vegetables</a><a href="broccoli-cauliflower" title="Broccoli &amp; Cauliflower">Broccoli &amp; Cauliflower</a><a href="plums-apricots"
                                title="Plums &amp; Apricots">Plums &amp; Apricots</a></p>
                </div>
                <div>
                    <p><strong>Health &amp; Beauty:</strong><a href="breads-sweets" title="Breads Sweets">Breads Sweets</a><a href="mushrooms" title="Mushrooms">Mushrooms</a>
                        <a
                            href="tomatoes" title="Tomatoes">Tomatoes</a><a href="beans-peas-sweetcorn" title="Beans, Peas &amp; Sweetcorn">Beans, Peas &amp; Sweetcorn</a><a href="freshly-drink-orange-juice"
                                title="Freshly Drink Orange Juice">Freshly Drink Orange Juice</a></p>
                </div>
                <div>
                    <p><strong>Computer &amp; Technologies:</strong><a href="crisps-snacks-nuts" title="Crisps, Snacks &amp; Nuts">Crisps, Snacks &amp; Nuts</a><a href="crisps-popcorn"
                            title="Crisps &amp; Popcorn">Crisps &amp; Popcorn</a><a href="nuts-seeds" title="Nuts &amp; Seeds">Nuts &amp; Seeds</a><a href="lighter-options"
                            title="Lighter Options">Lighter Options</a><a href="cereal-bars" title="Cereal Bars">Cereal Bars</a><a href="onions-leeks-garlic" title="Onions, Leeks &amp; Garlic">Onions, Leeks &amp; Garlic</a></p>
                </div>
            </div>
        </div>
        <div class="container-xxxl">
            <div class="row border-top py-4">
                <div class="col-lg-3 col-md-4 py-3">
                    <div class="copyright d-flex justify-content-center justify-content-md-start"><span>©2023 Besterio. All Rights Reserved.</span></div>
                </div>
                <div class="col-lg-6 col-md-4 py-3">
                    <div class="footer-payments d-flex justify-content-center"><img class="lazyload" data-src="ter-payments.png" alt="footer-payments"></div>
                </div>
                <div class="col-lg-3 col-md-4 py-3">
                    <div class="footer-socials d-flex justify-content-md-end justify-content-center">
                        <p class="me-3 mb-0">Stay connected:</p>
                        <div class="footer-socials-container">
                            <ul class="ps-0 mb-0">
                                <li class="d-inline-block ps-1 my-1"><a href="https://www.facebook.com/" title="Facebook" target="_blank"><img class="lazyload" data-src="ebook.png" alt="Facebook" ></a></li>
                                <li class="d-inline-block ps-1 my-1"><a href="https://www.twitter.com/" title="Twitter" target="_blank"><img class="lazyload" data-src="tter.png" alt="Twitter" ></a></li>
                                <li class="d-inline-block ps-1 my-1"><a href="https://www.instagram.com/" title="Instagram" target="_blank"><img class="lazyload" data-src="tagram.png" alt="Instagram" ></a></li>
                                <li class="d-inline-block ps-1 my-1"><a href="https://www.pinterest.com/" title="Pinterest" target="_blank"><img class="lazyload" data-src="terest.png" alt="Pinterest" ></a></li>
                                <li class="d-inline-block ps-1 my-1"><a href="https://www.youtube.com/" title="Youtube" target="_blank"><img class="lazyload" data-src="tube.png" alt="Youtube" ></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="panel--sidebar" id="navigation-mobile">
        <div class="panel__header"><span class="svg-icon close-toggle--sidebar"><svg><use href="#svg-icon-arrow-left" xlink:href="#svg-icon-arrow-left" ></use></svg></span>
            <h3>Categories</h3>
        </div>
        <div class="panel__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children has-mega-menu"><a href="fruits-vegetables"><i class="icon-star"></i><span class="ms-1">Fruits &amp; Vegetables</span><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-right" xlink:href="#svg-icon-chevron-right" ></use></svg></span></span></a>
                    <div
                        class="mega-menu">
                        <div class="mega-menu__column">
                            <a href="fruits">
                                <h4>Fruits</h4><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-right" xlink:href="#svg-icon-chevron-right" ></use></svg></span></span>
                            </a>
                            <ul class="mega-menu__list">
                                <li><a href="">Apples</a></li>
                                <li><a href="">Bananas</a></li>
                                <li><a href="berries">Berries</a></li>
                                <li><a href="oranges-easy-peelers">Oranges &amp; Easy Peelers</a></li>
                                <li><a href="grapes">Grapes</a></li>
                                <li><a href="lemons-limes">Lemons &amp; Limes</a></li>
                                <li><a href="peaches-nectarines">Peaches &amp; Nectarines</a></li>
                                <li><a href="pears">Pears</a></li>
                                <li><a href="melon">Melon</a></li>
                                <li><a href="avocados">Avocados</a></li>
                                <li><a href="plums-apricots">Plums &amp; Apricots</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <a href="vegetables">
                                <h4>Vegetables</h4><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-right" xlink:href="#svg-icon-chevron-right" ></use></svg></span></span>
                            </a>
                            <ul class="mega-menu__list">
                                <li><a href="potatoes">Potatoes</a></li>
                                <li><a href="">Carrots &amp; Root Vegetables</a></li>
                                <li><a href="broccoli-cauliflower">Broccoli &amp; Cauliflower</a></li>
                                <li><a href="cabbage-spinach-greens">Cabbage, Spinach &amp; Greens</a></li>
                                <li><a href="onions-leeks-garlic">Onions, Leeks &amp; Garlic</a></li>
                                <li><a href="mushrooms">Mushrooms</a></li>
                                <li><a href="tomatoes">Tomatoes</a></li>
                                <li><a href="beans-peas-sweetcorn">Beans, Peas &amp; Sweetcorn</a></li>
                                <li><a href="freshly-drink-orange-juice">Freshly Drink Orange Juice</a></li>
                            </ul>
                        </div>
        </div>
        </li>
        <li class="menu-item-has-children has-mega-menu"><a href="breads-sweets"><i class="icon-bread"></i><span class="ms-1">Breads Sweets</span><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-right" xlink:href="#svg-icon-chevron-right" ></use></svg></span></span></a>
            <div
                class="mega-menu">
                <div class="mega-menu__column">
                    <a href="crisps-snacks-nuts">
                        <h4>Crisps, Snacks &amp; Nuts</h4><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-right" xlink:href="#svg-icon-chevron-right" ></use></svg></span></span>
                    </a>
                    <ul class="mega-menu__list">
                        <li><a href="crisps-popcorn">Crisps &amp; Popcorn</a></li>
                        <li><a href="nuts-seeds">Nuts &amp; Seeds</a></li>
                        <li><a href="lighter-options">Lighter Options</a></li>
                        <li><a href="cereal-bars">Cereal Bars</a></li>
                        <li><a href="breadsticks-pretzels">Breadsticks &amp; Pretzels</a></li>
                        <li><a href="fruit-snacking">Fruit Snacking</a></li>
                        <li><a href="rice-corn-cakes">Rice &amp; Corn Cakes</a></li>
                        <li><a href="protein-energy-snacks">Protein &amp; Energy Snacks</a></li>
                        <li><a href="toddler-snacks">Toddler Snacks</a></li>
                        <li><a href="meat-snacks">Meat Snacks</a></li>
                        <li><a href="beans">Beans</a></li>
                        <li><a href="lentils">Lentils</a></li>
                        <li><a href="chickpeas">Chickpeas</a></li>
                    </ul>
                </div>
                <div class="mega-menu__column">
                    <a href="tins-cans">
                        <h4>Tins &amp; Cans</h4><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-right" xlink:href="#svg-icon-chevron-right" ></use></svg></span></span>
                    </a>
                    <ul class="mega-menu__list">
                        <li><a href="tomatoes">Tomatoes</a></li>
                        <li><a href="baked-beans-spaghetti">Baked Beans, Spaghetti</a></li>
                        <li><a href="fish">Fish</a></li>
                        <li><a href="beans-pulses">Beans &amp; Pulses</a></li>
                        <li><a href="fruit">Fruit</a></li>
                        <li><a href="coconut-milk-cream">Coconut Milk &amp; Cream</a></li>
                        <li><a href="lighter-options">Lighter Options</a></li>
                        <li><a href="olives">Olives</a></li>
                        <li><a href="sweetcorn">Sweetcorn</a></li>
                        <li><a href="carrots">Carrots</a></li>
                        <li><a href="peas">Peas</a></li>
                        <li><a href="mixed-vegetables">Mixed Vegetables</a></li>
                    </ul>
                </div>
    </div>
    </li>
    <li><a href="frozen-seafoods"><i class="icon-hamburger"></i><span class="ms-1">Frozen Seafoods</span></a></li>
    <li><a href="raw-meats"><i class="icon-steak"></i><span class="ms-1">Raw Meats</span></a></li>
    <li class="menu-item-has-children has-mega-menu"><a href="wines-alcohol-drinks"><i class="icon-glass"></i><span class="ms-1">Wines &amp; Alcohol Drinks</span><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-right" xlink:href="#svg-icon-chevron-right" ></use></svg></span></span></a>
        <div
            class="mega-menu">
            <div class="mega-menu__column">
                <a href="ready-meals">
                    <h4>Ready Meals</h4><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-right" xlink:href="#svg-icon-chevron-right" ></use></svg></span></span>
                </a>
                <ul class="mega-menu__list">
                    <li><a href="meals-for-1">Meals for 1</a></li>
                    <li><a href="meals-for-2">Meals for 2</a></li>
                    <li><a href="indian">Indian</a></li>
                    <li><a href="italian">Italian</a></li>
                    <li><a href="chinese">Chinese</a></li>
                    <li><a href="traditional-british">Traditional British</a></li>
                    <li><a href="thai-oriental">Thai &amp; Oriental</a></li>
                    <li><a href="mediterranean-moroccan">Mediterranean &amp; Moroccan</a></li>
                    <li><a href="mexican-caribbean">Mexican &amp; Caribbean</a></li>
                    <li><a href="lighter-meals">Lighter Meals</a></li>
                    <li><a href="lunch-veg-pots">Lunch &amp; Veg Pots</a></li>
                </ul>
            </div>
            <div class="mega-menu__column">
                <a href="salad-herbs">
                    <h4>Salad &amp; Herbs</h4><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-right" xlink:href="#svg-icon-chevron-right" ></use></svg></span></span>
                </a>
                <ul class="mega-menu__list">
                    <li><a href="salad-bags">Salad Bags</a></li>
                    <li><a href="cucumber">Cucumber</a></li>
                    <li><a href="tomatoes">Tomatoes</a></li>
                    <li><a href="lettuce">Lettuce</a></li>
                    <li><a href="lunch-salad-bowls">Lunch Salad Bowls</a></li>
                    <li><a href="lunch-salad-bowls">Lunch Salad Bowls</a></li>
                    <li><a href="fresh-herbs">Fresh Herbs</a></li>
                    <li><a href="avocados">Avocados</a></li>
                    <li><a href="peppers">Peppers</a></li>
                    <li><a href="coleslaw-potato-salad">Coleslaw &amp; Potato Salad</a></li>
                    <li><a href="spring-onions">Spring Onions</a></li>
                    <li><a href="chilli-ginger-garlic">Chilli, Ginger &amp; Garlic</a></li>
                </ul>
            </div>
            </div>
    </li>
    <li><a href="tea-coffee"><i class="icon-teacup"></i><span class="ms-1">Tea &amp; Coffee</span></a></li>
    <li><a href="milks-and-dairies"><i class="icon-coffee-cup"></i><span class="ms-1">Milks and Dairies</span></a></li>
    <li><a href="pet-foods"><i class="icon-hotdog"></i><span class="ms-1">Pet Foods</span></a></li>
    <li><a href="food-cupboard"><i class="icon-cheese"></i><span class="ms-1">Food Cupboard</span></a></li>
    </ul>
    </div>
    </div>
    <div class="panel--sidebar" id="menu-mobile">
        <div class="panel__header"><span class="svg-icon close-toggle--sidebar"><svg><use href="#svg-icon-arrow-left" xlink:href="#svg-icon-arrow-left" ></use></svg></span>
            <h3>Menu</h3>
        </div>
        <div class="panel__content">
            <ul class="menu--mobile">
                <li><a href="hes"><i class="icon icon-tag"></i> Special Prices </a></li>
                <li class=" menu-item-has-children "><a href="#"> Pages <span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-down" xlink:href="#svg-icon-chevron-down" ></use></svg></span></span></a>
                    <ul class="sub-menu">
                        <li><a href=" </a></li>
                        <li><a href=""> Terms Of Use </a></li>
                        <li><a href=""> Terms &amp; Conditions </a></li>
                        <li><a href=""> Refund Policy </a></li>
                        <li><a href="g soon </a></li>
                    </ul>
                </li>
                <li class=" menu-item-has-children "><a href="an class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-down" xlink:href="#svg-icon-chevron-down" ></use></svg></span></span></a>
                    <ul class="sub-menu">
                        <li><a href="ucts </a></li>
                        <li><a href="potatoes"> Products Of Category </a></li>
                        <li><a href="hone"> Product Single </a></li>
                    </ul>
                </li>
                <li><a href="></li>
                <li><a href="i>
                <li><a href=""> FAQs </a></li>
                <li><a href="/a></li>
            </ul>
            <ul class="menu--mobile">
                <li><a href=" </a></li>
                <li><a href=" </a></li>
                <li><a href="rder Tracking </a></li>
            </ul>
            <ul class="menu--mobile">
                <li><a href="are</span></a></li>
                <li class="menu-item-has-children"><a href="#"><span>USD</span><span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-down" xlink:href="#svg-icon-chevron-down" ></use></svg></span></span></a>
                    <ul class="sub-menu">
                        <li><a href=""><span>EUR</span></a></li>
                        <li><a href=""><span>VND</span></a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#"><img src=se/images/flags/us.svg title="English" width=16 alt="English"> English <span class="sub-toggle"><span class="svg-icon"><svg><use href="#svg-icon-chevron-down" xlink:href="#svg-icon-chevron-down" ></use></svg></span></span></a>
                    <ul
                        class="sub-menu">
                        <li><a href="se/images/flags/vn.svg title="Tiếng Việt" width=16 alt="Tiếng Việt"><span>Tiếng Việt</span></a></li>
                        <li><a href="se/images/flags/sa.svg title="Arabic" width=16 alt="Arabic"><span>Arabic</span></a></li>
            </ul>
            </li>
            </ul>
        </div>
    </div>
    <div class="panel--sidebar panel--sidebar__right" id="search-mobile">
        <div class="panel__header">
            <form class="form--quick-search w-100" data-ajax-url="s" ac        <div class="search-inner-content">
                    <div class="text-search">
                        <div class="search-wrapper"><input class="search-field input-search-product" name=q type=text placeholder="Search something..." autocomplete="off"><button class="btn" type=submit aria-label="Submit"><span class="svg-icon"><svg><use href="#svg-icon-search" xlink:href="#svg-icon-search" ></use></svg></span></button></div>
                        <a
                            class="close-search-panel close-toggle--sidebar" href="#" aria-label="Search"><span class="svg-icon"><svg><use href="#svg-icon-times" xlink:href="#svg-icon-times" ></use></svg></span></a>
                    </div>
                </div>
                <div class="panel--search-result"></div>
            </form>
        </div>
    </div>
    <div class="footer-mobile">
        <ul class="menu--footer">
            <li><a class="toggle--sidebar" href="#navigation-mobile"><i class="icon-home"></i><span>Home</span></a></li>
            <li><a class="toggle--sidebar" href="#navigation-mobile"><i class="icon-list"></i><span>Category</span></a></li>
            <li><a class="toggle--sidebar" href="#cart-mobile"><i class="icon-cart"><span class="cart-counter">0</span></i><span>Cart</span></a></li>
            <li><a class="toggle--sidebar" href="#navigation-mobile"><i class="icon-heart"></i><span>Wishlist</span></a></li>
            <li><a class="toggle--sidebar" href="#navigation-mobile"><i class="icon-user"></i><span>Account</span></a></li>


        </ul>
    </div>
    <div class="modal fade" id="product-quick-view-modal" aria-labelledby="product-quick-view-label" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
            <div class="modal-content position-relative"><button class="btn-close" data-bs-dismiss="modal" type=button aria-label="Close"></button>
                <div class="modal-body">
                    <div class="product-modal-content py-5"></div>
                </div>
            </div>
        </div>
        <div class="modal-loading"></div>
    </div>
    <div id="toast-notifications" data-bs-delay="10000" role="alert" aria-live="assertive" aria-atomic="true" class="toast position-fixed end-0 m-3 page_speed_476413142">
        <div class="d-flex">
            <div class="toast-body d-flex align-items-center"><i class="mx-2 icon-"></i>
                <div class="toast-message text-break"></div>
            </div><button class="btn-close m-2 p-3 m-auto me-2" data-bs-dismiss="toast" type=button aria-label="Close"></button></div>
    </div>
    <div class="panel-overlay-layer"></div>
    <div id="back2top"><span class="svg-icon"><svg><use href="#svg-icon-arrow-up" xlink:href="#svg-icon-arrow-up" ></use></svg></span></div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>
</html>
