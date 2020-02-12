@extends('layouts.app-2')

@section('style')
    <style>
        .blog-details{
            padding: 50px 0 50px 0;
            background-color: #ffffff;
        }
        .post-meta {
            font-size: 15px;
        }

        .post-meta i {
            color: #ffb606;
        }

        .post-header h2 {
            font-size: 40px;
            font-weight: bolder;
            font-family: Popins;
            margin: 20px 0 15px;
        }

        .post-header p {
            font-size: 20px;
            font-family: "Noto Sans";
        }

        .post-media {
            height: 400px;
        }

        .post-media img {
            height: 400px;
        }

        .post-entry {
            font-size: 20px;
            font-family: Popins;
            padding: 20px 0 0 0;
            color: #717171;
        }

        .post-entry blockquote {
            font-size: 20px;
            color: #000000;
        }

        .post-entry h3 {
            font-size: 25px;
            font-weight: bold;
            color: #000000;
        }

        .widget-post img {
            width: 100px;
            height: 100px;

        }

        .sidebar-widget h4 {
            font-size: 25px;
            margin-top: 10px;
        }
        .sidebar-widget ul{
            display: inline-block;
            list-style: none;
        }
        .sidebar-widget ul li{

        }
        ul.widget-tag li{
            text-decoration: none;
            list-style: none;
            display: inline;
            margin-right: 15px;
        }
        ul.widget-tag i{
            color: #ffB606;
        }

    </style>

@endsection
@section('content')
    <div class="blog-details">
        <div class="container">
            <!-- END HEADER -->
            <!-- Intro Section -->
        {{--<section class="inner-intro bg-img light-color overlay-before parallax-background">
            <div class="container">
                <div class="row title">
                    <div class="title_row">
                        <h1 data-title="Blog Detail"><span>Blog Detail</span></h1>
                        <div class="page-breadcrumb">
                            <a>Home</a>/ <span>Blog Detail</span>
                        </div>

                    </div>

                </div>
            </div>
        </section>--}}
        <!-- Intro Section -->
            <!-- Blog Post Section -->
            <section class="ptb ptb-xs-60">
                <div class="container">
                    <div class="row">
                        <!-- Post Bar -->
                        <div class="col-lg-9 blog-post-hr post-section">
                            <div class="blog-post mb-30">
                                <div class="post-meta"><span>by Admin, </span><span> <i class="fas fa-comments"></i> 25,</span><span> <i
                                            class="fas fa-heart"></i> 57</span>
                                </div>
                                <div class="post-header">
                                    <h2>Maecenas nec odio ante varcy tincidunt.</h2>
                                    <p><span class="event-calender blog-date"> 21 <span>June</span></span></p>
                                </div>
                                <div class="post-media"><img src="{{asset("images/news_background.jpg")}}"
                                                             class="img-fluid" alt=""></div>
                                <div class="post-entry">
                                    <p> Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                        rerum facilis est et expedita distinctio. </p>
                                    <p> similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                    <blockquote class="dark-bg"> We're not leaving here without Buster, man. Leave no
                                        crash-test dummy behind nihil impedit quo minus id quod maxime placeat facere!
                                    </blockquote>
                                    <p class="lead"> Praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                        molestias excepturi sint occaecati cupiditate non provident, similique sunt in
                                        culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et
                                        harum quidem rerum facilis est et expedita distinctio. </p>
                                    <h3 class="mt-30">Sub Blog Title Here</h3>
                                    <p style="font-size: 17px"> Praesentium voluptatum deleniti atque corrupti quos
                                        dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                        rerum facilis est et expedita distinctio. </p>
                                    <p style="font-size: 17px"> similique sunt in culpa qui officia deserunt mollitia
                                        animi, id est laborum et
                                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                </div>
                            </div>
                            <hr/>
                        </div>
                        <!-- End Post Bar -->
                        <!-- Sidebar -->
                        <div class="col-lg-3 m-0 p-0">
                            {{--<div class="sidebar-widget">
                                <h4>Categories</h4>
                                <ul class="categories">
                                    <li><a>simple blog post with image</a></li>
                                    <li><a>awesome audio post</a></li>
                                    <li><a>quotes post</a></li>
                                    <li><a>Neurology</a></li>
                                    <li><a>awesome video post</a></li>
                                    <li><a>cool image post</a></li>
                                </ul>
                            </div>--}}
                            <div class="sidebar-widget">
                                <h4>Recent Post</h4>

                                <div class="row widget-post mx-3 pt-3 pb-3">
                                    <div class="col-md-4">
                                        <a class="widget-post-media"> <img src="{{asset("images/course_1.jpg")}}"
                                                                           alt=""> </a>
                                    </div>
                                    <div class="col-md-6 ml-4">
                                        <div class="widget-post-info">
                                            <h4><a>veritatis et quasi</a></h4>
                                            <div class="post-meta"><span> <a href="#"><i
                                                            class="fas fa-heart"></i> 57</a>,</span><span>June 16</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row widget-post mx-3 pt-3 pb-3">
                                    <div class="col-md-4">
                                        <a class="widget-post-media"> <img src="{{asset("images/course_1.jpg")}}"
                                                                           alt=""> </a>
                                    </div>
                                    <div class="col-md-6 ml-4">
                                        <div class="widget-post-info">
                                            <h4><a>veritatis et quasi</a></h4>
                                            <div class="post-meta"><span> <a href="#"><i
                                                            class="fas fa-heart"></i> 57</a>,</span><span>June 16</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row widget-post mx-3 pt-3 pb-3">
                                    <div class="col-md-4">
                                        <a class="widget-post-media"> <img src="{{asset("images/course_1.jpg")}}"
                                                                           alt=""> </a>
                                    </div>
                                    <div class="col-md-6 ml-4">
                                        <div class="widget-post-info">
                                            <h4><a>veritatis et quasi</a></h4>
                                            <div class="post-meta"><span> <a href="#"><i
                                                            class="fas fa-heart"></i> 57</a>,</span><span>June 16</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-0">
                            <h4>Popular Tags</h4>
                            <ul class="widget-tag pt-15">
                                <i class="fas fa-tags"></i>
                                <li><a>Art</a></li>
                                <li><a>Business</a></li>
                                <li><a>Design</a></li>
                                <li><a>Graphic</a></li>
                                <li><a>fashion</a></li>
                                <li><a>Model</a></li>
                                <li><a>Photography</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Sidebar -->
                </div>
            </section>
        </div>
        <!-- End Blog Post Section -->
    </div>
@endsection

@section('scripts')

@endsection
