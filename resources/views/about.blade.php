@extends('layouts.apps')

   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>

   <div class="wrapper">

      <!-- end loader -->

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
                        <h2>About</h2>

                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="about">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="aboutimg">
                        <h3>About us</h3>
                        <p>Madiun Lor adalah sebuah kelurahan di wilayah Kecamatan Manguharjo, Kota Madiun, Provinsi Jawa Timur.
                           Di kelurahan inilah berada hampir semua kantor instansi pemerintah. Inka sebagai kebanggaan 
                           Indonesia yang memproduksi kereta api baik untuk kebutuhan domestik maupun ekspor ada di wilayah ini...</p>
                        <a href="#">Read More</a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="aboutimg" style="margin-top: 100px;">
                        <figure><img src="images/inka.jpg" /></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--  footer -->
         @extends('layouts.footer')
         <!-- end footer -->
      </div>

   </div>

