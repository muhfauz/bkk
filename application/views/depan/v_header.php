<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="title" content="Meditex">
    <meta property="fb:app_id" content="312" />
    <meta property="og:type" content="Medical" />
    <meta property="og:url" content="http://steelthemes.com/demo/Elango/meditex-final" />
    <meta property="og:title" content="Meditex">
    <meta property="og:image" content="http://steelthemes.com/demo/Elango/meditex-final/assets/image/fbimg-210x210.jpg">
    <meta property="og:description" content="Meditex is html 5 Template">
    <meta name="full-screen" content="yes">
    <meta name="theme-color" content="#568701">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <title><?php echo $this->db->query("select * from tbl_judul")->row()->judul; ?> | <?php echo $this->db->query("select * from tbl_judul")->row()->oleh; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('depan/') ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('depan/') ?>assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('depan/') ?>assets/fonts/font/flaticon.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url('depan/') ?>assets/image/fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url('depan/') ?>assets/image/fav/favicon-16x16.png" sizes="16x16">

</head>

<body class="sbar_color_one">

    <!--Start Preloader -->
    <div class="preloader"></div>
    <!--End Preloader -->

    <div class="page-wapper home-page-one">
        <header class="site-header" id="header-one">
            <div class="top-bar">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="float-left">
                                <p><i class="fa fa-map-marker"></i> <?php echo $this->db->query("select * from tbl_bkk")->row()->alamat_bkk ?></p>
                            </div>
                            <div class="float-right ">
                                <div class="inner-sec">
                                    <ul class="social-media">
                                        <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li><a href="#"><i class="fa fa-share-alt"></i></a></li> -->
                                    </ul>
                                    <div class="dropdown language-drp">
                                        <!-- <button type="button" class=" btn-primary dropdown-toggle" data-toggle="dropdown">
                                            <img src="<?php echo base_url('depan/') ?>assets/image/language-1.jpg" alt="lan"> Eng
                                        </button>
                                        <div class="dropdown-menu">

                                            <a class="dropdown-item" href="#"><img src="<?php echo base_url('depan/') ?>assets/image/language-2.jpg" alt="lan"> FRA</a>
                                            <a class="dropdown-item" href="#"><img src="<?php echo base_url('depan/') ?>assets/image/language-1.jpg" alt="lan">GRE</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo base_url('home') ?>"><img src="<?php echo base_url() ?>assets/img/<?php echo $this->db->query("select logo_depan from tbl_bkk where kd_bkk='1'")->row()->logo_depan ?>" class="img-fluid" alt="img"></a>
                    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav navbar-mobile ml-auto mr-auto">
                            <li class="nav-item dropdown activee">
                                <a class="nav-link link_hd" href="<?php echo base_url('home') ?>"> Home </a>

                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link link_hd" href="<?php echo base_url('home/lowongan') ?>"> Lowongan </a>

                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link link_hd" href="#"> Informasi </a>
                                <ul class="navbar-nav submenu">
                                    <a class="nav-link link_hd" href="<?php echo base_url('home/tentang') ?>"> Tentang Kami </a>
                                    <a class="nav-link link_hd" href="<?php echo base_url('home/hubungi') ?>">Hubungi Kami</a>


                                </ul>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link link_hd" href="<?php echo base_url('home/faq') ?>"> FAQ </a>

                            </li>

                            <?php if ($this->session->userdata('status') == 'login') { ?>
                                <li class="nav-item dropdown ">
                                    <a class="nav-link link_hd" href="<?php echo base_url('login/logout') ?>"> LogOut </a>
                                </li>

                            <?php } else {  ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link link_hd" href="#"> Daftar </a>
                                    <ul class="navbar-nav submenu">
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('welcome') ?>">Login</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/pelamar') ?>">Pelamar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/pe') ?>">Perusahaan</a></li>

                                    </ul>
                                </li>
                            <?php }  ?>






                        </ul>
                        <ul class="navbar-nav navbar-mobile right-nav ml-auto ">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#"> <span class="flaticon-search head-icon"></span> </a>
                                <ul class="navbar-nav submenu">
                                    <li>
                                        <form action="#">
                                            <div class="form-group">
                                                <input name="search" type="text" placeholder="Enter a Keywords">
                                                <button type="submit" class="theme-btn">GO</button>
                                            </div>
                                        </form>
                                    <li>
                                </ul>
                            </li>

                            <li class="nav-item  dropdown cart_dropdown">
                                <a class="nav-link" href="#"> <span class="flaticon-supermarket head-icon"></span> </a>
                                <ul class="navbar-nav submenu">
                                    <li>
                                        <div class="cart" id="cart_items">
                                            <div class="product_inside_cart">

                                                <div class="cart_in">
                                                    <img src="assets/image/shop/view-product-1.jpg" class="img-fluid" width="50" alt="proimg" />
                                                    <div class="content">
                                                        <h2>Lucien Rectangle</h2>
                                                        <p>$25.00</p>
                                                    </div>
                                                    <div class="close">
                                                        <span class="flaticon-close  sme"></span>
                                                    </div>
                                                </div>
                                                <div class="cart_in">
                                                    <img src="<?php echo base_url('depan/') ?>assets/image/shop/view-product-1.jpg" class="img-fluid" width="50" alt="proimg" />
                                                    <div class="content">
                                                        <h2>Lucien Rectangle</h2>
                                                        <p>$25.00</p>
                                                    </div>
                                                    <div class="close">
                                                        <span class="flaticon-close  sme"></span>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="cart_btns_ clearfix">
                                                <button class="theme-btn float-left">Checkout</button>
                                                <button class="theme-btn float-right">Add to cart</button>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Main Header -->
        </header>