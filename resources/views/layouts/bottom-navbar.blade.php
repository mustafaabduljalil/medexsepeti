<div class="header-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-9 offset-2 col-10">
                <div class="nav-wrap">
                    <div id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li class="column-1">
                                <a href="#" title="">Home</a>
                            </li><!-- /.column-1 -->
                            @foreach(collect(cache()->get('parentCategories'))->take(4) as $category)
                                <li class="column-1">
                                    <a href="#" title="">{{ $category->name }}</a>
                                    @if(array_key_exists($category->id, cache()->get('childCategories')))
                                        <ul class="submenu">
                                            @foreach(cache()->get('childCategories')[$category->id] as $subCategory)
                                                <li>
                                                    <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>{{ $subCategory->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul><!-- /.submenu -->
                                    @endif
                                </li>
                            @endforeach
                            <li class="column-1">
                                <a href="#" title="">About</a>
                            </li><!-- /.column-1 -->
                            <li class="column-1">
                                <a href="#" title="">Contact</a>
                            </li><!-- /.column-1 -->
                        </ul><!-- /.menu -->
                    </div><!-- /.mainnav -->
                </div><!-- /.nav-wrap -->
            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.header-bottom -->
