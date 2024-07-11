<div class="row g-5">
    <!-- Images Section-->
    <div class="col-12 col-lg-7">
        <div class="row g-1">
            <div class="swiper-container gallery-thumbs-vertical col-2 pb-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-light bg-light h-auto">
                        <picture>
                            <img class="img-fluid mx-auto d-table" src="{{ $product->image }}"
                                alt="Bootstrap 5 Template by Pixel Rocket">
                        </picture>
                    </div>

                </div>
            </div>
            <div class="swiper-container gallery-top-vertical col-10">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-white h-auto">
                        <picture>
                            <img class="img-fluid d-table mx-auto" src="{{ $product->image }}"
                                alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                        </picture>
                    </div>
                    {{-- <div class="swiper-slide bg-white h-auto">
                        <picture>
                            <img class="img-fluid d-table mx-auto" src="./assets/images/products/product-5b.jpg"
                                alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                        </picture>
                    </div>
                    <div class="swiper-slide bg-white h-auto">
                        <picture>
                            <img class="img-fluid d-table mx-auto" src="./assets/images/products/product-5c.jpg"
                                alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                        </picture>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- /Images Section-->

    <!-- Product Info Section-->

   @include('compo.product.product-info')

    <!-- / Product Info Section-->
</div>
