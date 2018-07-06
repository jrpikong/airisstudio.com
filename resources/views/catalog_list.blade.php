@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>List Catalog</h1>
                    <ul class="breadcumb">
                        <li><a href="#">Airis Studio</a></li>
                        <li><span>/</span>{{$requestUri}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="bloglistpost-v1">
        <div class="container">
            <div class="row">
                <div class="blogpost-v1">
                    @if(!$catalogs->isEmpty())
                        @foreach($catalogs as $catalog)
                            <div class="blog-it">
                                <a href="{{route('catalog-detail',[$catalog->slug])}}"><img class="post-img" src="{{Voyager::image($catalog->images)}}" alt="{{$catalog->slug}}"></a>
                                <div class="blog-it-content">
                                    <h2><a href="{{route('catalog-detail',[$catalog->slug])}}">{{$catalog->name}}</a></h2>
                                    <p>{!! str_limit($catalog->body,500) !!}</p>
                                    <a class="readmore" href="{{route('catalog-detail',[$catalog->slug])}}">Read more</a>
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
                {{ $catalogs->links('vendor.pagination.default') }}
            </div>
        </div>
    </div>
@endsection