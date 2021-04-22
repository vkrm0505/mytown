<!DOCTYPE html>


<?php include('../../../connection.php');

$q1="SELECT * FROM workers where type='electrician' ORDER BY name ASC";
$res = $con->query($q1);

?>




<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js"> <![endif]-->
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    
    <meta name="title"
          content="Garden Contractors in Hyderabad,Garden Contractors in Secunderabad | Ramukaka Household services in Hyderabad,Secunderabad">
    <meta name="description"
          content="Ramukaka is a service oriented company providing assistance for day to day household services. Currently in Hyderabad only.We provide 150 services and have more than 15000 service providers throughout the city.Call 40405050 to know more">
    <meta name="keywords"
          content="Garden Contractors in Hyderabad, Garden Contractors in Secunderabad, Garden Contractors Hyderabad, Garden Contractors Secunderabad, list of Garden Contractors in Hyderabad, Garden Contractors list">

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Garden Contractors | My Town Home-Services Garden Services</title>

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE = edge">

    <!-- Stylesheets -->
            <link href="../../../assets/css/styles.min.css" rel="stylesheet"/>
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="../../../assets/images/favicon1.ico" type="image/x-icon">
    <link rel="icon" href="../../../assets/images/favicon1.ico" type="image/x-icon">


    <script src="../../../assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        CI_ROOT = "";
    </script>

    <script type="text/javascript">
        window.heap = window.heap || [], heap.load = function (t, e) {
            window.heap.appid = t, window.heap.config = e;
            var a = document.createElement("script");
            a.type = "text/javascript", a.async = !0, a.src = ("https:" === document.location.protocol ? "https:" : "http:") + "//cdn.heapanalytics.com/js/heap-" + t + ".js";
            var n = document.getElementsByTagName("script")[0];
            n.parentNode.insertBefore(a, n);
            for (var o = function (t) {
                return function () {
                    heap.push([t].concat(Array.prototype.slice.call(arguments, 0)))
                }
            }, p = ["clearEventProperties", "identify", "setEventProperties", "track", "unsetEventProperty"], c = 0; c < p.length; c++)heap[p[c]] = o(p[c])
        };
        heap.load("705504568");
    </script>


</head>

<body>


<!-- Start Header Section -->
<header id="header">
    <nav class="main-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="row">

                <div class="navbar-header">
                    <div class="logo">
                        <a href="../../../index.php" class="navbar-brand"><h2>My Town Home-Services</h2></a>
                    </div>
                </div>

                <!--<div class="">-->
                <div class="top-contact">
                    <span class="num"><i class="fa fa-phone"> </i>XXX-XXXXXXX </span>
                </div>
                <!--</div>-->

                <!-- Start Navigation Menu -->

                <div class="">
                    <div id="main_navMenu">
                        <ul class="nav navbar-nav">
                            <li class="hiw-xs">
                                <a href="" data-toggle="modal" data-target="#howItWorks"> <i
                                        class="fa fa-lightbulb-o fa-2x"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown"> <i
                                        class="fa fa-bars fa-2x"></i></a>
                                <ul class="dropdown-menu">


                                                                            <li><a href="../../../aboutUs"><i
                                                    class="fa fa-info pull-right"></i>About Us </a></li>
                                        <li><a href="../../../home/login"><i
                                                    class="fa fa-sign-in pull-right"></i>Login </a></li>
                                        <li><a href="../../../home/spRegistration"><i
                                                    class="fa fa-pencil pull-right"></i>Join Us </a></li>
                                        <li><a href="../../../home/recommend"><i
                                                    class="fa fa-comment pull-right"></i>Recommend </a></li>
                                    
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- End Navigation Menu -->
            </div>
        </div>
    </nav>
</header>
<!-- End Header Section -->


<!-- Start Slider Section -->
<section id="main-slider" class="slider">

    <!-- Start Slider -->
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="../../../main-slider/ramukaka-01.jpg" alt="Ramukaka Technician"/>

                <div class="flex-caption">
                    <h3>Technician</h3>
                </div>
            </li>
           
            <li>
                <img src="../../../main-slider/ramukaka-08.jpg" alt="Ramukaka Carpenter"/>

                <div class="flex-caption">
                    <h3>Carpenter</h3>

                </div>
            </li>
           
            <li>
                <img src="../../../main-slider/ramukaka-10.jpg" alt="Ramukaka Plumber"/>

                <div class="flex-caption">
                    <h3>Plumber</h3>

                </div>
            </li>
           
            <li>
                <img src="../../../main-slider/ramukaka-18.jpg" alt="Ramukaka Gardner"/>

                <div class="flex-caption">
                    <h3>Gardner</h3>
                </div>
            </li>


        </ul>
    </div>
    <!-- End Slider -->

    <!-- Start How It Works -->
    <div class='hiw-wrapper-xl'>
            <span id="appearOnClick" class='hiwDiv animated fadeInUp'>
             <ul class="hiw-list">
                 <li><span class="hiw-no">1</span> <span class="hiw-text">You share your Service requirement and Personal details</span>
                 </li>
                 <li><span class="hiw-no">2</span> <span class="hiw-text">Your requirement is sent to the Top Service Providers</span>
                 </li>
                 <li><span class="hiw-no">3</span> <span
                         class="hiw-text">Service Providers compete to offer you the best quotes </span></li>
                 <li><span class="hiw-no">4</span> <span class="hiw-text">You pick a Service Provider that best fits your budget and requirement</span>
                 </li>
             </ul>
            </span>
        <button id='btnHowItWorks' class=" btn btn-hiw">+ How it works</button>
    </div>
    <!-- End How It Works -->

    <!-- Start Main Search Box -->
    <div id="main-searchWraper">
        <div class="container">

            <form class="form-inline" action="../../services/raiseTicket" method="POST">
                <div id="searchFrom" class="row text-center">
                    <!-- Normal Form -->
                    <div id="">
                        <div class="input-cont2">
                            <div class="form-group icon-addon1">
                                <i class="fa fa-location-arrow"></i>
                                <a class="btn btn-select">
                                    <input type="hidden" class="btn-select-input" id="" name="city" value="" />
                                    <span class="btn-select-value">Select an Item</span>
                                    <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                                    <ul>
                                        <li class="selected">Hyderabad</li>
                                    </ul>
                                </a>
                            </div>
                        </div>

                        <div class="input-cont3">
                            <div class="form-group icon-addon2">
                                <i class="fa fa-map-marker"></i>
                                <input type="text" class="form-control" name="location" id="location"
                                       value="" tabindex="1"
                                       placeholder="Area Eg: SP Road, RP Road"
                                       required>
                            </div>
                        </div>

                        <div class="input-cont3">
                            <div class="form-group icon-addon2">
                                <i class="fa fa-wrench"></i>
                                <input type="text" id="service_check" class="form-control  services"
                                       name="services"

                                       placeholder="Service Eg: carpenter,plumber etc" required>
                            </div>
                        </div>

                        <div class="input-cont2">
                            <div class="form-group icon-addon2">
                                <i class="fa fa-mobile"></i>
                                <input type="text" class="form-control "
                                       name="mobile" id="mob" tabindex="2"
                                       placeholder="Mobile No" required>
                            </div>
                        </div>

                        <div class="input-cont1">
                            <button type="button" id="desktop_form" class="btn btn-search pull-right"><i
                                    class="fa fa-arrow-right"></i> Proceed
                            </button>
                        </div>
                    </div>
                </div>

                <!-- OTP Form -->
                <div class="otp-wrap hidden" id="otp_form">

                    <div id="otpFrom" class="row text-center">

                        <div class="input-cont2">
                            <a href="#" id="goBack" class="btn-back"><i class="fa fa-chevron-circle-left"></i></a>
                        </div>

                        <div class="input-cont4">
                            <div class="form-group icon-addon2">
                                <i class="fa fa-key"></i>
                                <input type="text" class="form-control "
                                       name="otp" id="cust_otp"
                                       placeholder="Enter OTP sent on your mobile" required>
                            </div>
                        </div>

                        <div class="input-cont1">
                            <button type="submit" class="btn btn-search pull-right"><i class="fa fa-thumbs-up"></i>
                                Go Ahead
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- End Main Search Box -->
</section>
<div class="clearfix"></div>
<!-- End Slider Section -->


<!-- Start Mobile Form Section -->
<section class="mobile-form">
    <div class="mobile-form-body mform-border">
        <div class="row">
            <div class="col-md-12">
                <form action="../../services/raiseTicket" method="POST">
                    <div id="mobile-search-form" class="form-horizontal col-xs-12">
                        <div class="input-cont2">
                            <div class="form-group icon-addon1">
                                <i class="fa fa-location-arrow"></i>
                                <a class="btn btn-select bg-white">
                                    <input type="hidden" class="btn-select-input" name="city" value="" />
                                    <span class="btn-select-value">Select an Item</span>
                                    <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                                    <ul>
                                        <li class="selected">Hyderabad</li>
                                        <!--<li>Bangalore</li>
                                        <li>Mumbai</li>
                                        <li>Ahammadabad</li>-->
                                    </ul>
                                </a>

                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-cont3">
                            <div class="form-group icon-addon2">
                                <i class="fa fa-map-marker"></i>
                                <input type="text" class="form-control" name="location" id="location1"
                                       value="" tabindex="1"
                                       placeholder="Area Eg: SP Road, RP Road"
                                       required>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="input-cont3">
                            <div class="form-group icon-addon2">
                                <i class="fa fa-wrench"></i>
                                <input type="text" id="service_check_mobile" class="form-control  services"
                                       name="services"

                                       placeholder="Service Eg: carpenter,plumber etc" required>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-cont2">
                            <div class="form-group icon-addon2">
                                <i class="fa fa-mobile"></i>
                                <input type="text" class="form-control "
                                       name="mobile" id="mob1" tabindex="2"
                                       placeholder="Mobile No" required>
                            </div>
                        </div>
                        <button class="btn btn-default btn-msearch" aria-label="Go" type="button" id="mobile_form">
                            <i class="fa fa-arrow-right"></i>Proceed
                        </button>
                    </div>

                    <div id="mobile-otp-form" class="form-horizontal col-xs-12 hidden">
                        <div class="input-cont5">
                            <div class="form-group bg-white">
                                <a href="#" id="goBack_mobile" class="btn-mback"><i class="fa fa-chevron-circle-left"></i></a>
                            </div>
                        </div>


                        <div class="input-cont6">
                            <div class="form-group icon-addon2">
                                <i class="fa fa-key"></i>
                                <input type="text" class="form-control "
                                       name="otp" id="cust_otp1"
                                       placeholder="Enter OTP sent on your mobile" required>
                            </div>
                        </div>
                        <button class="btn btn-default btn-msearch" aria-label="Go" type="submit">
                            <i class="fa fa-thumbs-up"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Mobile Form Section -->

<script>
    var temp= Garden Contractors    /*if (temp) {
       localStorage.setItem('services', temp);
        $("#service_check").val(temp);
        $("#service_check_mobile").val(temp);
    }*/
</script><section id="services">
    <div class="service-header">
        <h1 class="text-center">Garden Contractors</h1>
        <div class="round-arrow"><i class="fa fa-angle-down"></i></div>
    </div>

    <div class="container">
        <div class="main-spDiv">

            <?php while($an = $res->fetch_assoc()) { ?>
                
                    <div class="sp-list">

                        <div class="row">
                            <div class="col-md-9 col-sm-6 col-xs-12">
                             <h1><?php echo $an['name']; ?> </h1>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 ele-align">
                                <a class="btn btn-mobile sp-mobile"><i class="fa fa-phone"> </i> <?php echo $an['Mobile']; ?>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                                <p class="skill"><?php echo $an['type']; ?></p>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <p class="loc"><?php echo $an['location']; ?></p>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <p class="exp"><?php echo $an['experiance']; ?> of experience </p>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 ele-align">
                                <div id="stars-existing" class="starrr" data-rating=<?php echo $an['experiance']; ?> ></div>
                              
                            </div>
                        </div>
                    </div>
                            <?php } ?>
            
            
                                
        </div>
    </div>

</section>

<script>
    $(document).ready(function () {
            $('html, body').animate({
                scrollTop: ($("#services").offset().top) - 67
            }, 2000);
    });
</script>

<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 footer-text1">
                <p> © <a href="" class="rext-red">Ramukaka </a> 2013-2016 All rights reserved.</p>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 footer-text2">
                <ul class="list-inline">
                    <li><a href="../../services">Services </a></li>
                    <li>|</li>
                    <li><a href="../../../home/contactUs">Contact Us </a></li>
                    <li>|</li>
                    <li><a href="../../../home/privacyPolicy">Privacy Policy </a></li>
                    <li>|</li>
                    <li><a href="../../../home/termsOfUse">Terms of Use </a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footer-text3">
                <ul class="list-inline">
                    <li><a href="" target="_blank"><i class="fa fa-facebook" > </i> </a></li>
                    <li><a href="" target="_blank"><i class="fa fa-twitter"> </i> </a></li>
                    <li><a href="" target="_blank"><i class="fa fa-google-plus"> </i> </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div id="fb-root"></div>
<!-- Modal Start -->
<div id="howItWorks" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">How It Works?</h1>
            </div>
            <div class="modal-body mobile-hiw-list">
                <ol>
                    <li>You share your Service requirement and Personal details</li>
                    <li>Your requirement is sent to the Top Service Providers</li>
                    <li>Service Providers compete to offer you the best quotes</li>
                    <li>You pick a Service Provider that best fits your budget and requirement</li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-yellow" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- Modal End -->


</body>
</html>


<script src="http://maps.googleapis.com/maps/api/js?libraries=places" type="text/javascript"></script>

    <script src="../../../assets/js/scripts.min.js"></script>
