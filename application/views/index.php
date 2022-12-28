<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ProBootstrap:Enlight &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
  <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/styles-merged.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom.css">

  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
      <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
  </div>

  <div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->

    <div class="probootstrap-header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
            <span><i class="icon-location2"></i>Brooklyn, NY 10036, United States</span>
            <span><i class="icon-phone2"></i>+1-123-456-7890</span>
            <span><i class="icon-mail"></i>info@probootstrap.com</span>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
            <ul>
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
              <li><a href="#"><i class="icon-youtube"></i></a></li>
              <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <div class="btn-more js-btn-more visible-xs">
            <a href="#"><i class="icon-dots-three-vertical "></i></a>
          </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" title="ProBootstrap:Enlight">Enlight</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="teachers.html">Teachers</a></li>
            <li><a href="events.html">Events</a></li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
              <ul class="dropdown-menu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="course-single.html">Course Single</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li class="dropdown-submenu dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                  </ul>
                </li>
                <li><a href="news.html">News</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="flexslider">
      <ul class="slides">
        <li style="background-image: url(<?php echo base_url() ?>asset/img/slider_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our Mission</h1>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(img/slider_2.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1>
                </div>
              </div>
            </div>
          </div>

        </li>
        <li style="background-image: url(img/slider_3.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section probootstrap-section-colored">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
            <h2 class="mb0">Welcome to School of Excellence</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="row">
                <div class="col-md-7">
                  <div class="text">
                    <h3>Application Design</h3>
                    <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                    <p><a href="#" class="btn btn-primary">Enroll now</a></p>
                  </div>
                </div>
                <div class="col-md-5">
                  <img src="https://smanegra.sch.id/storage/smanegra.sch.id/kepsek/nkhfz1606823561.png" width="100%" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section" id="probootstrap-counter">
      <div class="container">

        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <div class="probootstrap-counter-wrap">
              <div class="probootstrap-icon">
                <i class="icon-users2"></i>
              </div>
              <div class="probootstrap-text">
                <span class="probootstrap-counter">
                  <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                </span>
                <span class="probootstrap-counter-label">Students Enrolled</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <div class="probootstrap-counter-wrap">
              <div class="probootstrap-icon">
                <i class="icon-user-tie"></i>
              </div>
              <div class="probootstrap-text">
                <span class="probootstrap-counter">
                  <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
                </span>
                <span class="probootstrap-counter-label">Certified Teachers</span>
              </div>
            </div>
          </div>
          <div class="clearfix visible-sm-block visible-xs-block"></div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <div class="probootstrap-counter-wrap">
              <div class="probootstrap-icon">
                <i class="icon-library"></i>
              </div>
              <div class="probootstrap-text">
                <span class="probootstrap-counter">
                  <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                </span>
                <span class="probootstrap-counter-label">Passing to Universities</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

            <div class="probootstrap-counter-wrap">
              <div class="probootstrap-icon">
                <i class="icon-smile2"></i>
              </div>
              <div class="probootstrap-text">
                <span class="probootstrap-counter">
                  <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                </span>
                <span class="probootstrap-counter-label">Parents Satisfaction</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg);padding:40px 0px">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center section-heading probootstrap-animate mb0">
            <h2 class="mb0">BERITA</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div id="featured-news" class="tab-pane fade in active">
              <div class="row">
                <div class="col-md-12">
                  <div class="owl-carousel" id="owl1">
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="<?php echo base_url() ?>asset/img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>Tempora consectetur unde nisi</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, ut.</p>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="<?php echo base_url() ?>asset/img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>Tempora consectetur unde nisi</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, officia.</p>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="<?php echo base_url() ?>asset/img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>Tempora consectetur unde nisi</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.</p>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="<?php echo base_url() ?>asset/img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>Tempora consectetur unde nisi</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, earum.</p>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>


                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                  </div>
                </div>
              </div>
              <!-- END row -->
              <div class="row">
                <div class="col-md-12 text-center">
                  <p><a href="#" class="btn btn-primary">View all news</a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <footer class="probootstrap-footer probootstrap-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d684.8730213462318!2d106.70627011395142!3d-6.582772343643836!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69db246678fc81%3A0xac1a8cf91c6a88f6!2sPonpes%20Bahrul%20Ullum!5e0!3m2!1sid!2sid!4v1667715136714!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-md-7" style="padding-left: 28px;">
            <div class="probootstrap-footer-widget">
              <h3>Contact Info</h3>
              <ul class="probootstrap-contact-info">
                <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
              </ul>
            </div>
          </div>

        </div>
        <!-- END row -->

      </div>

      <div class="probootstrap-copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-left">
              <p>&copy; 2017 <a href="https://probootstrap.com/">ProBootstrap:Enlight</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://probootstrap.com/">ProBootstrap.com</a></p>
            </div>
            <div class="col-md-4 probootstrap-back-to-top">
              <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <!-- END wrapper -->


  <script src="<?php echo base_url() ?>asset/js/scripts.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/main.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/custom.js"></script>

</body>

</html>