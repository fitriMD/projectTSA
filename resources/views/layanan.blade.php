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
                        <h2>Layanan Publik</h2>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="blog">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                     <div class="news-box">
                        <figure><img src="images/icon.png" alt="img" style="width:300px; height:300px; margin-left: 100px; margin-top: 50px;" /></figure>
                        <h3>Pembuatan KK</h3>
                        <span> Dokumen</span>
                        <p>
                           Surat pengantar dari RT dan RW<br>
                           Mengisi form permohonan KTP<br>
                           Melampirkan pas foto berwarna, tahun ganjil (contoh 1987) dengan latar belakang merah, (contoh 1988) untuk tahun genap dengan latar belakang biru, dan<br>
                           Fotokopi KK terbaru<br>
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                     <div class="news-box">
                        <figure><img src="images/icon.png" alt="img" style="width:300px; height:300px; margin-left: 100px; margin-top: 50px;" /></figure>
                        <h3>Pembuatan KK</h3>
                        <span> Dokumen</span>
                        <p>
                           Surat pengantar RT/RW dan Kelurahan<br>
                           Mengisi Formulir Permohonan Kartu Keluarga<br>
                           Melampirkan KK dan KTP lama<br>
                           Melampirkan fotocopy Kutipan Akta Perkawinan / Akta Nikah bagi penduduk yang sudah menikah, dengan memperlihatkan dokumen aslinya<br>
                           Melampirkan fotocopy Kutipan Akta Kelahiran bagi kepala keluarga dan seluruh anggota keluarga, dengan memperlihatkan dokumen aslinya<br>
                           Mengisi Data Keluarga dan Biodata setiap Anggota Keluarga<br>
                           Melampirkan fotocopy Bukti / Ketetapan Ganti Nama (apabila sudah ganti nama), dengan memperlihatkan dokumen aslinya<br>
                           Asli Surat Keterangan Pindah Datang, bagi penduduk yang pindah tempat tinggal<br>
                           Khusus bagi penduduk WNI yang baru pindah dan datang dari luar negeri membawa Surat Keterangan Datang dari Luar Negeri<br>

                        </p>
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