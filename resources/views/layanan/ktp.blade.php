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
         @include('layouts.header')
         <div class="contactus">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="title">
                        <h2>Layanan Publik</h2>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="blog">
            <div class="container">
               <div class="row">
                 @foreach ($ktp as $ktp)
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin"  style="align: center; margin-left:250px;">
                     <div class="news-box">
                        <figure><img src="images/icon.png" alt="img" style="width:300px; height:300px; margin-left: 100px; margin-top: 50px;" /></figure>
                        <h3>{{$ktp->judul}}</h3>
                        <span> Dokumen</span>
                        <p>
                        {{$ktp->isi}}
                        </p>
                     </div>
                  </div>
         @endforeach
                
               </div>
            </div>
         </div>
         <!--  footer -->
         @extends('layouts.footer')
         <!-- end footer -->
      </div>

   </div>