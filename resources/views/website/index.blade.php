@extends('website.website_master')
@section('websites')

<div style="background: #148bff ; padding:0px 2%">
    @include('website.body.header')

</div>
    <!-- mian-content -->
    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                {{-- <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="index.html"><span class="fa fa-bold" aria-hidden="true"></span>ootie</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="shop.html">Shop Now</a></li>
                                <li><a href="shop-single.html">Single Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav> --}}
                {{-- @include('website.body.header') --}}
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <!--/banner-->
        <div class="banner-info">
            <p>Trending of the week</p>
            <h3 class="mb-4">Casual Shoes for Men</h3>
            <div class="ban-buttons">
                <a href="shop-single.html" class="btn">Shop Now</a>
                <a href="single.html" class="btn active">Read More</a>
            </div>
        </div>
        <!--// banner-inner -->

    </div>
    <!--//main-content-->

    <!--/ab -->
    <section class="about py-md-5 py-5">
        <div class="container-fluid">
            <div class="feature-grids row px-3">
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center">
                            <span class="fa fa-truck" aria-hidden="true"></span>
                        </div>

                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">FREE SHIPPING</h3>
                            <p>On all order over $2000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row bottom-gd2-active">
                        <div class="icon-gd col-md-3 text-center"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">FREE RETURN</h3>
                            <p>On 1st exchange in 30 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-gift" aria-hidden="true"></span></div>

                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">MEMBER DISCOUNT</h3>
                            <p>Register & save up to $29%</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-usd" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">PREMIUM SUPPORT</h3>
                            <p>Support 24 hours per day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //ab -->
    <!--/ab -->
    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">New Arrivals</h3>
            <div class="row">
                <div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="{{asset('frontend/images/s1.jpg')}}" class="img-fluid" alt="">
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="shop-single.html">Bella Toes </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">$675.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="{{asset('frontend/images/s2.jpg')}}" class="img-fluid" alt="">
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="shop-single.html">Chikku Loafers </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">$475.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="{{asset('frontend/images/s3.jpg')}}" class="img-fluid" alt="">
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="shop-single.html">(SRV) Sneakers </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">$575.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men my-lg-4">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="{{asset('frontend/images/s4.jpg')}}" class="img-fluid" alt="">
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="shop-single.html">Shuberry Heels</a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">$575.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men my-lg-4">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="{{asset('frontend/images/s5.jpg')}}" class="img-fluid" alt="">
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="shop-single.html">Red Bellies </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">$575.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men my-lg-4">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="{{asset('frontend/images/s6.jpg')}}" class="img-fluid" alt="">
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="shop-single.html">Catwalk Flats </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">$575.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- //ab -->
    <!--/testimonials-->
    <section class="testimonials py-5">
        <div class="container">
            <div class="test-info text-center">
                <h3 class="my-md-2 my-3">Jenifer Burns</h3>

                <ul class="list-unstyled w3layouts-icons clients">
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star-half-o"></span>
                        </a>
                    </li>
                </ul>
                <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut. <span class="fa fa-quote-right"></span></p>

            </div>
        </div>
    </section>
    <!--//testimonials-->
    <!--/ab -->
    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">Popular Products</h3>
            <div class="row">
                <div class="col-md-6 latest-left">
                    <div class="product-shoe-info shoe text-center">
                        <img src="{{asset('frontend/images/img1.jpg')}}" class="img-fluid" alt="">
                        <div class="shop-now"><a href="shop.html" class="btn">Shop Now</a></div>
                    </div>
                </div>
                <div class="col-md-6 latest-right">
                    <div class="row latest-grids">
                        <div class="latest-grid1 product-men col-12">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="{{asset('frontend/images/img2.jpg')}}" class="img-fluid" alt="">
                                    <div class="shop-now"><a href="shop.html" class="btn">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="latest-grid2 product-men col-12 mt-lg-4">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="{{asset('frontend/images/img3.jpg')}}" class="img-fluid" alt="">
                                    <div class="shop-now"><a href="shop.html" class="btn">Shop Now</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //ab -->
    <!-- brands -->
    <section class="brands py-5" id="brands">
        <div class="container py-lg-0">
            <div class="row text-center brand-items">
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-connectdevelop" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-empire" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-ioxhost" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-first-order" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                    <a href="#"><span class="fa fa-joomla" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                    <a href="#"><span class="fa fa-dropbox" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- brands -->

@endsection
