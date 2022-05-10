<!DOCTYPE html>
<html>
<head>
    <title>NCLP Jalna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css'/>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
</head>
<body>

<div class="flex-center position-ref">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</div>

<!--header-top-starts-->
<div class="header-top">

    <div class="container">
        <div class="head-main">
            <h1>NCLP Jalna Logo</h1>
        </div>
    </div>
</div>
<!--header-top-end-->
<!--start-header-->
<div class="header">
    <div class="container">
        <div class="head">
            <div class="navigation">
                <span class="menu"></span>
                <ul class="navig">
                    <li><a href="" class="active">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- script-for-menu -->
<!-- script-for-menu -->
<script>
    $("span.menu").click(function () {
        $(" ul.navig").slideToggle("slow", function () {
        });
    });
</script>
<!-- script-for-menu -->
<!--banner-starts-->
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <!--{{ $i = 0 }}-->
            @foreach($banners as $banner)
                <div class="item
                    @if($i == 0)
                        active
                    @endif">
                    <img src="{{ asset('gallery/' . $banner->photo) }}"
                         style="width:100%; max-height:500px;">
                </div>
            <!--{{ $i++ }}-->
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--banner-end-->
<!--about-starts-->
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
                <div class="about-one">
                    <h3>National Child Labour Project Scheme</h3>
                </div>
                <div class="about-two">
                    <p>The National Child Labour Policy was approved by the Cabinet on 14th August 1987 during the
                        Seventh Five Year Plan Period.
                        The policy was formulated with the basic objective of suitably rehabilitating the children
                        withdrawn from employment thereby reducing the incidence of child labour in areas of known
                        concentration of child labour.</p>

                </div>
            </div>
            <div class="col-md-4 about-right heading">

                <div class="abt-2">
                    <h3>Circular / Notice</h3>
                    <ul>
                        @foreach($circulars as $circular)
                            <li>
                                <a href="{{ asset('gallery/' . $circular->$circular) }}">{{ $circular->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--about-end-->
<!--slide-starts-->
<div class="slide">
    <div class="container">
        <div class="fle-xsel">
            <ul id="flexiselDemo3">

                @foreach($stripes as $stripe)
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="{{ asset('gallery/' . $stripe->photo) }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                @endforeach


            </ul>

            <script type="text/javascript">
                $(window).load(function () {

                    $("#flexiselDemo3").flexisel({
                        visibleItems: 5,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 2
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 3
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--slide-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-text">
            <p>© 2018 NCLP Jalna</p>
        </div>
    </div>
</div>
<!--footer-end-->
</body>
</html>