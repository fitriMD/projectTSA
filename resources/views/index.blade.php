@extends('layouts.apps')

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <div class="wrapper">
        <!-- Sidebar  -->

        @extends('layouts.sidebar')

@yield('content') 
@section('content')
        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-3 logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="{{'/'}}"><img src="images/logo1.png" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="right_header_info">
                                    <ul>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" /></a>
                                        </li>
                                        <li class="tytyu">
                                            <a href="#"><img style="margin-right: 15px;" src="icon/2.png" alt="#" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a>
                                        </li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="images/menu_icon.png" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>
            <!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10 mapimg">
                                <div class="text-bg" style="text-size: 24px;">
                                    <h1>Selamat Datang <br> <strong class="black_bold">Pengunjung Website Kelurahan Madiun Lor</strong><br></h1>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="text-img" style="backgroud-color: #666666;">
                                    <figure><img src="images/madiun.jpg" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- discount -->
            <div class="container">
                <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>WEBSITE<br> <strong class="black_nolmal">informatif media</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="images/madiun2.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                            <h3>WEBSITE<br> <strong class="black_nolmal">informatif media</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="images/madiun2.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                            <h3>WEBSITE<br> <strong class="black_nolmal">informatif media</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="images/madiun2.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end madiun2 -->
            <!-- trending -->
            <div class="trending">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Kelurahan <strong class="black">Madiun Lor</strong></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                            <div class="trending-box" style="max-width: 569px; height:377px; margin-left: 50px;">
                                <figure><img src="images/madiunlor.jpeg" /></figure>
                                <h3>Outdoor</h3>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="trending-box" style="max-width: 569px; height:377px; margin-left: 50px;">
                                <figure><img src="images/madiunlor1.jpeg" /></figure>
                                <h3>Outdoor</h3>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                        <div class="trending-box" style="max-width: 569px; height:377px; margin-left: 50px;">
                                <figure><img src="images/madiunlor2.jpeg" /></figure>
                                <h3>Indoor</h3>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br></br> <br></br>
            <!-- end trending -->

            <!-- our brand -->
            <div class="brand">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Kegiatan <strong class="black">Terkini</strong></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="brand-bg">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop" style="margin-bottom:100px;">
                        <div class="brand-box" style="width:400px; height: 300px;">
                                <i><img src="images/madiunlor3.jpeg"/></i>
                                <h3>Gebyar HUT  </h3>
                                <span>September 7, 2022</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                             <div class="brand-box" style="width:400px; height: 300px;">
                            <i><img src="images/madiunlor4.jpeg" /></i>
                                <h3>Penyaluran BLTD </h3>
                                <span>September 7, 2022</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                             <div class="brand-box" style="width:400px; height: 300px;">
                            <i><img src="images/madiunlor6.jpeg" /></i>
                                <h3>Jalan Santai</h3>
                                <span>September 7, 2022</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                             <div class="brand-box" style="width:400px; height: 300px;">
                            <i><img src="images/madiunlor5.jpeg" /></i>
                                <h3>Kirab Budaya</h3>
                                <span>September 7, 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end our brand -->
            <!-- map -->
            <div class="contact">
                <div class="container-fluid padddd">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Contact <strong class="black">Us</strong></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://maps.google.com/maps?q=madiun%20lor&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                            <form class="main_form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Nama" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Telepon" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Pesan" type="text"
                                            name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end map -->
            <!--  footer -->
            @extends('layouts.footer')
            <!-- end footer -->