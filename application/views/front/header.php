<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Invitation</title>

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?php echo base_url(''); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?php echo base_url(''); ?>assets/pages/css/animate.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo base_url(''); ?>assets/pages/css/components.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>assets/pages/css/slider.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(''); ?>assets/corporate/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="<?php echo base_url(''); ?>assets/corporate/css/custom.css" rel="stylesheet">
  <style type="text/css">
     @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        
   
</style>

<!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(''); ?>assets/corporate/img/logos/rsz.png" alt="Logo"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <div class="top-cart-info">
            <?php if($this->session->userdata('userId')){
              ?>
            <a href="<?php echo base_url('invite/logout'); ?>" class="top-cart-info-count">Logout</a>
            <?php } else { ?>
            <a href="javascript:void(0);" data-toggle="modal" data-target="#loginModal" class="top-cart-info-count">Login</a>
            <?php } ?>
          </div>                 
        </div> &nbsp;&nbsp;
            <?php if($this->session->userdata('userId')){ ?>
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="<?php echo base_url('invite/cart'); ?>" class="top-cart-info-count">Cart <span class="badge cartBadge"><?php echo cartCount($this->session->userdata('userId')); ?></span> </a>
          </div>                 
        </div>
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="<?php echo base_url('invite/account'); ?>" class="top-cart-info-count">Account </a>
          </div>                 
        </div>
            <?php } else{ ?>
              <div class="top-cart-block">
                <div class="top-cart-info">
                  <a href="<?php echo base_url('invite/cart_item'); ?>" class="top-cart-info-count">Cart <span class="badge cartBadge"></span> </a>
                </div>                 
              </div>
         <?php   } ?>
        
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Video Invitations
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-4 header-navigation-col">
                        <h4>Wedding</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Save The Date</a></li>
                          <li><a href="shop-product-list.html">Engagment</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Birthday</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Birthday</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                E Cards
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-4 header-navigation-col">
                        <h4>Wedding</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Save The Date</a></li>
                          <li><a href="shop-product-list.html">Engagment</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Birthday</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Birthday</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <!-- BEGIN TOP SEARCH -->
            <!-- <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li> -->
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->