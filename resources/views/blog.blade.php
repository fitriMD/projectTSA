<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Kelurahan Madiun Lor</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/madiun.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>

   <div class="wrapper">

      <!-- end loader -->
      <!-- Sidebar  -->
      @extends('layouts.sidebar')

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
                        <h2>Blog</h2>

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
                        <figure><img src="images/blol.jpg" alt="img" /></figure>
                        <h3>Best Teble</h3>
                        <span> March 20</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                           page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                           normal distribution of letters, </p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                     <div class="news-box">
                        <figure><img src="images/blog.jpg" alt="img" /></figure>
                        <h3>Best Teble</h3>
                        <span> March 20</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                           page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                           normal distribution of letters, </p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                     <div class="news-box">
                        <figure><img src="images/blog.jpg" alt="img" /></figure>
                        <h3>Best Teble</h3>
                        <span> March 20</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                           page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                           normal distribution of letters, </p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="news-box">
                        <figure><img src="images/blol.jpg" alt="img" /></figure>
                        <h3>Best Teble</h3>
                        <span> March 20</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                           page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                           normal distribution of letters, </p>
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

   <div class="overlay"></div>

   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
   </script>


   <script>
      $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
   </script>
</body>

</html>