<?php
include 'credentials.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Digi Cafe</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
        <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!--//fonts-->
    </head>
    <body>
        <!-- header -->

        <div class="w3_navigation">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.php">DIGI <span>Cafe</span><p class="logo_w3l_agile_caption">Welcome to our reservation website</p></a></h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--iris">
                            <ul class="nav navbar-nav menu__list">
                                <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>

            </div>
        </div>
        <!-- //header -->
        <!-- banner -->
            <div class="thim-click-to-bottom">
                <a href="#about" class="scroll">
                    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <!-- //Modal1 -->
        <div id="availability-agileits">
            <div class="col-md-12 book-form-left-w3layouts">
                <a href="admin/reservation.php"><h2>Table Reservation</h2></a>
            </div>

            <div class="clearfix"> </div>
        </div>

        <!-- contact -->
        <section class="contact-w3ls" id="contact">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
                    <div class="contact-agileits">
                        <h4>Contact Us</h4>
                        <p class="contact-agile2">Sign Up For Our News Letters</p>
                        <form  method="post" name="sentMessage" id="contactForm" >
                            <div class="control-group form-group">

                                <label class="contact-p1">Full Name:</label>
                                <input type="text" class="form-control" name="name" id="name" required >
                                <p class="help-block"></p>

                            </div>
                            <div class="control-group form-group">

                                <label class="contact-p1">Phone Number:</label>
                                <input type="tel" class="form-control" name="phone" id="phone" required >
                                <p class="help-block"></p>

                            </div>
                            <div class="control-group form-group">

                                <label class="contact-p1">Email Address:</label>
                                <input type="email" class="form-control" name="mail" id="email" required >
                                <p class="help-block"></p>

                            </div>


                            <input type="submit" name="sub" value="Send Now" class="btn btn-primary">
                        </form>
                        <?php
                        require 'credentials.php';
                        require 'Controller/ContactController.php';
                        if (isset($_POST["sub"])) {

                            $controller = new ContactController();
                            $controller->InsertContact();
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
                    <h4>Connect With Us</h4>
                    <p class="contact-agile1"><strong>Phone :</strong>+601116400794</p>
                    <p class="contact-agile1"><strong>Email :</strong> <a href="ws2basic@gmail.com">abdlrahmanfathy2020@gmail.com</a></p>


                    <div class="social-bnr-agileits footer-icons-agileinfo">
                        <ul class="social-icons3">
                            <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

                        </ul>
                    </div>
                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJuzaPpwJNzDERiIRdY9SGT-0&key=AIzaSyDBMI7fma39EDB3kJtffCJ8mmi_M_nFxAw" allowfullscreen></iframe>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
        <!-- /contact -->
        <div class="copy">
            <p>© 2020 Digi Cafe </p>
        </div>
        <!--/footer -->
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- contact form -->
        <script src="js/jqBootstrapValidation.js"></script>

        <!-- /contact form -->
        <!-- Calendar -->
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
            });
        </script>
        <!-- //Calendar -->
        <!-- gallery popup -->
        <link rel="stylesheet" href="css/swipebox.css">
        <script src="js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
jQuery(function ($) {
$(".swipebox").swipebox();
});
        </script>
        <!-- //gallery popup -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
                            jQuery(document).ready(function ($) {
                                $(".scroll").click(function (event) {
                                    event.preventDefault();
                                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                                });
                            });
        </script>
        <!-- start-smoth-scrolling -->
        <!-- flexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
$(window).load(function () {
$('.flexslider').flexslider({
    animation: "slide",
    start: function (slider) {
        $('body').removeClass('loading');
    }
});
});
        </script>
        <!-- //flexSlider -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
        </script>
        <!--search-bar-->
        <script src="js/main.js"></script>
        <!--//search-bar-->
        <!--tabs-->
        <script src="js/easy-responsive-tabs.js"></script>
        <script>
                            $(document).ready(function () {
                                $('#horizontalTab').easyResponsiveTabs({
                                    type: 'default', //Types: default, vertical, accordion
                                    width: 'auto', //auto or any width like 600px
                                    fit: true, // 100% fit in a container
                                    closed: 'accordion', // Start closed if in accordion view
                                    activate: function (event) { // Callback function if tab is switched
                                        var $tab = $(this);
                                        var $info = $('#tabInfo');
                                        var $name = $('span', $info);
                                        $name.text($tab.text());
                                        $info.show();
                                    }
                                });
                                $('#verticalTab').easyResponsiveTabs({
                                    type: 'vertical',
                                    width: 'auto',
                                    fit: true
                                });
                            });
        </script>
        <!--//tabs-->
        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear'
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <div class="arr-w3ls">
            <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>
