<div id="most_viewed_products">
    <div class="row">
        <div class="col-md-4">
            <h3 class="heading-title">The most viewed products</h3>
        </div>
    </div>
    <div class="promotionalslider_wrapper most_viewed_products_wrapper">
        @foreach($mostViewedProducts as $product)
            <div class="promotionalslider_single">
                <a href="#">
                    <section style="background-image: url('{{ $product->thumb_image }}')"></section>
                    <p title="{{ $product->name }}">{{ substr($product->name, 0, 6) . '...' }}</p>
                </a>
            </div>

        @endforeach
    </div>
</div>
