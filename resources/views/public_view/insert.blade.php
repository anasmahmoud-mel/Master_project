<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>JURNY | Select Car step two</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <meta charset="UTF-8" />
        <!-- CSS Files -->
        <link href="{{asset('public_theme/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('public_theme/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/css/animate.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('public_theme/css/owl.theme.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/css/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('public_theme/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

        <!-- Colors -->
        <!-- <link href="css/css-index-blue.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <link href="{{asset('public_theme/css/css-index-yellow.css')}}" rel="stylesheet" media="screen"> 

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax blog-page" style="background-image:url('{{asset('public_theme/images/bg-baner.jpeg')}}');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center">

                        <!-- /.logo -->
                        <div class="logo wow fadeInDown" style="margin-top: 50px">
                            <a href="/jurny/main"><img src="{{asset('public_theme/images/logo.png')}}" alt="logo"></a>
                        </div>

                        <!-- /.main title -->
                        <h2 class="wow fadeInUp" style="margin-bottom: 50px">
                   Insert a jurny <b>&</b> anas 
                        </h2>

                    </div>
                </div>
            </div>
        </div>

       
           <!-- NAVIGATION -->
    <div id="menu">
        <nav class="navbar-wrapper navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand site-name" href="#top"><img
                            src="{{ asset('public_theme/images/logo2.png') }}" alt="logo"></a>
                </div>

                <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                    <ul class="nav navbar-nav">

                        <li><a href="booking">Booking bus</a></li>
                        <li><a href="">Services</a></li>
                        <li class="ymm-sw">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"
                                href="#">partner page<b class="caret"></b> </a>
                            <ul class="dropdown-menu navbar-nav">
                                <li><a href="insert">Add a jurny</a></li>
                                <li><a href="single.html">Single page</a></li>
                                <li><a href="single-left-sidebar.html">Single left sidebar</a></li>
                                <li><a href="single-right-sidebar.html">Single right sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="account">My account</a></li>
                        <li><a href="register">Login/Register</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

        <div id="booking-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <section id="id-130" class="booking booking-2 booking-car">
                            <div class="booking-section">
                                <div class="booking-top-nav wow fadeInTop animated" data-wow-delay="0.9s">
                                    <ol>
                                  
                                        <li class="bkg-2"><a href="#s-2" class="selected" >login </a></li>
                                        <li class="bkg-3"><a href="#s-3" >insart a jurny</a></li>
                                 
                                    </ol>
                                </div>

                                <div class="stpe-content">
                              <div class="direction-data wow fadeInDown animated"></div>
                                     <div class="cars-data wow fadeInUpBig animated"> 
                                        
                                      
                                       
                                        <div class="line"></div>
                                        <form class="" action="{{ route('partners.store') }}" method="post">
                                            @csrf
                                         
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="email">Email</label>                      
                                                <input class="form-control" id="email" type="text" name="partner_email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" id="password" type="password" name="partner_password">
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary"> Log in</button>
                                            </div>
                                        </form>
                                        <div class="line"></div>
                                    </div>
                                    <div class="client-data hide wow fadeInLeft">
                                        <br>
                                        
                                        
                                        <div class="clearfix"></div>
                                        <form action="{{ route('jurnys.store') }}" method="post">
                                            @csrf
                                         
                                            {{csrf_field()}}
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="from-insert">From</label>
                                                    <input class="form-control" id="from" name="from" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="to-insert">To</label>
                                                    <input class="form-control" id="to"  name="to" type="text">
                                                </div> 
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="date-insert">Date</label>
                                                    <input class="form-control" id="date-insert" type="date" name="date">
                                                </div> 
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Launch time</label>
                                                    <input class="form-control" id="launch-insert"  type="time" name="break">
                                                </div> 
                                            </div> 
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Arrival time</label>
                                                    <input class="form-control" id="arrival-insert"  type="time" name="arrival_time">
                                                </div> 
                                            </div> 
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Driver name</label>
                                                    <input class="form-control" id="driver-insert"  type="text" name="driver_name">
                                                </div> 
                                            </div> 
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Price</label>
                                                    <input class="form-control" id="driver-insert"  type="duble" name="price">
                                                </div> 
                                            </div> 
                                           
                                            <div class="clearfix"></div>

                                            <div class="text-center">
                                                <button type="submit" id="client-booking-back" class="btn btn-default">Back</button>
                                                <button type="submit" id="client-booking-next" class="btn btn-primary">Next</button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="pay-data hide wow fadeInLeft padding-10">
                                        <br>
                                        <h2>Payment section her :</h2>
                                        <br>
                                        <button type="button" id="pay-booking-back" class="btn btn-default">Back</button>
                                          
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="booking-summary padding-15 col-md-3">
                        <div class="">
                            <h2 class="wow fadeInLeft animated">Booking Summary</h2>
                            <div class="title-line wow fadeInRight animated"></div>
                        </div>
                        <!-- / .title summary-->
                        <div class="sum-direction-data wow fadeInRight animated"> 
                                <h3><strong class="color">1.</strong> Direction :</h3>
                                <ul class="report">
                                    <li><strong>From   :</strong><em class="em-picking-up"> Roissy </em></li>
                                    <li><strong>To :</strong><em class="em-dropping-off"> Paris nord</em></li>
                                    <li><strong>Date & Time :</strong><em class="em-time"> 28-12-2015 & 22:05:20 </em></li>
                                    <li><strong>Distance     : </strong><em class="em-distance"> 10km</em></li> 
                                </ul> 
                        </div>
                        <!-- / .sum-direction-data-->
                        <div class="sum-cars-data wow fadeInRight animated">
                            <h3><strong class="color">2.</strong> Your car :</h3>
                            <img src="{{asset('public_theme/images/cars/car1.png')}}" alt="" class="summary-img">
                        </div>
                        <!-- / .sum-cars-data-->
                        <div class="sum-client-data wow fadeInRight animated">
                            <h3><strong class="color">3.</strong> Personal info :</h3>
                                <ul class="report">
                                    <li><strong>Your Name :</strong><em class="em-name"> Kimaro kyoto </em></li>
                                    <li><strong>Email :</strong><em class="em-email"> kimaro@name.com</em></li>
                                    <li><strong>Phone :</strong><em class="em-phone"> +3 789 678 1234 </em></li>
                                </ul> 
                            
                        </div>
                        <!-- / .sum-client-data-->
                    </div>
                    <!-- /.booking-summary-->

                </div>
            </div>
        </div>


       
            
        <!-- /.footer -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="">
                        <div class="col-md-4 col-sm-6">
                            <h4>Where to find us</h4>
                            <p><strong>kimaroTec.</strong>
                                <br>13/25 New Avenue shibuia ayko
                                <br>Kyoto city <br >45Y  
                                <strong>Japon</strong>
                            </p>
                            <a href="contact.html">Go to contact page</a>
                            <hr class="hidden-md hidden-lg">
                        </div> 

                        <div class="col-md-4 col-sm-6">
                            <h4>Last news </h4>
                            <ul class="footer-news">
                                <li>
                                    <a href="single.html"><img src="{{asset('public_theme/images/cirecl-car.png')}}" alt=""> 
                                        <em>Mercidice class S 201</em>
                                        <span class="f-readMore">More .. </span>
                                    </a> 
                                </li>                                
                                <li>
                                    <a href="single.html"><img src="{{asset('public_theme/images/cirecl-car.png')}}" alt=""> 
                                        <em>Mercidice class S 201</em>
                                        <span class="f-readMore">More .. </span>
                                    </a> 
                                </li>                                
                                <li>
                                    <a href="single.html"><img src="{{asset('public_theme/images/cirecl-car.png')}}" alt=""> 
                                        <em>Mercidice class S 201</em>
                                        <span class="f-readMore">More .. </span>
                                    </a> 
                                </li>
                         
                            </ul>
                            <hr class="hidden-md hidden-lg">
                        </div>
                        <!-- /.col-md-4 -->
                        
                        <div class="col-md-4 col-sm-6">
                            <h4>Get the news</h4>
                            <div class="newsletter-box">
                                <div class="newsletter">  
                                    <div class="newsletter-content"> 
                                        <p>Join our newsletter of Lorem Ipsum available, but the majority have suffered alteration .</p>
                                    </div> 
                                    <div class="newsletter-form">
                                        <form>
                                            <input type="text" placeholder="Enter your email...." required=""/>
                                            <input type="submit" value=" ">
                                        </form>
                                    </div>
                                    <div class="clear"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-4 -->

                    </div>
                    <!-- /.row -->
                </div>
            </div>	
            <hr>
            <div class="footer-bottum">
                <div id="copyright">
                    <div class="container">
                        <div class="col-sm-4 col-sm-offset-4">
                            <!-- /.social links -->
                            <div class="social text-center">
                                <ul>
                                    <li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>	

                            <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright VTC Theme 2016 - Template by <a href="http://www.Kimarotec.com">kimaroTheme</a></div>
                            <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                        </div>	
                    </div>
                </div>

            </div>
        </footer>


        <!-- /.javascript files -->
        <script src="{{asset('public_theme/js/jquery.js')}}"></script>
        <script src="{{asset('public_theme/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public_theme/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('public_theme/js/custom.js')}}"></script>
        <script src="{{asset('public_theme/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('public_theme/js/wow.min.js')}}"></script>
        <script src="{{asset('public_theme/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public_theme/js/bootstrap-hover-dropdown.js')}}"></script>
        <script src="{{asset('public_theme/js/google.js')}}"></script>
        <script src="{{asset('public_theme/js/booking.js')}}"></script>
        <script src="{{asset('public_theme/js/jquery.validate.min.js')}}"></script> 
        <script>
            new WOW().init();


        </script>
    </body>
</html>