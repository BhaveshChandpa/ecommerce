<div class="border-top mt-5 pt-5">
    <p class="lead fw-bolder">Related Categories</p>
    <div class="d-flex flex-wrap justify-content-start align-items-center">
        
        
        @foreach ($categories as $category)
            
        <a class="btn btn-sm btn-outline-dark rounded-pill me-2 mb-2 mb-md-0 text-white-hover"
            href="#">{{ $category->name }}</a>

        @endforeach

    </div>
</div>