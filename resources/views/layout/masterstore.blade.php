<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Caesar&#039;s Kitchen - Caesar&rsquo;s Kitchen - Chef Inspired Frozen Meals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Caesar&#039;s Kitchen - Caesar&rsquo;s Kitchen - Chef Inspired Frozen Meals">
    <meta name="keywords" content="restaurant,cafe,event.multipurpose,onepage,responsive,minimal,bootstrap,theme">
    <meta name="author" content="">
    <link rel="icon" href="{!!asset('public/assets/images/favicon.png')!!}" type="image/png">
    <!--[if lt IE 9]>
      <![endif]-->
    <!-- CSS Files ===== -->
    <link rel="stylesheet" href="{!!asset('public/assets/css/bootstrap.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/css/animate.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/css/plugin.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/css/owl.carousel.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/css/owl.theme.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/css/owl.transitions.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/css/magnific-popup.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/css/style.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/demo/demo.css')!!}" type="text/css">
    <!-- custom background -->
    <link rel="stylesheet" href="{!!asset('public/assets/css/bg.css')!!}" type="text/css">
    <!-- additional css files -->
    <link rel="stylesheet" href="{!!asset('public/assets/css/datepicker.css')!!}" type="text/css">
    <!-- revolution slider custom css -->
    <link rel="stylesheet" href="{!!asset('public/assets/css/rev-settings.css')!!}" type="text/css">
    <!-- color scheme -->
    <link rel="stylesheet" href="{!!asset('public/assets/css/color.css')!!}" type="text/css" id="colors">
    <!-- load fonts -->
    <link rel="stylesheet" href="{!!asset('public/assets/fonts/font-awesome/css/font-awesome.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/fonts/elegant_font/HTML_CSS/style.css')!!}" type="text/css">
    <link rel="stylesheet" href="{!!asset('public/assets/fonts/et-line-font/style.css')!!}" type="text/css">
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{!!asset('public/assets/revolution/css/settings.css')!!}">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{!!asset('public/assets/revolution/css/layers.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('public/assets/revolution/css/navigation.css')!!}">
</head>

<body id="homepage">
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col"><span class="id-color"><i class="fa fa-map-marker"></i></span>Collins
                                Street West, Victoria 8007 Australia </div>
                            <div class="col"><span class="id-color"><i class="fa fa-clock-o"></i></span>Monday - Friday
                                08:00-16:00</div>
                            <div class="col"><span class="id-color"><i class="fa fa-phone"></i></span>1800.899.900</div>
                            <div class="col">
                                <div id="lang-selector" class="dropdown">
                                    <a href="#" class="btn-selector">English</a>
                                    <ul>
                                        <li class="active"><a href="#">English</a></li>
                                        <li><a href="#">France</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Spain</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <!-- social icons -->
                            <div class="col social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ url('index') }}">
                                <img class="logo" src="{!!asset('public/assets/images/caesarskitchen_logo.png')!!}"
                                    alt="">
                            </a>
                        </div>
                        <!-- logo close -->
                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->
                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <!--<li><a href="{{ url('store') }}">Home</a></li>-->
                                <li><a href="{{ url('index') }}">Home</a></li>
                                <!--<li><a href="{{ url('event') }}">Events</a></li>-->
                                <!--<li><a href="{{ url('book') }}">Book</a></li>-->
                                <li><a href="{{ url('contactus') }}">Contact</a></li>
                                <li><a href="{{ url('wheretobuy') }}">Where To Buy</a></li>
                                <?php if(!empty(session()->get('user_id'))){ ?>
                                <li>
                                    <div class="profile-dropdown">
                                        <a href="#"
                                            class="profile-dropbtn">{{ session()->get('name') }}
                                            &nbsp
                                            <img src="{!!asset('public/assets/images/team/team_pic_3.jpg')!!}" alt="img"
                                                class="w-px-40 h-auto rounded-circle"> </a>
                                        <div class="profile-dropdown-content">
                                            <a href="{{ url('myprofile') }}"><i
                                                    class="fa fa-user mr-10"></i> My Profile</a>
                                            <a href="{{ url('cart') }}"><i
                                                    class="fa fa-shopping-cart mr-10"></i> Shopping Cart</a>
                                            <a href="{{ url('wishlist') }}"><i
                                                    class="fa fa-heart-o mr-10"></i>My Wishlist</a>
                                            <a href="{{ url('logout') }}"><i
                                                    class="fa fa-power-off mr-10"></i> Sign out</a>
                                        </div>
                                    </div>
                                </li>
                                <?php }else{ ?>
                                <li><a href="{{ url('login') }}">Login </a></li>
                                <!-- <li><a href="{{ url('signup') }}">Sign up</a></li> -->
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <!-- mainmenu close -->
                </div>
            </div>
        </header>
        <div class="container-fluid">
            @yield('content')
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="col-md-4">
                            &copy; Copyright 2022 - Caesars Kitchen
                        </div>
                        <div class="col-md-4 text-center">
                            <img class="logo" src="{!!asset('public/assets/images/caesarskitchen_logo.png')!!}"
                                alt="logo">
                        </div>
                        <div class="col-md-4 text-right">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>
    <!-- Javascript Files === -->
    <script src="{!!asset('public/assets/js/jquery.min.js')!!}"></script>
    <script src="{!!asset('public/assets/js/bootstrap.min.js')!!}"></script>
    <script src="{!!asset('public/assets/js/jquery.isotope.min.js')!!}"></script>
    <script src="{!!asset('public/assets/js/easing.js')!!}"></script>
    <script src="{!!asset('public/assets/js/jquery.flexslider-min.js')!!}"></script>
    <script src="{!!asset('public/assets/js/jquery.scrollto.js')!!}"></script>
    <script src="{!!asset('public/assets/js/owl.carousel.js')!!}"></script>
    <script src="{!!asset('public/assets/js/jquery.countTo.js')!!}"></script>
    <script src="{!!asset('public/assets/js/classie.js')!!}"></script>
    <script src="{!!asset('public/assets/js/video.resize.js')!!}"></script>
    <script src="{!!asset('public/assets/js/validation-reservation.js')!!}"></script>
    <script src="{!!asset('public/assets/js/wow.min.js')!!}"></script>
    <script src="{!!asset('public/assets/js/jquery.magnific-popup.min.js')!!}"></script>
    <script src="{!!asset('public/assets/js/enquire.min.js')!!}"></script>
    <script src="{!!asset('public/assets/js/jquery.stellar.min.js')!!}"></script>
    <script src="{!!asset('public/assets/js/designesia.js')!!}"></script>
    <script src="{!!asset('public/assets/demo/demo.js')!!}"></script>
    <!-- additional js files -->
    <script src="{!!asset('public/assets/js/bootstrap-datepicker.js')!!}"></script>
    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0')!!}"></script>
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0')!!}"></script>
    <!-- RS5.0 Extensions Files -->
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/extensions/revolution.extension.video.min.js')!!}"></script>
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')!!}"></script>
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')!!}"></script>
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/extensions/revolution.extension.navigation.min.js')!!}"></script>
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/extensions/revolution.extension.actions.min.js')!!}"></script>
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')!!}"></script>
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/extensions/revolution.extension.migration.min.js')!!}"></script>
    <script type="text/javascript"
        src="{!!asset('public/assets/revolution/js/extensions/revolution.extension.parallax.min.js')!!}"></script>
    <script>
        jQuery(document).ready(function () {
            // revolution slider
            jQuery("#revolution-slider").revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                delay: 3300,
                navigation: {
                    arrows: {
                        enable: true
                    }
                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 600,
                disableProgressBar: "on"
            });


            // date picker settings
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(),
                nowTemp.getDate(), 0, 0, 0, 0);
            var checkin = $('#date').datepicker({
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ?
                        'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                if (ev.date.valueOf() > checkin.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkin.setValue(newDate);
                }
                checkin.hide();
            }).data('datepicker');
        });

    </script>
</body>

</html>
