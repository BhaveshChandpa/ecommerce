@extends('layout.app')

@section('content')
    <!-- Navbar -->
    <!-- Navbar -->
    @include('layout.navbar')

    <!-- / Navbar--> <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 ">

        <!-- Category Top Banner -->

        @include('compo.category.category-top-banner')
        <!-- Category Top Banner -->

        <div class="container">

            <div class="row">

                <!-- Category Aside/Sidebar -->

                @include('compo.category.category-sidebar')

                <!-- / Category Aside/Sidebar -->

                <!-- Category Products-->
                <div class="col-12 col-lg-9">

                    <!-- Top Toolbar-->
                    <div class="mb-4 d-md-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start align-items-center flex-grow-1 mb-4 mb-md-0">
                            <small class="d-inline-block fw-bolder">Filtered by:</small>
                            <ul class="list-unstyled d-inline-block mb-0 ms-2">
                                <li class="bg-light py-1 fw-bolder px-2 cursor-pointer d-inline-block me-1 small">Type: Slip
                                    On <i class="ri-close-circle-line align-bottom ms-1"></i></li>
                            </ul>
                            <span
                                class="fw-bolder text-muted-hover text-decoration-underline ms-2 cursor-pointer small">Clear
                                All</span>
                        </div>
                        <div class="d-flex align-items-center flex-column flex-md-row">
                            <!-- Filter Trigger-->
                            <button
                                class="btn bg-light p-3 d-flex d-lg-none align-items-center fs-xs fw-bold text-uppercase w-100 mb-2 mb-md-0 w-md-auto"
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
                                aria-controls="offcanvasFilters">
                                <i class="ri-equalizer-line me-2"></i> Filters
                            </button>
                            <!-- / Filter Trigger-->
                            <div class="dropdown ms-md-2 lh-1 p-3 bg-light w-100 mb-2 mb-md-0 w-md-auto">
                                <p class="fs-xs fw-bold text-uppercase text-muted-hover p-0 m-0" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Sort By <i
                                        class="ri-arrow-drop-down-line ri-lg align-bottom"></i></p>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                            href="#">Price: Hi Low</a></li>
                                    <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                            href="#">Price: Low Hi</a></li>
                                    <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                            href="#">Name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <!-- / Top Toolbar-->

                    <!-- Products-->
                    <div class="row g-4 mb-5">
                         @foreach ($products as $product)
                            <div class="col-12 col-sm-6 col-md-4">
                                {{-- subcategoryies loop --}}

                                <!-- Card Product-->
                                <div class="card position-relative h-100 card-listing hover-trigger">
                                    <div class="card-header">
                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                            <img class="w-100 img-fluid position-relative z-index-10" title=""
                                                src="{{ $product->image }}" alt="">
                                        </picture>
                                        <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                            <img class="w-100 img-fluid" title=""
                                                src="{{ asset('assets/src/assets/images/products/product-1b.jpg') }}"
                                                alt="">
                                        </picture>
                                        <div class="card-actions">
                                            <span
                                                class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick
                                                Add</span>
                                            <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">

                                                @foreach ($product->variants as $variant)
                                                    <button
                                                        class="btn btn-outline-dark btn-sm mx-2">{{ $variant->name }}</button>
                                                @endforeach


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
                                            </div>
                                            <span class="small fw-bolder ms-2 text-muted"> 4.7 (456)</span>
                                        </div>
                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                            href="{{ route('product.index') }}">{{ $product->name }}</a>
                                        <p class="fw-bolder m-0 mt-2">${{ $product->price }}</p>
                                    </div>


                                </div>

                                <!--/ Card Product-->

                            </div>
                        @endforeach
                        {{-- <div class="d-none d-md-flex col-md-8">
                            <div class="w-100 h-100 position-relative">
                                <div class="position-absolute w-50 h-100 start-0 bottom-0 top-0 bg-pos-center-center bg-img-cover"
                                    style="background-image: url(./assets/images/banners/banner-3.jpg);">
                                </div>
                                <div
                                    class="position-absolute w-50 h-100 bg-light end-0 top-0 bottom-0 d-flex justify-content-center align-items-center">
                                    <div class="px-4 text-center">
                                        <h4 class="fs-4 fw-bold mb-4">Built for adventure</h4>
                                        <p class="mb-4">The perfect grab-and-go layer for every hiking adventure</p>
                                        <a href="#" class="text-link-border border-2 pb-1 fw-bolder">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                   </div>
                    <!-- / Products-->

                    <!-- Pagiation-->
                    <!-- Pagination-->
                    <nav class="border-top mt-5 pt-5 d-flex justify-content-between align-items-center"
                        aria-label="Category Pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="ri-arrow-left-line align-bottom"></i> Prev</a></li>
                        </ul>
                        <ul class="pagination">
                            <li class="page-item active mx-1"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mx-1"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mx-1"><a class="page-link" href="#">3</a></li>
                        </ul>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Next <i
                                        class="ri-arrow-right-line align-bottom"></i></a></li>
                        </ul>
                    </nav> <!-- / Pagination-->

                    <!-- Related Categories-->

                    @include('compo.category.category-related')

                    <!-- Related Categories-->

                </div>
                <!-- / Category Products-->

            </div>
        </div>

    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <!-- Footer-->
    @include('layout.footer')

    <!-- / Footer-->
    <!-- Offcanvas Imports-->
    <!-- Cart Offcanvas-->

        @include('compo.category.category-cart')

    <!-- Filters Offcanvas-->
    <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasFilters">
        <div class="offcanvas-header d-flex align-items-center">
            <h5 class="offcanvas-title" id="offcanvasFiltersLabel">Category Filters</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex flex-column justify-content-between w-100 h-100">

                <!-- Filters-->
                {{-- <div>
                    <!-- Filter Category -->
                        @include('compo.category.filter.category')
                    <!-- / Filter Category-->

                    <!-- Price Filter -->
                    @include('compo.category.filter.price')
                    <!-- / Price Filter -->

                    <!-- Brands Filter -->
                    @include('compo.category.filter.brand')

                    <!-- / Brands Filter -->

                    <!-- Type Filter -->
                    @include('compo.category.filter.type')

                    <!-- / Type Filter -->

                    <!-- Sizes Filter -->
                    @include('compo.category.filter.size')

                    <!-- / Sizes Filter -->

                    <!-- Colour Filter -->

                    @include('compo.category.filter.color')


                    <!-- / Colour Filter -->
                </div> --}}
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

    @include('compo.search')

    <!-- Theme JS -->
    <!-- Vendor JS -->

    @include('layout.script')
@endsection
