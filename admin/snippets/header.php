<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  St.George Forane Church</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="style.css">
	<script src="assets/js/jquery-3.4.0.min.js"></script>	
	
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	
	<style type="text/css">
	#mask {
	  position:absolute;
	  left:0;
	  top:0;
	  z-index:9000;
	  background-color:#26262c;
	  display:none;
	}  
	#boxes .window {
	  position:absolute;
	  left:0;
	  top:0;
	  width:930px;
	  height:850px;
	  display:none;
	  z-index:9999;
	  padding:20px;
	  border-radius: 5px;
	  text-align: center;
	}
	#boxes #dialog {
	  width:940px; 
	  height:auto;
	  padding: 10px 10px 10px 10px;
	  background-color:#ffffff;
	  font-size: 15pt;
	}

	.agree:hover{
	  background-color: #D1D1D1;
	}
	.popupoption:hover{
	 background-color:#D1D1D1;
	 color: green;
	}
	.popupoption2:hover{
	 color: red;
	}
	</style>
	
	<script type='text/javascript'>
	$(document).ready(function() { 
	  var id = '#dialog';
	  var maskHeight = $(document).height();
	  var maskWidth = $(window).width();
	  $('#mask').css({'width':maskWidth,'height':maskHeight}); 
	  $('#mask').fadeIn(500); 
	  $('#mask').fadeTo("slow",0.9); 
			var winH = $(window).height();
	  var winW = $(window).width();
			$(id).css('top',  winH/2-$(id).height()/2);
	  $(id).css('left', winW/2-$(id).width()/2);
		 $(id).fadeIn(2000);  
		 $('.window .close').click(function (e) {
	  e.preventDefault();
	  $('#mask').hide();
	  $('.window').hide();
		 });  
		 $('#mask').click(function () {
	  $(this).hide();
	  $('.window').hide();
	 });  
	 
	});
	</script>
	
<style>
      .button_glow {
        background-color: #040f69;
        border: none;
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: sans-serif;
        font-size: 14px;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
      }
      @keyframes glowing {
        0% {
          background-color: #040f69;
          box-shadow: 0 0 5px #040f69;
        }
        50% {
          background-color: #0062af;
          box-shadow: 0 0 20px #0062af;
        }
        100% {
          background-color: #040f69;
          box-shadow: 0 0 5px #040f69;
        }
      }
      .button_glow {
        animation: glowing 1300ms infinite;
      }
    </style>

</head>

<body>


    <!-- Start Header -->
	
	
    <header>
        <div class="header_top_Section my-4 d-none d-lg-block mb-0 pb-0">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="header_top d-flex justify-content-between">
                            <div class="site_logo">
                                <a href="index.php"><img src="assets/images-1/blog/logo-2-crop.png" alt="logo" class="img-fluid w-75"></a>
                            </div>
                            <div class="site_info d-flex justify-content-between">
                                <div class="single_info">
                                    <img src="assets/images/email.png" alt="Email" class="img-fluid">
                                    <div class="info_data ">
                                        <h6>Email</h6>
                                        <p>sample@gmail.com</p>
                                    </div>
                                </div>
								<div class="single_info">
                                    <img src="assets/images/phone.png" alt="Location" class="img-fluid">
                                    <div class="info_data">
                                        <h6>Phone</h6>
                                        <p>+91 9495675239</p>
                                    </div>
                                </div>
								<div class="single_info  ">
                                    <a href="https://www.pocbible.com/" target="_blank" class="button_one mt-4 button_glow" >POC Bible</a>
                                </div>
                            </div>
                        </div>
                        <marquee class="pt-2" style="color:#000; "> 
	 <cms:show marquee_des/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  

</marquee>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-Section bg_dark_mobile" style="background-color: #040f69;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu default_bg">
                            <nav class="navbar navbar-expand-lg">
                                <div class="mobile_site_logo d-none">
                                    <a href="index.php"><img src="assets/images-1/blog/logo-melvin.png" alt="logo" class="img-fluid"></a>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                        <li class="nav-item">  <a href="index.php" class="nav-link"> Home </a>  </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" 
											aria-haspopup="true" aria-expanded="false"> About </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                                                                <a class="dropdown-item" href="about5757.php"> About Us </a>
                                                                                                <a class="dropdown-item" href="staff.php"> Administration </a>
                                                                                                <a class="dropdown-item" href="st-george.php"> St. George </a>
                                                                                                
                                            </div>
                                        </li>
										<li class="nav-item">  <a href="downloads.php" class="nav-link"> Georgian Voice Archive</a>  </li>
										
                                        <li class="nav-item">  <a href="gallery.php" class="nav-link"> Gallery </a>  </li>
                                        <li class="nav-item">  <a href="news.php" class="nav-link"> News & Events </a>  </li>
                                        <li class="nav-item">  <a href="contact.php" class="nav-link"> Contact </a>  </li>
										
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->