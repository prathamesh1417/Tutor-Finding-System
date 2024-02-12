<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: logint.php");
}

?>

<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>UNIQUE ACADEMY</title>
	<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('4d9bt4ysvhb8');
</script>
<!-- End of Async Drift Code -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="index.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->
	<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('4d9bt4ysvhb8');
</script>
<!-- End of Async Drift Code -->

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <header class="header">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> 020-25742345 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong>uniqueacademy14@gmail.com <a href="mailto:#"></a>
                            </p>
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <div class="social">
                                <a class="facebook" href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                <a class="twitter" href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a class="google" href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest" href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            </div><!-- end social -->
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end topbar -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown yamm-fw yamm-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle active">Menu <b class="fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content clearfix">
                                            <div class="row-fluid">
                                                <div class="col-md-6 col-sm-6">
                                                    <h4>Course Pages</h4>
                                                    <ul>
                                                        <li><a href="#">Python</a></li>
                                                        <li><a href="#">Advance Java</a></li>
                                                        <li><a href="#">PHP</a></li>
                                                        <li><a href="#">Web Development</a></li>
                                                        <li><a href="#">Computer Network</a></li>
                                                        <li><a href="#">Linux</a></li>
                                                        <li><a href="#">Animation Techniques</a></li>
                                                        <li><a href="#">Microprocessors</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="menu-widget text-center">
                                                        <div class="image-wrap entry">
                                                            <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                                            <div class="magnifier">
                                                                 <a href="#" title=""><i class="flaticon-add"></i></a>
                                                            </div>
                                                        </div><!-- end image-wrap -->
                                                        <h5><a href="#">All Courses </a></h5>
                                                      
                                                        <a href="#" class="menu-button">View Course</a>
                                                    </div><!-- end widget -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
							<li><a href="enroll.html">Lecture and course info</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li class="dropdown hassubmenu">
                                
                            </li>
                            
                            <li><a href="profilet.html">Profile</a></li>
                            <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-search"></i></a></li>
                            <li class="iconitem"><a class="shopicon" href="shop-cart.html"><i class="fa fa-shopping-basket"></i> &nbsp;(0)</a></li>
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p>Become a tutor </p>
                    <small>Unique Academy is the ideal choice for your children, your children will learn and get best knowledge from our organization . Get your online course now with unlimited access to various courses you like. Course Starting from Rs.249/Course for on-demand chat with a tutor, or Rs.249/hr for an hourlong virtual session with a live whiteboard — in other words, prices students can actually afford. In addition to a variety of academic subjects, tutors are also available to help students navigate the college admissions process.</small>
                   
                    </div><!-- end row -->
                </div>
            </div>
            <div class="slider-bottom">
                <span>Explore<i class="fa fa-angle-down"></i></span>
            </div>
        </section>

        
                    

                            

                            

                        </div><!-- end module -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Pick a Subject to Teach</h3>
                    
                </div><!-- end title -->

                <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Javascript</small>
                                    <a href="cart.html" title="">Advance Java Programming</a>
                                </h4>
                                <p>It is a part of Java programming language. It is an advanced technology or advance version of Java specially designed to develop web-based.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="cart.html"><i class="fa fa-user"></i>560</a></li>
                                        <li><a href="cart.html"><i class="fa fa-clock-o"></i> 1 HOUR</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="cart.html">Rs.450/hr</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_02.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Design</small>
                                    <a href="cart.html" title="">Web Designing Course</a>
                                </h4>
                                <p>Web design encompasses many different skills and disciplines in the production and maintenance of websites. </p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="cart.html"><i class="fa fa-user"></i>390</a></li>
                                        <li><a href="cart.html"><i class="fa fa-clock-o"></i> 1 HOUR</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="cart.html">Rs.450/hr</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="pythons.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>PHP Coding</small>
                                    <a href="cart.html" title="">How to Become a Web Developer: Learn PHP</a>
                                </h4>
                                <p>PHP is a general-purpose scripting language especially suited to web development.  </p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="cart.html"><i class="fa fa-user"></i> 414</a></li>
                                        <li><a href="cart.html"><i class="fa fa-clock-o"></i> 1 HOUR.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="cart.html">Rs.300/hr</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="cart.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Programming</small>
                                    <a href="cart.html" title="">Python Programming Courses</a>
                                </h4>
                                <p>Python is an interpreted high-level general-purpose programming language.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="cart.html"><i class="fa fa-user"></i> 333</a></li>
                                        <li><a href="cart.html"><i class="fa fa-clock-o"></i> 1HOUR.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="cart.html">Rs.450rs/hr</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Javascript</small>
                                    <a href="#" title="">Modern JavaScript Linting With ESLint</a>
                                </h4>
                                <p>Fusce interdum, elit sit amet vehicula malesuada, eros libero elementum orci.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 21</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 15 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">Rs.249/hr</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="section-button text-center">
                    <a href="cart.html" class="btn btn-primary">View All Courses</a>
                </div>
            </div><!-- end container -->
        </section>

        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message text-center">
                            <h3>Howdy, we are From Unique Academy, we have brought together the best quality Courses for Our Tutors, offers!</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box m30">
                            <i class="flaticon-computer-tool-for-education"></i>
                            <h4>Tutor Finding System</h4>
                            <p>All sections required for online course are included to Unique Academy Website.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="box m30">
                            <i class="flaticon-monitor-tablet-and-smartohone"></i>
                            <h4>Works all mobile devices</h4>
                            <p>The most important feature of our website is that it is compatible with all mobile devices. </p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <div class="box m30">
                            <i class="flaticon-download-business-statistics-symbol-of-a-graphic"></i>
                            <h4>User Dashboard</h4>
                            <p>We have designed a very addressable user dashboard for our tutors.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

               

        <section class="section db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">1230</h4>
                            <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Happy Students</h3>
                           
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">331</h4>
                            <h3><i class="flaticon-online-course"></i> Course Done</h3>
                            
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">8901</h4>
                            <h3><i class="flaticon-coffee-cup"></i> Digital Certificate Generated</h3>
                            
                        </div><!-- stat-count -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Reviews</h3>
                    
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/testimonial_01.png" alt="" class="img-circle"> Rohan Shinde</strong></p>
                            <p>4.5/5 rating!! what a website, i have completed my python course and got a certificate too.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/testimonial_02.png" alt="" class="img-circle">Prajakta kamble</strong></p>
                            <p>Easy courses and very polite and understandable tutors.Thank you Unique Academy</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/testimonial_03.png" alt="" class="img-circle"> Aditya Deshpande</strong></p>
                            <p>Unique Academy is very brilliant example of professional tutors!Liked the courses very much.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Recent Courses</h3>
                    
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/blog_01.jpeg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">How to learn perfect code with Javascript</a></h4>
                                
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#">21 March 2021</a></li>
                                    <li><a href="#">by Unique Academy</a></li>
                                    <li><a href="#">14 Share</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/blog_02.jpeg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">The most suitable web design & development tutorials</a></h4>
                                
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#">20 March 2021</a></li>
                                    <li><a href="#">by Unique Academy</a></li>
                                    <li><a href="#">11 Share</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/blog_03.jpeg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">Design for all mobile devices! This is name "responsive"</a></h4>
                                
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#">19 March 2021</a></li>
                                    <li><a href="#">by Unique Academy</a></li>
                                    <li><a href="#">44 Share</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section bgcolor1">
            <div class="container">
                <a href="#">
                <div class="row callout">
                    <div class="col-md-4 text-center">
                        <h3><sup>Rs.</sup>249/hr</h3>
                        <h4>Courses starting from!!</h4>
                    </div><!-- end col -->

                    <div class="col-md-8">
                        <p class="lead">Limited time offer! students profile will be added as soon as he/she enrolls for the following courses </p>
                    </div>
                </div><!-- end row -->
                </a>
            </div><!-- end container -->  
        </section>

        <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe Our Youtube Channel</h3>
                            <div class="newsletter-widget">
                                <p>You can cancel the membership at any time.<br> See our <a href="#">privacy policy</a>.</p>
                                <form class="form-inline" role="search">
                                    <div class="form-1">
                                        <input type="text" class="form-control" placeholder="Enter email here..">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                                <img src="images/payments.png" alt="" class="img-responsive">
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Join us today</h3>
                            <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                            <a href="#" class="readmore">Become a Teacher</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tags-widget">   
                                <ul class="list-inline">
                                    <li><a href="#">Python</a></li>
                                    <li><a href="#">web design</a></li>
                                    <li><a href="#">Linux</a></li>
                                    <li><a href="#">Java</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">Animation Techniques</a></li>
                                    <li><a href="#">Microprocessors</a></li>
                                    <li><a href="#">css3</a></li>
                                    <li><a href="#">html</a></li>
                                    <li><a href="#">Industrial Training</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Support</h3>
                            <div class="list-widget">   
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Copyrights</a></li>
                                 
                                    <li><a href="#">Pricing & Plans</a></li>
                                    <li><a href="#">Carrier</a></li>
                                    <li><a href="#">Trademark</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                            <ul class="list-inline">
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>

</body>
</html>