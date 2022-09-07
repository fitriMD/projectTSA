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
                              <li><a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" /></a></li>
                              <li class="tytyu"><a href="#"><img style="margin-right: 15px;" src="icon/2.png"
                                       alt="#" /></a></li>
                              <li><a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a></li>

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
         <div class="contactus">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="title">
                        <h2>Berita</h2>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="ourproduct">
            <div class="container">
               <div class="row product_style_3">
                  <!-- product -->
                  <div class=" col-xl-4 col-lg-4 col-md-6 col-sm-12">
                     <div class="full product">
                        <div class="product_img">
                           <div class="center"> <img src="images/madiunlor3.jpeg" alt="#" />
                              <div class="overlay_hover"> <a class="add-bt" href="product_detail3.html">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="product_detail text_align_center">
                           <p class="product_price">September 7, 2022</p>
                           <p class="product_descr">Gebyar HUT</p>
                        </div>
                     </div>
                  </div>
                  <!-- end product -->
                  <!-- product -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                     <div class="full product">
                        <div class="product_img">
                           <div class="center"> <img src="images/madiunlor4.jpeg" alt="#" />
                              <div class="overlay_hover"> <a class="add-bt" href="product_detail3.html">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="product_detail text_align_center">
                           <p class="product_price">September 7, 2022</p>
                           <p class="product_descr">Penyaluran BLTD</p>
                        </div>
                     </div>
                  </div>
                  <!-- end product -->
                  <!-- product -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                     <div class="full product">
                        <div class="product_img">
                           <div class="center"> <img src="images/madiunlor5.jpeg" alt="#" />
                              <div class="overlay_hover"> <a class="add-bt" href="product_detail3.html">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="product_detail text_align_center">
                           <p class="product_price">September 7, 2022</span></p>
                           <p class="product_descr">Kirab Budaya</p>
                        </div>
                     </div>
                  </div>
                  <!-- end product -->
               </div>
            </div>
         </div>
         <!--  footer -->
         @extends('layouts.footer')
         <!-- end footer -->
      </div>

   </div>