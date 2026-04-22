<?php
   session_start();
   include 'connection.php';
   ?>


<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/fafo/default/my-addresses.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jan 2021 09:22:44 GMT -->
<head>
<meta charset="utf-8">
<meta name="description" content="Fafo">
<meta name="keywords" content="HTML,CSS,JavaScript">
<meta name="author" content="HiBootstrap">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<title>My address</title>
<link rel="icon" href="assets/images/tab.png" type="image/png" sizes="16x16">

<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/animate.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/slick.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/slick-theme.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/jquery-ui.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/jquery.timepicker.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/magnific-popup.min.css" type="text/css" media="all" />

<link rel='stylesheet' href='assets/css/icofont.min.css' type="text/css" media="all" />

<link rel='stylesheet' href='assets/css/flaticon.css' type="text/css" media="all" />

<link rel='stylesheet' href='assets/css/settings.css' type="text/css" media="all" />
<link rel='stylesheet' href='assets/css/layers.css' type="text/css" media="all" />
<link rel='stylesheet' href='assets/css/navigation.css' type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
<!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>
<body>

<div class="preloader bg-main">
<div class="preloader-wrapper">
<div class="preloader-grid">
<div class="preloader-grid-item preloader-grid-item-1"></div>
<div class="preloader-grid-item preloader-grid-item-2"></div>
<div class="preloader-grid-item preloader-grid-item-3"></div>
<div class="preloader-grid-item preloader-grid-item-4"></div>
<div class="preloader-grid-item preloader-grid-item-5"></div>
<div class="preloader-grid-item preloader-grid-item-6"></div>
<div class="preloader-grid-item preloader-grid-item-7"></div>
<div class="preloader-grid-item preloader-grid-item-8"></div>
<div class="preloader-grid-item preloader-grid-item-9"></div>
</div>
</div>
</div>

  <?php include 'Header.php'; ?>


<div class="header-bg header-bg-page">
<div class="header-padding position-relative">
<div class="header-page-shape">
<div class="header-page-shape-item">
<img src="assets/images/header-shape-1.png" alt="shape">
</div>
<div class="header-page-shape-item">
<img src="assets/images/header-shape-2.png" alt="shape">
</div>
<div class="header-page-shape-item">
<img src="assets/images/header-shape-3.png" alt="shape">
</div>
<div class="header-page-shape-item">
<img src="assets/images/header-shape-1.png" alt="shape">
</div>
<div class="header-page-shape-item">

</div>
<div class="header-page-shape-item">
<img src="assets/images/header-shape-1.png" alt="shape">
</div>

</div>
<div class="container">
<div class="header-page-content">
<h1>My Addresses</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">My Addresses</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<div class="account-page-section pt-100 pb-70 bg-black">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-4 pb-30">
<div class="account-sidebar around-border">
<ul class="account-sidebar-list">
<li><a href="my-account.html">My Account</a></li>
<li><a href="my-orders.html">My Orders</a></li>
<li class="active"><a href="my-addresses.html">My Addresses</a></li>
<li><a href="index.html">Sign Out</a></li>
</ul>
</div>
</div>
<div class="col-sm-12 col-md-8 col-lg-8 pb-30">
<div class="account-info">
<div class="my-order">
<div class="sub-section-title">
<h3 class="color-white">My Addresses</h3>
<p>The following addresses will be used on the checkout page by default.</p>
</div>


<!--
<div class="row">
<div class="col-lg-12">
<div class="billing-title">
<h4>Biliing Address</h4>
<p>Edit</p>
</div>
<div class="billing-address">
<address>
London <br>
26 Autostrad St, E1 9ED <br>
</address>
<p class="billing-address-info">You have not set up this type of address yet.</p> 
</div>
<div class="billing-address-input">
-->

<form>
<div class="row">
<div class="col-sm-12 col-md-6 col-lg-6">
<div class="form-group mb-20">
<div class="input-group">
<input type="text" name="first_name" id="first_name" class="form-control" required placeholder="Address 2*" />
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-6">
<div class="form-group mb-20">
<div class="input-group">
<input type="text" name="last_name" id="last_name" class="form-control" required placeholder="Last Name*" />
</div>
</div>
 </div>
<div class="col-sm-12 col-md-6 col-lg-6">
<div class="form-group mb-20">
<div class="input-group">
<input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name (Optional)" />
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-6">
<div class="form-group mb-20">
<div class="input-group">
<select name="country" class="form-control">
<option value="1">Your Country*</option>
<option value="2">USA</option>
<option value="3">UK</option>
<option value="4">Germany</option>
</select>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<input type="email" name="street" class="form-control" placeholder="Street" />
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<select name="country" class="form-control">
<option value="1">Town*</option>
<option value="2">New York</option>
<option value="3">Florida</option>
</select>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<select name="country" class="form-control">
<option value="1">State*</option>
<option value="2">NY</option>
<option value="3">FL</option>
</select>
</div>
</div>
 </div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<input type="email" name="address" class="form-control" required placeholder="Address With Zip Code*" />
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<input type="email" name="phone" class="form-control" required placeholder="Phone No*" />
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="form-group mb-20">
<div class="input-group">
<input type="text" name="email" id="email" class="form-control" required placeholder="Email*" value="xyz@example.com" />
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<button class="btn full-width" type="submit">Save Address <i class="flaticon-right-chevron"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="subscribe-section mural-bg pt-100 pb-70 bg-main">
<div class="container">
<div class="subscribe-grid">
<div class="subscribe-item">
<div class="section-title text-center text-lg-left m-0">
<h2 class="color-white">Subscribe Our Newsletter</h2>
<p>Don't miss any upcoming event & Get your coupon via email.</p>
</div>
</div>
<div class="subscribe-item">
<div class="subscribe-form">
<form class="newsletter-form newsletter-form-white" data-toggle="validator">
<div class="form-group">
<div class="input-group">
<input type="email" id="emails" class="form-control" placeholder="Enter Email Address*" name="EMAIL" required autocomplete="off">
</div>
<button class="btn" type="submit">Subscribe <i class="flaticon-right-arrow-sketch-1"></i></button>
</div>
<div id="validator-newsletter" class="form-result color-white"></div>
</form>
</div>
 </div>
</div>
</div>
</section>


 <?php include 'footer.php'; ?>


<div class="cart-modal-wrapper">
<div class="cart-modal modal-item">
<div class="cart-modal-header">
<h3 class="color-white">Cart 2</h3>
<div class="cart-modal-close">
<i class="flaticon-cancel"></i>
</div>
</div>
<div class="cart-modal-body">
<h2 class="color-white">My Order</h2>
<div class="cart-modal-product">
<div class="cart-modal-thumb">
<a href="shop-details.html">
<img src="assets/images/product-1.png" alt="product">
</a>
</div>
<div class="cart-modal-content">
<h4><a href="shop-details.html">Crispy Chicken Burger</a></h4>
<div class="cart-modal-action">
<div class="cart-modal-action-item">
<div class="cart-modal-quantity">
<p>1</p>
<p>x</p>
<p class="cart-quantity-price">$ 4.50</p>
</div>
</div>
<div class="cart-modal-action-item">
<div class="cart-modal-delete">
<a href="#"><i class="icofont-ui-delete"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="cart-modal-product">
<div class="cart-modal-thumb">
<a href="shop-details.html">
<img src="assets/images/product-2.png" alt="product">
</a>
</div>
<div class="cart-modal-content">
<h4><a href="shop-details.html">Red Sause Pizza</a></h4>
<div class="cart-modal-action">
<div class="cart-modal-action-item">
<div class="cart-modal-quantity">
<p>1</p>
<p>x</p>
<p class="cart-quantity-price">$ 3.50</p>
 </div>
</div>
<div class="cart-modal-action-item">
<div class="cart-modal-delete">
<a href="#"><i class="icofont-ui-delete"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="cart-modal-total">
<p>Total</p>
<h3>$8.0</h3>
</div>
<div class="cart-modal-button">
<a href="checkout.html" class="btn full-width">Proceed To Checkout</a>
<a href="cart.html" class="btn btn-yellow full-width">View Shopping Cart</a>
</div>


</div>
</div>
</div>


<div class="scroll-top" id="scrolltop">
<div class="scroll-top-inner">
<span><i class="flaticon-up-arrow"></i></span>
</div>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/jquery.timepicker.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/slick.min.js"></script>

<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/jquery.themepunch.tools.min.js"></script>

<script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/js/extensions/revolution.extension.video.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/jquery.meanmenu.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/fafo/default/my-addresses.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jan 2021 09:22:44 GMT -->
</html>