<template>
    <div>
        <section class="footer-desk">
            <!--<div class="row">

                &lt;!&ndash; Footer Column - About &ndash;&gt;
                <div class="col-lg-3 footer_col">

                    &lt;!&ndash; Logo &ndash;&gt;
                    <div class="logo_container">
                        <div class="logo">
                            <img src="images/logo.png" alt="">
                            <span>course</span>
                        </div>
                    </div>

                    <p class="footer_about_text text-white">In aliquam, augue a gravida rutrum, ante nisl
                        fermentum
                        nulla,
                        vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor
                        fermentum,
                        tempor
                        lacus.</p>

                </div>

                &lt;!&ndash; Footer Column - Menu &ndash;&gt;

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Menu</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="#">Home</a></li>
                            <li class="footer_list_item"><a href="#">About Us</a></li>
                            <li class="footer_list_item"><a href="courses.blade.php">Courses</a></li>
                            <li class="footer_list_item"><a href="News/index.blade.php">News</a></li>
                            <li class="footer_list_item"><a href="contact.blade.php">Contact</a></li>
                        </ul>
                    </div>
                </div>

                &lt;!&ndash; Footer Column - Usefull Links &ndash;&gt;

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

                &lt;!&ndash; Footer Column - Contact &ndash;&gt;

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Contact</div>
                    <div class="footer_column_content">

                    </div>
                </div>

            </div>-->

            <footer class="hlp-footer-wrap" style="padding: 60px 0px 10px 0 !important;">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <img style="max-width: 220px;" class="logofoot" alt="Buddha Jyoti Logo"
                                 src="images/logo.png">
                            <br>
                            <p class="footer-text">Buddha Jyoti Secondary English Boarding School<br>
                                <span class="localnap">
                                <span>
                                    <span>Buddha Jyoti Address</span>,<br>
                                    <span>Address-Road Name</span>
                                <br>
                                    <span class="money-moves">
                                    <span><a href="">(056) 5 -- Tel Phone Number</a></span><br>
                                    </span>
                                </span>
                                </span>
                            </p>
                        </div>
                        <div class="col-md-1 mobile-border"></div>
                        <div class="col-md-3 hide-in-mobile">
                            <h4 style="font-weight: normal; font-size: 16px !important; margin-top: 8px;">WE COVER</h4>
                            <ul class="footer-text" style="margin-top: 2px;">
                                <li><a href="">Home</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Facilities</a>
                                </li>
                                <li><a href="">Teachers</a></li>
                                <li><a href="">Information</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="mobile-footer-subscribe-section col-md-4">
                            <h3 class="title" style="color: #a8943d;">LOCATION</h3>
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe id="gmap_canvas" style="width: 600px; height: 200px;" src="https://maps.google.com/maps?q=Buddha%20Jyoti%20Eng&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.bitgeeks.net"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row line-above" style="margin: 0px">
                        <div class="col-md-6 hide-in-mobile">
                            <p>© 2020 Dev Vision / All rights reserved</p>

                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3 hide-in-mobile">
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-pinterest"></i>
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </footer>

        </section>

    </div>
</template>

<script>
    export default {
        name: "fotterComponent"
    }
</script>

<style scoped>
    .hlp-footer-wrap {
        clip-path: polygon(0 8%, 100% 0%, 100% 100%, 0% 100%);
        -webkit-clip-path: polygon(0 8%, 100% 0%, 100% 100%, 0% 100%);
        margin-top: -50px;
    }

    footer {
        background: #0b2647;
        min-height: 460px;
        padding: 80px 40px;
        position: relative;
        z-index: 90;
    }

    .wrapper {
        margin: 0 auto;
        max-width: 1140px;
    }

    .wrapper {
        margin: 0 auto;
        max-width: 1140px;
    }

    .hlp-footer-wrap .footer-text {
        font-size: 15px;
    }

    footer p, footer p a {
        color: rgba(255, 255, 255, .6);
    }

    .wrapper, figcaption, p, ul {
        font-family: Gotham-Light, HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-weight: 300;
    }

    footer h4 {
        color: #a8943d;
        text-transform: uppercase !important;
        font-weight: 700;
        font-family: gotham-medium;
        font-size: 17px !important;
        line-height: 33px;
        letter-spacing: .04em;
        margin-bottom: 0px;
    }

    footer ul {
        list-style: none;
    }

    footer ul li {
        line-height: 1.8em;
    }

    footer ul li a {
        color: rgba(255, 255, 255, .6);
        opacity: 1;
    }

    .line-above {
        border-top: 1px solid rgba(255, 255, 255, .1);
    }

    footer .fab {
        font-size: 23px;
        line-height: 65px;
        margin-left: 17px;
        color: rgba(255, 255, 255, .3);
        float: right;
    }

    .fab {
        font-family: "Font Awesome 5 Brands";
    }

    .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
        float: left;
    }

    .row {
        margin: 40px 0;
    }

    blockquote, figcaption, p, ul {
        font-family: Gotham-Light, sans-serif;
        font-size: 17px;
        line-height: 27px;
        margin: 20px 0;
    }

    /*.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }*/

    @media (min-width: 992px) {
        .col-md-6 {
            width: 50%;
        }

        .col-md-4 {
            width: 33.33333333%;
        }

        .col-md-3 {
            width: 25%;
        }

        .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
            float: left;

        }
    }

    .mapouter {
        position: relative;
        height: 500px;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
    }
</style>
