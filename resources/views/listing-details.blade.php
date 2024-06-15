<?php $page = 'listing-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Chevrolet Camaro
        @endslot
        @slot('li_1')
            Listings
        @endslot
        @slot('li_2')
            Chevrolet Camaro
        @endslot
    @endcomponent
    <!-- Detail Page Head-->
    <section class="product-detail-head">
        <div class="container">
            <div class="detail-page-head">
                <div class="detail-headings">
                    <div class="star-rated">
                        <div class="list-rating">
                            <span class="year">2023</span>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <span class="d-inline-block average-list-rating"> 5.0 </span>
                        </div>
                        <div class="camaro-info">
                            <h3>Chevrolet Camaro</h3>
                            <div class="camaro-location">
                                <div class="camaro-location-inner">
                                    <i class="feather-map-pin me-2"></i>

                                    <span class="me-2"> <b>Location :</b> Miami St, Destin, FL 32550, USA </span>
                                </div>
                                <div class="camaro-locations-inner">
                                    <i class="feather-eye me-2"></i>

                                    <span><b>Views :</b> 250 </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="details-btn">
                    <a href=""> <img src="{{ URL::asset('/build/img/git-compare.svg') }}" alt="">
                        Compare</a>
                    <a href=""><i class="feather-heart"></i> Wishlist</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Detail Page Head-->

    <section class="section product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="detail-product">
                        <div class="slider detail-bigimg">
                            <div class="product-img">
                                <img src="{{ URL::asset('/build/img/cars/slider-01.jpg') }}" alt="Slider">
                            </div>
                            <div class="product-img">
                                <img src="{{ URL::asset('/build/img/cars/slider-02.jpg') }}" alt="Slider">
                            </div>
                            <div class="product-img">
                                <img src="{{ URL::asset('/build/img/cars/slider-03.jpg') }}" alt="Slider">
                            </div>
                            <div class="product-img">
                                <img src="{{ URL::asset('/build/img/cars/slider-04.jpg') }}" alt="Slider">
                            </div>
                            <div class="product-img">
                                <img src="{{ URL::asset('/build/img/cars/slider-05.jpg') }}" alt="Slider">
                            </div>
                        </div>
                        <div class="slider slider-nav-thumbnails">
                            <div><img src="{{ URL::asset('/build/img/cars/slider-thum-01.jpg') }}" alt="product image">
                            </div>
                            <div><img src="{{ URL::asset('/build/img/cars/slider-thum-02.jpg') }}" alt="product image">
                            </div>
                            <div><img src="{{ URL::asset('/build/img/cars/slider-thum-03.jpg') }}" alt="product image">
                            </div>
                            <div><img src="{{ URL::asset('/build/img/cars/slider-thum-04.jpg') }}" alt="product image">
                            </div>
                            <div><img src="{{ URL::asset('/build/img/cars/slider-thum-05.jpg') }}" alt="product image">
                            </div>
                        </div>
                    </div>
                    <div class="review-sec extra-service">
                        <div class="review-header">
                            <h4>Extra Service</h4>
                        </div>
                        <span>Baby Seat - $10</span>
                    </div>
                    <!--Listing Features Section-->
                    <div class="review-sec specification-card ">
                        <div class="review-header">
                            <h4>Specifications</h4>
                        </div>
                        <div class="card-body">
                            <div class="lisiting-featues">
                                <div class="row">
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-1.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Body </span>
                                            <h6> Sedan</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-2.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Make </span>
                                            <h6> Nisssan</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-3.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Transmission </span>
                                            <h6> Automatic</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-4.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Fuel Type </span>
                                            <h6> Diesel</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-5.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Mileage </span>
                                            <h6>16 Km</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-6.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Drivetrian </span>
                                            <h6>Front Wheel</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-7.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Year</span>
                                            <h6> 2018</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-8.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>AC </span>
                                            <h6> Air Condition</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-9.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>VIN </span>
                                            <h6> 45456444</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-10.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Door </span>
                                            <h6> 4 Doors</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-11.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Brake </span>
                                            <h6> ABS</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/build/img/specification/specification-icon-12.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="featues-info">
                                            <span>Engine (Hp) </span>
                                            <h6> 3,000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-sec listing-feature">
                        <div class="review-header">
                            <h4>Car Features</h4>
                        </div>
                        <div class="listing-description">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Multi-zone A/C</li>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Heated front seats</li>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Andriod Auto</li>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Navigation system</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Premium sound system</li>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Bluetooth</li>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Keyles Start</li>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Memory seat</li>
                                    </ul>

                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>6 Cylinders</li>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Adaptive Cruise Control
                                        </li>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>Intermittent wipers</li>
                                        <li><span><i class="fa-solid fa-check-double"></i></span>4 power windows</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Listing Features Section-->
                    <div class="review-sec extra-service mb-0">
                        <div class="review-header">
                            <h4>Description Of Listing</h4>
                        </div>
                        <div class="description-list">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged.
                            </p>

                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was
                                popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum.
                            </p>

                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>

                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was
                                popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>

                    <div class="review-sec extra-service mb-0">
                        <div class="review-header">
                            <h4>Video</h4>
                        </div>
                        <div class="short-video">
                            <iframe src="https://www.youtube.com/embed/ExJZAegsOis" width="100"
                                height="350"></iframe>
                        </div>
                    </div>

                    <div class="review-sec listing-review">
                        <div class="review-header">
                            <h4>Reviews<span class="me-2">(2)</span></h4>
                            <div class="reviewbox-list-rating">
                                <p>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span> (5 out of 5)</span>
                                </p>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="review-header-group">
                                <div class="review-widget-header">
                                    <span class="review-widget-img">
                                        <img src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                            class="img-fluid" alt="">
                                    </span>
                                    <div class="review-design">
                                        <h6>Johnson</h6>
                                        <p>02 Jun 2023</p>
                                    </div>
                                </div>
                                <div class="reviewbox-list-rating">
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span> (5.0)</span>
                                    </p>
                                </div>
                            </div>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.It was popularised in the 1960s </p>
                            <ul class="review-list-rating">
                                <li>
                                    quality
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </p>
                                </li>
                                <li>
                                    Price
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </p>
                                </li>
                                <li>
                                    Comfort
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </p>
                                </li>
                                <li>
                                    Driving
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="review-card">
                            <div class="review-header-group">
                                <div class="review-widget-header">
                                    <span class="review-widget-img">
                                        <img src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                            class="img-fluid" alt="">
                                    </span>
                                    <div class="review-design">
                                        <h6>Casandra</h6>
                                        <p>02 Jun 2023</p>
                                    </div>
                                </div>
                                <div class="reviewbox-list-rating">
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-regular fa-star rating-overall"></i>
                                        <span> (4.0)</span>
                                    </p>
                                </div>
                            </div>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.It was popularised in the 1960s </p>
                            <ul class="review-list-rating">
                                <li>
                                    quality
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-regular fa-star rating-overall"></i>
                                    </p>
                                </li>
                                <li>
                                    Price
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </p>
                                </li>
                                <li>
                                    Comfort
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-regular fa-star rating-overall"></i>
                                    </p>
                                </li>
                                <li>
                                    Driving
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </p>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="review-sec leave-reply-form">
                        <div class="review-header">
                            <h4>Leave a Reply</h4>
                        </div>
                        <ul class="review-list-rating mb-3">
                            <li>
                                quality
                                <p>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </p>
                            </li>
                            <li>
                                Price
                                <p>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </p>
                            </li>
                            <li>
                                Comfort
                                <p>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </p>
                            </li>
                            <li>
                                Driving
                                <p>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </p>
                            </li>
                        </ul>
                        <div class="card-body">
                            <div class="review-list">
                                <ul>
                                    <li class="review-box feedbackbox mb-0">
                                        <div class="review-details">
                                            <form class="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-block">
                                                            <label>Full Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-block">
                                                            <label>Email Address <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-block">
                                                            <label>Comments </label>
                                                            <textarea rows="4" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="submit-btn">
                                                    <button class="btn btn-primary submit-review" type="submit"> Submit
                                                        Review</button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 theiaStickySidebar">
                    <div class="review-sec mt-0">
                        <div class="review-header">
                            <h4>Check Availability</h4>
                        </div>
                        <div class="">		
                            <form class="">
                                <ul>
                                    <li class="column-group-main">
                                        <div class="input-block">
                                            <label>Pickup Location</label>												
                                            <div class="group-img">
                                                <input type="text" class="form-control" placeholder="45, 4th Avanue  Mark Street USA">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="column-group-main">
                                        <div class="input-block">
                                            <label>Dropoff Location</label>												
                                            <div class="group-img">
                                                <input type="text" class="form-control" placeholder="78, 10th street Laplace USA">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="column-group-main">						
                                        <div class="input-block m-0">																	
                                            <label>Pickup Date</label>
                                        </div>
                                        <div class="input-block-wrapp sidebar-form">
                                            <div class="input-block me-2">												
                                                <div class="group-img">
                                                <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                                </div>
                                            </div>
                                            <div class="input-block">											
                                                <div class="group-img">
                                                <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                                </div>
                                            </div>
                                        </div>	
                                    </li>
                                    <li class="column-group-main">						
                                        <div class="input-block m-0">																	
                                            <label>Return Date</label>
                                        </div>
                                        <div class="input-block-wrapp sidebar-form">
                                            <div class="input-block me-2">												
                                                <div class="group-img">
                                                <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                                </div>
                                            </div>
                                            <div class="input-block">											
                                                <div class="group-img">
                                                <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                                </div>
                                            </div>
                                        </div>	
                                    </li>
                                    <li class="column-group-last">
                                        <div class="input-block mb-0">
                                            <div class="search-btn">
                                                <button class="btn btn-primary check-available w-100" type="button" data-bs-toggle="modal" data-bs-target="#pages_edit"> Check Availability</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>	
                        </div>	
                    </div>
                    <div class="review-sec extra-service mt-0">
                        <div class="review-header">
                            <h4>Listing Owner Details</h4>
                        </div>
                        <div class="owner-detail">
                            <div class="owner-img">
                                <a href="#"><img src="{{URL::asset('/build/img/profiles/avatar-07.jpg')}}" alt="User"></a>
                            </div>
                            <div class="reviewbox-list-rating">
                                <h5><a>Brooklyn Cars</a></h5>
                                <p>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>	
                                    <span> (5.0)</span> 
                                </p>
                            </div>
                        </div>
                        <ul class="booking-list">
                            <li>
                                No of Listings
                                <span>05</span>
                            </li>
                            <li>
                                No of Bookings
                                <span>225</span>
                            </li>
                            <li>
                                Verification
                                <h6>Verified</h6>
                            </li>
                        </ul>
                        <div class="message-btn">
                            <a href="#" class="btn btn-order">Message to owner</a>
                        </div>	
                    </div>
                    <div class="review-sec share-car mt-0">
                        <div class="review-header">
                            <h4>Share this car</h4>
                        </div>
                        <ul class="nav-social">
                            <li>
                                <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa-brands fa-pinterest-p fi-icon"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="review-sec share-car mt-0 mb-0">
                        <div class="review-header">
                            <h4>View Location</h4>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin" class="iframe-video"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="details-car-grid">
                        <div class="details-slider-heading">
                            <h3>You May Be Interested In</h3>
                        </div>
                        <div class="car-details-slider owl-carousel">
                            <div class="card">
                                <div class="listing-item pb-0">
                                    <div class="listing-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/cars/car-02.jpg') }}" class="img-fluid"
                                                alt="KIA">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">KIA</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="author-img">
                                                <img src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                    alt="author">
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="javascript:void(0)">Kia Soul 2016</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-regular fa-star rating-overall"></i>
                                                <span>(4.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                            alt="22 KM"></span>
                                                    <p>22 KM</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2016"></span>
                                                    <p>2016</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span class="me-2"><i class="feather-map-pin"></i></span> Belgium
                                            </div>
                                            <div class="listing-price">
                                                <h6>$80 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="listing-item pb-0">
                                    <div class="listing-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/cars/car-07.jpg') }}" class="img-fluid"
                                                alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Chevrolet</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="author-img">
                                                <img src="{{ URL::asset('/build/img/profiles/avatar-07.jpg') }}"
                                                    alt="author">
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="javascript:void(0)">Chevrolet Pick Truck 3.5L</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="Manual"></span>
                                                    <p>Manual</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                            alt="10 KM"></span>
                                                    <p>10 KM</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2012"></span>
                                                    <p>2012</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span> Spain
                                            </div>
                                            <div class="listing-price">
                                                <h6>$77 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="listing-item pb-0">
                                    <div class="listing-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/cars/car-03.jpg') }}" class="img-fluid"
                                                alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Audi</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="author-img">
                                                <img src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                    alt="author">
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="javascript:void(0)">Audi A3 2019 new</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-regular fa-star rating-overall"></i>
                                                <span>(4.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="Manual"></span>
                                                    <p>Manual</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                            alt="10 KM"></span>
                                                    <p>10 KM</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2019"></span>
                                                    <p>2019</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>4 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span> Newyork, USA
                                            </div>
                                            <div class="listing-price">
                                                <h6>$45 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="listing-item pb-0">
                                    <div class="listing-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/cars/car-04.jpg') }}" class="img-fluid"
                                                alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Ferrai</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="author-img">
                                                <img src="{{ URL::asset('/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="javascript:void(0)">Ferrari 458 MM Speciale</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-regular fa-star rating-overall"></i>
                                                <span>(4.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="Manual"></span>
                                                    <p>Manual</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                            alt="14 KM"></span>
                                                    <p>14 KM</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                            alt="Basic"></span>
                                                    <p>Basic</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2023"></span>
                                                    <p>2023</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span> Newyork, USA
                                            </div>
                                            <div class="listing-price">
                                                <h6>$160 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="listing-item pb-0">
                                    <div class="listing-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/cars/car-05.jpg') }}" class="img-fluid"
                                                alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Chevrolet</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="author-img">
                                                <img src="{{ URL::asset('/build/img/profiles/avatar-05.jpg') }}"
                                                    alt="author">
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="javascript:void(0)">2018 Chevrolet Camaro</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="Manual"></span>
                                                    <p>Manual</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                            alt="18 KM"></span>
                                                    <p>18 KM</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2018"></span>
                                                    <p>2018</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>4 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span> Germany
                                            </div>
                                            <div class="listing-price">
                                                <h6>$36 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="listing-item pb-0">
                                    <div class="listing-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                                alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Acura</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="author-img">
                                                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="javascript:void(0)">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-regular fa-star rating-overall"></i>
                                                <span>(4.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                            alt="12 KM"></span>
                                                    <p>12 KM</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2013"></span>
                                                    <p>2013</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span> Newyork, USA
                                            </div>
                                            <div class="listing-price">
                                                <h6>$30 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="listing-item pb-0">
                                    <div class="listing-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/cars/car-02.jpg') }}" class="img-fluid"
                                                alt="KIA">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">KIA</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="author-img">
                                                <img src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                    alt="author">
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="javascript:void(0)">Kia Soul 2016</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-regular fa-star rating-overall"></i>
                                                <span>(4.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                            alt="22 KM"></span>
                                                    <p>22 KM</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2016"></span>
                                                    <p>2016</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span> Belgium
                                            </div>
                                            <div class="listing-price">
                                                <h6>$80 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="listing-item pb-0">
                                    <div class="listing-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/cars/car-05.jpg') }}" class="img-fluid"
                                                alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Chevrolet</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="author-img">
                                                <img src="{{ URL::asset('/build/img/profiles/avatar-05.jpg') }}"
                                                    alt="author">
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="javascript:void(0)">2018 Chevrolet Camaro</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="Manual"></span>
                                                    <p>Manual</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                            alt="18 KM"></span>
                                                    <p>18 KM</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2018"></span>
                                                    <p>2018</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>4 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span> Germany
                                            </div>
                                            <div class="listing-price">
                                                <h6>$36 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
