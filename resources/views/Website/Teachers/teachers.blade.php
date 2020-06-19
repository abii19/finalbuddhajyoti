@extends('layouts.websiteLayout')

@section('style')

@endsection
@section('content')
    <div id="app">
        {{--<layout-second></layout-second>--}}
        <website-layout-2></website-layout-2>
        <teachers-component></teachers-component>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection

