<!DOCTYPE html>
<?php include('../../connection.php');
//echo"<script>alert('ahsjgas')</script>";
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$location=$_POST['location'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$bussiness_name=$_POST['bname'];
$services=$_POST['services'];
$city=$_POST['city'];
$address=$_POST['address'];
$photo=$_POST['photo'];
$experiance=$_POST['experiance'];
$q1 = "INSERT INTO workers (name, location, Mobile, Email, Address, services, experiance, rating, bname, photo)
			 VALUES ('$name','$location','$mobile','$email','$address','$services','$experiance',0,'$bussiness_name','$photo')";
		
if($con->query($q1))
{

    //header("Location:../../index.php");
}
else
	echo "error".$con->error;

$con->close();
}


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
    <meta name="detectify-verification"
          content="5ddcc938760fb168b3fec8f8c31428b9"/>

    
    <meta name="title"
          content="Household Services, Carpenters, Electricians, Plumbers, Painters, Caterers in Hyderabad-Ramukaka.com">
    <meta name="description"
          content="Ramukaka providing household services in Hyderabad, Electrician Services, Carpenter services, Plumber services, gas stove repair, Computer Repair, Laptop Repair, Caterers in Hyderabad | Call Ramukaka ☎ 040-40405050 or book online.">
    <meta name="keywords"
          content="Ramukaka,cab services,Real Estate ,household services,household chores, A/C Repair , A/C Shifting , A/C Wiring , Accountants , Air Ticketing , Animal Doctor , Baby Sitter , Bike Insurance , Bike Rentals , Birth Certificate , Bus Ticketing , Cab Services , Car Insurance , Car Rentals , Catering , CCTV , Classifieds , Computer , Cool Roof Paint , Cooler , Curtain Rods Installation , Death Certificate , Dish Tv Installation , Dishwasher , Dog Food Suppliers , Dog Trainers , Drivers , Elderly Care , Epbx , Event Management , Fan , Firm Registration , Fridge , Furniture , Furniture Repair , Gardeners , Gas Stove , Geaser , Generators , Generators On Rent , Grocery , House Cleaning , House Tax , Insurance Policy , Inverters , Inverter Wiring , It Returns , Labour Licence , Loans , Marketing Staff , Mixer , Mosquito Nets , Office Boy , Oven , Packers & Movers , Pan Card , Passports Agents , Pest Control , Pf filling , Physiotherapist , Plumbing , Power Backups , Printer , Property Documentation Check , Rto Works , Secondhand Laptops , Security Guard , Septic Tank Cleaner , Software Installation , Tele Callers , Temporary Cook , Temporary Drivers , Temporary Staff , Tiles In Bathroom , To-Let , Towing Services , Train Ticketing , Tv , Vacuum Cleaners , Washing Machine , Water Heater , Water Pump , Water Purifier , Water Tank Cleaners , White Washing ,house keeping">

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="google-site-verification" content="_jbR3Wnmi0dtlvczdTD5jUH9hrgZ5U9aV-9mSqTQqg0"/>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Household Services, Carpenters, Electricians, Plumbers, Painters, Caterers in Hyderabad-Ramukaka.com</title>

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE = edge">

    <!-- Stylesheets -->
            <link href="../../assets/css/styles4853654356.min.css" rel="stylesheet"/>
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="../../assets/images/favicon1.ico" type="image/x-icon">
    <link rel="icon" href="../../assets/images/favicon1.ico" type="image/x-icon">


    <script src="../../assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        CI_ROOT = "../../index.html";
    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-50072457-1', 'auto');
        ga('send', 'pageview');

    </script>


</head>
<body>
<div class="page-overlay"></div>
<!-- Start Header Section -->
<header id="header">
    <nav class="main-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="row">

                <div class="navbar-header">

                    <div class="logo">
                        <a href="../../index.html" class="navbar-brand"><img
                                src="../../assets/images/ramukaka-logo.png" alt=""></a>
                    </div>
                    <div class="mlogo">
                        <a href="../../index.html" class="navbar-brand"><img
                                src="../../assets/images/mlogo.png" alt=""></a>
                    </div>
                </div>

                <div class="top-contact">
                    <span class="num"><i class="fa fa-phone"> </i>040-40405050 </span>
                </div>

                <!-- Start Navigation Menu -->

                <div id="main_navMenu">
                    <ul class="nav navbar-nav">
                        <li class="hiw-xs">
                            <a href="" data-toggle="modal" data-target="#howItWorks"><img
                                    src="../../assets/images/bright-lightbulb.png"
                                    class="img-responsive"></a>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><i class="fa fa-bars fa-2x"></i></button>
                                <div class="dropdown-content">


                                                                            <a href="../../aboutUs"><i
                                                class="fa fa-info pull-right"></i>About Us </a>
                                        <a href="../../home/login"><i
                                                class="fa fa-sign-in pull-right"></i>Login </a>
                                        <a href="../../home/spRegistration"><i
                                                class="fa fa-pencil pull-right"></i>Join Us </a>
                                        <a href="../home/recommend"><i
                                                class="fa fa-comment pull-right"></i>Recommend </a>
                                    
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- End Navigation Menu -->
            </div>
        </div>
    </nav>
</header>


<!-- Start Header Section -->

<!-- End Header Section -->


<div class="container header-padding">

<div class="row">

    <div class="col-md-9 animated slideInRight">

        <div class="section-title text-center black">
            <h1 class="thin caps">Service Provider Registration</h1>
            <div class="line"> <hr class="red-line"> </div>
        </div>

        
        

        <form role="form" action="index.php" method="POST" >

            <div class="col-md-6">

                <div class="form-group">
                    <label for="name">
                        Service Provider Name
                    </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"
                           value="" required>
                </div>

                <div class="form-group">
                    <label for="location">
                        Location
                    </label>
                    <input type="text" class="form-control" name="location" id="location"
                           placeholder="Enter location Eg : Afzalgunj" value="" required>
                    <input type="hidden" name="geo_lat">
                    <input type="hidden" name="geo_lng">
                </div>


                <div class="form-group" id="aTextBoxesGroup">

                    <label for="mobile">
                        Mobile No
                    </label>
                    <input type="text" class="form-control" name="mobile" id="mobile" 
                           placeholder="Enter 10 digit mobile no " value="" required>
                </div>

                <div class="form-group" id="TextBoxesGroup">

                    <div id="TextBoxDiv1">
                        <label for="exampleInputEmail1">
                            Email Id
                        </label>

                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                               placeholder="Enter email" value=""></div>
                </div>




            </div>

            <div class="col-md-6 ">

                <div class="form-group">
                    <label for="addservices">
                        Business Name
                    </label>
                    <input type="text" class="form-control" name="bname" id="bname"
                           placeholder="Enter name of business Eg:Unique Plumbers" value="">
                </div>

                <div class="form-group">
                    <label for="addservices">
                        Service Type
                    </label>
                    <input type="text" class="form-control" name="services" id="addservices"
                           placeholder="Add multiple services. Eg: Loans, Cabs, Drivers"
                           value="" required>
                </div>


                <div class="form-group">
                    <label for="city">
                        City
                    </label>
                    <input type="text" class="form-control" name="city" id="city"
                           placeholder="Enter name of city Eg: Hyderabad">
                </div>
                
                <div class="form-group">
                    <label for="city">
                        Experiance
                    </label>
                    <input type="number" class="form-control" name="experiance" 
                           placeholder="Enter Experiance">
                </div>
                
                <!-- <div>
                     <button type="button" id="addButton1" class="btn btn-info">
                         Add Mobile No
                     </button>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <button type="button" id="removeButton1" class="btn btn-danger">
                         Remove Mobile No
                     </button>
                     <br><br>
                 </div>
 -->
            </div>


                <div class="col-md-10 col-md-offset-1 col-xs-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="address">
                                Business Address
                            </label>
                            <textarea class="form-control" rows="3" name="address" id="address"
                                      placeholder="Enter business address"
                                      required></textarea>
                        </div>

                        <label for="uploadphoto">
                            Upload Photo (Format should be .jpg or .png or .jpeg)
                        </label>
                        <input type="file" class="form-control" name="photo" >
                    </div>
                </div>

                <div class="col-md-5 col-md-offset-3 col-xs-12">


                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox" required>
                                I agree to the <u><a target="_blank" href="../home/spTermsOfUse">terms and conditions.</a></u>
                            </label>
                        </div>
                    </div>

                    <div>
                        <input type="submit" name="submit" class="btn btn-info">
                        
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-default">
                            Reset
                        </button>
                        <br><br>
                    </div>


            </div>

        </form>
        <form action="index.php" method="post">
        	<input type="submit" name="submit" value="submit">
        </form>
    </div>




<!--<script src="http://maps.googleapis.com/maps/api/js?sensor=true&libraries=places" type="text/javascript"></script>-->

<script>
    $(document).ready(function () {


        var options = {
            bounds: new google.maps.Circle({
                center: new google.maps.LatLng(17.3660, 78.4760),
                radius: 5000
            }).getBounds(),
            //  types:  ['geocode'],
            componentRestrictions: {country: 'in'}
        };

        var input1 = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(input1, options);*/


       /* var counter = 2;
        var counter1 = 2;
        $("#addButton").click(function () {

            if (counter > 3) {
                alert("Only 3 fields are allowed");
                return false;
            }

            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id", 'TextBoxDiv' + counter);

            newTextBoxDiv.after().html('<div class="form-group"><label>Email #' + counter + ' : </label>' +
                '<input type="email" class="form-control" name="mail' + counter +
                '" id="mail' + counter + '" value="" ></div>');

            newTextBoxDiv.appendTo("#TextBoxesGroup");
            counter++;

        });

        $("#removeButton").click(function () {
            if (counter == 2) {
                alert("No more fields to remove");
                return false;
            }

            counter--;

            $("#TextBoxDiv" + counter).remove();

        });


        $("#addButton1").click(function () {

            if (counter1 > 3) {
                alert("Only 3 fields are allowed");
                return false;
            }

            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id", 'aTextBoxDiv' + counter1);

            newTextBoxDiv.after().html('<div class="form-group"><label>Mobile No #' + counter1 + ' : </label>' +
                '<input type="number" class="form-control" name="mobile' + counter1 +
                '" id="mobile' + counter1 + '" value="" ></div>');

            newTextBoxDiv.appendTo("#aTextBoxesGroup");
            counter1++;

        });

        $("#removeButton1").click(function () {
            if (counter1 == 2) {
                alert("No more fields to remove");
                return false;
            }

            counter1--;

            $("#aTextBoxDiv" + counter1).remove();

        });*/


    });
</script>
<div class="col-md-3  col-xs-12">
    <div style="margin:0px auto;max-width:300px;">

        <!--Display the Slider -->
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto 20px -7px;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><a href="../../services/car-rentals-within-city/hyderabad" target="_blank"><img src="../../slider/Ramukaka%20Cabs.jpeg" alt="Ramukaka Cabs" /></a></li>
                <li><a href="../../services/carpenter/hyderabad" target="_blank"><img src="../../slider/Ramukaka%20Carpenter.jpg" alt="Carpenter" /></a></li>
                <li><a href="../../services/north-indian-caterers/hyderabad" target="_blank"><img src="../../slider/ramukaka%20Catering.jpg" alt="Catering" /></a></li>
                <li><a href="../../services/cctv-repair/hyderabad" target="_blank"><img src="../../slider/Ramukaka%20CCTV%20.jpg" alt="CCTV " /></a></li>
                <li><a href="../../services/full-home-cleaning/hyderabad" target="_blank"><img src="../../slider/Ramukaka%20DishWasher.jpg" alt="DishWasher" /></a></li>
                <li><a href="../../services/drivers-temporaryhourly-basiswithin-city/hyderabad" target="_blank"><img src="../../slider/ramukaka%20Drivers.jpg" alt="Drivers" /></a></li>
                <li><a href="../../services/painter-cool-roof-coating/hyderabad" target="_blank"><img src="../../slider/Ramukaka%20Flooring.jpg" alt="Cool Roof Painting" /></a></li>
                <li><a href="../../services/gardening-services/hyderabad" target="_blank"><img src="../../slider/Ramukaka%20Gardener.jpg" alt="Gardener" /></a></li>
                <li><a href="../../services/inverter-repair/hyderabad" target="_blank"><img src="../../slider/ramukaka%20Inverters.jpg" alt="Inverters" /></a></li>
                <li><a href="../../index.html" target="_blank"><img src="../../slider/ramukaka%20Loans.jpg" alt="Loans" /></a></li>
                <li><a href="../../services/mosquito-nets-screens/hyderabad" target="_blank"><img src="../../slider/ramukaka%20Mosquito%20Nets.jpg" alt="Mosquito Nets" /></a></li>
                <li><a href="../../services/packers-and-movers-within-city/hyderabad" target="_blank"><img src="../../slider/ramukaka%20Packers.jpg" alt="Packers & Movers" /></a></li>
                <li><a href="../../services/purohitpooja-services-baby-shower/hyderabad" target="_blank"><img src="../../slider/ramukaka%20Pandit.jpg" alt="Pandit" /></a></li>
                <li><a href="../../services/plumber/hyderabad" target="_blank"><img src="../../slider/ramukaka%20plumber.jpg" alt="Plumber" /></a></li>
                <li><a href="../../services/electrician/hyderabad" target="_blank"><img src="../../slider/ramukaka%20Technician.jpg" alt="Technician" /></a></li>
                <li><a href="../../services/bus-ticketing-agents/hyderabad" target="_blank"><img src="../../slider/ramukaka%20Ticketing.jpg" alt="Bus Ticketing" /></a></li>
                <li><a href="../../index.html" target="_blank"><img src="../../slider/Ramukaka%20Towing.jpg" alt="Towing" /></a></li>
                <li><a href="../../services/geyser-installation-repair/hyderabad" target="_blank"><img src="../../slider/Ramukaka%20Water%20Heater.jpg" alt="Water Heater" /></a></li>
                <li><a href="../../services/water-tank-cleaning/hyderabad" target="_blank"><img src="../../slider/Ramukaka%20Watertank%20Cleaners.jpg" alt="Watertank Cleaners" /></a></li>
                <li><a href="../../services/painter-interior-and-exterior-works/hyderabad" target="_blank"><img src="../../slider/ramukaka%20White%20Washing.jpg" alt="White Washing" /></a></li>

            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="../../slider/Ramukaka%20Cabs-tn.jpeg" alt="Ramukaka Cabs"/></li>
                <li><img src="../../slider/Ramukaka%20Carpenter-tn.jpg" alt="Ramukaka Carpenter"/></li>
                <li><img src="../../slider/ramukaka%20Catering-tn.jpg" alt="Ramukaka Catering"/></li>
                <li><img src="../../slider/Ramukaka%20CCTV%20-tn.jpg" alt="Ramukaka CCTV"/></li>
                <li><img src="../../slider/Ramukaka%20DishWasher-tn.jpg" alt="Ramukaka Dishwasher"/></li>
                <li><img src="../../slider/ramukaka%20Drivers-tn.jpg" alt="Ramukaka Drivers"/></li>
                <li><img src="../../slider/Ramukaka%20Flooring-tn.jpg" alt="Ramukaka Flooring"/></li>
                <li><img src="../../slider/Ramukaka%20Gardener-tn.jpg" alt="Ramukaka Gardner"/></li>
                <li><img src="../../slider/ramukaka%20Inverters-tn.jpg" alt="Ramukaka Inverters"/></li>
                <li><img src="../../slider/ramukaka%20Loans-tn.jpg" alt="Ramukaka Loans "/></li>
                <li><img src="../../slider/ramukaka%20Mosquito%20Nets-tn.jpg" alt="Ramukaka Mosquito Nets"/></li>
                <li><img src="../../slider/ramukaka%20Packers-tn.jpg" alt="Ramukaka Packers & Movers"/></li>
                <li><img src="../../slider/ramukaka%20Pandit-tn.jpg" alt="Ramukaka Pandit"/></li>
                <li><img src="../../slider/ramukaka%20plumber-tn.jpg" alt="Ramukaka Plumber"/></li>
                <li><img src="../../slider/ramukaka%20Technician-tn.jpg" alt="Ramukaka Technician"/></li>
                <li><img src="../../slider/ramukaka%20Ticketing-tn.jpg" alt="Ramukaka Bus Ticketing"/></li>
                <li><img src="../../slider/Ramukaka%20Towing-tn.jpg" alt="Ramukaka Towing Services"/></li>
                <li><img src="../../slider/Ramukaka%20Water%20Heater-tn.jpg" alt="Ramukaka Water Heater"/></li>
                <li><img src="../../slider/Ramukaka%20Watertank%20Cleaners-tn.jpg" alt="Ramukaka WaterTank Cleaners"/></li>
                <li><img src="../../slider/ramukaka%20White%20Washing-tn.jpg" alt="Ramukaka White Washing"/></li>
            </ul>
            <div class="amazingslider-engine" style="display:none;"><a href="#"></a></div>
        </div>
        <!-- End of body section HTML codes -->
        <br>  <hr style=" background: #B8BFC5;border-style:dashed; margin-bottom: 10px; margin-top: 50px;">
        <div class="fb-like-box" data-href="https://www.facebook.com/Ramukaka" data-width="250" data-height="550" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>

    </div>
</div>

</div>
</div>


<script src="../../assets/Mainsliderengine/initslider-1.js"></script>
<script src="../../assets/Mainsliderengine/amazingslider.js"></script>

<script>
    $(function () {
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=334364413255377&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    });
</script><section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 footer-text1">
                <p> © <a href="" class="rext-red">Ramukaka </a> 2013-2016 All rights reserved.</p>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 footer-text2">
                <ul class="list-inline">
                    <li><a href="../../services">Services </a></li>
                    <li>|</li>
                    <li><a href="../home/contactUs">Contact Us </a></li>
                    <li>|</li>
                    <li><a href="../home/privacyPolicy">Privacy Policy </a></li>
                    <li>|</li>
                    <li><a href="../home/termsOfUse">Terms of Use </a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footer-text3">
                <ul class="list-inline">
                    <li><a href="https://www.facebook.com/RamuKaka" target="_blank"><i class="fa fa-facebook"> </i> </a>
                    </li>
                    <li><a href="https://twitter.com/Ramukakaservice" target="_blank"><i class="fa fa-twitter"> </i>
                        </a></li>
                    <li><a href="https://plus.google.com/106879009386477052613" target="_blank"><i
                                class="fa fa-google-plus"> </i> </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div id="fb-root"></div>
<!-- Modal Start -->
<div id="howItWorks" class="modal fade" role="dialog" style="z-index: 9999999">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-cogs" aria-hidden="true"></i>How It Works?</h4>

            </div>
            <div class="modal-body mobile-hiw-list">
                <p> 4 Quick Steps </p>
                <dl class="mlist">
                    <dt>You share your Service requirement and Personal details</dt>
                    <dt>Your requirement is sent to the Top Service Providers</dt>
                    <dt>Service Providers compete to offer you the best quotes</dt>
                    <dt>You pick a Service Provider that best fits your budget and requirement</dt>
                </dl>

            </div>
        </div>

    </div>
</div>
<!-- Modal End -->


<div class="mobile-contact">
    <a href="tel:04040405050" class="mtalk"> <i class="fa fa-phone" aria-hidden="true"></i></a>
</div>

<div id="overlay"></div>
</body>
</html>

<script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBfCCB1gtXQG-GyJUt6PIhDDDPMo3ir-nQ" type="text/javascript"></script>

    <script src="../../assets/js/scripts4853654356.min.js"></script>



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
