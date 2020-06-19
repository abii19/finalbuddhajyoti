@extends('layouts.websiteLayout')

@section ('style')
    <style>
    </style>
@stop

@section('content')
    <div id="app">
        <website-layout-2></website-layout-2>
        {{--Services Section--}}
        <services-desk></services-desk>
        {{--<established-details></established-details>--}}
        {{--Message + Extablished section--}}
        <message-desk-3></message-desk-3>
        {{--Quotes + Testimonial Section--}}
        <testinomials-desk-2></testinomials-desk-2>

        {{--Optional Message Section--}}
        {{--<message-desk-2></message-desk-2>--}}
        {{--Event Section--}}
        <event-desk></event-desk>

        {{--Gallery + Article Section--}}
        <gallery-article-desk></gallery-article-desk>

        {{--Optional Gallery + Testimonial Section--}}
        {{--<div class="container-fluid" style="background-color: #fafafa;">
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
        </div>--}}

        {{--Founding Members Section--}}
        <founding-members></founding-members>
        {{--Footer Section--}}
        <fotter-component></fotter-component>
    </div>
@stop

@section('scripts')
    <script>

    </script>
@stop
<script>
    import GalleryArticle from "../../js/components/Website/galleryArticle";
    export default {
        components: {GalleryArticle}
    }
</script>
