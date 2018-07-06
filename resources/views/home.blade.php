@extends('layouts.app')

@section('content')

    <div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="flower-04" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.3.1.5 fullscreen mode -->
        <div id="rev_slider_11_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.1.5">
            <ul>
                <!-- SLIDE  -->
                @if(!$sliders->isEmpty())
                    @foreach($sliders as $slider)
                        @php
                        $images = json_decode($slider->image)
                        @endphp
                    <li data-index="rs-23" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/flower-01-slide-01-100x50.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{Voyager::image($images[0])}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-23-layer-1"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="-150"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"

                         data-type="image"
                         data-responsive_offset="on"

                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5;">
                        <img src="{{asset(Voyager::image($images[1]))}}" alt="" data-ww="760px" data-hh="150px" width="760" height="150" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption lato-24-700   tp-resizeme"
                         id="slide-23-layer-2"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="-300"
                         data-width="['auto']"
                         data-height="['auto']"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap;letter-spacing:1.2em;">Airis Studio</div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption btn-lato-16 rev-btn "
                         id="slide-23-layer-3"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset=""
                         data-width="['auto']"
                         data-height="['auto']"

                         data-type="button"
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[18,18,18,18]"
                         data-paddingright="[40,40,40,40]"
                         data-paddingbottom="[18,18,18,18]"
                         data-paddingleft="[40,40,40,40]"

                         style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">{{$slider->title}}</div>
                </li>
                    @endforeach
                @endif
                <!-- SLIDE  -->
            </ul>
            <div style="" class="tp-static-layers">

                <!-- LAYER NR. 16 -->
                <div class="tp-caption rev-scroll-btn  tp-static-layer"
                     id="slider-11-layer-1"
                     data-x="center" data-hoffset=""
                     data-y="bottom" data-voffset="10"
                     data-width="['35']"
                     data-height="['55']"

                     data-type="button"
                     data-responsive_offset="on"
                     data-responsive="off"
                     data-startslide="0"
                     data-endslide="2"
                     data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 20; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-weight: 100;border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:3px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                    <span>
                    </span>
                </div>
            </div>
            <div class="tp-bannertimer" style="height: 5px; background-color: rgba(0, 0, 0, 0.15);"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->

    @if($about)
    <div class="about floweraboutv4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-ms-6 col-xs-12">
                    <img src="{{Voyager::image($about->image)}}" alt="">
                </div>
                <div class="col-md-6 col-ms-6 col-xs-12">
                    <div class="ab-flow-r">
                        {!! $about->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <div class="flowerarrival trending trendingv4">
        <div class="container">
            <div class="arr-right">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="arr-hd">
                            <h1>Trending Items</h1>
                        </div>
                    </div>
                </div>
                <div class="row arr-slider">
                    @if(!$catalogTopThree->isEmpty())
                        @foreach($catalogTopThree as $item)
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="arr-it v4">
                                    <img src="{{Voyager::image($item->images)}}" alt="{{$item->slug}}">
                                    <div class="arr-text">
                                        <h1><a href="{{route('catalog-detail',[$item->slug])}}">{{$item->name}}</a></h1>
                                        <span class="date">Rp. {{number_format($item->price)}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>

    <div class="subscribe flowersubscribev3">
        <div class="container">
            <div class="row">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                    @endif
                @endforeach
                <form method="post" action="{{route('subscribe')}}" class="post-cmt">
                    {{ csrf_field() }}
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="sub-heading">
                            <h1>Subscribe To Our Newsletter</h1>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="form">
                            <input class="email {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="sub-button">
                            <input class="submit" type="submit" value="Subscribe">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection