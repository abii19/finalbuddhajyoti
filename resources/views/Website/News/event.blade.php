@extends('layouts.app-2')

@section('style')
    <style>
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

/*        .btn-event {
            display: block;
            background: #f8611a;
            color: #dddddd;
        }*/

        .recent-event:hover {
            cursor: pointer;
        }

        .upcoming-event {
            padding-top: 15px;
            padding-bottom: 15px;
            margin-bottom: 40px;
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
        /*Event Section Ends*/
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
        .btn-event a{
            color: white;
            text-decoration: none;
        }

    </style>
@endsection
@section('content')
    {{--<link rel="stylesheet" type="text/css" href={{asset("css/index-css/event-desk.css")}} />--}}

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
                                            <img src="{{asset("images/teacher_1.jpg")}}" class="img-fluid-event" alt="">
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
                                            <button class="btn btn-dark btn-event">
                                                <a href="/news/eventdetail">View Details</a>
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
                                            <img src="{{asset("images/teacher_1.jpg")}}" class="img-fluid-event" alt="">
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
                                            <button class="btn btn-dark btn-event">
                                                <a href="/news/eventdetail">View Details</a>
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
                                            <img src="{{asset("images/teacher_1.jpg")}}" class="img-fluid-event" alt="">
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
                                            <button class="btn btn-dark btn-event">
                                                <a href="/news/eventdetail">View Details</a>
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
                            <div class="">
                                <div class="">
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
                                            <button class="btn btn-dark btn-event">
                                                <a href="/news/eventdetail">View Details</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming-event">
                            <div class="">
                                <div class="">
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
                                            <button class="btn btn-dark btn-event">
                                                <a href="/news/eventdetail">View Details</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming-event">
                            <div class="">
                                <div class="">
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
                                            <button class="btn btn-dark btn-event">
                                                <a href="/news/eventdetail">View Details</a>
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
@endsection

@section('scripts')

@endsection
