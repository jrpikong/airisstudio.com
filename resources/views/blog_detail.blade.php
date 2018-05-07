@extends('layouts.app')

@section('content')
    <section class="blogsingle" style="padding: 0;margin: 0;">
        <img class="blog-img" src="{{Voyager::image($blog->image)}}" alt="{{$blog->title}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="blogsingle-content">
                        <div class="date">
                            <span>{{$blog->created_at->format('M Y')}} by <a href="#">{{$blog->authorId->name}}</a></span>
                        </div>
                        <h1>{{$blog->title}}</h1>
                        {!! $blog->body !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection