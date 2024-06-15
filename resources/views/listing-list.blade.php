<?php $page = 'listing-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Car Listings
        @endslot
        @slot('li_1')
            Listings
        @endslot
        @slot('li_2')
            Car Listings
        @endslot
    @endcomponent
    <div class="sortby-sec">
        <div class="container">
            <div class="sorting-div">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
                        <div class="count-search">
                            <p>Showing <span>1-8</span> of 10 Results</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                        <div class="product-filter-group">
                            <div class="sortbyset">
                                <span class="sortbytitle">Show : </span>
                                <div class="sorting-select select-one">
                                    <select class="form-control select">
                                        <option>5</option>
                                        <option>10</option>
                                        <option>15</option>
                                        <option>20</option>
                                    </select>
                                </div>
                                <div class="sorting-select select-two">
                                    <select class="form-control select">
                                        <option>Low to High</option>
                                        <option>High to Low</option>
                                    </select>
                                </div>
                                <div class="sorting-select select-three">
                                    <select class="form-control select">
                                        <option>Popular</option>
                                        <option>Toyota Camry SE 350</option>
                                        <option>Audi A3 2019 new</option>
                                        <option>Ferrari 458 MM Speciale</option>
                                        <option>Chevrolet Camaro</option>
                                        <option>Acura Sport Version</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid-listview">
                                <ul>
                                    <li>
                                        <a href="{{ url('listing-grid') }}">
                                            <i class="feather-grid"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('listing-list') }}" class="active">
                                            <i class="feather-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Car Grid View -->
    <section class="section car-listing">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
                    <form action="javascript:void(0)" autocomplete="off" class="sidebar-form">
                        <!-- Customer -->
                        <div class="sidebar-heading">
                            <h3>What Are You Looking For</h3>
                        </div>
                        <div class="product-search">
                            <div class="form-custom">
                                <input type="text" class="form-control" id="member_search1" placeholder="">
                                <div>
                                <span><img src="{{ URL::asset('/build/img/icons/search.svg') }}" alt="img"></span>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionMain1">
                            <div class="card-header-new" id="headingOne">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Car Category
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample1">
                                <div class="card-body-chat">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="checkBoxes1">
                                                <div class="selectBox-cont">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Tesla
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Ford
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Mercediz Benz
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Audi
                                                    </label>
                                                    <!-- View All -->
                                                    <div class="view-content">
                                                        <div class="viewall-One">
                                                            <label class="custom_check w-100">
                                                                <input type="checkbox" name="username">
                                                                <span class="checkmark"></span> Kia
                                                            </label>
                                                            <label class="custom_check w-100">
                                                                <input type="checkbox" name="username">
                                                                <span class="checkmark"></span> Honda
                                                            </label>
                                                            <label class="custom_check w-100">
                                                                <input type="checkbox" name="username">
                                                                <span class="checkmark"></span> Toyota
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /View All -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Customer -->

                        <div class="accordion" id="accordionMain2">
                            <div class="card-header-new" id="headingTwo">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Car Type
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample2">
                                <div class="card-body-chat">
                                    <div id="checkBoxes2">
                                        <div class="selectBox-cont">
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Convertible
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Crossover
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Sedan
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Wagon
                                            </label>
                                            <!-- View All -->
                                            <div class="view-content">
                                                <div class="viewall-One">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Pickup
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Wagon
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> SUV
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /View All -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- By Status -->
                        <div class="accordion" id="accordionMain3">
                            <div class="card-header-new" id="headingThree">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Capacity
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample3">
                                <div class="card-body-chat">
                                    <div id="checkBoxes3">
                                        <div class="selectBox-cont">
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 1-4
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 1-6
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 4-6
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span>4-8
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span>8+
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 10+
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 15+
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /By Status -->

                        <!-- Category -->
                        <div class="accordion" id="accordionMain4">
                            <div class="card-header-new" id="headingFour">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Price
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample4">
                                <div class="card-body-chat">
                                    <div class="filter-range">
                                        <input type="text"  class="input-range">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Category -->

                        <div class="accordion" id="accordionMain5">
                            <div class="card-header-new" id="headingFive">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        Rating
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample5">
                                <div class="card-body-chat">
                                    <div id="checkBoxes4">
                                        <div class="selectBox-cont">
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </label>
                                            <div class="view-content">
                                                <div class="viewall-Two">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span>
                                                        <i class="fas fa-star filled"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionMain6">
                            <div class="card-header-new" id="headingSix">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        Customer Recommendation
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample6">
                                <div class="card-body-chat">
                                    <div id="checkBoxes5">
                                        <div class="selectBox-cont">
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span> 70% & up
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span> 60% & up
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span> 50% & up
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span> 40% & up
                                            </label>
                                            <div class="viewall-Two">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>30% & up
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
                            <span><i class="feather-filter me-2"></i></span>Filter Results
                        </button>
                        <a href="javascript:void(0)" class="reset-filter">Reset Filter</a>
                    </form>
                </div>
                <div class="col-xl-9 col-lg-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-1.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                                    </h3>
                                                    <h6>Category : <span>Ferrarai</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
                                                    <h6>$400 <span>/ Day</span></h6>
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
                                                                alt="10 KM"></span>
                                                        <p>10 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Petrol</p>
                                                    </li>
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
                                                        <p>5 Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/cars/car-list-icon-01.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="address-info">
                                                            <h5><a href="">Toyota Of Lincoln Park</a></h5>
                                                            <h6><i class="feather-map-pin me-2"></i>Newyork, USA</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" type="sumit"
                                                        class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-2.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                                    </h3>
                                                    <h6>Category : <span>BMW</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
                                                    <h6>$300 <span>/ Day</span></h6>
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
                                                                alt="13 KM"></span>
                                                        <p>13 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Petrol</p>
                                                    </li>
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
                                                        <p>5 Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/cars/car-list-icon-02.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="address-info">
                                                            <h5><a href="">Toyota Of Lincoln Park</a></h5>
                                                            <h6><i class="feather-map-pin me-2"></i>Newyork, USA</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" type="sumit"
                                                        class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-3.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                                    </h3>
                                                    <h6>Category : <span>Ford</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
                                                    <h6>$400 <span>/ Day</span></h6>
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
                                                                alt="15 KM"></span>
                                                        <p>15 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Petrol</p>
                                                    </li>
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
                                                        <p>5 Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/cars/car-list-icon-03.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="address-info">
                                                            <h5><a href="">Toyota Of Lincoln Park</a></h5>
                                                            <h6><i class="feather-map-pin me-2"></i>Newyork, USA</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" type="sumit"
                                                        class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @component('components.pagination')
                    @endcomponent
                </div>
            </div>
        </div>
    </section>
    <!-- /Car Grid View -->

@endsection
