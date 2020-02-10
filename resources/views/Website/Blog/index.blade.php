@extends('layouts.werbsiteLayout')

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            @foreach ($blog as $blog)
                <div class="col-md-8 mt-3">
                    <div class="col-md-12">
                        <img class="img-fluid img-thumbnail" src="{{asset($blog->single_blog_pic)}}" alt="">
                        <div class="col-md-3 offset-9 mt-2">
                            {{$blog->created_at}}
                        </div>

                    </div>
                    <div class="col-md-12">
                        <h1 class="text-center text-bold">{{$blog->title}}
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <p class="text-left">{{Str::limit( $blog->post, 200)}}
                            <span>
                                <a href="{{route('singleBlog',$blog->id)}}" class="btn-info btn-sm">Read More <i
                                        class="fas fa-arrow-right"></i></a>
                            </span>
                        </p>
                    </div>
                </div>


            @endforeach
        </div>

    </div>

@stop
