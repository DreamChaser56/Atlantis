
<?php
  $messageSent = false;
  if(isset($_POST['email']) && $_POST["email"] != ''){
    if( filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
      print_r($_POST);
      $userName = $_POST['name'];
      $userEmail = $_POST['email'];
      $userPeople = $_POST['people'];
      $userDate = $_POST['date'];
      $userTime = $_POST['time'];
      $userMessage = $_POST['message'];
      $messageSubject = "Reservation For".$userName.;

      $to = "nsmith56263@gmail.com";
      $body = "";

      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "Number of People: ".$userPeople. "\r\n";
      $body .= "Date: ".$userDate. "\r\n";
      $body .= "Time: ".$userTime. "\r\n";
      $body .= "Message: ".$userMessage. "\r\n";

      mail($to,$messageSubject,$body);
      
      $messageSent = true;
    }
  }

?>



<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation</title>
    <!-- Bootstrap CSS-->
    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!-- IE 9-->
    <!-- Vendors-->
    <link rel="stylesheet" href="assets/vendors/flexslider/flexslider.min.css">
    <link rel="stylesheet" href="assets/vendors/swipebox/css/swipebox.min.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick.min.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick-theme.min.css">
    <link rel="stylesheet" href="assets/vendors/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/vendors/pageloading/css/component.min.css">
    <!-- Font-icon-->
    <link rel="stylesheet" href="assets/fonts/font-icon/style.css">
    <!-- Style-->
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/elements.css">
    <link rel="stylesheet" type="text/css" href="assets/css/extra.css">
    <link rel="stylesheet" type="text/css" href="assets/css/widget.css">
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
    <!--link#colorpattern(rel='stylesheet', type='text/css', href='assets/css/color/colordefault.css')-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <!-- Script Loading Page-->
    <script src="assets/vendors/html5shiv.js"></script>
    <script src="assets/vendors/respond.min.js"></script>
    <script src="assets/vendors/pageloading/js/snap.svg-min.js"></script>
    <script src="assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js"></script>
  </head>
  <body>
    <?php
      if($messageSent):
    ?>

    <h3> Your Reservation Has Been Sent </h3>

    <?php
      else:
    ?>
    <div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
        <header class="header-transparent">
          <div class="header-main">
            <div class="container">
              <div class="open-offcanvas">&#9776;</div>
              <div class="utility-nav">
                <div class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-search"></i></a>
                  <div class="dropdown-menu">
                    <div class="search-form">
                      <form action="#">
                        <div class="input-group">
                          <input type="text" placeholder="Search" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-search"></i></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="header-logo"><a href="index.html" class="logo"><img src="AtlantisLogoColor.png" alt="fooday" class="logo-img" style="height:1cm"></a></div>
              <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                  <ul id="main-nav" class="nav nav-pills">
                    <li class="dropdown current-menu-item"><a href="index.html" class="dropdown-toggle">Home</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                    </li>
                    <li><a href="reservation.html">Reservation</a>
                    </li>
                    <li class="dropdown"><a href="menu-classic.html">Menu</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </header>
        <div class="page-container">
          <div class="top-header top-bg-parallax">
            <div data-parallax="scroll" data-image-src="Pictures/Picture35.jpg" class="slides parallax-window">
              <div class="slide-content slide-layout-02">
                <div class="container">
                  <div class="slide-content-inner"><img src="AtlantisLogoColor.png" data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="500" alt="fooday" class="slide-icon img img-responsive animated" style="height: 5cm;">
                    <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1000" class="slide-title animated">Reservation</h3>
                    <!--<p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="line-before"></span><span class="line-after"></span><span class="text"><span>Tasty</span><span>Delicious</span><span>Savoury</span></span></p>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="section-reservation-form padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2">
                    <h3 class="title"><span>Reservation Form</span></h3>
                  </div>
                  <div class="reservation-form">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <p class="reservation-form-title text-center">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline:<span class="text-default"> 225-88888</span></p>
                      </div>
                    </div>
                    <div class="swin-sc swin-sc-contact-form light mtl">
                      <form action="reservation.php" method="POST">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input name="name" type="text" placeholder="name" class="form-control">
                          </div>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input name="email" type="text" placeholder="Email" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <div class="fa fa-phone"></div>
                            </div>
                            <input name="phone" type="text" placeholder="Phone" class="form-control">
                          </div>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-male"></i></div>
                            <select type="text" name="people" placeholder="People" class="form-control">
                              <option>1 person</option>
                              <option>2 People</option>
                              <option>3 People</option>
                              <option>4 People</option>
                              <option>5 People</option>
                              <option>6 People</option>
                              <option>7 People</option>
                              <option>8 People</option>
                              <option>9 People</option>
                              <option>10 People</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input name="date" type="text" placeholder="Date" class="form-control datepicker">
                          </div>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <div class="fa fa-clock-o"></div>
                            </div>
                            <select name="time" type="text" placeholder="Time" class="form-control">
                              <option>7:00 AM</option>
                              <option>8:00 AM</option>
                              <option>9:00 AM</option>
                              <option>10:00 AM</option>
                              <option>11:00 AM</option>
                              <option>12:00 AM</option>
                              <option>1:00 PM</option>
                              <option>2:00 PM</option>
                              <option>3:00 PM</option>
                              <option>4:00 PM</option>
                              <option>5:00 PM</option>
                              <option>6:00 PM</option>
                              <option>7:00 PM</option>
                              <option>8:00 PM</option>
                              <option>9:00 PM</option>
                              <option>10:00 PM</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <textarea name="message" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"><button type="submit" name="submit"> <span>Book Table</span></button></a></div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!--<div class="section-deco"><img src="assets/images/pages/reservation-showcase.png" alt="fooday" class="img-deco"></div>-->
                </div>
                <php if ($mail_reservation_status != '') {
                  echo $mail_reservation_status;
                }> 
              </div>
            </section>
            <section>
              <div class="container">
                <form method="post" action="/" id="contact">
                  <div class="form-body">
                  
                  <div class="section">
                    <label for="guestname" class="field-label">Please Enter Your Name</label>
                    <label for="guestname" class="field prepend-icon">
                      <input type="text" name="guestname" id="guestname" class="gui-input" required="" placeholder="John Doe/Jane Doe">
                      <span class="field-icon"><i class="fa fa-user"></i></span>  
                    </label>
                  </div>           
                  <div class="frm-row">
                    <div class="section colm colm6">
                      <label for="guestemail" class="field-label">Email Address</label>
                      <label for="guestemail" class="field prepend-icon">
                        <input type="email" name="guestemail" id="guestemail" class="gui-input" required="" placeholder="john@something.com">
                        <span class="field-icon"><i class="fa fa-envelope"></i></span>  
                      </label>
                    </div>
                    <div class="section colm colm6">
                      <label for="guestelephone" class="field-label">Telephone / Mobile</label>
                      <label for="guestelephone" class="field prepend-icon">
                        <input type="text" name="guestelephone" id="guestelephone" class="gui-input" required="" placeholder="Telephone / Moble Number">
                        <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
                      </label>
                    </div>
                  </div>
                  <div class="frm-row">
                    <div class="section colm colm6">
                      <label for="adults" class="field-label">Number of Adults</label>
                      <label for="adults" class="field prepend-icon">
                        <input type="number" id="adults" name="adults" class="gui-input" required="" placeholder="Number of adults">
                        <span class="field-icon"><i class="fa fa-users"></i></span>  
                      </label>
                    </div>
                    <div class="section colm colm6">
                      <label for="children" class="field-label">Number of Children</label>
                      <label for="children" class="field prepend-icon">
                        <input type="number" id="children" name="children" class="gui-input" required="" placeholder="Number of children">
                        <span class="field-icon"><i class="fa fa-users"></i></span>  
                      </label>
                    </div>
                  </div>
                  <div class="frm-row">
                    <div class="section colm colm6">
                      <label for="checkin" class="field-label">Check-in Date</label>
                      <label for="checkin" class="field prepend-icon">
                        <input type="text" id="checkin" name="checkin" class="gui-input" required="" placeholder="mm/dd/yyyy">
                        <span class="field-icon"><i class="fa fa-calendar"></i></span>  
                      </label>
                    </div>
                    <div class="section colm colm6">
                      <label for="checkout" class="field-label">Check-out Date</label>
                      <label for="checkout" class="field prepend-icon">
                        <input type="text" id="checkout" name="checkout" class="gui-input" required="" placeholder="mm/dd/yyyy">
                        <span class="field-icon"><i class="fa fa-calendar"></i></span>  
                      </label>
                    </div>
                  </div>
                  <div class="spacer-t20 spacer-b30">
                    <div class="tagline"><span>Please answer these questions for a pleasant stay</span></div>
                  </div>
                  <div class="frm-row">
                    <div class="option-group field">
                      <div class="section colm colm6">
                        <label class="switch">
                          <input type="checkbox" name="switch1" id="switch1" value="switch1">
                          <span class="switch-label" data-on="YES" data-off="NO"></span>
                          <span>Will you be bringing a pet?</span>
                        </label>
                      </div> 
                      <div class="section colm colm6">
                        <label class="switch">
                          <input type="checkbox" name="switch2" id="switch2" value="switch2">
                          <span class="switch-label" data-on="YES" data-off="NO"></span>
                          <span>Do you need us to pick you up?</span>
                        </label>
                      </div>        
                    </div>
                  </div> 
                  <div class="section">
                    <label for="comment" class="field-label">Anything else we should know about?</label>
                    <label for="comment" class="field prepend-icon">
                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Let us know about any special accommodation needs"></textarea>
                      <span class="field-icon"><i class="fa fa-comments"></i></span>
                      <span class="input-hint"> 
                        <strong>Please:</strong> Be as descriptive as possible
                      </span>   
                    </label>
                  </div>
                </div>
                <div class="form-footer">
                  <button type="submit" class="button btn-primary">Confirm Booking</button>
                  <button type="reset" class="button">Cancel</button>
                </div>

                </form>
              </div>
            </section>

            <!--
            <section>
              <iframe src="https://tableagent.com/iframe/atlantis-restaurant-and-lounge/" style="border:0px none;min-width:375px;min-height:736px" width="100%" height="100%">
              </iframe>
            </section>
          -->


            <section class="section-reservation-events padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2">
                    <h3 class="title"><span>Upcoming Events</span></h3>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="swin-sc swin-sc-blog-grid">
                        <div class="row">
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <div data-wow-delay="0s" class="blog-item swin-transition item wow fadeInUpShort">
                              <div class="blog-featured-img"><img src="Flyer/Flyer3.jpg" alt="fooday" class="img img-responsive"></div>
                              <div class="blog-content">
                                <div class="blog-date"><span class="day">4th</span><span class="month">Augest</span></div>
                                <!--
                                <h3 class="blog-title"><a href="javascript:void(0)" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                -->
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <div data-wow-delay="0.5s" class="blog-item swin-transition item wow fadeInUpShort">
                              <div class="blog-featured-img"><img src="Flyer/Flyer1.jpg" alt="fooday" class="img img-responsive"></div>
                              <div class="blog-content">
                                <div class="blog-date"><span class="day">Every</span><span class="month">Day</span></div>
                                <!--
                                <h3 class="blog-title"><a href="javascript:void(0)" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                -->
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12 col-xs-12">
                            <div data-wow-delay="1s" class="blog-item swin-transition item wow fadeInUpShort">
                              <div class="blog-featured-img"><img src="Flyer/Flyer4.jpg" alt="fooday" class="img img-responsive"></div>
                              <div class="blog-content">
                                <div class="blog-date"><span class="day">Every</span><span class="month">Sunday</span></div>
                                <!--
                                <h3 class="blog-title"><a href="javascript:void(0)" class="swin3-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                -->
                              </div>
                            </div>
                          </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <footer>
          <div class="footer-top"></div>
          <div class="footer-main">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="ft-widget-area">
                    <div class="ft-area1">
                      <div class="swin-wget swin-wget-about">
                        <div class="clearfix"><a class="wget-logo"><img src="AtlantisLogoColor.png" alt="" class="img img-responsive" style="height: 5cm;"></a>
                          <ul class="socials socials-about list-unstyled list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-4">
                  <div class="ft-fixed-area">
                    <div class="reservation-box">
                      <div class="reservation-wrap">
                        <h3 class="res-title">Open Hour</h3>
                        <h3 class="res-title">Lunch and Dinner Service</h3>
                        <p class="res-number">Everday At 11a.m.-9p.m.</p>
                        <p class="res-number">Happy Hour At 11a.m.-9p.m.</p>

                        <h3 class="res-title">Lounge Hours</h3>
                        <p class="res-number">Mon-Thurs At 9pm-11pm</p>
                        <p class="res-number">Fri-Sat At 9pm-2am</p>
                      </div>
                  
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </footer><a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
      </div>
      <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
        <div class="loader-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
            <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
          </svg>
          <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
          </div>
          <div class="sk-circle sk-circle-out">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
          </div>
        </div>
      </div>
    </div>
    <?php
    endif
    ?>
    <!-- jQuery-->
    <script src="assets/vendors/jquery-1.10.2.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <!-- Vendors-->
    <script src="assets/vendors/flexslider/jquery.flexslider-min.js"></script>
    <script src="assets/vendors/swipebox/js/jquery.swipebox.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendors/jquery-countTo/jquery.countTo.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/parallax/parallax.min.js"></script>
    <script src="assets/vendors/gmaps/gmaps.min.js"></script>
    <script src="assets/vendors/audiojs/audio.min.js"></script>
    <script src="assets/vendors/vide/jquery.vide.min.js"></script>
    <script src="assets/vendors/pageloading/js/svgLoader.min.js"></script>
    <script src="assets/vendors/pageloading/js/classie.min.js"></script>
    <script src="assets/vendors/pageloading/sidebartransition/js/sidebarEffects.min.js"></script>
    <script src="assets/vendors/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/vendors/wowjs/wow.min.js"></script>
    <script src="assets/vendors/skrollr.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Own script-->
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/elements.js"></script>
    <script src="assets/js/widget.js"></script>
  </body>
</html>
