<div class="container my-8">

    <h3 class="fs-4 fw-bold mb-5 text-center">You May Also Like</h3>
    <!-- Swiper Latest -->

    <div class="swiper-container overflow-visible" data-swiper
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


            {{-- product loop --}}

            {{-- {{ $product->name }} --}}
            @include('compo.product.productsloop')


            <div class="swiper-slide d-flex h-auto justify-content-center align-items-center">
                <a href="./category.html"
                    class="d-flex text-decoration-none flex-column justify-content-center align-items-center">
                    <span class="btn btn-dark btn-icon mb-3"><i class="ri-arrow-right-line ri-lg lh-1"></i></span>
                    <span class="lead fw-bolder">See All</span>
                </a>
            </div>
        </div>


        <!-- Buttons-->
        <div
            class="swiper-btn swiper-disabled-hide swiper-prev swiper-btn-side btn-icon bg-dark text-white ms-3 shadow-lg mt-n5 ms-n4">
            <i class="ri-arrow-left-s-line ri-lg"></i></div>
        <div
            class="swiper-btn swiper-disabled-hide swiper-next swiper-btn-side swiper-btn-side-right btn-icon bg-dark text-white me-n4 shadow-lg mt-n5">
            <i class="ri-arrow-right-s-line ri-lg"></i></div>

        <!-- Add Scrollbar -->
        <div class="swiper-scrollbar"></div>

    </div>
    <!-- / Swiper Latest-->
</div>