<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sewa Gedung</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/img/core-img/favicon.ico')?> ">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url('assets/style.css')?>" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url('assets/css/responsive/responsive.css')?>" rel="stylesheet">

</head>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker3.standalone.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker3.standalone.css.map')?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker3.standalone.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>"/>
    
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

 <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="https://www.facebook.com/Sewa-gedung-di-bandung-653591815077137/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/search?q=sewagedung&src=typed_query"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://id.pinterest.com/search/pins/?q=sewa%20gedung&rs=typed&term_meta[]=sewa%7Ctyped&term_meta[]=gedung%7Ctyped"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="https://www.tumblr.com/search/sewagedung"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area 
                 <div class="col-7 col-sm-6">
                    <div class="signup-search-area d-flex align-items-center justify-content-end">
                        <div class="login_register_area d-flex">
                            <div class="login">
                                <a href="register.html">Sign in</a>
                            </div>
                            <div class="register">
                                <a href="register.html">Sign up</a>
                            </div>
                        </div>
                -->
                <!--         Search Button Area 
                        <div class="search_button">
                            <a class="searchBtn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                         Search Form 
                        <div class="search-hidden-form">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search-anything" placeholder="Search Anything...">
                                <input type="submit" value="" class="d-none">
                                <span class="searchBtn"><i class="fa fa-times" aria-hidden="true"></i></span>
                            </form>
                        </div>
                 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** 
    <header class="header_area">
        <div class="container">
            <div class="row">
                Logo Area Start 
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a class="yummy-logo">Sewa Gedung Online</a>
                    </div>
                </div>
            </div>
    -->
            <!-- <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                         Menu Area Start 
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <ul class="navbar-nav" id="yummy-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="yummyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="yummyDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="archive.html">Archive</a>
                                        <a class="dropdown-item" href="single.html">Single Blog</a>
                                        <a class="dropdown-item" href="static.html">Static Page</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="archive.html">Archive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div> -->
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Breadcumb Area Start ****** -->

    <div class="breadcumb-area" style="background-image: url(<?php echo base_url ('assets/img/bg-img/slide-4.jpg')?>) ;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Reservasi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reservasi</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->
    <!--
     ****** Contatc Area Start ****** 
    <div class="contact-area section_padding_80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="google-map-area">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>

             Contact Info Area Start -->
           <!--  <div class="contact-info-area section_padding_80_50">
                <div class="row"> -->
                    <!-- Single Contact Info -->
                    <!-- <div class="col-12 col-md-4">
                        <div class="single-contact-info mb-30 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4>Jakarta</h4>
                            <p>Pondok Indah<br> Email: jakarta.sewa@gmail.com <br> Phone: 081234567890</p>
                        </div>
                    </div> -->
                    <!-- Single Contact Info -->
                 <!--    <div class="col-12 col-md-4">
                        <div class="single-contact-info mb-30 text-center wow fadeInUp" data-wow-delay="0.6s">
                            <h4>Bandung</h4>
                            <p>Cibiru <br> Email: bandung.sewa@gmail.com <br> Phone: 081234567890</p>
                        </div>
                    </div> -->
                    <!-- Single Contact Info -->
                    <!-- <div class="col-12 col-md-4">
                        <div class="single-contact-info mb-30 text-center wow fadeInUp" data-wow-delay="0.6s">
                            <h4>Malang</h4>
                            <p>Kota Batu <br> Email: malang.sewa@gmail.com <br> Phone: 081234567890</p>
                        </div>
                    </div>

                </div>
            </div> -->

            <!-- Contact Form  -->
            <div class="contact-form-area" >
                <div class="row" >
                    <div class="col-12 col-md-5" >
                        <div class="contact-form-sidebar item wow fadeInUpBig" data-wow-delay="0.3s" style="background-image: url(<?php echo base_url ('assets/img/bg-img/slide-1.jpg')?>);">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 item" >
                        <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s" >
                            <h2 class="contact-form-title mb-30">Edit Data Reservasi</h2>
                            <!-- Contact Form -->
                            <?php foreach($reservasi as $book){ ?>
                            <form action="<?php echo base_url(). 'sewagedung/aksiupdatedata'; ?>" method="post">
                                <input name="id_reservasi" type="hidden" class="form-control" placeholder="no" value="<?php echo $book->id_reservasi?>" required>
                                <div class="form-group">
                                    <input name="nama" type="text" class="form-control" id="contact-name" placeholder="Nama" value="<?php echo $book->nama ?>">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="contact-email" placeholder="Email" value="<?php echo $book->email ?>">
                                </div>
                                <div class="form-group">
                                    <input name="telp" type="text" class="form-control" id="contact-website" placeholder="Telp" value="<?php echo $book->telp ?>">
                                </div>
                                <div class="form-group">
                                    <input name="jenisgedung" type="text" class="form-control" id="contact-website" placeholder="Jenis Gedung" value="<?php echo $book->jenisgedung ?>">
                                </div>
                                <div class="form-group">
                                    <input name="waktusewa" type="text" class="form-control" autocomplete="off" id="datepicker" placeholder="Waktu Penyewaan (Misal : 2020-11-22)" value="<?php echo $book->waktusewa ?>">
                                </div>
                                <div class="form-group">
                                    <input name="lamasewa" type="text" class="form-control" id="contact-website" placeholder="Lama Sewa" value="<?php echo $book->lamasewa ?>">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"><?php echo $book->message;?></textarea>
                                </div>
                                <button type="submit" class="nav-link form-control submit" onclick="myFunction()">Update</a></button>
                                <script>
                                function myFunction() {
                                alert("Terimakasih sudah reservasi! Kami akan mengirimkan rincian dan info reservasi melalui email Anda.");
                                }
                                </script>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
 
    <!-- ****** Footer Social Icon Area Start ****** -->
    <div class="social_icon_area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-social-area d-flex">
                        <div class="single-icon">
                            <a href="https://www.facebook.com/Sewa-gedung-di-bandung-653591815077137/"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
                        </div>
                        <div class="single-icon">
                            <a href="https://twitter.com/search?q=sewagedung&src=typed_query"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
                        </div>
                        <div class="single-icon">
                            <a href="https://id.pinterest.com/search/pins/?q=sewa%20gedung&rs=typed&term_meta[]=sewa%7Ctyped&term_meta[]=gedung%7Ctyped"><i class="fa fa-pinterest" aria-hidden="true"></i><span>Pinterest</span></a>
                        </div>
                        <div class="single-icon">
                            <a href="https://www.tumblr.com/search/sewagedung"><i class="fa fa-tumblr" aria-hidden="true"></i><span>Tumblr</span></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Footer Social Icon Area End ****** -->

    <!-- ****** Footer Menu Area Start ****** -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        <!-- Logo Area Start -->
                        <div class="footer-logo-area text-center">
                            <a class="yummy-logo">Sewa Gedung</a>
                        </div>
                        <!-- Menu Area Start -->
                        <!-- <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-footer-nav" aria-controls="yummyfood-footer-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                            Menu Area Start 
                            <div class="collapse navbar-collapse justify-content-center" id="yummyfood-footer-nav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Archive</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copy_right_text text-center">
                        <p>This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a target="_blank">Nisvy & Peny</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Menu Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="<?php echo base_url('assets/js/jquery/jquery-2.2.4.min.js')?>"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url('assets/js/bootstrap/popper.min.js')?>"></script>
    <!-- Bootstrap-4 js -->
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js')?>"></script>
    <!-- All Plugins JS -->
    <script src="<?php echo base_url('assets/js/others/plugins.js')?>"></script>
    <!-- Google Maps -->
    <script src="<?php echo base_url('assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s')?>"></script>
    <script src="<?php echo base_url('assets/js/google-map/map-active.js')?>"></script>
    <!-- Active JS -->
    <script src="<?php echo base_url('assets/js/active.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>
    <script>
        $(function () {
        $('#datepicker').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
    });
    });
    </script>
</body>
