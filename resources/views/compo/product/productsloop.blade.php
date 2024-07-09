
@php
    $product = \App\Models\Product::all();
@endphp

@foreach ($product as $product)

<div class="swiper-slide d-flex h-auto">

  <!-- Card Product-->
  <div class="card position-relative h-100 card-listing hover-trigger">
      <div class="card-header">
          <picture class="position-relative overflow-hidden d-block bg-light">
              <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ $product->image}}" alt="">
          </picture>
              <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                  <img class="w-100 img-fluid" title="" src="{{ $product->image}}" alt="">
              </picture>
          <div class="card-actions">
              <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
              <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">

                @foreach ($product->variants as $variant)
                {{-- <button type="submit" name="size" value="{{ $variant->name }}" class="btn btn-outline-dark btn-sm mx-2">{{ $variant->name }}</button> --}}
            {{-- <a href="{{ route('product.show', ['product' => $product->slug]) }}?size={{ $variant->name }}"  class="btn btn-outline-dark btn-sm mx-2">{{ $variant->name }}</a> --}}

            <a href="{{ route('product.show', ['product' => $product->slug, 'variant' => $variant->name] )}}">

                <button type="button"  class="btn btn-outline-dark btn-sm mx-2">{{ $variant->name }}</button>
            </a>


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
  </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (456)</span>
          </div>
          {{-- <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
              href="{{ route('product.show' , $product->slug )}}">{{ $product->name }}</a>
              <p class="fw-bolder m-0 mt-2">{{ $product->price }}</p> --}}
              {{-- @foreach ($product->variants as $variant)

              <a href="{{ route('product.show', ['product' => $product->slug, 'size' => $variant->name ]) }}" >
                <button type="button"  class="btn btn-outline-dark btn-sm mx-2">{{ $size }}</button>
            </a>

            @endforeach --}}
      </div>
  </div>
  <!--/ Card Product-->

</div>

@endforeach
