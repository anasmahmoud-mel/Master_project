<!DOCTYPE html>
<html>

<head>

    <!-- /.website title -->
    <title>JURNY | Select bus step two</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta charset="UTF-8" />
    <!-- CSS Files -->
    <link href="{{ asset('public_theme/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('public_theme/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public_theme/fonts/icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('public_theme/css/animate.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('public_theme/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('public_theme/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('public_theme/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <!-- Colors -->
    <!-- <link href="css/css-index-blue.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
    <link href="{{ asset('public_theme/css/css-index-yellow.css') }}" rel="stylesheet" media="screen">

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

</head>

<body data-spy="scroll" data-target="#navbar-scroll">

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div id="top"></div>

    <!-- /.parallax full screen background image -->
    <div class="fullscreen landing parallax blog-page"
        style="background-image:url('{{ asset('public_theme/images/bg-baner.jpeg') }}');" data-img-width="2000"
        data-img-height="1333" data-diff="100">

        <div class="overlay">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 text-center">

                    <!-- /.logo -->
                    <div class="logo wow fadeInDown" style="margin-top: 50px">
                        <a href="/jurny/main"><img src="{{ asset('public_theme/images/logo.png') }}" alt="logo"></a>
                    </div>

                    <!-- /.main title -->
                    <h2 class="wow fadeInUp" style="margin-bottom: 50px">
                        Step two : Select your bus <b>&</b> Payments
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
                                    <li class="bkg-1 done"><a href="main">Find direction</a></li>
                                    <li class="bkg-2"><a href="#s-2" class="selected">Select your jurny</a></li>
                                    <li class="bkg-3"><a href="#s-3">Personal info & payment</a></li>
                                    <li class="bkg-4"><a href="#s-3">Final</a></li>
                                </ol>
                            </div>

                            <div class="stpe-content">
                                <div class="direction-data wow fadeInDown animated"></div>
                                <div class="cars-data wow fadeInUpBig animated">


                                    @foreach($jurny as $jurnys)
                                    <div class="line"></div>
                                    <div class="car-item wow fadeInLeft animated">
                                        <div class="li-car col-xs-12 col-sm-5 col-md-5">
                                            <img src="{{ asset('public_theme/images/cars/car2.png') }}" alt=""
                                                class="car">
                                        </div>
                                      
                                        <div class="li-car-name col-sm-5 col-md-5">
                                            <h2> FROM : {{$jurnys->from}}</h2>
                                            <h2> TO : {{$jurnys->to}}</h2>
                                            <p>Max passanger : 5</p>
                                            <div class="car-details">
                                                <div class="">
                                                    <ul class="car-features">
                                                        <li><i class="fa fa-briefcase" data-tooltip=""></i></li>
                                                        <li><i class="fa fa-asterisk" data-tooltip=""></i></li>
                                                        <li><i class="fa fa-rss" data-tooltip=""></i></li>
                                                        <li><i class="fa fa-certificate" data-tooltip=""></i></li>
                                                        <li><i class="fa fa-flash" data-tooltip=""></i></li>
                                                        <li><i class="fa fa-music" data-tooltip=""></i></li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                    <ul class="checklist">
                                                        <li><i class="fa fa-check"></i> Pay at place or pay today</li>
                                                        <li><i class="fa fa-check"></i> Pay at place or pay today</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="li-car-price col-xs-12 col-sm-2 col-md-2">
                                            <div class="car-price-content">
                                                <b class="overflow car-price">29</b><b class="price-currency">$</b><br>
                                                <del class="overflow del-car-price">39</del><del
                                                    class="del-price-currency">$</del>
                                            </div>
                                            <a class="btn btn-default btn-nxt-booking">Next</a>
                                        </div>
                                   
                                    </div>
                                    @endforeach
                                    <div class="line"></div>
                               
                                </div>
                             
                                <div class="client-data hide wow fadeInLeft">
                                    <br>
                                    <form class="display_none" action="customer-orders.html" method="post">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" id="email" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control" id="password" type="password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>
                                                Log in</button>
                                        </div>
                                    </form>

                                    <div class="clearfix"></div>
                                    <form action="{{ route('bookings.store') }}" method="post">
                                        @csrf
                
                                        {{csrf_field()}}
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name-login">Name</label>
                                                <input class="form-control" id="name-login" type="text" name="booking_name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email-login">Email</label>
                                                <input class="form-control" id="email-login" type="text" name="booking_email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone-login">Phone</label>
                                                <input class="form-control" id="phone-login" type="text" name="booking_mobile">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="passenger-login">Passenger</label>
                                                <input class="form-control" id="passenger-login" min="1" max="8"
                                                    type="number" name="booking_passenger">
                                            </div>
                                        </div>
                                      
                                        <div class="clearfix"></div>

                                        <div class="text-center">
                                            <button type="submit" id="client-booking-back"
                                                class="btn btn-default">Back</button>
                                            <button type="submit" id="client-booking-next"
                                                class="btn btn-primary">Next</button>
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
                            <li><strong>From :</strong><em class="em-picking-up"> Roissy </em></li>
                            <li><strong>To :</strong><em class="em-dropping-off"> Paris nord</em></li>
                            <li><strong>Date & Time :</strong><em class="em-time"> 28-12-2015 & 22:05:20 </em></li>
                            <li><strong>Distance : </strong><em class="em-distance"> 10km</em></li>
                        </ul>
                    </div>
                    <!-- / .sum-direction-data-->
                    <div class="sum-cars-data wow fadeInRight animated">
                        <h3><strong class="color">2.</strong> Your car :</h3>
                        <img src="{{ asset('public_theme/images/cars/car1.png') }}" alt="" class="summary-img">
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
                            <br>Kyoto city <br>45Y
                            <strong>Japon</strong>
                        </p>
                        <a href="contact.html">Go to contact page</a>
                        <hr class="hidden-md hidden-lg">
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <h4>Last news </h4>
                        <ul class="footer-news">
                            <li>
                                <a href="single.html"><img src="{{ asset('public_theme/images/cirecl-car.png') }}"
                                        alt="">
                                    <em>Mercidice class S 201</em>
                                    <span class="f-readMore">More .. </span>
                                </a>
                            </li>
                            <li>
                                <a href="single.html"><img src="{{ asset('public_theme/images/cirecl-car.png') }}"
                                        alt="">
                                    <em>Mercidice class S 201</em>
                                    <span class="f-readMore">More .. </span>
                                </a>
                            </li>
                            <li>
                                <a href="single.html"><img src="{{ asset('public_theme/images/cirecl-car.png') }}"
                                        alt="">
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
                                    <p>Join our newsletter of Lorem Ipsum available, but the majority have suffered
                                        alteration .</p>
                                </div>
                                <div class="newsletter-form">
                                    <form>
                                        <input type="text" placeholder="Enter your email...." required="" />
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
                                <li><a class="wow fadeInUp" href="https://twitter.com/"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i
                                            class="fa fa-google-plus"></i></a></li>
                                <li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright VTC Theme 2016 -
                            Template by <a href="http://www.Kimarotec.com">kimaroTheme</a></div>
                        <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </footer>


    <!-- /.javascript files -->
    <script src="{{ asset('public_theme/js/jquery.js') }}"></script>
    <script src="{{ asset('public_theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public_theme/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('public_theme/js/custom.js') }}"></script>
    <script src="{{ asset('public_theme/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('public_theme/js/wow.min.js') }}"></script>
    <script src="{{ asset('public_theme/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public_theme/js/bootstrap-hover-dropdown.js') }}"></script>
    <script src="{{ asset('public_theme/js/google.js') }}"></script>
    <script src="{{ asset('public_theme/js/booking.js') }}"></script>
    <script src="{{ asset('public_theme/js/jquery.validate.min.js') }}"></script>
    <script>
        new WOW().init();

    </script>
</body>

</html>
