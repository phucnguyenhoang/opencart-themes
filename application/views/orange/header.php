<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opencart Orange</title>

    <link href="<?php echo base_url('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/css/owl.carousel.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/css/owl.theme.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/css/owl.transitions.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/css/orange.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/css/category.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/css/prettify.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('resources/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Anton" rel="stylesheet" type="text/css">


<!--     HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--     WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--    [if lt IE 9]>-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!--    <![endif]-->-->
</head>
<body>
<div id="top_bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <div class="title-support">
                    <span class="glyphicon glyphicon-earphone"></span> <span class="hidden-xs">Call support free:</span> <span class="support-phone">123 456 789</span> | Default welcome message!
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="control">
                    <div class="dropdown">
                        <a id="drp_account" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user hidden-xs hidden-md hidden-lg"></span> <span class="hidden-sm">My Account</span>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="drp_account">
                            <li><a href="#">Wish List<span class="badge">4</span></a></li>
                            <li><a href="#">My Cart<span class="badge">8</span></a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a id="drp_language" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo base_url('resources/img/us.png'); ?>" class="hidden-xs hidden-md hidden-lg"><span class="hidden-sm">English</span>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="drp_language">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Vietnamese</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a id="drp_language" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-usd hidden-xs hidden-md hidden-lg"></span> <span class="hidden-sm">USD</span>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="drp_language">
                            <li><a href="#">USD</a></li>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">VND</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <a href="<?php echo base_url('orange'); ?>">
                    <img src="<?php echo base_url('resources/img/orange-logo.png') ?>" class="img-logo">
                </a>
            </div>
            <div class="col-sm-5 col-xs-12">
                <div class="pan-search">
                    <input type="text" placeholder="Search">
                    <span class="glyphicon glyphicon-search"></span>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="top-cart">
                    <div id="cart" class="btn-group btn-block">
                        <div data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                            <a title="shopping cart">
                                <span class="title-cart">Shopping Cart</span>
                                <span id="cart-total">1 item(s) - $50.00</span>
                            </a>
                        </div>
                        <ul class="dropdown-menu pull-right">
                            <li class="arrow-cart"></li>
                            <li>
                                <div class="div-sdiviped">
                                    <div class="row-cart">
                                        <div class="image-cart text-center">
                                            <a href="#"><img src="<?php echo base_url('resources/img/orange.jpg'); ?>" alt="Orange" title="Orange" class="img-thumbnail"></a>
                                        </div>
                                        <div class="cart-content">
                                            <div class="product-name text-lef">
                                                <a href="#">Dapibus enim lorem</a>
                                            </div>
                                            <strong class="text-right">1 x</strong>
                                            <span class="cart-price text-right">$50.00</span>
                                            <div class="cart-button text-center">
                                                <button type="button" title="Remove" class="btn btn-danger btn-xs">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row2-cart  div-bordered">
                                    <div class="box-cart">
                                        <span class="text text-right"><strong>Sub-Total : </strong></span>
                                        <span class="text1 text-right">$50.00</span>
                                    </div>
                                    <div class="box-cart">
                                        <span class="text text-right"><strong>Total : </strong></span>
                                        <span class="text1 text-right">$50.00</span>
                                    </div>
                                    <div class="button-cart text-center">
                                        <a href="#"><strong><i class="glyphicon glyphicon-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;
                                        <a href="#"><strong><i class="glyphicon glyphicon-log-in"></i> Checkout</strong></a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="top_menu">
    <div class="container">
        <div class="pan-menu-control visible-xs row">
            <div class="col-xs-8">CATEGORIES</div>
            <div class="col-xs-4 text-right">
                <button type="button" class="btn btn-sm btn-success btn-show-menu"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
            </div>
        </div>
        <div class="pan-menu">
            <a href="<?php echo base_url('orange'); ?>" class="visible-xs">
                <img src="<?php echo base_url('resources/img/orange-logo.png') ?>" class="img-logo">
            </a>
            <div class="menu-item active">
                <a href="#">Home</a>
            </div>
            <div class="menu-item">
                <a href="#">Category 1 <span class="glyphicon glyphicon-chevron-down visible-xs btn-show-sub-menu"></span></a>
                <div class="sub-menu">
                    <div class="sub-menu-item">
                        <ul>
                            <li><a href="#">Subcategory</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                        </ul>
                    </div>
                    <div class="sub-menu-item">
                        <ul>
                            <li><a href="#">Subcategory</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                        </ul>
                    </div>
                    <div class="sub-menu-item">
                        <ul>
                            <li><a href="#">Subcategory</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <a href="#">Category 2 <span class="glyphicon glyphicon-chevron-down visible-xs btn-show-sub-menu"></span></a>
                <div class="sub-menu">
                    <div class="sub-menu-item">
                        <ul>
                            <li><a href="#">Subcategory</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                        </ul>
                    </div>
                    <div class="sub-menu-item">
                        <ul>
                            <li><a href="#">Subcategory</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <a href="#">Category 3 <span class="glyphicon glyphicon-chevron-down visible-xs btn-show-sub-menu"></span></a>
                <div class="sub-menu">
                    <div class="sub-menu-item">
                        <ul>
                            <li><a href="#">Subcategory</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item"><a href="#">Contact</a></div>
        </div>
    </div>
    <div id="menu_bg"></div>
</div>

