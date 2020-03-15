<template>
    <section class="">

        <!--<div class="container header-top">
            <div class="row">
                <div
                    class="p-2 text-center header-email text-sm-left text-md-left text-lg-left text-xl-left col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <i class="fas fa-envelope"></i> <span>Email</span> <a href="#"> buddhajyoti@gmail.com</a>
                </div>
                <div class="p-2 text-left header-address col-12 col-lg-4 col-xl-4 ">
                    <i class="fas fa-map-marker-alt"></i> Buddha Jyoti Address
                </div>
                <div
                    class="p-2 text-center text-sm-right text-md-right text-lg-right text-xl-right col-12 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                    <span>Connect with us:</span> <a href="#"><i
                    class="fab fa-facebook-square"></i> </a> <a href="#"><i
                    class="fab fa-twitter-square"></i> </a> <a href="#"><i
                    class="fab fa-instagram-square"></i></a>
                </div>
            </div>
        </div>-->

        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="#" id="logo">
                        <img src="images/logo.png" alt="Buddha Jyoti Logo"> Buddha Jyoti
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">About Us</a>
                                    <a class="dropdown-item" href="#">History</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Our Team</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Facilities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Teachers</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Information
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="#">News and Notices</a>
                                    <a class="dropdown-item" href="#">Upcoming Events</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Blog</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="">
            <div id="carouselImages" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselImages" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselImages" data-slide-to="1"></li>
                    <li data-target="#carouselImages" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!--For Box Shadow-->
                    <!--<div class="carousel-caption vignette-shadow-ex">
                    </div>-->
                    <!--Carousel Images-->
                    <div class="carousel-item active">
                        <img src="images/BuddhaJyotiImages/School1.jpg"
                             class="img-fluid img-fluid-carousel d-block w-100" alt="...">
                        <div class="carousel-caption centered">
                            <h2 class="ex-large-900">Buddha<span> Jyoti</span></h2>
                            <p class="d-none d-sm-block">You Learn Something Everyday</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/BuddhaJyotiImages/School1.jpg"
                             class="img-fluid img-fluid-carousel d-block w-100" alt="...">
                        <div class="carousel-caption centered">
                            <h2 class="ex-large-900">Innovative<span> Teachers</span></h2>
                            <p class="d-none d-sm-block">Intelligence plus character that is the goal of true
                                education</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/BuddhaJyotiImages/School1.jpg"
                             class="img-fluid img-fluid-carousel d-block w-100" alt="...">
                        <div class="carousel-caption centered">
                            <h2 class="ex-large-900"><span>Hard</span> Working</h2>
                            <p class="d-none d-sm-block">I’m not telling you it’s going to be easy <br/>
                                I’m telling you it’s going to be worth it</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselImages" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselImages" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!--<div class="row fixed-header">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"  style="background-color: #f8f8f8;">
                <div class="row">
                    <div class="p-2 text-center header-email text-sm-left text-md-left text-lg-left text-xl-left col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <i class="fas fa-envelope"></i> <span>Email</span> <a href="#">
                        buddhajyoti@gmail.com</a>
                    </div>
                    <div class="p-2 text-left header-address col-12 col-lg-4 col-xl-4 ">
                        <i class="fas fa-map-marker-alt"></i> Buddha Jyoti Address
                    </div>
                    <div
                        class="p-2 text-center text-sm-right text-md-right text-lg-right text-xl-right col-12 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                        <span>Connect with us:</span>
                        <a href="#"><i class="fab fa-facebook-square"></i> </a>
                        <a href="#"><i class="fab fa-twitter-square"></i> </a>
                        <a href="#"><i class="fab fa-instagram-square"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 sticky-navbar">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt=""> Buddha Jyoti
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                       role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        About
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">About Us</a>
                                        <a class="dropdown-item" href="#">History</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Our Team</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Facilities</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Teachers</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2"
                                       role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Information
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">News and Notices</a>
                                        <a class="dropdown-item" href="#">Upcoming Events</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Blog</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>-->


    </section>
</template>

<script>
    import $ from 'jquery'

    export default {
        name: "indexLayout",
        mounted() {
            $(document).scroll(function () {
                $('.navbar').toggleClass('scrolled', $(this).scrollTop() > 550);
                if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
                    document.getElementById("navbar").style.padding = "0 10px";
                    document.getElementById("logo").style.fontSize = "2rem";
                } else {
                    document.getElementById("navbar").style.padding = "10px 10px";
                    document.getElementById("logo").style.fontSize = "2.5rem";
                }
            });
        }
    }
</script>

<style scoped>

    /* Centered text */
        .carousel-caption.centered {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .carousel-caption h2 {
            text-align: center;
            color: white;
            font-family: 'Montserrat', sans-serif;
            /*font-family: 'Bowlby One SC', cursive;*/
        }
        .carousel-caption p {
            text-align: center;
            font-size: 20px;
            color: white;

        }
        .carousel-caption h2 span {
            color: #ff9800;
        }


    /*////////*/
    .header {
        position: relative;
        z-index: 100000;
    }

    .banner {
        position: relative;
        top: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, .7)
    }
    .carousel-item {
        width: 100vw;
        height: 100vh;
        min-height: 300px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        background-size: cover;
    }

    /*Navbar---*/
    nav {
        background-color: rgba(0, 0, 0, 0.1) !important;
    }
    .navbar {
        background: transparent !important;
        transition: 0.7s;
        border-bottom: 0.8px solid rgba(255, 255, 255, 0.5);
        padding: 10px 10px;
    }

    .navbar.scrolled {
        background: rgba(0, 0, 0, 0.7) !important;
        transiction: 0.7s;
    }

    .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
        background-color: rgba(255, 255, 255, 1);
        border-radius: 5px;
        color: #000;
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .8);
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 1) !important;
        text-decoration: none;
    }
    .navbar-light .navbar-nav .nav-item.active .nav-link:hover,
    .navbar-light .navbar-nav .nav-item.active .nav-link:focus {
        color: rgba(0, 0, 0, .9) !important;
        text-decoration: none;
    }

    .navbar-light .navbar-brand,
    .navbar-light .navbar-brand:hover,
    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:visited {
        color: rgba(255, 255, 255, 1);
        font-size: 2.5rem;
        font-weight: 600;
        text-decoration: none;
    }

    /*On hover*/
    .dropdown:hover .dropdown-menu, .btn-group:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu a:hover {
        text-decoration: none !important;
        background-color: rgba(0, 0, 0, 0.1) !important;
    }

    .dropdown-menu {
        margin-top: 0;
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .dropdown-menu a {
        color: #ffffff !important;
    }

    .dropdown-toggle {
        margin-bottom: 2px;
    }

    .navbar .dropdown-toggle, .nav-tabs .dropdown-toggle {
        margin-bottom: 0;
    }

    /*

    .navbar-brand {
        font-family: 'Coiny', cursive;
        font-size: 30px !important;
        font-weight: 500;
    }

    a.nav-link {
        color: white !important;
        font-size: 15px;
        font-family: 'Coiny', cursive;
    }*/


    /*Carousel CSS*/
    .carousel-control-prev, .carousel-control-next {
        display: none;
    }


    /*Max width 576px*/
    @media screen and (max-width: 576px) {
        .vignette-shadow-ex {
            background-color: transparent !important;
            margin-bottom: -5vh !important;
            margin-left: -15vw !important;
            height: 100vh;
            width: 100vw;
            box-shadow: inset 0px 0px 150px black !important;
        }
    }

    /*Between 576-992px*/
    @media screen and (min-width: 576px) and (max-width: 992px) {
        .carousel-item {
            width: 100vw;
            height: 100vh;
            min-height: 300px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            background-size: cover;
        }

        .vignette-shadow-ex {
            background-color: transparent !important;
            margin-bottom: 0 !important;
            margin-left: -15vw !important;
            height: 100vh;
            width: 100vw;
            box-shadow: inset 10px 10px 100px black !important;
        }
    }

    /*Max width 991 px*/
    @media screen and (max-width: 991px) {
        /*.navbar #navbarSupportedContent{
            background-color: rgba(0, 0, 0, 0.2) !important;

        }
        .navbar{
            padding-right: 0;
            padding-left: 0;
        }*/
        /*nav {
            background-color: transparent;
        }*/
        #carouselImages {

        }
    }


    /**Min width 992px*/
    @media (min-width: 992px) {
        /*nav {

            background-color: transparent;
        }*/
        /*#carouselImages {
            margin-top: -80px;
        }*/
        .carousel-item {
            width: 100vw;
            height: 100vh;
            min-height: 300px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            background-size: cover;
        }

        .vignette-shadow-ex {
            background-color: transparent !important;
            margin-bottom: -3vh !important;
            margin-left: -14.9vw !important;
            height: 100%;
            width: 100%;
            box-shadow: inset 0 15px 100px black !important;
            background-size: cover;
        }
    }


</style>
