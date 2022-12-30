<div id="just_arrived">
    <div class="row">
        <div class="col-md-4">
            <h3 class="heading-title">Products that just arrived</h3>
        </div>
    </div>
    <div class="promotionalslider_wrapper just_arrived_wrapper">
        @foreach($lastVisitedProducts as $product)
            <div class="promotionalslider_single">
                <a href="#">
                    <section style="background-image: url('{{ $product->thumb_image }}')"></section>
                    <p title="{{ $product->name }}">{{ substr($product->name, 0, 6) . '...' }}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>
