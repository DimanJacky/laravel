<!--
https://w3layouts.com/voguish-a-blogging-category-flat-bootstrap-responsive-web-template/
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Voguish a Blogging Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });

    </script>

</head>
<body>
<!-- header -->
@section('header')
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" class="img-responsive" alt=""></a>
        </div>

        <div class="head-nav">
            <span class="menu"> </span>
            <ul class="cl-effect-1">
                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('news') }}">News</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="404.html">Shortcodes</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="contact.html">Contact</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <!-- script-for-nav -->
        <script>
            $( "span.menu" ).click(function() {
                $( ".head-nav ul" ).slideToggle(300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->



        <div class="clearfix"> </div>
    </div>
</div>
@show
<!-- header -->
<div class="container">

    <div class="col-md-9 bann-right">
        <!-- banner -->
        @section('content')
        <div class="banner">
            <div class="header-slider">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <img src="{{ asset('assets/images/1.jpg') }}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Maecenas malesuada elit lectus felis</h3>
                                    <p>Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/4.jpg') }}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Curabitur et ligula. Ut molestie </h3>
                                    <p>Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulu. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/5.jpg') }}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Etiam ullamcorper. Suspendisse</h3>
                                    <p>Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/6.jpg') }}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Suspendisse a pellentesque dui</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada .</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->
        <!-- nam-matis -->
        <div class="nam-matis">
            <div class="nam-matis-top">
                <div class="col-md-6 nam-matis-1">
                    <a href="single.html"><img src="{{ asset('assets/images/5.jpg') }}" class="img-responsive" alt=""></a>
                    <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="col-md-6 nam-matis-1">
                    <a href=""><img src="{{ asset('assets/images/6.jpg') }}" class="img-responsive" alt=""></a>
                    <h3><a href="">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="nam-matis-top">
                <div class="col-md-6 nam-matis-1">
                    <a href="single.html"><img src="{{ asset('assets/images/4.jpg') }}" class="img-responsive" alt=""></a>
                    <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="col-md-6 nam-matis-1">
                    <a href="single.html"><img src="{{ asset('assets/images/1.jpg') }}" class="img-responsive" alt=""></a>
                    <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        @show
        <!-- nam-matis -->
    </div>


    <div class="col-md-3 bann-left">
        @section('left')
        <div class="b-search">
            <form>
                <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="">
            </form>
        </div>
        <h3>Recent Posts</h3>
        <div class="blo-top">
            <div class="blog-grids">
                <div class="blog-grid-left">
                    <a href="single.html"><img src="{{ asset('assets/images/1b.jpg') }}" class="img-responsive" alt=""></a>
                </div>
                <div class="blog-grid-right">
                    <h4><a href="single.html">Little Invaders </a></h4>
                    <p>pellentesque dui, non felis. Maecenas male </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-grids">
                <div class="blog-grid-left">
                    <a href="single.html"><img src="{{ asset('assets/images/2b.jpg') }}" class="img-responsive" alt=""></a>
                </div>
                <div class="blog-grid-right">
                    <h4><a href="single.html">Little Invaders </a></h4>
                    <p>pellentesque dui, non felis. Maecenas male </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-grids">
                <div class="blog-grid-left">
                    <a href=""><img src="{{ asset('assets/images/images/3b.jpg') }}" class="img-responsive" alt=""></a>
                </div>
                <div class="blog-grid-right">
                    <h4><a href="single.html">Little Invaders </a></h4>
                    <p>pellentesque dui, non felis. Maecenas male </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <h3>Categories</h3>
        <div class="blo-top">
            <li><a href="#">||   Lorem Ipsum passage</a></li>
            <li><a href="#">||   Finibus Bonorum et</a></li>
            <li><a href="#">||   Treatise on the theory</a></li>
            <li><a href="#">||   Characteristic words</a></li>
            <li><a href="#">||   combined with a handful</a></li>
            <li><a href="#">||   which looks reasonable</a></li>
        </div>
        <h3>Newsletter</h3>

        <div class="blo-top">
            <div class="name">
                <form>
                    <input type="text" placeholder="email" required="">
                </form>
            </div>
            <div class="button">
                <form>
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        @show
    </div>

    <div class="clearfix"> </div>
    <div class="fle-xsel">
        <ul id="flexiselDemo3">
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{ asset('assets/images/6.jpg') }}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{ asset('assets/images/5.jpg') }}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{ asset('assets/images/1.jpg') }}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{ asset('assets/images/4.jpg') }}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{ asset('assets/images/6.jpg') }}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{ asset('assets/images/1.jpg') }}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
        </ul>

        <script type="text/javascript">
            $(window).load(function() {

                $("#flexiselDemo3").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 3
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <div class="clearfix"> </div>
    </div>

    <div class="footer">
        @section('footer')
        <div class="col-md-3 foot-1">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">||   Lorem Ipsum passage</a></li>
                <li><a href="#">||   Finibus Bonorum et</a></li>
                <li><a href="#">||   Treatise on the theory</a></li>
            </ul>
        </div>
        <div class="col-md-3 foot-1">
            <h4>Favorite Resources</h4>
            <ul>
                <li><a href="#">||   Characteristic words</a></li>
                <li><a href="#">||   combined with a handful</a></li>
                <li><a href="#">||   which looks reasonable</a></li>
            </ul>
        </div>
        <div class="col-md-3 foot-1">
            <h4>About Us</h4>
            <ul>
                <li><a href="#">||  Even slightly believable</a></li>
                <li><a href="#">||  Hidden in the middle</a></li>
                <li><a href="#">||  Ipsum therefore always</a></li>
            </ul>
        </div>
        <div class="col-md-3 foot-1">
            <h4>Custom Menu</h4>
            <ul>
                <li><a href="#">||  Internet tend to repeat</a></li>
                <li><a href="#">||  Alteration in some form</a></li>
                <li><a href="#">||  This book is a treatise</a></li>
            </ul>
        </div>

        <div class="clearfix"> </div>
        <div class="copyright">
            <p>Copyrights © 2015 Voguish All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
        @show
    </div>

</div>
</body>
</html>