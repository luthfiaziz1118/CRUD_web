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
    <title>Yuk Sewa Gedung</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/img/core-img/favicon.ico') ?>">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url ('assets/style.css')?>" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url ('assets/css/responsive/responsive.css')?>" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
  <!--  <div id="preloader">
        <div class="yummy-load"></div>
    </div> -->

    <!-- ****** Top Header Area Start ****** -->
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
              <!--   <div class="col-7 col-sm-6">
                    <?php if($this->session->userdata('status') == "login_user"){?>
                    <p>
                        Selamat Datang 
                    </p>
                    <?php } else {?>
                    <?php } ?>
                </div> -->
                <!--  Login Register Area 
                 <div class="col-7 col-sm-6">
                    <div class="signup-search-area d-flex align-items-center justify-content-end">
                        <div class="login_register_area d-flex">
                            <div class="login">
                            	
                                <a href="<?php echo base_url().'home/login';?>">Sign in</a>
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

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a class="yummy-logo">Penyewaan Gedung Balai Sarita</a>
                    </div>
                </div>
            </div>

        	<div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <ul class="navbar-nav" id="yummy-nav">
                            <!-- 
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Rapat&Acara</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pernikahan</a>
                                </li>
                        	--> 	        
                             
                                <?php if($this->session->userdata('status') == "login_user"){?>
                                 <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url().'home/reservasi';?>">Reservasi</a>
                                </li>

                                <li class="nav-item">
                                       <a class="nav-link" href="<?php echo base_url().'home/detail';?>">Detail</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url().'home/jadwalbooking';?>">Jadwal Booking</a>
                                </li>
                                 <?php } else {?>
                                    
                                 <?php } ?>


                                <?php if($this->session->userdata('status') == "login_user" ){?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url().'home/jadwal';?>">Daftar Reservasi</a>
                                </li>
                                <?php } else {?>
                                    
                                 <?php } ?>


                                 <?php if($this->session->userdata('role') == 1 ){?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url().'home/daftaradmin';?>">Daftar Admin</a>
                                </li>
                                 <?php } else {?>
                                    
                                 <?php } ?>


                                <?php if($this->session->userdata('status') == "login_user"){?>
                                 <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url().'sewagedung/logout';?>">Log Out</a>
                                </li>
                                 <?php } else {?>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url().'home/login';?>">Log in</a>
                                </li>
                                <li class="nav-item">
                                       <a class="nav-link" href="<?php echo base_url().'home/detail';?>">Detail</a>
                                </li>
                                 <?php } ?>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Welcome Post Area Start ****** -->
    <section class="welcome-post-sliders owl-carousel">

        

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="<?php echo base_url ('assets/img/bg-img/slide-2.jpg')?>" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <a>
                    <h5>"Kami membantu anda untuk menemukan tempat Hari Bahagia sesuai harapanmu" </h5>
                </a>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="<?php echo base_url ('assets/img/bg-img/slide-3.jpg')?>" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <a>
                    <h5>Meeting-room yang nyaman agar rapatmu berjalan lancar bersama rekan kerjamu</h5>
                </a>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="<?php echo base_url ('assets/img/bg-img/slide-4.jpg')?>" alt="">
            <div class="project_title">
                <a>
                    <h5>Aula yang besar untuk mempermudah pertemuan dengan banyak orang di satu tempat</h5>
                </a>
            </div>
        </div>

    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** Categories Area Start ****** -->
    <section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img style="height: 250px; width: 350px" src="<?php echo base_url ('assets/img/catagory-img/1.jpg') ?>" alt="">
                        <div class="catagory-title">
                            <a>
                                <h5>Aula Pernikahan</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                        <img style="height: 250px; width: 350px" src="<?php echo base_url ('assets/img/catagory-img/2.jpg')?>" alt="">
                        <div class="catagory-title">
                            <a>
                                <h5>Auditorium</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img style="height: 250px; width: 350px" src="<?php echo base_url('assets/img/catagory-img/3.jpg') ?>" alt="">
                        <div class="catagory-title">
                            <a>
                                <h5>Meeting Room</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Categories Area End ****** -->

    <!-- ****** Blog Area Start ****** -->
    <section class="blog_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="<?php echo base_url ('assets/img/blog-img/1.jpg') ?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a>By Nisvy & Peny</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a>2019</a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area 
                                        <div class="post-comment-share-area d-flex">
                                             Post Favourite 
                                            <div class="post-favourite">
                                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                            </div>
                                             Post Comments 
                                            <div class="post-comments">
                                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                            </div>
                                             Post Share 
                                            <div class="post-share">
                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        -->

                                    </div>
                                    <a>
                                        <h2 class="post-headline">Sewa gedung sekarang ! Dan nikmati promo serta kemudahan untuk setiap member baru</h2>
                                    </a>
                                    <p>Balai Sarita merupakan ruang serbaguna dengan luas 25x25 meter dan selasar terbuka 18x10 meter, mampu menampung maksimal 700 undangan (1400 orang) gedung ini berplafon emas dan gordyn dengan warna senada. keunggulan Balai Sarita terletak pada akses tol yang sangat bagus dan memiliki area parkir yang luas.
                                    Untuk detail penyewaan gedung yang meliputi harga, ketentuan dan lainnya dapat di lihat di link di berikut ini :</p>
                                    <a href="<?php echo base_url().'home/detail';?>" class="read-more">Lihat detail gedung</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->

                        

                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-post wow fadeInUp" data-wow-delay=".6s">
                                <!-- Post Thumb -->
                               <!--  <div class="post-thumb">
                                    <img src="<?php echo base_url ('assets/img/blog-img/3.jpg')?>" alt="">
                                </div> -->
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <!-- <div class="post-author">
                                                <a>By Nisvy & Peny</a>
                                            </div> -->
                                            <!-- Post Date -->
                                            <!-- <div class="post-date">
                                                <a>2019</a>
                                            </div> -->
                                        </div>

                                        <!-- Post Comment & Share Area 
                                        <div class="post-comment-share-area d-flex">
                                             Post Favourite 
                                            <div class="post-favourite">
                                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                            </div>
                                             Post Comments 
                                            <div class="post-comments">
                                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                            </div>
                                             Post Share
                                            <div class="post-share">
                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    	-->

                                  

                        <!-- Single Widget Area -->
                        <!--
                        <div class="single-widget-area add-widget text-center">
                            <div class="add-widget-area">
                                <img src="<?php echo base_url ('assets/img/sidebar-img/6.jpg')?>" alt="">
                                <div class="add-text">
                                    <div class="yummy-table">
                                        <div class="yummy-table-cell">
                                            <h2>11.11</h2>
                                            <p>Minta Penawaran Sekarang!</p>
                                            <a href="#" class="add-btn">Reservasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    	-->
                       
    </section>
    <!-- ****** Blog Area End ****** -->


    <!-- ****** Footer Social Icon Area Start ****** -->
   
    <!-- ****** Footer Social Icon Area End ****** -->

    <!-- ****** Footer Menu Area Start ****** -->
    <footer class="footer_area"><div class="comment-respond col-md-12" id="respond" style="color: #007bff!important; border:none;">
               

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copy_right_text text-center">
                        <p>This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Peny & Nisvy</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ****** Footer Menu Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="<?php echo base_url ('assets/js/jquery/jquery-2.2.4.min.js')?>"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url ('assets/js/bootstrap/popper.min.js')?>"></script>
    <!-- Bootstrap-4 js -->
    <script src="<?php echo base_url ('assets/js/bootstrap/bootstrap.min.js')?>"></script>
    <!-- All Plugins JS -->
    <script src="<?php echo base_url ('assets/js/others/plugins.js')?>"></script>
    <!-- Active JS -->
    <script src="<?php echo base_url ('assets/js/active.js')?>"></script>
</body>