@extends('layouts.websiteLayout')

@section ('style')
    <style>

    </style>
@stop

@section('content')
    <div id="app">
        <website-layout-2></website-layout-2>
        <services-desk></services-desk>
        {{--<established-details></established-details>--}}
        <message-desk-2></message-desk-2>
        <event-desk></event-desk>
        {{--Checking testimonials--}}
        <testinomials-desk-2></testinomials-desk-2>

        <div class="container-fluid" style="background-color: #fafafa;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <testinomials-desk></testinomials-desk>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <gallery-desk></gallery-desk>
                    </div>
                </div>
            </div>
        </div>

        <founding-members></founding-members>
        <fotter-component></fotter-component>
    </div>
@stop

@section('scripts')
    <script>

    </script>
@stop
