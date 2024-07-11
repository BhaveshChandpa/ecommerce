<div class="d-flex justify-content-between mt-3">

    <form action="{{ route('carts.store') }}" method="post">
        @csrf

 
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="hidden" name="variant" value="{{$variant}}">
        <button class="btn btn-dark btn-dark-chunky flex-grow-1 me-2 text-white" type="submit">Add To Cart</button>
        <button class="btn btn-orange btn-orange-chunky"><i class="ri-heart-line"></i></button>

    </form> 
</div>

