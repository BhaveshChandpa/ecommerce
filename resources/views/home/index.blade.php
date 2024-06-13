@extends('layouts.app')

@section('content')
     

    <!-- Navbar -->
    <div class="position-relative z-index-30">
        <!-- Navbar -->
        <nav
            class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column  border-0 position-absolute w-100 z-index-30 bg-transparent navbar-dark navbar-transparent bg-white-hover transition-all">
            <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
                <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
        
                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0" href="{{ route('home') }}">
                        <!-- Start of Logo-->
                        <div class="d-flex align-items-center">
                            <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 194 194"><path fill="currentColor" class="svg-logo-white" d="M47.45,60l1.36,27.58,53.41-51.66,50.87,50,3.84-26L194,100.65V31.94A31.94,31.94,0,0,0,162.06,0H31.94A31.94,31.94,0,0,0,0,31.94v82.57Z"/><path fill="currentColor" class="svg-logo-dark" d="M178.8,113.19l1,34.41L116.3,85.92l-14.12,15.9L88.07,85.92,24.58,147.53l.93-34.41L0,134.86v27.2A31.94,31.94,0,0,0,31.94,194H162.06A31.94,31.94,0,0,0,194,162.06V125.83Z"/></svg>
                            </div> <span class="fs-5">Alpine</span>
                        </div>
                        <!-- / Logo-->
                        
                    </a>
                    <!-- / Logo-->
        
                    <!-- Main Navigation-->
                    <div class="ms-5 flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1" id="navbarNavDropdown">
        
                        <!-- Mobile Nav Toggler-->
                        <button
                            class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 position-absolute top-0 end-0 mt-3 me-2"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-close-circle-line ri-2x"></i>
                        </button>
                        <!-- / Mobile Nav Toggler-->
        
                        <ul class="navbar-nav py-lg-2 mx-auto">
                            <li class="nav-item me-lg-4 dropdown position-static">
                                <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Menswear
                                </a>
                                <!-- Menswear dropdown menu-->
                                <div class="dropdown-menu dropdown-megamenu">
                                    <div class="container">
                                        <div class="row g-0">
                                            <!-- Dropdown Menu Links Section-->
                                            <div class="col-12 col-lg-7">
                                                <div class="row py-lg-5">
                                                
                                                    <!-- menu row-->
                                                    <div class="col col-lg-6 mb-5 mb-sm-0">
                                                        <h6 class="dropdown-heading">Waterproof Layers</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Waterproof
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Insulated
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Down
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Softshell
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Casual
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Windproof
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Breathable
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Cleaning &
                                                                    Proofing</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all"
                                                                    href="{{ route('category.index') }}">View All</a></li>
                                                        </ul>
                                                
                                                    </div>
                                                    <!-- /menu row-->
                                                
                                                    <!-- menu row-->
                                                    <div class="col col-lg-6">
                                                        <h6 class="dropdown-heading">Brands</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Lifestyle &
                                                                    Casual</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Walking
                                                                    Shoes</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Running
                                                                    Shoes</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Military
                                                                    Boots</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Fabric Walking
                                                                    Boots</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Leather
                                                                    Walking Boots</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Wellies</a>
                                                            </li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Winter
                                                                    Footwear</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all"
                                                                    href="{{ route('category.index') }}">View All</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /menu row-->
                                                
                                                </div>                    </div>
                                            <!-- /Dropdown Menu Links Section-->
                        
                                            <!-- Dropdown Menu Images Section-->
                                            <div class="d-none d-lg-block col-lg-5">
                                                <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute" style="background-image: url(./assets/images/banners/banner-2.jpg);"></div>
                                            </div>
                                            <!-- Dropdown Menu Images Section-->
                                        </div>
                                    </div>
                                </div>
                                <!-- / Menswear dropdown menu-->
                            </li>
                            <li class="nav-item me-lg-4 dropdown position-static">
                                <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Womenswear
                                </a>
                                <!-- Womenswear dropdown menu-->
                                <div class="dropdown-menu dropdown-megamenu">
                                    <div class="container">
                                        <div class="row g-0">
                                            <!-- Dropdown Menu Links Section-->
                                            <div class="col-12 col-lg-7">
                                                <div class="row py-lg-5">
                                                
                                                    <!-- menu row-->
                                                    <div class="col col-lg-6 mb-5 mb-sm-0">
                                                        <h6 class="dropdown-heading">Waterproof Layers</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Waterproof
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Insulated
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Down
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Softshell
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Casual
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Windproof
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Breathable
                                                                    Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Cleaning &
                                                                    Proofing</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all"
                                                                    href="{{ route('category.index') }}">View All</a></li>
                                                        </ul>
                                                
                                                    </div>
                                                    <!-- /menu row-->
                                                
                                                    <!-- menu row-->
                                                    <div class="col col-lg-6">
                                                        <h6 class="dropdown-heading">Brands</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Lifestyle &
                                                                    Casual</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Walking
                                                                    Shoes</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Running
                                                                    Shoes</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Military
                                                                    Boots</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Fabric Walking
                                                                    Boots</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Leather
                                                                    Walking Boots</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Wellies</a>
                                                            </li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="{{ route('category.index') }}">Winter
                                                                    Footwear</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all"
                                                                    href="{{ route('category.index') }}">View All</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /menu row-->
                                                
                                                </div>                    </div>
                                            <!-- /Dropdown Menu Links Section-->
                        
                                            <!-- Dropdown Menu Images Section-->
                                            <div class="d-none d-lg-block col-lg-5">
                                                <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute" style="background-image: url(./assets/images/banners/banner-4.jpg);"></div>
                                            </div>
                                            <!-- Dropdown Menu Images Section-->
                                        </div>
                                    </div>
                                </div>
                                <!-- / Womenswear dropdown menu-->
                            </li>
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="#">
                                    Kidswear
                                </a>
                            </li>
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="#">
                                    Sale Items
                                </a>
                            </li>
                            <li class="nav-item dropdown me-lg-4">
                                <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Demo Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('home') }}">Homepage</a></li>
                                    <li><a class="dropdown-item" href="{{ route('category.index') }}">Category</a></li>
                                    <li><a class="dropdown-item" href="{{ route('product.index') }}">Product</a></li>
                                    <li><a class="dropdown-item" href="./cart.html">Cart</a></li>
                                    <li><a class="dropdown-item" href="./checkout.html">Checkout</a></li>
                                  </ul>
                            </li>
                        </ul>            </div>
                    <!-- / Main Navigation-->
        
                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center">
        
                        <!-- Navbar Toggle Icon-->
                        <li class="d-inline-block d-lg-none">
                            <button
                                class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 d-flex align-items-center"
                                data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="ri-menu-line ri-lg align-middle"></i>
                            </button>
                        </li>
                        <!-- /Navbar Toggle Icon-->
        
                        <!-- Navbar Search-->
                        <li class="ms-1 d-inline-block">
                            <button
                                class="btn btn-link px-2 text-decoration-none d-flex align-items-center"
                                data-pr-search>
                                <i class="ri-search-2-line ri-lg align-middle"></i>
                            </button>
                        </li>
                        <!-- /Navbar Search-->
        
                        <!-- Navbar Wishlist-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center"
                                href="#">
                                <i class="ri-heart-line ri-lg align-middle"></i>
                            </a>
                        </li>
                        <!-- /Navbar Wishlist-->
        
                        <!-- Navbar Login-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="btn btn-link px-2 text-decoration-none d-flex align-items-center"
                                href="#">
                                <i class="ri-user-line ri-lg align-middle"></i>
                            </a>
                        </li>
                        <!-- /Navbar Login-->
        
                        <!-- Navbar Cart-->
                        <li class="ms-1 d-inline-block position-relative">
                            <button
                                class="btn btn-link px-2 text-decoration-none d-flex align-items-center disable-child-pointer"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10"></i>
                                <span
                                    class="fs-xs fw-bolder f-w-5 f-h-5 bg-orange rounded-lg d-block lh-1 pt-1 position-absolute top-0 end-0 z-index-20 mt-2 text-white">2</span>
                            </button>
                        </li>
                        <!-- /Navbar Cart-->
        
                    </ul>
                    <!-- Navbar Icons-->
        
                </div>
            </div>
        </nav>
        <!-- / Navbar-->    </div>
    <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 ">
        <!-- Page Content Goes Here -->

        <!-- / Hero Section -->
        <section class="vh-100 position-relative bg-overlay-dark ">
            <div class="container d-flex h-100 justify-content-center align-items-center position-relative z-index-10">
                <div
                    class="d-flex justify-content-center align-items-center h-100 position-relative z-index-10 text-white">
                    <div>
                        <h1 class="display-1 fw-bold px-2 px-md-5 text-center mx-auto col-lg-8 mt-md-0"
                            data-aos="fade-up" data-aos-delay="1000">Where will your next adventure take you?</h1>
                        <div data-aos="fade-in" data-aos-delay="2000">
                            <div class="d-md-flex justify-content-center mt-4 mb-3 my-md-5">
                                <a href="{{ route('category.index') }}"
                                    class="btn btn-skew-left btn-orange btn-orange-chunky text-white mx-1 w-100 w-md-auto mb-2 mb-md-0"><span>Shop
                                        Menswear <i class="ri-arrow-right-line align-middle fw-bold"></i></span></a>
                                <a href="{{ route('category.index') }}"
                                    class="btn btn-skew-left btn-orange btn-orange-chunky text-white mx-1 w-100 w-md-auto mb-2 mb-md-0"><span>Shop
                                        Womenswear <i class="ri-arrow-right-line align-middle fw-bold"></i></span></a>
                            </div>
                            <i class="ri-mouse-line d-block text-center animation-float ri-2x transition-all opacity-50-hover text-white"
                                data-pixr-scrollto data-target=".brand-section" data-aos="fade-up"
                                data-aos-delay="700"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute z-index-1 top-0 bottom-0 start-0 end-0">
                <!-- Swiper Info -->
                <div class="swiper-container overflow-hidden bg-light w-100 h-100"
                  data-swiper
                  data-options='{
                    "slidesPerView": 1,
                    "speed": 1500,
                    "loop": true,
                    "effect": "fade",
                    "autoplay": {
                      "delay": 5000
                    }
                  }'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide position-relative">
                      <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url(assets/src/assets/images/slideshows/slideshow-1.jpg);">
                      </div> 
                    </div>
                    <div class="swiper-slide position-relative">
                      <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url(assets/src/assets/assets/images/slideshows/slideshow-2.jpg);"> 
                      </div>
                    </div>
                    <div class="swiper-slide position-relative">
                      <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url(assets/src/assets/images/slideshows/slideshow-3.jpg);"> 
                      </div>
                    </div>
                  </div> 
                
                </div>
                <!-- / Swiper Info-->            </div>
        </section>
        <!--/ Hero Section-->

        <!-- Featured Brands-->
        <div class="mb-lg-7 bg-light py-4" data-aos="fade-in">
            <div class="container">
                <div class="row gx-3 align-items-center">
                    <div
                        class="col-12 justify-content-center justify-content-md-between align-items-center d-flex flex-wrap">
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="{{ route('category.index') }}" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Shop Kathmandu">
                                <img class="img-fluid d-table mx-auto" src="{{ asset('/assets/src/assets/images/logos/logo-1.svg')}}"
                                    alt="Bootstrap 5 Template by Pixel Rocket">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="{{ route('category.index') }}" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Shop Billabong">
                                <img class="img-fluid d-table mx-auto" src="{{ asset('/assets/src/assets/images/logos/logo-2.svg')}}"
                                    alt="Bootstrap 5 Template by Pixel Rocket">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="{{ route('category.index') }}" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Shop Oakley">
                                <img class="img-fluid d-table mx-auto" src="{{ asset('/assets/src/assets/images/logos/logo-9.svg')}}"
                                    alt="Bootstrap 5 Template by Pixel Rocket">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="{{ route('category.index') }}" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Shop Patagonia">
                                <img class="img-fluid d-table mx-auto" src="{{ asset('/assets/src/assets/images/logos/logo-4.svg')}}"
                                    alt="Bootstrap 5 Template by Pixel Rocket">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="{{ route('category.index') }}" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Shop North Face">
                                <img class="img-fluid d-table mx-auto" src="{{ asset('/assets/src/assets/images/logos/logo-5.svg')}}"
                                    alt="Bootstrap 5 Template by Pixel Rocket">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="{{ route('category.index') }}" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Shop Salomon">
                                <img class="img-fluid d-table mx-auto" src="{{ asset('/assets/src/assets/images/logos/logo-6.svg')}}"
                                    alt="Bootstrap 5 Template by Pixel Rocket">
                            </a>
                        </div>
                        <a href="{{ route('category.index') }}" class="btn btn-link fw-bolder">Explore All Brands <i
                                class="ri-arrow-right-line align-bottom fw-bold"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Featured Brands-->

        <!-- Staff Picks-->
        <section class="mb-9 mt-5" data-aos="fade-up">
            <div class="container">
                <div class="w-md-50 mb-5">
                    <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Summer Favourites</p>
                    <h2 class="display-5 fw-bold mb-3">Staff Picks</h2>
                    <p class="lead">We've sorted through our feed to put together a collection of our products perfect
                        for a summer outdoors.</p>
                </div>
                <!-- Swiper Latest -->
                <div class="swiper-container overflow-visible"
                  data-swiper
                  data-options='{
                    "spaceBetween": 25,
                    "cssMode": true,
                    "roundLengths": true,
                    "scrollbar": {
                      "el": ".swiper-scrollbar",
                      "hide": false,
                      "draggable": true
                    },      
                    "navigation": {
                      "nextEl": ".swiper-next",
                      "prevEl": ".swiper-prev"
                    },  
                    "breakpoints": {
                      "576": {
                        "slidesPerView": 1
                      },
                      "768": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      },
                      "1200": {
                        "slidesPerView": 4
                      }            
                    }
                  }'>
                  <div class="swiper-wrapper pb-5 pe-1">
                      <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('/assets/src/assets/images/products/product-1.jpg')}}" alt="">
                                </picture>
                                    <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                        <img class="w-100 img-fluid" title="" src="{{ asset('/assets/src/assets/images/products/product-1b.jpg') }}" alt="">
                                    </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                        <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 90%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (456)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="{{ route('product.index') }}">Full Zip Hoodie</a>
                                    <p class="fw-bolder m-0 mt-2">$1129.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                      <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                                <span class="badge card-badge bg-secondary">-25%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('/assets/src/assets/images/products/product-2.jpg')}}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                        <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 60%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div> <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="{{ route('product.index') }}">Mens Sherpa Hoodie</a>
                                    <div class="d-flex justify-content-center align-items-center mt-2">
                                        <p class="mb-0 me-2 text-danger fw-bolder">$<span>599.55</span></p>
                                        <p class="mb-0 text-muted fw-bolder"><s>$<span>150.00</span></s></p>
                                    </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                      <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                                <span class="badge card-badge bg-secondary">-65%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('/assets/src/assets/images/products/product-3.jpg')}}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                        <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 20%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (754)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="{{ route('product.index') }}">Womens Essentials Hoodie</a>
                                    <div class="d-flex justify-content-center align-items-center mt-2">
                                        <p class="mb-0 me-2 text-danger fw-bolder">$<span>779.55</span></p>
                                        <p class="mb-0 text-muted fw-bolder"><s>$<span>1100.00</span></s></p>
                                    </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                      <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('/assets/src/assets/images/products/product-4.jpg')}}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                        <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 70%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div> <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="{{ route('product.index') }}">Elevated Lined Hoodie</a>
                                    <p class="fw-bolder m-0 mt-2">$1829.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                      <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('/assets/src/assets/images/products/product-5.jpg')}}" alt="">
                                </picture>
                                    <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                        <img class="w-100 img-fluid" title="" src="./assets/images/products/product-5b.jpg" alt="">
                                    </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                        <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 84%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div> <span class="small fw-bolder ms-2 text-muted"> 4.8 (189)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="{{ route('product.index') }}">Mens Slab Hoodie</a>
                                    <p class="fw-bolder m-0 mt-2">$29.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                      <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('/assets/src/assets/images/products/product-6.jpg')}}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                        <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 60%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div> <span class="small fw-bolder ms-2 text-muted"> 4.5 (1567)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="{{ route('product.index') }}">Blocked Striped Hoodie</a>
                                    <p class="fw-bolder m-0 mt-2">$1329.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                      <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                                <span class="badge card-badge bg-secondary">-13%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('/assets/src/assets/images/products/product-7.jpg')}}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                        <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 60%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div> <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="{{ route('product.index') }}">Womens Classic Hoodie</a>
                                    <div class="d-flex justify-content-center align-items-center mt-2">
                                        <p class="mb-0 me-2 text-danger fw-bolder">$<span>599.55</span></p>
                                        <p class="mb-0 text-muted fw-bolder"><s>$<span>150.00</span></s></p>
                                    </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                      <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                                <span class="badge card-badge bg-secondary">-33%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('/assets/src/assets/images/products/product-8.jpg')}}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                        <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 20%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (754)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="{{ route('product.index') }}">Mens Sherpa Hoodie</a>
                                    <div class="d-flex justify-content-center align-items-center mt-2">
                                        <p class="mb-0 me-2 text-danger fw-bolder">$<span>779.55</span></p>
                                        <p class="mb-0 text-muted fw-bolder"><s>$<span>1100.00</span></s></p>
                                    </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                    <div class="swiper-slide d-flex h-auto justify-content-center align-items-center">
                      <a href="{{ route('category.index') }}" class="d-flex text-decoration-none flex-column justify-content-center align-items-center">
                        <span class="btn btn-dark btn-icon mb-3"><i class="ri-arrow-right-line ri-lg lh-1"></i></span>
                        <span class="lead fw-bolder">See All</span>
                      </a>
                    </div>
                  </div>
                
                  <!-- Buttons-->
                  <div class="swiper-btn swiper-disabled-hide swiper-prev swiper-btn-side btn-icon bg-dark text-white ms-3 shadow-lg mt-n5 ms-n4"><i class="ri-arrow-left-s-line ri-lg"></i></div>
                  <div class="swiper-btn swiper-disabled-hide swiper-next swiper-btn-side swiper-btn-side-right btn-icon bg-dark text-white me-n4 shadow-lg mt-n5"><i class="ri-arrow-right-s-line ri-lg"></i></div>
                
                  <!-- Add Scrollbar -->
                  <div class="swiper-scrollbar"></div>
                
                </div>
                <!-- / Swiper Latest-->            </div>
        </section>
        <!-- / Staff Picks-->

        <!-- Image Hotspot Banner-->
        <section class="my-10 position-relative">
            <!-- SVG Shape Divider-->
            <div class="position-absolute z-index-50 text-white top-0 start-0 end-0">
                <svg class="align-self-start d-flex" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1283 53.25"><polygon fill="currentColor" points="1283 0 0 0 0 53.25 1283 0"/></svg></div>
            <!-- /SVG Shape Divider-->
            
            <div class="w-100 h-100 bg-img-cover bg-pos-center-center hotspot-container py-5 py-md-7 py-lg-10" style="background-image: url(https://images.unsplash.com/photo-1508746829417-e6f548d8d6ed?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
                <div class="hotspot d-none d-lg-block" data-options='{
                    "placement": {
                        "left": "68%",
                        "bottom": "40%"
                    },
                    "alwaysVisible": true,
                    "alwaysAnimate": true,
                    "contentTarget": "#hotspot-one",
                    "trigger": "mouseenter"
                }'>
                </div>
                <div class="hotspot d-none d-lg-block" data-options='{
                    "placement": {
                        "left": "53%",
                        "top": "40%"
                    },
                    "alwaysVisible": true,
                    "alwaysAnimate": true,
                    "contentTarget": "#hotspot-one"
                }'>
                </div>
                <div class="container py-lg-8 position-relative z-index-10 d-flex align-items-center" data-aos="fade-left">
                    <div class="py-8 d-flex justify-content-end align-items-start align-items-lg-end flex-column col-lg-4 text-lg-end">
                        <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Extreme Performance</p>
                        <h2 class="display-5 fw-bold mb-3">The North Face</h2>
                        <p class="lead d-none d-lg-block">Be ready all year round with our selection of North Face outdoor jackets — perfect for any time of the year and year round. Choose from a variety of colour shades and styles to warm you up in cold conditions.</p>
                        <a class="text-decoration-none fw-bolder" href="#">Shop The North Face &rarr;</a>
                    </div>
                </div>
            
                <!-- Example Hotspot HTML Content -->
                <div id="hotspot-one" class="d-none">
                    <div class="m-n2 rounded overflow-hidden">
                        <div class="mb-1 bg-light d-flex justify-content-center">
                            <div class="f-w-48 px-3 pt-3">
                                <img class="img-fluid" src="{{ asset('/assets/src/assets/images/products/product-3.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                            </div>
                        </div>
                        <div class="px-4 py-4 text-center">
                            <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                <!-- Review Stars Small-->
            <div class="rating position-relative d-table">
                <div class="position-absolute stars" style="width: 80%">
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                </div>
                <div class="stars">
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                </div>
            </div> <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                            </div>
                            <p class="mb-0 mx-4">Pusher Outdoor Jeans Black Women</p>
                            <p class="lead lh-1 m-0 fw-bolder mt-2 mb-3">$199.87</p>
                            <a href="{{ route('product.index') }}" class="fw-bolder text-link-border pb-1 fs-6">Full details <i class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SVG Shape Divider-->
            <div class="position-absolute z-index-50 text-white bottom-0 start-0 end-0">
                <svg class="align-self-end d-flex" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1283 53.25"><polygon fill="currentColor" points="0 53.25 1283 53.25 1283 0 0 53.25"/></svg></div>
            <!-- /SVG Shape Divider-->        </section>
        <!-- / Image Hotspot Banner-->



        <!-- Linked Product Carousels-->
        <section class="py-5" data-aos="fade-in">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 col-md-7" data-aos="fade-right">
                        <div class="m-0">
                            <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Hiking Essentials
                            </p>
                            <h2 class="display-5 fw-bold mb-6">Our Latest Must-Have Products</h2>
                            <div class="px-8 position-relative">

                                <!-- Swiper-->
                                <div class="swiper-container swiper-linked-carousel-small">
                                
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination-blocks mb-4">
                                        <div class="swiper-pagination-custom"></div>
                                    </div>
                                
                                    <div class="swiper-wrapper">
                                
                                        <!-- Swiper Slide-->
                                        <div class="swiper-slide overflow-hidden">
                                            <!-- Card-->
                                            <!-- Card Product-->
                                            <div class="card position-relative h-100 card-listing hover-trigger">
                                                <div class="card-header">
                                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                                        <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-12.jpg" alt="Bootstrap 5 Template by Pixel Rocket">
                                                    </picture>
                                                    <div class="card-actions">
                                                        <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                        <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                            <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                            <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                            <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 text-center">
                                                    <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                        <!-- Review Stars Small-->
                                            <div class="rating position-relative d-table">
                                                <div class="position-absolute stars" style="width: 80%">
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                </div>
                                                <div class="stars">
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                </div>
                                            </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                    </div>
                                                    <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                        href="{{ route('product.index') }}">Mens Outdoors T-Shirt</a>
                                                        <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                </div>
                                            </div>
                                            <!--/ Card Product-->
                                            <!--/ Card-->
                                        </div>
                                        <!-- / Swiper Slide-->
                                
                                        <!-- Swiper Slide-->
                                        <div class="swiper-slide overflow-hidden">
                                            <!-- Card-->
                                            <!-- Card Product-->
                                            <div class="card position-relative h-100 card-listing hover-trigger">
                                                <div class="card-header">
                                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                                        <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-1.jpg" alt="Bootstrap 5 Template by Pixel Rocket">
                                                    </picture>
                                                    <div class="card-actions">
                                                        <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                        <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                            <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                            <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                            <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 text-center">
                                                    <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                        <!-- Review Stars Small-->
                                            <div class="rating position-relative d-table">
                                                <div class="position-absolute stars" style="width: 80%">
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                </div>
                                                <div class="stars">
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                </div>
                                            </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                    </div>
                                                    <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                        href="{{ route('product.index') }}">Mens Flyroam Sneakers</a>
                                                        <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                </div>
                                            </div>
                                            <!--/ Card Product-->
                                            <!--/ Card-->
                                        </div>
                                        <!-- / Swiper Slide-->
                                
                                        <!-- Swiper Slide-->
                                        <div class="swiper-slide overflow-hidden">
                                            <!-- Card-->
                                            <!-- Card Product-->
                                            <div class="card position-relative h-100 card-listing hover-trigger">
                                                <div class="card-header">
                                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                                        <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-13.jpg') }}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                    </picture>
                                                    <div class="card-actions">
                                                        <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                        <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                            <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                            <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                            <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 text-center">
                                                    <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                        <!-- Review Stars Small-->
                                            <div class="rating position-relative d-table">
                                                <div class="position-absolute stars" style="width: 80%">
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                </div>
                                                <div class="stars">
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                </div>
                                            </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                    </div>
                                                    <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                        href="{{ route('product.index') }}">Mens Flyroam Sneakers</a>
                                                        <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                </div>
                                            </div>
                                            <!--/ Card Product-->
                                            <!--/ Card-->
                                        </div>
                                        <!-- / Swiper Slide-->
                                
                                    </div>
                                </div>                                <!-- /Swiper-->

                                <!-- Swiper Arrows -->
                                <div
                                    class="swiper-prev-linked position-absolute top-50 start-0 mt-n8 cursor-pointer transition-all opacity-50-hover">
                                    <i class="ri-arrow-left-s-line ri-2x"></i></div>
                                <div
                                    class="swiper-next-linked position-absolute top-50 end-0 me-3 mt-n8 cursor-pointer transition-all opacity-50-hover">
                                    <i class="ri-arrow-right-s-line ri-2x"></i></div>
                                <!-- / Swiper Arrows-->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-none d-md-flex" data-aos="fade-left">
                        <div class="w-100 h-100">

                            <!-- Swiper-->
                            <div class="swiper-container h-100 swiper-linked-carousel-large">
                            
                                <div class="swiper-wrapper h-100">
                            
                                    <!-- Swiper Slide-->
                                    <div class="swiper-slide">
                                        <div class="row g-3">
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-13.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Pocket Tee Rusty Red</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-14.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Mens T-Shirt Rusty</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-15.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Mens T-Shirt Phantom</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-16.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Heather T-Shirt</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Swiper Slide-->
                            
                                    <!-- Swiper Slide-->
                                    <div class="swiper-slide">
                                        <div class="row g-3">
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-12.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Mens Classic Hoodie</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-3.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Womens Essential Hoodie</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-4.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Sherpa Hoodie</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-5.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Mens Flyroam Hoodie</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Swiper Slide-->
                            
                                    <!-- Swiper Slide-->
                                    <div class="swiper-slide">
                                        <div class="row g-3">
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-12.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Mens Tee Faded Brown</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-14.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Mens Flyroam T-Shirt</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-15.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Little Brown T</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <!-- Card Product-->
                                                <div class="card position-relative h-100 card-listing hover-trigger">
                                                    <div class="card-header">
                                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-16.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                                        </picture>
                                                        <div class="card-actions">
                                                            <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                                <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                                <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body px-0 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                            <!-- Review Stars Small-->
                                                <div class="rating position-relative d-table">
                                                    <div class="position-absolute stars" style="width: 80%">
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                        <i class="ri-star-fill text-dark mr-1"></i>
                                                    </div>
                                                    <div class="stars">
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    </div>
                                                </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (1669)</span>
                                                        </div>
                                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                                            href="{{ route('product.index') }}">Mens Flyroam Sneakers</a>
                                                            <p class="fw-bolder m-0 mt-2">$1699.87</p>
                                                    </div>
                                                </div>
                                                <!--/ Card Product-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Swiper Slide-->
                            
                                </div>
                            </div>                            <!-- / Swiper-->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Linked Product Carousels-->


        <!-- Sale Banner -->
        <section class="position-relative my-5 my-md-7 my-lg-9 bg-dark" data-aos="fade-in">
            <!-- SVG Shape Divider-->
            <div class="position-absolute text-white z-index-50 top-0 end-0 start-0">
                <svg class="align-self-start d-flex" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1283 53.25"><polygon fill="currentColor" points="1283 0 0 0 0 53.25 1283 0"/></svg></div>
            <!-- /SVG Shape Divider-->
            
            <div class="py-7 py-lg-10">
                <div class="container text-white py-4 py-md-6">
                    <div class="row g-5 align-items-center">
                        <div class="col-12 col-lg-4 justify-content-center d-flex justify-content-lg-start"
                            data-aos="fade-right" data-aos-delay="250">
                            <h3 class="fs-1 fw-bold mb-0 lh-1"><i class="ri-timer-flash-line align-bottom"></i> Sale
                                Extended</h3>
                        </div>
                        <div class="col-12 col-lg-4 d-flex justify-content-center flex-column" data-aos="fade-up"
                            data-aos-delay="250">
                            <a href="{{ route('category.index') }}"
                                class="btn btn-orange btn-orange-chunky text-white my-1"><span>Shop
                                    Menswear</span></a>
                            <a href="{{ route('category.index') }}"
                                class="btn btn-orange btn-orange-chunky text-white my-1"><span>Shop
                                    Womenswear</span></a>
                            <a href="{{ route('category.index') }}"
                                class="btn btn-orange btn-orange-chunky text-white my-1"><span>Shop
                                    Kidswear</span></a>
                            <a href="{{ route('category.index') }}"
                                class="btn btn-orange btn-orange-chunky text-white my-1"><span>Shop
                                    Accessories</span></a>
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-end" data-aos="fade-left"
                            data-aos-delay="250">
                            <p class="lead fw-bolder">Discount applied to products at checkout.</p>
                            <a class="text-white fw-bolder text-link-border border-2 border-white align-self-start pb-1 transition-all opacity-50-hover"
                                href="#">Exclusions apply. Learn more <i
                                    class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SVG Shape Divider-->
            <div class="position-absolute z-index-50 text-white bottom-0 start-0 end-0">
                <svg class="align-self-end d-flex" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1283 53.25"><polygon fill="currentColor" points="0 53.25 1283 53.25 1283 0 0 53.25"/></svg></div>
            <!-- /SVG Shape Divider-->        </section>
        <!-- /Sale Banner -->

        <!-- Reviews-->
        <section>
            <div class="container" data-aos="fade-in">
                <h2 class="fs-1 fw-bold mb-3 text-center mb-5">Customer Reviews</h2>
                <div class="row g-3">
                    <div class="col-12 col-lg-4" data-aos="fade-left">
                        <div class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                            <p class="fw-bolder lead">Amazing Service!</p>
                            <p class="mb-3">I have shopped with them for a few years now. Very easy to select items, items always as
                                described. Never had to return any item. Good value.</p>
                            <small class="text-muted d-block mb-2 fw-bolder">John Doe, London</small>
                            <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 75%">
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                </div>
                                <div class="stars">
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                </div>
                            </div>        </div>
                    </div>
                    <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="150">
                        <div class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                            <p class="fw-bolder lead">Great Prices</p>
                            <p class="mb-3">Always find these guys competitive,and with a huge range of products,coupled with great
                                marketing,its difficult not to buy something.</p>
                            <small class="text-muted d-block mb-2 fw-bolder">Sally Smith, Dublin</small>
                            <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 75%">
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                </div>
                                <div class="stars">
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                </div>
                            </div>        </div>
                    </div>
                    <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="300">
                        <div class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                            <p class="fw-bolder lead">Fantastic Website</p>
                            <p class="mb-3">My package was missing an item but customer services resolved it immediately and i got
                                another delivery quite promptly.
                                Also the product was absolutely lovely</p>
                            <small class="text-muted d-block mb-2 fw-bolder">John Patrick, London</small>
                            <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 75%">
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                </div>
                                <div class="stars">
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                </div>
                            </div>        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-column mt-7 align-items-center">
                    <h3 class="mb-4 fw-bold fs-4">See what others have said</h3>
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="fs-3 fw-bold me-4">4.85 / 5</span>
                        <!-- Review Stars Medium-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 88%">
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                            </div>
                        </div>    </div>
                    <a href="#" class="btn btn-dark rounded-0 mt-4">Read 4,215 more reviews</a>
                </div>            </div>
        </section>
        <!-- /Reviews-->

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <!-- Footer-->
    <footer class="bg-dark mt-10  ">
    
        <!-- Footer socials-->
        <div class="bg-light py-4">
            <div class="container d-flex justify-content-center align-items-center py-2">
                <p class="lead fw-bolder mb-0 lh-1">Find us online</p>
                <ul class="list-unstyled d-flex justify-content-start align-items-center mb-0 ms-3 lh-1">
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-instagram-fill ri-xl lh-1"></i></a></li>
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-facebook-fill ri-xl lh-1"></i></a></li>
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-twitter-fill ri-xl lh-1"></i></a></li>
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-snapchat-fill ri-xl lh-1"></i></a></li>
                </ul>
            </div>
        </div>    
        <!-- / Footer socials-->
    
        <!-- Instagram Display-->
        <div class="container pt-8">
            <div class="row g-2">
                <div class="d-none d-md-block col-md-4" data-aos="fade-in" data-aos-delay="150">
                    <picture>
                        <img class="img-fluid" src="{{ asset('/assets/src/assets/images/instagram/instagram-1.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                    </picture>
                </div>
                <div class="col-12 col-md-8" data-aos="fade-in" data-aos-delay="300">
                    <div class="row g-2">
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="{{ asset('/assets/src/assets/images/instagram/instagram-2.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="{{ asset('/assets/src/assets/images/instagram/instagram-3.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="{{ asset('/assets/src/assets/images/instagram/instagram-4.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="{{ asset('/assets/src/assets/images/instagram/instagram-5.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="{{ asset('assets/src/assets/images/instagram/instagram-6.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="{{ asset('/assets/src/assets/images/instagram/instagram-7.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="{{ asset('/assets/src/assets/images/instagram/instagram-8.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="{{ asset('/assets/src/assets/images/instagram/instagram-9.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <p class="text-muted m-0">Follow us on Instragram <span class="text-lowercase">@Alpine</span></p>
                <a class="text-link-border fw-bolder m-0 text-white" href="#">More On Instagram <i
                    class="ri-external-link-line align-bottom"></i></a>
            </div>
        </div>
        <!-- Instagram Display-->
        
        <!-- Info Bar-->
        <div class="container mt-7">
            <div class="row">
            
                <!-- Info box-->
                <div class="col-12 col-md-4 mb-3 mb-xxl-0 text-white" data-aos="fade-left">
                    <div class="border-white-opacity border-2 p-4 d-flex flex-column flex-lg-row justify-content-start align-items-start h-100">
                        <i class="ri-questionnaire-line ri-lg mb-3 mb-lg-0"></i>
                        <div class="ms-lg-4">
                            <p class="mb-1 lh-1 fw-bold">Customer Services</p>
                            <small class="text-muted"><a class="text-muted" href="#">Click here</a> to chat with our support team</small>
                        </div>
                    </div>
                </div>
                <!-- / Info box-->
            
                <!-- Info box-->
                <div class="col-12 col-md-4 mb-3 mb-xxl-0 text-white" data-aos="fade-left" data-aos-delay="250">
                    <div class="border-white-opacity border-2 p-4 d-flex flex-column flex-lg-row justify-content-start align-items-start h-100">
                        <i class="ri-truck-line ri-lg mb-3 mb-lg-0"></i>
                        <div class="ms-lg-4">
                            <p class="mb-1 lh-1 fw-bold">Free Delivery</p>
                            <small class="text-muted">Free standard delivery on all orders over $100</small>
                        </div>
                    </div>
                </div>
                <!-- / Info box-->
                
                <!-- Info box-->
                <div class="col-12 col-md-4 mb-3 mb-xxl-0 text-white" data-aos="fade-left" data-aos-delay="500">
                    <div class="border-white-opacity border-2 p-4 d-flex flex-column flex-lg-row justify-content-start align-items-start h-100">
                        <i class="ri-repeat-line ri-lg mb-3 mb-lg-0"></i>
                        <div class="ms-lg-4">
                            <p class="mb-1 lh-1 fw-bold">Returns</p>
                            <small class="text-muted">30 day money-back returns if you change your mind</small>
                        </div>
                    </div>
                </div>
                <!-- / Info box-->    
            
            </div>    </div>
        <!-- / Info Bar-->     
    
        <!-- Menus & Newsletter-->
        <div class="border-top-white-opacity py-7 mt-7 text-white">
            <div class="container" data-aos="fade-in">
                <div class="row my-4 flex-wrap">
        
                    <!-- Footer Nav-->
                    <nav class="col-6 col-md mb-4 mb-md-0">
                        <h6 class="mb-4 fw-bolder fs-6">Shop</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{ route('category.index') }}">Menswear</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{ route('category.index') }}">Womenswear</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{ route('category.index') }}">Kidswear</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{ route('category.index') }}">New Arrivals</a></li>
                        </ul>
                    </nav>
                    <!-- /Footer Nav-->
        
                    <!-- Footer Nav-->
                    <nav class="col-6 col-md mb-4 mb-md-0">
                        <h6 class="mb-4 fw-bolder fs-6">Company</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">About Us</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">Our Blog</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">FAQs</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- /Footer Nav-->
        
                    <!-- Footer Nav-->
                    <nav class="d-none d-md-block col-md">
                        <h6 class="mb-4 fw-bolder fs-6">Navigation</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">Register</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">Cart</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">Checkout</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">Account</a></li>
                        </ul>
                    </nav>
                    <!-- /Footer Nav-->
        
                    <!-- Footer Contact-->
                    <div class="col-12 col-md-5">
                        <h6 class="mb-4 fw-bolder fs-6">Join Our Newsletter</h6>
                        <p class="opacity-75">Sign up to our newsletter and we'll email you a code worth 15%
                            off your first order. By subscribing to our mailing list you agree to our terms and conditions.</p>
                            <form
                            class="bg-white d-flex justify-content-start align-items-center border-dark-focus-within transition-all mt-4">
                            <div class="input-group m-0">
                                <input type="text" class="form-control d-flex flex-grow-1 border-0 bg-transparent py-3"
                                    placeholder="Enter your email" aria-label="Enter your email">
                                <span class="input-group-text bg-transparent border-0"><i
                                        class="ri-arrow-right-line align-middle"></i></span>
                            </div>
                        </form>
                    </div>
                    <!-- /Footer Contact-->
        
                </div>
                <div
                    class="border-top-white-opacity justify-content-between flex-column flex-md-row align-items-center d-flex pt-6 mt-6 px-0">
                    <p class="small opacity-75">&copy; 2021 Alpine All Rights Reserved. Template by <a
                            class="text-white" href="https://www.pixelrocket.store">Pixel Rocket</a></p>
                    <nav>
                        <ul class="list-unstyled">
                            <li class="d-inline-block me-1 bg-white rounded px-2 pt-1"><i class="pi pi-paypal pi-sm"></i></li>
                            <li class="d-inline-block me-1 bg-white rounded px-2 pt-1"><i class="pi pi-mastercard pi-sm"></i>
                            </li>
                            <li class="d-inline-block me-1 bg-white rounded px-2 pt-1"><i
                                    class="pi pi-american-express pi-sm"></i></li>
                            <li class="d-inline-block bg-white rounded px-2 pt-1"><i class="pi pi-visa pi-sm"></i></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Menus & Newsletter-->
    
    </footer>
    <!-- / Footer-->    <!-- / Footer-->


    <!-- Offcanvas Imports-->
    <!-- Cart Offcanvas-->
    <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasCart">
      <div class="offcanvas-header d-flex align-items-center">
        <h5 class="offcanvas-title" id="offcanvasCartLabel">Your Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="d-flex flex-column justify-content-between w-100 h-100">
          <div>
    
            <div class="mt-4 mb-5">
              <p class="mb-2 fs-6"><i class="ri-truck-line align-bottom me-2"></i> <span class="fw-bolder">$22</span> away
                from free delivery</p>
              <div class="progress f-h-1">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
    
            <!-- Cart Product-->
            <div class="row mx-0 pb-4 mb-4 border-bottom">
              <div class="col-3">
                <picture class="d-block bg-light">
                  <img class="img-fluid" src="{{ asset('assets/src/assets/images/products/product-1.jpg')}}"
                    alt="Bootstrap 5 Template by Pixel Rocket">
                </picture>
              </div>
              <div class="col-9">
                <div>
                  <h6 class="justify-content-between d-flex align-items-start mb-2">
                    Mens StormBreaker Jacket
                    <i class="ri-close-line"></i>
                  </h6>
                  <small class="d-block text-muted fw-bolder">Size: Medium</small>
                  <small class="d-block text-muted fw-bolder">Qty: 1</small>
                </div>
                <p class="fw-bolder text-end m-0">$85.00</p>
              </div>
            </div>
    
            <!-- Cart Product-->
            <div class="row mx-0 pb-4 mb-4 border-bottom">
              <div class="col-3">
                <picture class="d-block bg-light">
                  <img class="img-fluid" src="{{ asset('assets/src//assets/images/products/product-2.jpg')}}"
                    alt="Bootstrap 5 Template by Pixel Rocket">
                </picture>
              </div>
              <div class="col-9">
                <div>
                  <h6 class="justify-content-between d-flex align-items-start mb-2">
                    Mens Torrent Terrain Jacket
                    <i class="ri-close-line"></i>
                  </h6>
                  <small class="d-block text-muted fw-bolder">Size: Medium</small>
                  <small class="d-block text-muted fw-bolder">Qty: 1</small>
                </div>
                <p class="fw-bolder text-end m-0">$99.00</p>
              </div>
            </div>
    
          </div>
          <div class="border-top pt-3">
            <div class="d-flex justify-content-between align-items-center">
              <p class="m-0 fw-bolder">Subtotal</p>
              <p class="m-0 fw-bolder">$233.33</p>
            </div>
            <a href="./checkout.html"
              class="btn btn-orange btn-orange-chunky mt-5 mb-2 d-block text-center">Checkout</a>
            <a href="./cart.html"
              class="btn btn-dark fw-bolder d-block text-center transition-all opacity-50-hover">View Cart</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Filters Offcanvas-->
    <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasFilters">
      <div class="offcanvas-header d-flex align-items-center">
        <h5 class="offcanvas-title" id="offcanvasFiltersLabel">Category Filters</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="d-flex flex-column justify-content-between w-100 h-100">
    
          <!-- Filters-->
          <div>
            <!-- Filter Category -->
            <div class="mb-4">
              <h2 class="mb-4 fs-6 mt-2 fw-bolder">Jacket Category</h2>
              <nav>
                <ul class="list-unstyled list-default-text">
                  <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Waterproof Jackets</span> <span class="text-muted ms-4">(21)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Down Jackets</span> <span class="text-muted ms-4">(13)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Windproof Jackets</span> <span class="text-muted ms-4">(18)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Hiking Jackets</span> <span class="text-muted ms-4">(25)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Climbing Jackets</span> <span class="text-muted ms-4">(11)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Trekking Jackets</span> <span class="text-muted ms-4">(19)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Allround Jackets</span> <span class="text-muted ms-4">(24)</span></a>
                  </li>            </ul>
              </nav>
            </div>
            <!-- / Filter Category-->
    
            <!-- Price Filter -->
            <div class="py-4 widget-filter widget-filter-price border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-price" role="button" aria-expanded="false"
                aria-controls="filter-modal-price">
                Price
              </a>
              <div id="filter-modal-price" class="collapse">
                <div class="filter-price mt-6"></div>
                <div class="d-flex justify-content-between align-items-center mt-7">
                    <div class="input-group mb-0 me-2 border">
                        <span class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">$</span>
                        <input type="number" min="00" max="1000" step="1" class="filter-min form-control-sm border flex-grow-1 text-muted border-0">
                    </div>   
                    <div class="input-group mb-0 ms-2 border">
                        <span class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">$</span>
                        <input type="number" min="00" max="1000" step="1" class="filter-max form-control-sm flex-grow-1 text-muted border-0">
                    </div>                
                </div>          </div>
            </div>
            <!-- / Price Filter -->
    
            <!-- Brands Filter -->
            <div class="py-4 widget-filter border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-brands" role="button" aria-expanded="false"
                aria-controls="filter-modal-brands">
                Brands
              </a>
              <div id="filter-modal-brands" class="collapse">
                <div class="input-group my-3 py-1">
                  <input type="text" class="form-control py-2 filter-search rounded" placeholder="Search"
                    aria-label="Search">
                  <span class="input-group-text bg-transparent p-2 position-absolute top-2 end-0 border-0 z-index-20"><i
                      class="ri-search-2-line text-muted"></i></span>
                </div>
                <div class="simplebar-wrapper">
                  <div class="filter-options" data-pixr-simplebar>
                    <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-0">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-0">Adidas  <span
                                class="text-muted">(21)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-1">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-1">Asics  <span
                                class="text-muted">(13)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-2">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-2">Canterbury  <span
                                class="text-muted">(18)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-3">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-3">Converse  <span
                                class="text-muted">(25)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-4">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-4">Donnay  <span
                                class="text-muted">(11)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-5">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-5">Nike  <span
                                class="text-muted">(19)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-6">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-6">Millet  <span
                                class="text-muted">(24)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-7">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-7">Puma  <span
                                class="text-muted">(11)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-8">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-8">Reebok  <span
                                class="text-muted">(19)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-9">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-9">Under Armour  <span
                                class="text-muted">(24)</span></label>
                    </div>              </div>
                </div>
              </div>
            </div>
            <!-- / Brands Filter -->
    
            <!-- Type Filter -->
            <div class="py-4 widget-filter border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-type" role="button" aria-expanded="false"
                aria-controls="filter-modal-type">
                Type
              </a>
              <div id="filter-modal-type" class="collapse">
                <div class="input-group my-3 py-1">
                  <input type="text" class="form-control py-2 filter-search rounded" placeholder="Search"
                    aria-label="Search">
                  <span class="input-group-text bg-transparent p-2 position-absolute top-2 end-0 border-0 z-index-20"><i
                      class="ri-search-2-line text-muted"></i></span>
                </div>
                <div class="filter-options">
                  <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-0">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-0">Slip On </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-1">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-1">Strap Up </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-2">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-2">Zip Up </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-3">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-3">Toggle </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-4">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-4">Auto </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-5">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-5">Click </label>
                  </div>            </div>
              </div>
            </div>
            <!-- / Type Filter -->
    
            <!-- Sizes Filter -->
            <div class="py-4 widget-filter border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-sizes" role="button" aria-expanded="false"
                aria-controls="filter-modal-sizes">
                Sizes
              </a>
              <div id="filter-modal-sizes" class="collapse">
                <div class="filter-options mt-3">
                  <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-0">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-0">6.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-1">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-1">7</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-2">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-2">7.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-3">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-3">8</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-4">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-4">8.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-5">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-5">9</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-6">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-6">9.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-7">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-7">10</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-8">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-8">10.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-9">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-9">11</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-10">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-10">11.5</label>
                  </div>            </div>
              </div>
            </div>
            <!-- / Sizes Filter -->
    
            <!-- Colour Filter -->
            <div class="py-4 widget-filter border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-colour" role="button" aria-expanded="false"
                aria-controls="filter-modal-colour">
                Colour
              </a>
              <div id="filter-modal-colour" class="collapse">
                <div class="filter-options mt-3">
                  <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-primary">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-0">
                      <label class="form-check-label" for="filter-colours-modal-0"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-success">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-1">
                      <label class="form-check-label" for="filter-colours-modal-1"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-danger">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-2">
                      <label class="form-check-label" for="filter-colours-modal-2"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-info">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-3">
                      <label class="form-check-label" for="filter-colours-modal-3"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-warning">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-4">
                      <label class="form-check-label" for="filter-colours-modal-4"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-dark">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-5">
                      <label class="form-check-label" for="filter-colours-modal-5"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-secondary">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-6">
                      <label class="form-check-label" for="filter-colours-modal-6"></label>
                  </div>            </div>
              </div>
            </div>
            <!-- / Colour Filter -->
          </div>
          <!-- / Filters-->
    
          <!-- Filter Button-->
          <div class="border-top pt-3">
            <a href="#" class="btn btn-dark mt-2 d-block hover-lift-sm hover-boxshadow">Done</a>
          </div>
          <!-- /Filter Button-->
        </div>
      </div>
    </div>
    <!-- Review Offcanvas-->
    <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasReview">
      <div class="offcanvas-header d-flex align-items-center">
        <h5 class="offcanvas-title" id="offcanvasReviewLabel">Leave A Review</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <!-- Review Form -->
        <form>
          <div class="form-group mb-3 mt-2">
            <label class="form-label" for="formReviewName">Your Name</label>
            <input type="text" class="form-control" id="formReviewName" placeholder="Your Name">
          </div>
          <div class="form-group mb-3 mt-2">
            <label class="form-label" for="formReviewEmail">Your Email</label>
            <input type="text" class="form-control" id="formReviewEmail" placeholder="Your Email">
          </div>
          <div class="form-group mb-3 mt-2">
            <label class="form-label" for="formReviewTitle">Your Review Title</label>
            <input type="text" class="form-control" id="formReviewTitle" placeholder="Review Title">
          </div>
          <div class="form-group mb-3 mt-2">
            <label class="form-label" for="formReviewReview">Your Review</label>
            <textarea class="form-control" name="formReviewReview" id="formReviewReview" cols="30" rows="5"
              placeholder="Your Review"></textarea>
          </div>
          <button type="submit" class="btn btn-dark hover-lift hover-boxshadow">Submit Review</button>
        </form>
        <!-- / Review Form-->
      </div>
    </div>
    <!-- Search Overlay-->
    <section class="search-overlay">
        <div class="container search-container">
            <div class="py-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead lh-1 m-0 fw-bold">What are you looking for?</p>
                    <button class="btn btn-light btn-close-search"><i class="ri-close-circle-line align-bottom"></i> Close search</button>
                </div>
                <form>
                    <input type="text" class="form-control" id="searchForm" placeholder="Search by product or category name...">             
                </form>
                <div class="my-5">
                    <p class="lead fw-bolder">2 results found for <span class="fw-bold">"Waterproof Jacket"</span></p>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <!-- Card Product-->
                            <div class="card position-relative h-100 card-listing hover-trigger">
                                <div class="card-header">
                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                        <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-1.jpg')}}" alt="Bootstrap 5 Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-actions">
                                        <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                        <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                            <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 text-center">
                                    <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                        <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 80%">
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                </div>
                                <div class="stars">
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                </div>
                            </div> <span class="small fw-bolder ms-2 text-muted"> 4.2 (123)</span>
                                    </div>
                                    <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                        href="{{ route('product.index') }}">Mens Pennie II Waterproof Jacket</a>
                                        <p class="fw-bolder m-0 mt-2">$325.66</p>
                                </div>
                            </div>
                            <!--/ Card Product-->
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Card Product-->
                            <div class="card position-relative h-100 card-listing hover-trigger">
                                <div class="card-header">
                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                        <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/src/assets/images/products/product-2.jpg') }}" alt="Bootstrap 5 Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-actions">
                                        <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                        <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                            <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 text-center">
                                    <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                        <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 70%">
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                </div>
                                <div class="stars">
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                </div>
                            </div> <span class="small fw-bolder ms-2 text-muted"> 4.5 (1289)</span>
                                    </div>
                                    <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                        href="{{ route('product.index') }}">Mens Storm Waterproof Jacket</a>
                                        <p class="fw-bolder m-0 mt-2">$499.99</p>
                                </div>
                            </div>
                            <!--/ Card Product-->
                        </div>
                    </div>
                </div>
    
                <div class="bg-dark p-4 text-white">
                    <p class="lead m-0">Didn't find what you are looking for? <a class="transition-all opacity-50-hover text-white text-link-border border-white pb-1 border-2" href="#">Send us a message.</a></p>
                </div>
            </div>
        </div>
    </section>    
    <!-- Theme JS -->
    <!-- Vendor JS -->
    
    @include('layouts.script')

    
@endsection