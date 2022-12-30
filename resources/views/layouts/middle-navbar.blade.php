<div class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="logo" class="logo">
                    <a href="#" title="">
                        <!--<img src="logo.png" alt="">-->
                        <h3>LOGO HERE</h3>
                    </a>
                </div><!-- /#logo -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-6">
                <div class="top-search">
                    <form action="#" method="get" class="form-search" accept-charset="utf-8">
                        <div class="cat-wrap">
                            <select name="category">
                                <option hidden value="" class="select2">All Category</option>
                                @foreach(cache()->get('parentCategories') as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </div><!-- /.cat-wrap -->
                        <div class="box-search">
                            <input type="text" name="search" placeholder="Search what you looking for ?">
                            <span class="btn-search">
    <button type="submit" class="waves-effect"><i class="fa fa-search"></i></button>
</span>

                        </div><!-- /.box-search -->
                    </form><!-- /.form-search -->
                </div><!-- /.top-search -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-3">
                <div class="box-cart">
                    <div class="inner-box">
                        <ul class="menu-compare-wishlist">
                            <li class="compare">
                                <a href="#" title="">
                                    <i class="fa fa-superpowers"></i>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#" title="">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul><!-- /.menu-compare-wishlist -->
                    </div><!-- /.inner-box -->
                    <div class="inner-box">
                        <a href="#" title="">
                            <div class="icon-cart">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>4</span>
                            </div>
                            <div class="price">
                                $0.00
                            </div>
                        </a>
                        <div class="dropdown-box">
                            <ul>
                                <li>
                                    <div class="img-product">
                                        <img src="https://placeimg.com/200/200/nature" alt="">
                                    </div>
                                    <div class="info-product">
                                        <div class="name">
                                            Medical Product
                                        </div>
                                        <div class="price">
                                            <span>1 x</span>
                                            <span>$250.00</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <span class="delete">x</span>
                                </li>
                                <li>
                                    <div class="img-product">
                                        <img src="https://placeimg.com/200/200/nature" alt="">
                                    </div>
                                    <div class="info-product">
                                        <div class="name">
                                            Medical Product
                                        </div>
                                        <div class="price">
                                            <span>1 x</span>
                                            <span>$250.00</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <span class="delete">x</span>
                                </li>
                            </ul>
                            <div class="total">
                                <span>Subtotal:</span>
                                <span class="price">$1,999.00</span>
                            </div>
                            <div class="btn-cart">
                                <a href="#" class="view-cart" title="">View Cart</a>
                                <a href="#" class="check-out" title="">Checkout</a>
                            </div>
                        </div>
                    </div><!-- /.inner-box -->
                </div><!-- /.box-cart -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.header-middle -->
