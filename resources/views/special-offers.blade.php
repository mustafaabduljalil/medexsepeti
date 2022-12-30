<div id="special_offers">
    <div class="row">
        <div class="col-md-2">
            <h3 class="heading-title">Special Offers</h3>
        </div>
    </div>
    <div class="promotionalslider_wrapper special_offers_wrapper">
        @foreach($offersProducts as $product)
            <div class="promotionalslider_single">
                <a href="#">
                    <section style="background-image: url('{{ $product->thumb_image }}')"></section>
                    <p title="{{ $product->name }}">{{ substr($product->name, 0, 11) . '...' }}</p>
                </a>
            </div>

        @endforeach
    </div>
</div>
