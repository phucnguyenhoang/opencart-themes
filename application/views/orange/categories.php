
<div class="container">
    <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Categories</a></li>
    </ul>
    <div class="row">
        <div id="column-left" class="col-sm-3 hidden-xs">
            <div class="panel panel-default category-filter">
                <div class="panel-heading">Refine Search</div>
                <div class="list-group">
                    <div class="filter-content">
                        <a class="list-group-item">Region</a>
                        <div class="list-group-item">
                            <div id="filter-group1">
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="4">
                                    Vietnam (1)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="3">
                                    Thailand (1)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="2">
                                    China (1)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="1">
                                    USA (1)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="5">
                                    Mexico (1)</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-content">
                        <a class="list-group-item">Category</a>
                        <div class="list-group-item">
                            <div id="filter-group3">
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="11">
                                    Navel Oranges (1)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="12">
                                    Valencia Oranges (1)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="13">
                                    Cara Cara Oranges (1)</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-content">
                        <a class="list-group-item">Manufacturer</a>
                        <div class="list-group-item">
                            <div id="filter-group2">
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="8">
                                    Polo (1)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="9">
                                    Tommy Hilfiger (1)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="10">
                                    Versace (1)</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="panel-footer text-right">
                    <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
                </div>
            </div>

<!--===============================================================================================================================================-->
            <div class="onsale-products-container">
                <div class="onsale-products-title"><h2>Specials</h2></div>
                <div class="product-layout onsale-products">
                    <div class="product-thumb transition">
                        <div class="image"><a href="#"><img src="<?php echo base_url('resources/img/product-orange-1.jpg'); ?>" alt="Navel Oranges" title="Navel Oranges" class="img-responsive"></a></div>
                        <div class="box-onsale">
                            <div class="name"><a href="#">Navel Oranges</a></div>
                            <p class="description">
                                Navel Oranges
                            </p>
                            <p class="price">
                                <span class="price-new">$5.00</span> <span class="price-old">$7.00</span>
                            </p>
                            <div class="rating"><img src="<?php echo base_url('resources/img/stars-0.png'); ?>" alt=""></div>
                            <div class="button-group">
                                <button type="button" onclick="cart.add('36');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('36');" data-original-title="Wish List"><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('36');" data-original-title="Compare"><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb transition">
                        <div class="image"><a href="#"><img src="<?php echo base_url('resources/img/product-orange-2.jpg'); ?>" alt="Valencia Oranges" title="Valencia Oranges" class="img-responsive"></a></div>
                        <div class="box-onsale">
                            <div class="name"><a href="#">Valencia Oranges</a></div>
                            <p class="description">Valencia Oranges</p>
                            <p class="price">
                                <span class="price-new">$7.00</span> <span class="price-old">$10.00</span>
                            </p>
                            <div class="rating"><img src="<?php echo base_url('resources/img/stars-0.png'); ?>" alt=""></div>
                            <div class="button-group">
                                <button type="button" onclick="cart.add('28');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Wish List"><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare"><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb transition">
                        <div class="image"><a href="#"><img src="<?php echo base_url('resources/img/product-orange-7.jpg'); ?>" alt="Cara Cara Oranges" title="Cara Cara Oranges" class="img-responsive"></a></div>
                        <div class="box-onsale">
                            <div class="name"><a href="#">Cara Cara Oranges</a></div>
                            <p class="description">
                                Cara Cara Oranges</p>
                            <p class="price">
                                <span class="price-new">$10.00</span> <span class="price-old">$12.00</span>
                            </p>
                            <div class="rating"><img src="<?php echo base_url('resources/img/stars-0.png'); ?>" alt=""></div>
                            <div class="button-group">
                                <button type="button" onclick="cart.add('32');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('32');" data-original-title="Wish List"><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('32');" data-original-title="Compare"><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--===========================================================================================================================================-->
            <div class="cmsblock">
                <span><a href="">Banner Static3</a> </span>
                <div class="description"><div class="banner-left"><a href="#"><img alt="" src="<?php echo base_url('resources/img/ol_poster21.jpg'); ?>"></a></div></div>
            </div>
        </div>
<!--        the end column-left-->
<!--============================================================================================================================================-->
            <div id="content" class="col-sm-9">
                <h2>Oranges</h2>
<!--<div class="category-image"><img src="http://ogence.demo.towerthemes.com/image/cache/catalog/women-868x319.png" alt="Women" title="Women" class="img-thumbnail" /></div>-->
<!--============================================================================================================================================-->
                <div class="category-list">
                    <h3>Refine Search</h3>
                    <ul>
                        <li><a href="#">Accessories (6)</a></li>
                        <li><a href="#">Handbags (5)</a></li>
                        <li><a href="#">Tops (6)</a></li>
                        <li><a href="#">Dresses (7)</a></li>
                    </ul>
                </div>
<!--===========================================================================================================================================-->
                <div class="product-filter">
                    <div class="btn-group">
                        <button type="button" id="list-view" class="btn btn-default" title="List"><i class="fa fa-th-list"></i></button>
                        <button type="button" id="grid-view" class="btn btn-default selected" title="Grid"><i class="fa fa-th"></i></button>
                    </div>
                    <div class="sort">
                        <label class="control-label" for="input-sort">Sort By:</label>
                        <select id="input-sort" class="form-control col-sm-3" onchange="location = this.value;">
                            <option value="#" selected="selected">Default</option>
                            <option value="#">Name (A - Z)</option>
                            <option value="#">Name (Z - A)</option>
                            <option value="#">Price (Low &gt; High)</option>
                            <option value="#">Price (High &gt; Low)</option>
                            <option value="#">Rating (Highest)</option>
                            <option value="#">Rating (Lowest)</option>
                            <option value="#">Model (A - Z)</option>
                            <option value="#">Model (Z - A)</option>
                        </select>
                    </div>
                    <div class="limit">
                        <label class="control-label" for="input-limit">Show:</label>
                        <select id="input-limit" class="form-control" onchange="location = this.value;">
                            <option value="#" selected="selected">15</option>
                            <option value="#">25</option>
                            <option value="#">50</option>
                            <option value="#">75</option>
                            <option value="#">100</option>
                        </select>
                    </div>
                </div>
<!--===========================================================================================================================================-->
                    <div class="row products-category">
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile">
                            <div class="product-container item_product"><div class="item-inner"><div class="left-block">
                                        <div class="image">
                                            <a href="#"><img src="<?php echo base_url('resources/img/product-orange-1.jpg'); ?>" alt="Adidas originals-shirt" title="Adidas originals-shirt" class="img-responsive"></a>
                                            <div class="actions actions1">
                                                <div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('36');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('36');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('36');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="right-block"><div class="caption"><div class="name"><a href="#">Adidas originals-shirt</a></div><p class="price">
                                                <span class="price-new">$5.00</span> <span class="price-old">$7.00</span>
                                            </p><div class="actions2"><div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('36');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('36');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('36');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="description">

                                            </p>
                                        </div></div></div></div>
                        </div>
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile">
                            <div class="product-container item_product"><div class="item-inner"><div class="left-block">
                                        <div class="image">
                                            <a href="#"><img src="<?php echo base_url('resources/img/product-orange-2.jpg'); ?>" alt="Aenean eleifend laoreet" title="Aenean eleifend laoreet" class="img-responsive"></a>
                                            <div class="actions actions1">
                                                <div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('28');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('28');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('28');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="right-block"><div class="caption"><div class="name"><a href="#">Aenean eleifend laoreet</a></div><p class="price">
                                                <span class="price-new">$7.00</span> <span class="price-old">$10.00</span>
                                            </p><div class="actions2"><div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('28');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('28');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('28');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div></div> <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p></div></div></div></div>
                        </div>
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile">
                            <div class="product-container item_product"><div class="item-inner"><div class="left-block">
                                        <div class="image">
                                            <a href="#"><img src="<?php echo base_url('resources/img/product-orange-7.jpg'); ?>" alt="Cheap Belstaff Bags" title="Cheap Belstaff Bags" class="img-responsive"></a>
                                            <div class="actions actions1">
                                                <div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('48');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('48');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('48');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="right-block"><div class="caption"><div class="name"><a href="">Cheap Belstaff Bags</a></div>
                                            <p class="price">
                                                <span class="price-new">$10.00</span> <span class="price-old">$12.00</span>
                                            </p>
                                            <div class="actions2"><div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('48');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('48');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('48');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div></div> <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p></div></div></div></div>
                        </div><div class="clearfix"></div>
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile">
                            <div class="product-container item_product"><div class="item-inner"><div class="left-block">
                                        <div class="image">
                                            <a href="#"><img src="<?php echo base_url('resources/img/product-orange-3.jpg'); ?>" alt="Dapibus enim lorem" title="Dapibus enim lorem" class="img-responsive"></a>
                                            <div class="actions actions1">
                                                <div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('32');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('32');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('32');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="right-block"><div class="caption"><div class="name"><a href="">Dapibus enim lorem</a></div>
                                            <p class="price">
                                                <span class="price-new">$5.00</span> <span class="price-old">$8.00</span>
                                            </p>
                                            <div class="actions2"><div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('32');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('32');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('32');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div></div> <p class="description">
                                                Revolutionary multi-touch interface.
                                                iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos with a flick. Flip through your library by album artwork with Cover Flow..</p></div></div></div></div>
                        </div>
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile">
                            <div class="product-container item_product"><div class="item-inner"><div class="left-block">
                                        <div class="image">
                                            <a href="#"><img src="<?php echo base_url('resources/img/product-orange-4.jpg'); ?>" alt="Dignissim semper" title="Dignissim semper" class="img-responsive"></a>
                                            <div class="actions actions1">
                                                <div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('47');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('47');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('47');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="right-block"><div class="caption"><div class="name"><a href="#">Dignissim semper</a></div>
                                            <p class="price">
                                                $8.00
                                            </p>
                                            <div class="actions2"><div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('47');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('47');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('47');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div></div> <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p></div></div></div></div>
                        </div>
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile">
                            <div class="product-container item_product"><div class="item-inner"><div class="left-block">
                                        <div class="image">
                                            <a href="#"><img src="<?php echo base_url('resources/img/product-orange-5.jpg'); ?>" alt="Fusce aliquam1" title="Fusce aliquam1" class="img-responsive"></a>
                                            <div class="actions actions1">
                                                <div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('40');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('40');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('40');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="right-block"><div class="caption"><div class="name"><a href="#">Fusce aliquam1</a></div>
                                            <p class="price">
                                                <span class="price-new">$9.00</span> <span class="price-old">$15.00</span>
                                            </p><div class="actions2"><div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('40');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('40');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('40');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div></div> <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p></div></div></div></div>
                        </div><div class="clearfix"></div>
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile">
                            <div class="product-container item_product"><div class="item-inner"><div class="left-block">
                                        <div class="image">
                                            <a href="#"><img src="<?php echo base_url('resources/img/product-orange-6.jpg'); ?>" alt="Lorem ipsum dolor" title="Lorem ipsum dolor" class="img-responsive"></a>
                                            <div class="actions actions1">
                                                <div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('34');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('34');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('34');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="right-block"><div class="caption"><div class="name"><a href="">Lorem ipsum dolor</a></div>
                                            <p class="price">
                                                <span class="price-new">$4.00</span> <span class="price-old">$9.00</span>
                                            </p><div class="actions2"><div class="button-group">
                                                    <div class="add-to-links">
                                                        <div class="cart"><button type="button" title="Add to Cart" onclick="cart.add('34');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button></div>
                                                        <div class="compare"><button type="button" title="Compare" onclick="compare.add('34');"><i class="fa fa-refresh"></i><span>Compare</span></button></div>
                                                        <div class="wishlist"><button type="button" title="Wish List" onclick="wishlist.add('34');"><i class="fa fa-heart"></i><span>Wish List</span></button></div>
                                                    </div>
                                                </div></div> <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p></div></div></div></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
<!--===========================================================================================================================================-->
                    <div class="row product-filter">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">Showing 1 to 11 of 11 (1 Pages)</div>
                    </div>
                </div>
<!--        the end content-->
<!--===========================================================================================================================================-->

    </div>
<!--  the end row-->
</div>
<div id="back-top" class="hidden-phone" style="display: block;"> </div>
