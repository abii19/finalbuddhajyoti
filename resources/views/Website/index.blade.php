@extends('layouts.werbsiteLayout')

@section('title')
    Buddha Jyoti
@endsection

@section('style')
    <style>
        /*Fade Navbar*/
        /*.navbar {
            transition: top 0.8s ease-in-out;
        }

        .navbar-hide {
            top: -100px;
        }*/

        /*Header Top Styles*/
        .header-top i {
            color: #ffb606;
        }

        .header-top span {
            font-weight: bold;
        }

        .header-top a {
            color: #000000;
            text-decoration: none;
        }

        .header-top a:hover {
            color: #ff9800;
            text-decoration: none;
        }

        .header-top i:hover {
            color: #ff9800;
            text-decoration: none;
        }

        /*Navbar and Carousel*/
        .carousel-item {
            height: 90vh;
            min-height: 300px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            background-size: cover;
        }

        .carousel-caption {
            bottom: 35%;
        }

        .carousel-caption h5 {
            font-size: 45px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 25px;
            font-family: "Colonna MT";
        }

        .carousel-caption p {
            width: 60%;
            margin: auto;
            font-size: 18px;
            line-height: 1.9;
            font-family: 'Nunito', sans-serif;
        }

        .carousel-caption a {
            text-transform: uppercase;
            background: teal;
            padding: 10px 30px;
            display: inline-block;
            color: #ffffff;
            margin-top: 15px;
        }

        .navbar-nav a.nav-link {
            color: #ffffff !important;
            width: 100%;
            font-size: 16px;
            text-transform: uppercase;
            font-family: Monaco;
            letter-spacing: 1px;
        }

        /*Line.....*/
        .navbar-nav .nav-item a.nav-link:before {
            content: '';
            width: 0;
            height: 3px;
            background: #ff9800;
            position: absolute;
            top: 60%;
            transition: .5s;
        }

        .nav-item:hover a.nav-link:before {
            width: 4%;
            transform: translateY(50%);
        }

        /*Submenu*/
        ul.sub-menu {
            /*margin-top: 10px;*/
            position: absolute;
            top: 60%;
            padding: 0;
            background: white !important;
            border-top: 2px solid #ff9800;
            display: none;
        }

        ul.sub-menu li {
            list-style: none;
            padding: 5px;
            width: 100%;
            border-bottom: 1px solid rgba(26, 25, 38, 0.5);
        }

        ul.sub-menu li a {
            text-decoration: none;
            padding: 10px;
            color: #000000;
        }

        ul.sub-menu li:hover {
            background-color: rgba(0, 0, 0, 0.2);
            font-size: large;
            font-weight: bold;
            /*color: #ff9c00;*/
        }

        .navbar-nav li:hover > ul.sub-menu {
            display: block;
        }

        ul.sub-menu {
            animation: animate 800ms forwards ease;
        }

        @keyframes animate {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(15px);
            }

        }

        /*Submenu Ends*/

        .navbar-light .navbar-brand {
            color: #ffffff;
            font-size: 25px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .navbar-brand:hover {
            color: #ff9800 !important;
        }

        .nav-link.active, .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
            color: #ffcd13 !important;
        }

        @media only screen and (max-width: 767px) {
            .navbar-nav.ml-auto {
                background: rgba(26, 25, 30, 0.18);
            }

            .navbar-toggler {
                margin-top: 10px;
                padding: 5px 5px;
                font-size: 18px;
                line-height: 0.3;
                background: #ffffff;
            }

            .navbar-toggler:hover {
                box-shadow: inset 0 0 30px rgba(0, 164, 164, 0.3);
            }

            .carousel-item {
                height: 90vh;
                min-height: 300px;
                background: no-repeat center center scroll;
                -webkit-background-size: cover;
                background-size: cover;
            }

            .carousel-caption {
                bottom: 35%;
            }

            .carousel-caption h5 {
                width: 50%;
                margin: auto;
                padding-bottom: 15px;
                font-size: 35px;
                text-transform: uppercase;
                /*letter-spacing: 2px;*/
                font-family: "Colonna MT";
            }

            .carousel-caption p {
                width: 70%;
                margin: auto;
                font-size: 17px;
                line-height: 1.5;
                font-family: 'Nunito', sans-serif;
            }

            .carousel-caption a {
                text-transform: uppercase;
                background: teal;
                padding: 10px 25px;
                display: inline-block;
                color: #ffffff;
                margin-top: 15px;
            }
        }

        /*Header Ends-----*/

        /*Message Desk Starts*/
        .message-desk {
            padding: 50px 0 50px 0;
        }

        .message-box {
            box-sizing: border-box;
            border-radius: 10px;
            background: #262626;
            color: white;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .message-box-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            float: left;
            shape-outside: circle();
            margin: 60px 20px 30px 10px;
        }

        .message-box p {
            line-height: 22px;
            font-family: Papyrus;
        }

        .message-box h3 {
            margin: 0 0 10px 60px;
            padding: 0;
            font-size: 25px;
            color: #ffa600;
        }

        /*Awards Section*/
        .awards-section .card .card-body {
            width: 100%;
            height: 140px;
        }

        #award-icon {
            border-radius: 50%;
            padding: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        /*Message Desk Ends*/
        /*Testonomials Start*/
        .testonomial-desk {
            padding: 50px 0 50px 0;
            background: #262626;

        }

        .testonomial-desk h1 {
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            padding-bottom: 10px;
            color: #ff9800;
        }

        .testonomial-desk h1::after {
            content: '';
            background: #ff9800;
            display: block;
            height: 3px;
            width: 170px;
            margin: 10px auto 5px;
        }

        /*.testonomial-desk .row {
            margin: 30px auto;
        }*/

        .profile {
            padding: 70px 10px 20px;
            background-color: #efefef;
        }

        .profile img {
            top: -60px;
            position: absolute;
            left: calc(50% - 60px);
            border: 8px solid #262626;
        }

        .testonomial-user {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        .profile h3 {
            font-size: 20px;
            margin-top: 15px;
            color: #ff9800;
        }

        .profile h3 span {
            font-size: 15px;
            color: #333333;
        }

        blockquote {
            font-size: 16px;
            line-height: 30px;
        }

        blockquote::before {
            content: '\201C';
            font-size: 50px;
            font-family: "Times New Roman";
            position: relative;
            color: #ff9800;
            line-height: 20px;
            bottom: -15px;
            right: 5px;
        }

        blockquote::after {
            content: '\201D';
            font-size: 50px;
            font-family: "Times New Roman";
            position: relative;
            color: #ff9800;
            line-height: 10px;
            bottom: -15px;
            left: 5px;
        }

        .profile:hover {
            box-shadow: 0 0 15px 5px rgba(222, 222, 222, 0.3);
            cursor: pointer;
            transition: 0.7s;
        }

        /*Swiper*/
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
            margin: 20px 30px 0 30px;

        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: #fff;
        }

        .swiper-pagination-bullet-active {
            width: 15px;
            height: 15px;
            background-color: #fff;
        }

        /* Swiper Ends*/
        /*Testonomials Ends*/

        /*Events Section*/
        .event-desk {
            padding: 50px 0 50px 0;
            background: #f8f8f8;
        }

        .img-fluid-event img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;

        }

        .recent-event {
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
        }

        .limited-text {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .btn-event {
            display: none;
        }

        .recent-event:hover {
            cursor: pointer;
        }

        .recent-event:hover .limited-text {
            overflow: hidden;
            -webkit-line-clamp: 1;
            animation: animate 800ms forwards ease-in;
        }

        .recent-event:hover .btn-event {
            display: block;
            animation: animate 800ms forwards ease-in;
        }

        .upcoming-event {
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
        }

        .upcoming-event-date {
            background-color: #262626;
            /*animation: fadeIn 3s ease-in;*/
            color: #dddddd;
            font-size: 45px;
            line-height: 50px;
            text-align: center;
            font-family: 'Berkshire Swash', cursive;
            /*            opacity: 1.0;
                        transition: opacity 2s ease-out;
                        -moz-transition: opacity 2s ease-out;
                        -webkit-transition: opacity 2s ease-out;*/
        }

        .upcoming-event-date p {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .upcoming-event:hover {
            cursor: pointer;
        }

        .upcoming-event:hover .upcoming-event-date {
            animation: fadeIn 1s ease-in;
            background: #ff5252;
            color: #262626;
            /*background: #1c7430;
            cursor: pointer;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);*/
        }

        .upcoming-event:hover .limited-text {
            overflow: hidden;
            -webkit-line-clamp: 1;
            animation: animate 800ms forwards ease-in;
        }

        .upcoming-event:hover .btn-event {
            display: block;
            margin-bottom: 10px;
            animation: animate 800ms forwards ease-in;
        }

        /*Event Section Ends*/

        /*Contact Desk*/
        .contact-desk{
            margin: 50px 0 50px 0;
            /*background-image: url("images/contact_background.jpg");*/
            background-color: rgba(0, 0, 0, 0.9);
            background-size: cover;
            background-repeat: no-repeat;
        }
        /**********************************/


        .footer_content {
            padding-top: 80px;
            padding-bottom: 83px;
            border-bottom: solid 2px #4d4e4e;
        }

        .footer_content .logo_container {
            padding-left: 0px;
        }

        .footer_content .logo span {
            color: #FFFFFF;
        }

        .footer_about_text {
            margin-top: 24px;
            margin-bottom: 0px;
            padding-right: 20px;
        }

        .footer_column_title {
            font-size: 18px;
            font-weight: 500;
            color: #FFFFFF;
            padding-top: 15px;
        }

        .footer_column_content {
            margin-top: 32px;
        }

        .footer_list_item {
            margin-bottom: 11px;
        }

        .footer_list_item a {
            font-size: 14px;
            color: #a5a5a5;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .footer_list_item a:hover {
            color: #ffb606;
        }

        .footer_contact_item {
            font-size: 14px;
            font-weight: 400;
            color: #a5a5a5;
            margin-bottom: 22px;
        }

        .footer_contact_item:last-child {
            margin-bottom: 0px;
        }

        .footer_contact_icon {
            display: inline-block;
            width: 24px;
            height: 24px;
            vertical-align: middle;
            margin-right: 10px;
        }

        .footer_contact_icon img {
            width: 100%;
        }

        /*********************************
        15.3 Footer Copyright
        *********************************/

        .footer_bar {
            padding-top: 19px;
            padding-bottom: 19px;
        }

        .footer_social .menu_social_item a i {
            color: #FFFFFF;
        }

        .footer_social .menu_social_item a i:hover {
            color: #ffb606;
        }

        .footer_social .menu_social_item:last-child {
            margin-right: 0px;
        }

        /*Contact/Footer Desk Ends*/

        .img-fluid-carousel {
            width: 100vw;
            height: 90vh;
        }

        .img-fluid-event {
            min-width: 15vw;
            max-width: 30vh;
            margin-top: 15px;
            margin-bottom: 15px;
            transform: translateX(-4rem);
            position: relative;
            border-radius: 10px;
            box-sizing: border-box;
            /*box-shadow: 0 5px 10px rgba(248, 248, 248, 0.4);*/
        }

        .section_title {
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            padding-bottom: 10px;
            color: #ff9800;
        }

        .section_title h2::before {
            content: '';
            background: #ff9800;
            display: block;
            height: 3px;
            width: 170px;
            margin: 10px auto 5px;
        }


        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
    </style>
@endsection

@section('content')

    <!--Container Starts-->
    <div class="container-fluid">

        <!--Header-->

        <section class="header">
            <div class="container">
                <div class="header-top d-flex align-items-center">
                    <div class="p-2">
                        <i class="fas fa-envelope"></i> <span>Email</span> <a href="#"> buddhajyoti@gmail.com</a>
                    </div>
                    <div class="p-2">
                        <i class="fas fa-map-marker-alt"></i> Blvd Libertad, 34 m05200 Arévalo
                    </div>
                    <div class="p-2 ml-auto"><span>Connect with us:</span> <a href="#"><i
                                class="fab fa-facebook-square"></i> </a> <a href="#"><i
                                class="fab fa-twitter-square"></i> </a> <a href="#"><i
                                class="fab fa-instagram-square"></i></a>
                    </div>
                </div>
            </div>
            <div class="header">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top mt-5">
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
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Courses</a>
                                    <ul class="sub-menu animate">
                                        <li><a href="#">Extra Courses</a></li>
                                        <li><a href="#">Regular Courses</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">News</a>
                                    <ul class="sub-menu animate">
                                        <li><a href="#">Recent News and Events</a></li>
                                        <li><a href="#">Upcoming Events</a></li>
                                        <li><a href="#">Upcoming Events</a></li>
                                        <li><a href="#">Upcoming Events</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/milestones_background.jpg"
                                 class="img-fluid-carousel d-block w-100 fadeInLeft" style="animate-delay: 1s" alt="">
                            <div class="carousel-caption d-none d-sm-block d-md-block">
                                <h5 class="animated fadeInDown" style="animation-delay: 1s">School Details</h5>
                                <p class="animated fadeIn" style="animation-delay: 2s">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ad aspernatur beatae cumque distinctio dolor.</p>
                                <p class="animated fadeIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/milestones_background.jpg"
                                 class="img-fluid-carousel d-block w-100 fadeInLeft" style="animate-delay: 2s" alt="">
                            <div class="carousel-caption d-none d-sm-block d-md-block">
                                <h5 class="animated fadeInUp" style="animation-delay: 1s">School Details</h5>
                                <p class="animated fadeIn" style="animation-delay: 2s">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ad aspernatur beatae cumque distinctio dolor.</p>
                                <p class="animated fadeIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/milestones_background.jpg"
                                 class="img-fluid-carousel d-block w-100 fadeInLeft" style="animate-delay: 2s" alt="">
                            <div class="carousel-caption d-none d-sm-block d-md-block">
                                <h5 class="animated bounceIn" style="animation-delay: 1s">School Details</h5>
                                <p class="animated fadeIn" style="animation-delay: 2s">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ad aspernatur beatae cumque distinctio dolor.</p>
                                <p class="animated fadeIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!--Message Desk-->
        <section class="message-desk bg-light">
            <div class="container">
                {{--Message Part--}}
                <div class="row">
                    <div class="col-sm-12  col-md-5 message-box mb-3">
                        <div><img src="images/yugalPic.jpg" class="message-box-img" alt=""/></div>
                        <h3 class="">Message From The Chairman</h3>
                        <p class="text-justify m-0 p-0"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum debitis deleniti deserunt dolores ducimus ea error ex id ipsa laborum magnam, magni maxime quis repellendus. Aliquam esse facere vel.</span><span>Aperiam atque aut cupiditate deleniti distinctio dolorem eos facilis impedit labore libero magnam nisi nulla quos veniam, voluptatum! Consequatur consequuntur delectus est eveniet libero nam obcaecati porro quibusdam reiciendis ut.</span><span>Aspernatur cumque, doloremque eaque illum in mollitia necessitatibus non optio ratione saepe. Accusantium alias asperiores dicta distinctio, dolorem eos eveniet illo illum ipsam laboriosam maxime natus numquam perferendis repellendus vero?</span><span>A adipisci aspernatur commodi culpa cupiditate diae ratione, rem rerum sed tempora tempore tenetur totam veritatis voluptatem? Culpa, non, provident?</span><span>Animi culpa dicta dolorem et ex exercitationem explicabo facere fuga hic inventore ipsam ipsum, itaque iusto, laudantium libero magnam natus nesciunt nisi perferendis quibusdam repellat tempore velit voluptatum? Incidunt, voluptatibus.</span>
                        </p>
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-sm-12 col-md-5 message-box">
                        <div><img src="images/yugalPic.jpg" class="message-box-img" alt=""/></div>
                        <h3 class="">Message From The Principal</h3>
                        <p class="text-justify m-0 p-0"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum debitis deleniti deserunt dolores ducimus ea error ex id ipsa laborum magnam, magni maxime quis repellendus. Aliquam esse facere vel.</span><span>Aperiam atque aut cupiditate deleniti distinctio dolorem eos facilis impedit labore libero magnam nisi nulla quos veniam, voluptatum! Consequatur consequuntur delectus est eveniet libero nam obcaecati porro quibusdam reiciendis ut.</span><span>Aspernatur cumque, doloremque eaque illum in mollitia necessitatibus non optio ratione saepe. Accusantium alias asperiores dicta distinctio, dolorem eos eveniet illo illum ipsam laboriosam maxime natus numquam perferendis repellendus vero?</span><span>A adipisci aspernatur commodi culpa cupiditate dicta dolorum eaque eius excepturi fugiat fugit itaque laboriosam magni molestiae ratione, rem rerum sed tempora tempore tenetur totam veritatis voluptatem? Culpa, non, provident?</span><span>Animi culpa dicta dolorem et ex exercitationem explicabo facere fuga hic inventore ipsam ipsum, itaque iusto, laudantium libero magnam natus nesciunt nisi perferendis </span>
                        </p>
                    </div>
                </div>
                {{--Awards Part--}}
                <div class="row mt-5 awards-section">
                    <div class="col-md-3 text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <div class="text-warning">
                                            <i class="fas fa-trophy fa-4x" id="award-icon"></i>
                                        </div>
                                    </div>
                                    <div class="">Award</div>
                                </div>
                            </div>
                            <div class="bg-light"><h1>45</h1></div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <div class="text-warning">
                                            <i class="fas fa-users fa-4x" id="award-icon"></i>
                                        </div>
                                    </div>
                                    <div class="">Students</div>
                                </div>
                            </div>
                            <div class="bg-light">
                                <h1>400</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <div class="text-warning">
                                            <i class="fas fa-user-md fa-4x" id="award-icon"></i>
                                        </div>
                                    </div>
                                    <div class="">Teachers</div>
                                </div>
                            </div>
                            <div class="bg-light">
                                <h1>45</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <div class="text-warning">
                                            <i class="fas fa-trophy fa-4x" id="award-icon"></i>
                                        </div>
                                    </div>
                                    <div class="">Award</div>
                                </div>
                            </div>
                            <div class="bg-light">
                                <h1>45</h1>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!---Testonomials Desk-->
        <section class="testonomial-desk">
            <div class="container">
                <h1>Testonomials</h1>
                <p class="text-center text-white">Sayings of Differnt Peoples</p>
                <div class="row">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="col-md-4 text-center swiper-slide">
                                <div class="profile">
                                    <img src="images/teacher_1.jpg" class="testonomial-user">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                        dolor
                                        enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                        reiciendis saepe suscipit veritatis vero vitae! Quis.
                                    </blockquote>
                                    <h3> Testonomilar Name <span> Post at ..... </span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 text-center swiper-slide">
                                <div class="profile">
                                    <img src="images/teacher_2.jpg" class="testonomial-user">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                        dolor
                                        enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                        reiciendis saepe suscipit veritatis vero vitae! Quis.
                                    </blockquote>
                                    <h3> Testonomilar Name <span> Post ..... </span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 text-center swiper-slide">
                                <div class="profile">
                                    <img src="images/teacher_4.jpg" class="testonomial-user">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                        dolor
                                        enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                        reiciendis saepe suscipit veritatis vero vitae! Quis.
                                    </blockquote>
                                    <h3> Testonomilar Name <span> Post ..... </span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 text-center swiper-slide">
                                <div class="profile">
                                    <img src="images/teacher_5.jpg" class="testonomial-user">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                        dolor
                                        enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                        reiciendis saepe suscipit veritatis vero vitae! Quis.
                                    </blockquote>
                                    <h3> Testonomilar Name <span> Post at ..... </span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 text-center swiper-slide">
                                <div class="profile">
                                    <img src="images/teacher_6.jpg" class="testonomial-user">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                        dolor
                                        enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                        reiciendis saepe suscipit veritatis vero vitae! Quis.
                                    </blockquote>
                                    <h3> Testonomilar Name <span> Post ..... </span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 text-center swiper-slide">
                                <div class="profile">
                                    <img src="images/teacher_3.jpg" class="testonomial-user">
                                    <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                        dolor
                                        enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                        reiciendis saepe suscipit veritatis vero vitae! Quis.
                                    </blockquote>
                                    <h3> Testonomilar Name <span> Post ..... </span></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>

                    </div>
                </div>
            </div>
        </section>
        {{--Event Section--}}
        <section class="event-desk">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section_title text-center mb-2">
                            <h2>Recent News and Events</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="recent-event">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="images/teacher_1.jpg" class="img-fluid-event" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fa-calendar-alt"></i><span> Event Date</span>
                                                    </p>
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fas fa-map-marker-alt"></i><span> Event Location</span>
                                                    </p>
                                                </div>
                                                <h3>Recent News Title</h3>
                                                <p class="limited-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing
                                                    elit. Aliquid animi
                                                    laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                                    animi, asperiores doloribus eaque et, explicabo facere libero
                                                    numquam
                                                    quaerat reiciendis totam.</p>
                                                <button class="btn btn-outline-dark btn-event">
                                                    View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="recent-event">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="images/teacher_1.jpg" class="img-fluid-event" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fa-calendar-alt"></i><span> Event Date</span>
                                                    </p>
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fas fa-map-marker-alt"></i><span> Event Location</span>
                                                    </p>
                                                </div>
                                                <h3>Recent News Title</h3>
                                                <p class="limited-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing
                                                    elit. Aliquid animi
                                                    laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                                    animi, asperiores doloribus eaque et, explicabo facere libero
                                                    numquam
                                                    quaerat reiciendis totam.</p>
                                                <button class="btn btn-outline-dark btn-event">
                                                    View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="recent-event">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="images/teacher_1.jpg" class="img-fluid-event" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fa-calendar-alt"></i><span> Event Date</span>
                                                    </p>
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fas fa-map-marker-alt"></i><span> Event Location</span>
                                                    </p>
                                                </div>
                                                <h3>Recent News Title</h3>
                                                <p class="limited-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing
                                                    elit. Aliquid animi
                                                    laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                                    animi, asperiores doloribus eaque et, explicabo facere libero
                                                    numquam
                                                    quaerat reiciendis totam.</p>
                                                <button class="btn btn-outline-dark btn-event">
                                                    View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section_title text-center mb-2">
                            <h2>Upcoming Events</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="upcoming-event">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 upcoming-event-date">
                                                <p>10<br/>Feb</p>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fa-calendar-alt"></i><span> Event Date</span>
                                                    </p>
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fas fa-map-marker-alt"></i><span> Event Location</span>
                                                    </p>
                                                </div>
                                                <h3>Upcoming Events Title</h3>
                                                <p class="limited-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Aliquid animi
                                                    laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                                    animi, asperiores doloribus eaque et, explicabo facere libero
                                                    numquam
                                                    quaerat reiciendis totam.</p>
                                                <button class="btn btn-outline-dark btn-event">
                                                    View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-event">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 upcoming-event-date">
                                                <p>10<br/>Feb</p>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fa-calendar-alt"></i><span> Event Date</span>
                                                    </p>
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fas fa-map-marker-alt"></i><span> Event Location</span>
                                                    </p>
                                                </div>
                                                <h3>Upcoming Events Title</h3>
                                                <p class="limited-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Aliquid animi
                                                    laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                                    animi, asperiores doloribus eaque et, explicabo facere libero
                                                    numquam
                                                    quaerat reiciendis totam.</p>
                                                <button class="btn btn-outline-dark btn-event">
                                                    View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-event">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 upcoming-event-date">
                                                <p>10<br/>Feb</p>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fa-calendar-alt"></i><span> Event Date</span>
                                                    </p>
                                                    <p class="col-md-6 col-sm-12">
                                                        <i class="fas fas fa-map-marker-alt"></i><span> Event Location</span>
                                                    </p>
                                                </div>
                                                <h3>Upcoming Events Title</h3>
                                                <p class="limited-text">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Aliquid animi
                                                    laudantium quaerat qui quisquam repudiandae. Ab accusamus adipisci
                                                    animi, asperiores doloribus eaque et, explicabo facere libero
                                                    numquam
                                                    quaerat reiciendis totam.</p>
                                                <button class="btn btn-outline-dark btn-event">
                                                    View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--Contact--}}
        <section class="contact-desk">
            <footer class="footer">
                <div class="container">

                    <!-- Newsletter -->

                    <div class="newsletter">
                        <div class="row">
                            <div class="col">
                                <div class="section_title text-center">
                                    <h1>Subscribe to newsletter</h1>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <div class="newsletter_form_container mx-auto">
                                    <form action="post">
                                        <div
                                            class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                            <input id="newsletter_email" class="newsletter_email" type="email"
                                                   placeholder="Email Address" required="required"
                                                   data-error="Valid email is required.">
                                            <button id="newsletter_submit" type="submit"
                                                    class="newsletter_submit_btn trans_300"
                                                    value="Submit">Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Footer Content -->

                    <div class="footer_content">
                        <div class="row">

                            <!-- Footer Column - About -->
                            <div class="col-lg-3 footer_col">

                                <!-- Logo -->
                                <div class="logo_container">
                                    <div class="logo">
                                        <img src="images/logo.png" alt="">
                                        <span>course</span>
                                    </div>
                                </div>

                                <p class="footer_about_text text-white">In aliquam, augue a gravida rutrum, ante nisl fermentum
                                    nulla,
                                    vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor
                                    fermentum,
                                    tempor
                                    lacus.</p>

                            </div>

                            <!-- Footer Column - Menu -->

                            <div class="col-lg-3 footer_col">
                                <div class="footer_column_title">Menu</div>
                                <div class="footer_column_content">
                                    <ul>
                                        <li class="footer_list_item"><a href="#">Home</a></li>
                                        <li class="footer_list_item"><a href="#">About Us</a></li>
                                        <li class="footer_list_item"><a href="courses.blade.php">Courses</a></li>
                                        <li class="footer_list_item"><a href="news.blade.php">News</a></li>
                                        <li class="footer_list_item"><a href="contact.blade.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column - Usefull Links -->

                            <div class="col-lg-3 footer_col">
                                <div class="footer_column_title">Usefull Links</div>
                                <div class="footer_column_content">
                                    <ul>
                                        <li class="footer_list_item"><a href="#">Testimonials</a></li>
                                        <li class="footer_list_item"><a href="#">FAQ</a></li>
                                        <li class="footer_list_item"><a href="#">Community</a></li>
                                        <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                                        <li class="footer_list_item"><a href="#">Tuitions</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column - Contact -->

                            <div class="col-lg-3 footer_col">
                                <div class="footer_column_title">Contact</div>
                                <div class="footer_column_content">
                                    <ul>
                                        <li class="footer_contact_item">
                                            <div class="footer_contact_icon">
                                                <img src="images/placeholder.svg"
                                                     alt="https://www.flaticon.com/authors/lucy-g">
                                            </div>
                                            Blvd Libertad, 34 m05200 Arévalo
                                        </li>
                                        <li class="footer_contact_item">
                                            <div class="footer_contact_icon">
                                                <img src="images/smartphone.svg"
                                                     alt="https://www.flaticon.com/authors/lucy-g">
                                            </div>
                                            0034 37483 2445 322
                                        </li>
                                        <li class="footer_contact_item">
                                            <div class="footer_contact_icon">
                                                <img src="images/envelope.svg"
                                                     alt="https://www.flaticon.com/authors/lucy-g">
                                            </div>
                                            hello@company.com
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Footer Copyright -->

                    <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                        <div class="footer_copyright">
					<span class="text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                            class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                                                              target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                        </div>
                        <div class="footer_social ml-sm-auto">
                            <ul class="menu_social">
                                <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </footer>
        </section>


        {{---------}}
    </div>
    <!--Container Ends-->


@endsection

@section('scripts')
    <script>
        /*Navber*/
        /*(function ($) {
            var previousScroll = 20;
            // scroll functions
            $(window).scroll(function (e) {

                // add/remove class to navbar when scrolling to hide/show
                var scroll = $(window).scrollTop();
                if (scroll >= previousScroll) {
                    $('.navbar').addClass("navbar-hide");

                } else if (scroll < previousScroll) {
                    $('.navbar').removeClass("navbar-hide");
                }
                previousScroll = scroll;

            });

        })(jQuery);*/
        /*----*/
        /*Swiper*/
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            initialSlide: 2,
            coverflowEffect: {
                rotate: 10,
                stretch: 0,
                depth: 100,
                modifier: 4,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                bulletSize: 20,
                clickable: true,
            },
        });
        /*---*/
    </script>
@endsection
