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
                              <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="#"></a> </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-9">
                        <div class="right_header_info">
                           <ul>
                              {{-- <li>
                                            <a href="#"><img style="margin-right: 15px; " src="icon/1.png" alt="#" /></a>
                                        </li>
                                        <li class="tytyu">
                                            <a href="#"><img style="margin-right: 15px;" src="icon/2.png" alt="#" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a>
                                        </li> --}}
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

         <div class="contactus">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="title">
                        <h2>Contact Us</h2>

                     </div>
                  </div>
               </div>
            </div>
         </div>
<br></br>
         <!-- map -->
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
                         <textarea class="textarea" placeholder="Pesan" type="text" name="Message"></textarea>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <button class="send">Kirim</button>
                      </div>
                   </div>
                </form>
                            <br></br><br></br>
                        </div>
                    </div>
                </div>
            </div>
            <br></br><br></br>
         <!-- end map -->
         <!--  footer -->
         @extends('layouts.footer')
         <!-- end footer -->
      </div>

   </div>
