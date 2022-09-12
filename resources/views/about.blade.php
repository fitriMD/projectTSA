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
         @include('layouts.header')
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

         @foreach ($abouts as $data)
         <div class="about">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="aboutimg">
                        <h3>About us</h3>
                        {{$data->deskripsi}}</p>
                        <a href="#">Read More</a>
                     </div>
                  </div>
                  
         @endforeach
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

