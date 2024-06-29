@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- / Navbar-->


    <!-- Main Section-->

    <!-- Page Content Goes Here -->

    <!-- Product Top-->

    <!-- / Product Top-->

    <section class="mt-5 ">
        <!-- Page Content Goes Here -->

        <!-- Product Top-->
        <section class="container">

            <!-- Breadcrumbs-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Activities</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Clothing</li>
                </ol>
            </nav> <!-- /Breadcrumbs-->

            @include('components.product.product-image-section')

        </section>
        <!-- / Product Top-->

        <section>

            <!-- Product Tabs-->
            <div class="mt-7 pt-5 border-top">
                <div class="container">
                    <!-- Tab Nav-->
                    <ul class="nav justify-content-center nav-tabs nav-tabs-border mb-4" id="myTab" role="tablist">
                        <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                            <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0 active" id="details-tab"
                                data-bs-toggle="tab" href="#details" role="tab" aria-controls="details"
                                aria-selected="true">The Details</a>
                        </li>
                        <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                            <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="reviews-tab"
                                data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                aria-selected="false">Reviews</a>
                        </li>
                        <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                            <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="delivery-tab"
                                data-bs-toggle="tab" href="#delivery" role="tab" aria-controls="delivery"
                                aria-selected="false">Delivery</a>
                        </li>
                        <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                            <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="returns-tab"
                                data-bs-toggle="tab" href="#returns" role="tab" aria-controls="returns"
                                aria-selected="false">Returns</a>
                        </li>
                    </ul>
                    <!-- / Tab Nav-->

                    <!-- Tab Content-->
                    <div class="tab-content" id="myTabContent">

                        <!-- Tab Details Content-->
                       
                        @include('components.product.product-detail')
                        <!-- Tab Details Content-->

                        <!-- Review Tab Content-->
                       
                        @include('components.product.product-review')

                        <!-- / Review Tab Content-->

                        <!-- Delivery Tab Content-->
                       
                        @include('components.product.product-delivery')

                        <!-- / Delivery Tab Content-->

                        <!-- Returns Tab Content-->
                       
                        @include('components.product.product-return')

                        <!-- / Returns Tab Content-->

                    </div>
                    <!-- / Tab Content-->
                </div>
            </div>
            <!-- / Product Tabs-->

        </section>

        <!-- Related Products-->
       @include('components.product.related-product')
        <!--/ Related Products-->


        <!-- /Page Content -->
    </section>


    <!-- / Main Section-->

    <!-- Footer -->
    <!-- Footer-->

    @include('layouts.footer')

    <!-- / Footer--> <!-- / Footer-->



    <!-- Page Content Goes Here -->

    <!-- Product Top-->

    <!-- / Product Top-->


    @include('components.search')


    <!-- Theme JS -->
    <!-- Vendor JS -->

    @include('layouts.script')
     
@endsection
