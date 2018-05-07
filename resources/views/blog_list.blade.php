@extends('layouts.app')

@section('content')
<div class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>blog list 01</h1>
                <ul class="breadcumb">
                    <li><a href="#">Home</a></li>
                    <li><span>/</span>Blog list 01</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="bloglistpost-v1">
    <div class="container">
        <div class="row">
            <div class="blogpost-v1">
                @if(!$blogs->isEmpty())
                    @foreach($blogs as $blog)
                        <div class="blog-it">
                            <a href="{{route('article-deetail',[$blog->slug])}}"><img class="post-img" src="{{Voyager::image($blog->image)}}" alt="{{$blog->slug}}"></a>
                            <div class="blog-it-content">
                                <div class="date">
                                    <span>{{$blog->created_at->format('M Y')}} by <a href="#">{{$blog->authorId->name}}</a></span>
                                </div>
                                <h2><a href="{{route('article-deetail',[$blog->slug])}}">{{$blog->title}}</a></h2>
                                <p>{!! str_limit($blog->body,350) !!}</p>
                                <a class="readmore" href="{{route('article-deetail',[$blog->slug])}}">Read more</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<div class="blogpanigation">
    <div class="container">
        <div class="row">
            {{ $blogs->links('vendor.pagination.default') }}
        </div>
    </div>
</div>
@endsection