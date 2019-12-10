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
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>"/>

</head>

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

    <div class="breadcumb-area" style="background-image: url(<?php echo base_url ('assets/img/bg-img/slide-4.jpg')?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Daftar Reservasi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--  <div class="col-md-6 col-sm-6">
<blockquote style="margin-top: 0px;">Untuk tanggal yang di tandai merupakan tanggal yang telah terisi acara / jadwal gedung pada tanggal tersebut</blockquote>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <select name="bulan" id="blncal" class="bs-select-hidden">
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12" selected="selected">December</option>
                                                                    </select><div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="blncal" title="December"><span class="filter-option pull-left">December</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">January</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">February</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">March</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">April</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">May</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">June</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">July</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">August</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">September</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">October</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">November</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">December</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                            </div>
                            <div class="col-md-6">
                                <select name="tahun" id="thncal" class="bs-select-hidden">
                                                                        <option value="2019" selected="selected">2019</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2023">2023</option>
                                                                        <option value="2024">2024</option>
                                                                    </select><div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="thncal" title="2019"><span class="filter-option pull-left">2019</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2019</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2020</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2021</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2022</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2023</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">2024</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <hr>
                            <div id="calendar-area"><table class="calendar table-responsive" style="border: none; text-align: center;">

<tbody><tr>
<th colspan="7">December&nbsp;2019</th>

</tr>

<tr>
<td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td>
</tr>

<tr>
<td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">1</a></td><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">7</a></td>
</tr>

<tr>
<td class="today" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;"><strong>8</strong></a></td><td class="day">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">14</a></td>
</tr>

<tr>
<td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">15</a></td><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td>
</tr>

<tr>
<td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">22</a></td><td class="day">23</td><td class="day">24</td><td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">25</a></td><td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">26</a></td><td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">27</a></td><td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">28</a></td>
</tr>

<tr>
<td class="day" style="background-color: rgb(189, 195, 199); text-align: center; border: 15px solid rgb(255, 255, 255);"><a href="javascript:void(0);" class="booked-date" style="font-weight: bold;">29</a></td><td class="day">30</td><td class="day">31</td><td class="day">&nbsp;</td><td class="day">&nbsp;</td><td class="day">&nbsp;</td><td class="day">&nbsp;</td>
</tr>

</tbody></table></div>
                        </div>
                    </div> -->
<!--    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Log in</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
-->    
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
-->
            
            <!-- Contact Form  -->
            <div class="contact-form-area">
                <div class="row">
                    <!--
                    <div class="col-12 col-md-5">
                        <div class="contact-form-sidebar item wow fadeInUpBig" data-wow-delay="0.3s" style="background-image: url(<?php echo base_url ('assets/img/bg-img/slide-1.jpg')?>); border-radius: 20px; margin: 50px">
                        </div>
                    </div>
                -->
                
                   <div class="col-md-9">
                        <!-- blog start -->
                        <div class="blog-post blog-single">
                      <!--       <div class="dez-post-title ">
                                <h3 class="post-title"><a href="#">Detail penyewaan gedung</a></h3>
                            </div>
                            <div class="dez-post-meta m-b20">
                                <ul>
                                    <li class="post-date"> <i class="fa fa-calendar"></i> 18 Juni 2019 </li>
                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Administrator</a> </li>
                                </ul> -->
                            <!-- </div> -->
                            
  
    <!-- ****** Footer Menu Area Start ****** -->
    <footer class="footer_area">
      <!--   <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        Logo Area Start
                        <div class="footer-logo-area text-center">
                            <a class="yummy-logo">Sewa Gedung</a>
                        </div> -->
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


<section id="feature" class="parallax-section col-md-12">
  <div class="col-md-12">
    <div class="row">
      <!-- <div class="col-md-12">
          <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
            <center><h2>Daftar Catatan Reservasi</h2></center>
          </div>
      </div> -->
      <!-- Bagian Tabel -->
      <div class="scrolltable col-md-12">
      <br>
      <table class="table table-dark">
    <thead>
     <?php if($this->session->userdata('role') == 1)
              {?>
    <tr>
      <th><center>No</center></th>
      <th><center>Nama</center></th>
      <th>Telepon</th>
      <th>Jenis Gedung</th>
      <th>Waktu Sewa</th>
      <th>Lama Sewa</th>
      <th>Message</th>
      <th><center>Aksi</center></th>

      <?php } else {?>

      <th>No</th>
      <th>Nama</th>
      <th>Telepon</th>
      <th>Jenis Gedung</th>
      <th>Waktu Sewa</th>
      <th>Lama Sewa</th>
      <th>Message</th>
      <?php } ?>

    </tr>
    </thead>
    <?php $id=1; foreach($reservasi as $boking){
    ?>
    <tbody>
    <tr>
      <?php if($this->session->userdata('role') == 1)
              {?>
      <td><center><?php echo $id++ ?></center></td>
      <td><?php echo $boking->nama ?></td>
      <td><?php echo $boking->telp ?></td>
      <td><?php echo $boking->jenisgedung ?></td>
      <td><?php echo $boking->waktusewa ?></td>
      <td><?php echo $boking->lamasewa ?></td>
      <td><?php echo $boking->message ?></td>
      <td>
        <a class="btn btn-warning" href="<?php echo base_url('sewagedung/edit_reservasi/'.$boking->id_reservasi); ?>">Edit</a>
        <a class="btn btn-danger" href="<?php echo base_url('sewagedung/hapusdata/'.$boking->id_reservasi); ?>">Delete</a>
      </td>
        <?php } else {?>
      <td><?php echo $id++ ?></td>
      <td><?php echo $boking->nama ?></td>
      <td><?php echo $boking->telp ?></td>
      <td><?php echo $boking->jenisgedung ?></td>
      <td><?php echo $boking->waktusewa ?></td>
      <td><?php echo $boking->lamasewa ?></td>
      <td><?php echo $boking->message ?></td>
      <?php } ?>
    </tr>
  </tbody>
  <?php } ?>
    
  </table>  </div>

    </div>
    <br>
    <?php if($this->session->userdata('role') == 1)
              {?>
    <center><a target="_blank" class="btn btn-primary" href="<?php echo base_url(). 'Laporanpdf'; ?>">Print</a></center>
    <?php } else {?>
    <?php } ?>
  </div> </section>
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
</body>
