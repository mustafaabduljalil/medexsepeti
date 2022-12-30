<div id="brands">
    <div class="row">
        <div class="col-md-2">
            <h3 class="heading-title">Brands</h3>
        </div>
    </div>
    <div class="promotionalslider_wrapper brands">
        @foreach($brands as $brand)
            <div class="promotionalslider_single">
                <a href="#">
                    <section style="background-image: url('{{ $brand->thumb_image }}')"></section>
                    <p title="{{ $brand->name }}">{{ substr($brand->name, 0, 5) . '..' }}</p>
                </a>
            </div>

        @endforeach
    </div>
</div>
