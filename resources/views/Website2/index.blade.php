@extends('layouts.websiteLayout2')

@section('content')
    <div id="app">
        <website-layout></website-layout>
        <services-desk></services-desk>
        <message-desk></message-desk>

        <div class="container-fluid" style="background: #ffffff">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <testinomials-desk></testinomials-desk>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <gallery-desk></gallery-desk>
                    </div>
                </div>
            </div>
        </div>
        <event-desk></event-desk>
        <upcoming-event-desk></upcoming-event-desk>
        <board-members></board-members>
        {{--<founding-members></founding-members>--}}
        {{--<fotter-component></fotter-component>--}}

    </div>
    {{--<div id="app">
        <website-layout></website-layout>
        <div class="container-fluid">

            <div class="">
                <message-desk></message-desk>
            </div>
        </div>
        <services-desk></services-desk>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <testinomials-desk></testinomials-desk>
                </div>
                <div class="col-lg-6 col-md-12">
                    <gallery-desk></gallery-desk>
                </div>
            </div>
        </div>
        <event-desk></event-desk>
        <upcoming-event-desk></upcoming-event-desk>
        <board-members></board-members>
    </div>--}}
@stop

@section('scripts')
    <script>

    </script>
@stop
