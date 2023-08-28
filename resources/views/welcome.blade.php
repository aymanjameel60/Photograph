<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>

        Asrixx

    </title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="csrf-token" content="">
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="{{ asset('front/fonts/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('front/fonts/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('front/fonts/css/solid.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="manifest" href="">
    <link rel="mask-icon" href="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- OG Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta property="og:locale" content="en_US">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="fb:page_id" content="" />
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:creator" content="@individual_account">
    <meta name="twitter:url" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <link rel="canonical" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/fancybox.min.css') }}" />

</head>

<body>

    <div class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light  ">
                <div class="container-fluid">
                    <div class="logo" id="HOME">
                        <a class="navbar-brand" href="/">
                            <img class="logoer" src="{{ asset('assets/img/White_logo.png') }}"
                                width="220px" alt=""> </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#HOME">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#PORTFOLIO">PORTFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#VIDEOS">VIDEOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#CONTACT">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="slider">
        <div class="video-wrapper">
            <video playsinline autoplay muted loop>
                <source src="video.mp4" type="video/mp4" style="width: 100%">
                Your browser does not support the video tag.
            </video> </div>
        <div class="behindvideo">
            <div class="container ">
                <div class="abovevideo">
                    <div class="row">
                        <h3 class="animated fadeInDown">
                            <span class="span " style="font-weight: bold;">YOU DREAM IT</span>
                            <br />
                            WE MAKE IT
                        </h3>
                        <div class="text-center socialfonts">
                            <a href="{{ $banner->twit }}" target="_blank">
                                <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="{{ $banner->tiktok }}" target="_blank">
                                <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
                            </a>
                            <a href="{{ $banner->face }}" target="_blank">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                            <a href="{{ $banner->insta }}" target="_blank">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="protfolio">
        <div class="container">
            <div class="row">
                <div class="porthead text-center animated bounceInUp animated-div">
                    {{-- <h1 id="PORTFOLIO">PORTFOLIO</h1> --}}
                    <h3 id="PORTFOLIO">PORTFOLIO</h3>
                </div>
            </div>
            <div class="row animated bounceInUp animated-div">
                <div class="col-md-4">
                    <div class="item">
                        <a href="{{ route('images', 4) }}">
                            <img src="{{ asset('1.png') }}">
                        </a>
                        <div class="datas">
                            <h5>MERCEDES</h5>
                            <div class="cat">CARS</div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="{{ route('images', 6) }}">
                            <img src="{{ asset('2.png') }}"></a>
                        <div class="datas">
                            <h5>PEOPLE</h5>
                            <div class="cat">Wedding</div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="{{ route('images', 5) }}">
                            <img src="{{ asset('3.png') }}"> </a>
                        <div class="datas">
                            <h5>MUSICIAN</h5>
                            <div class="cat">PORTRAIT</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="porthead text-center videoss animated bounceInUp animated-div">
                {{-- <h1  id="VIDEOS">Videos</h1> --}}
                <h3 id="VIDEOS">Videos</h3>
            </div>
            <div class="slickSliderrr">
                <div>
                    <div class="myvideo animated bounceInUp animated-div">
                        <img src="{{ asset('1.png') }}" class="vidimg">
                        <div class="overlay">
                            <a href="{{ route('videos') }}"><i
                                    class="fa-solid fa-play playbutton  "></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="myvideo animated bounceInUp animated-div">
                        <img src="{{ asset('1.png') }}" class="vidimg">
                        <div class="overlay">
                            <a href="{{ route('videos') }}"><i
                                    class="fa-solid fa-play playbutton  "></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="myvideo animated bounceInUp animated-div">
                        <img src="{{ asset('1.png') }}" class="vidimg">
                        <div class="overlay">
                            <a href="{{ route('videos') }}"><i
                                    class="fa-solid fa-play playbutton  "></i></a>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="videos_buttons">
        <div class="button active"></div>
<div class="button"></div>
<div class="button"></div>
<div class="button"></div>
<!-- More Buttons Here -->
    </div> --}}
        </div>
    </div>
    </div>
    </div>



    <div class="contacts animated bounceInUp animated-div">
        <div class="containerroro">
            <div class="row">
                <div class="porthead text-center videoss">
                    {{-- <h1>CONTACTS</h1> --}}
                    <h3 id="CONTACT">CONTACTS</h3>
                </div>


                <div class="profile">
                    <img src="asrei.jpg" class="thumbnail">
                    <h3 class="name">Asri</h3>
                    <p class="title">Photographer</p>
                </div>


                <div class="text-center socialfonts " id="MYSOC">
                    <a href="{{ $banner->twit }}" target="_blank">
                        <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="{{ $banner->tiktok }}" target="_blank">
                        <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
                    </a>
                    <a href="{{ $banner->face }}" target="_blank">
                        <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="{{ $banner->insta }}" target="_blank">
                        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>



        {{-- <div class="col-md-6 soccc">
                    <div class="left-con">
                        <h4>Phone</h4>
                        <h6>+12345678995</h6>
                    </div>
                    <div class="left-con">
                        <h4>Mail</h4>
                        <h6>info@brandsides.com</h6>
                    </div>
                    <div class="left-con">
                        <h4>Web</h4>
                        <h6>www.brandsides.com</h6>
                    </div>
                </div>

                <div class="col-md-6">
                    <form>
                        <div class="form-group" style="width: 48%;float: left;margin-right: 2%;">
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group" style="width: 50%;float: left;">
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Enter the subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" rows="5"
                                placeholder="Type your message here"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
                </div> --}}








        <div class="container">
            <div class="row">
                <div class="myemail">
                    <input type="text" placeholder="To Email">
                    <button class="btn btn-success"><a href="/">Send</a></button>
                </div>

            </div>
        </div>

        <!-- The modal -->
        <div class="modal" id="videoModal" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <i class="fa-solid fa-xmark" style="color: #FFF;float: right;cursor: pointer;"
                            data-bs-dismiss="modal" aria-label="Close"></i>
                    </div>
                    <div class="modal-body">
                        <video controls width="100%" id="myvvv">
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <button id="scrollToTopBtn" onclick="scrollToTop()">
            <i class="fa-solid fa-arrow-up"></i>
        </button>

        {{-- <p class="cp-text">
        © Copyright 2023 brandsides. All rights reserved.
    </p> --}}


        <script src="{{ asset('front/js/fa.min.j') }}s"></script>
        <script src="{{ asset('front/js/bootstrap.bundle.j') }}s"></script>
        <script src="{{ asset('front/js/code.jquery.com_jquery-3.5.1.min.js') }}"></script>
        <script
            src="{{ asset('front/js/unpkg.com_isotope-layout@3.0.4_dist_isotope.pkgd.min.js') }}">
        </script>
        <script src="{{ asset('front/js/fancybox.min.js') }}"></script>

        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.5.1/jquery.nicescroll.min.js"></script> -->

        <script>
            $(document).ready(function () {
                $('#videoModal').modal({
                    backdrop: 'static',
                    keyboard: false // to prevent closing with Esc button (if you want this too)
                })

                $(".video-trigger").on("click", function () {
                    var videosrc = $(this).attr("data-video")
                    //TODO
                    $("#videoModal").modal("show");
                    $("#videoModal video").attr("src", videosrc);
                    $('#videoModal video').get(0).play();
                });
                $(".fa-solid.fa-xmark").on("click", function () {
                    $("#myvvv").trigger('pause');
                });
            });

            $(function () {
                var button = $(".button");

                function switchToNext() {
                    var _this = $(this);
                    if (_this.hasClass("active")) {
                        return false;
                    } else {
                        $(".button.active").removeClass("active");
                        _this.addClass("active");
                    }
                }
                button.on("click", switchToNext);
            });


            $('.filters ul li').click(function () {
                $('.filters ul li').removeClass('active');
                $(this).addClass('active');

                var data = $(this).attr('data-filter');
                $grid.isotope({
                    filter: data
                })
            });

            var $grid = $(".grid").isotope({
                itemSelector: ".all",
                percentPosition: true,
                masonry: {
                    columnWidth: ".all"
                }
            });

            window.onload = function () {
                document.getElementById("allButton").click();
            };

        </script>
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    $('.animated-div').each(function () {
                        var elemPos = $(this).offset().top;
                        var scrollPos = $(window).scrollTop();
                        var windowHeight = $(window).height();

                        // Adjust the value (500 in this case) to determine when the animation starts
                        if (elemPos < scrollPos + windowHeight) {
                            $(this).addClass(
                                'animated fadeInUp'); // Add desired Animate.css class here
                        }
                    });
                });
            });

        </script>
        <script>
            window.onscroll = function () {
                showScrollButton();
            };

            function showScrollButton() {
                const scrollToTopBtn = document.getElementById("scrollToTopBtn");
                if (document.body.scrollTop > 3000 || document.documentElement.scrollTop > 3000) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }
            }

            // Scroll to the top of the page when the button is clicked
            function scrollToTop() {
                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
            }

        </script>
        <script type="text/javascript" src="{{ asset('slick/jquery-1.11.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('slick/jquery-migrate-1.2.1.min.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.slickSliderrr').slick({
                    dots: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });

        </script>
</body>

</html>
