<div class="col-12 col-lg-6 col-xl-5">

    <div class="bg-dark p-4 p-md-5 text-white">
        <h3 class="fs-3 fw-bold m-0 text-center">Order Summary</h3>
        <div class="py-3 border-bottom-white-opacity">
            <div class="d-flex justify-content-between align-items-center mb-2 flex-column flex-sm-row">
                <p class="m-0 fw-bolder fs-6">Subtotal</p>
                <p class="m-0 fs-6 fw-bolder">$422.99</p>
            </div>
            <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row mt-3 m-sm-0">
                <p class="m-0 fw-bolder fs-6">Shipping</p>
                <span class="text-white opacity-75 small">Will be set at checkout</span>
            </div>
        </div>
        <div class="py-3 border-bottom-white-opacity">
            <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row">
                <div>
                    <p class="m-0 fs-5 fw-bold">Grand Total</p>
                    <span class="text-white opacity-75 small">Inc $45.89 sales tax</span>
                </div>
                <p class="mt-3 m-sm-0 fs-5 fw-bold">$422.99</p>
            </div>
        </div>

        <!-- Coupon Code-->

        @include('compo.cart.coupon')
        <!-- / Coupon Code-->

        <!-- Checkout Button-->

        @include('compo.cart.checkout')
        <!-- Checkout Button-->
    </div>

    <!-- Payment Icons-->
    @include('compo.cart.payment')
    <!-- / Payment Icons-->
</div>
