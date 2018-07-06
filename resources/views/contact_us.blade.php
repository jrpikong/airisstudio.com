@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="contact blogsingle">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-left">
                        <div class="ct-it">
                            <h4>Address</h4>
                            <p>{{Voyager::setting('site.address')}}</p>
                            <img class="order-line" src="{{asset('images/uploads/order-line.png')}}" alt="">
                        </div>
                        <div class="ct-it">
                            <h4>Phone</h4>
                            <p>{{Voyager::setting('site.phone')}}</p>
                            <img class="order-line" src="{{asset('images/uploads/order-line.png')}}" alt="">
                        </div>
                        <div class="ct-it">
                            <h4>Email</h4>
                            <p>
                                <a href="#">{{Voyager::setting('site.email')}}</a>
                                {{--<a href="#">contact@organie_store.com1</a>--}}
                            </p>
                            <img class="order-line" src="{{asset('images/uploads/order-line.png')}}" alt="">
                        </div>
                        <div class="ct-it ct-icon">
                            <h4>Social</h4>
                            <a href="{{Voyager::setting('site.facebook')}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"></i></a>
                            <a href="{{Voyager::setting('site.twitter')}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"></i></a>
                            <a href="{{Voyager::setting('site.instagram')}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="contact-form blogsingle-content">
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                                @endif
                            @endforeach
                        </div>
                        <!-- comment form -->
                        <form action="{{route('contact-us')}}" method="post" class="post-cmt">
                            {{ csrf_field() }}
                            <label>Get in touch</label>
                            <div class="form-group row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input class="name {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" type="text" placeholder="Jhon" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input class="email {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="text" placeholder="E-mail*" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input class="website {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" type="text" placeholder="Mobile" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="website {{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" type="text" placeholder="Subject" value="{{ old('subject') }}">
                                    @if ($errors->has('subject'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <input class="comt {{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" type="text" placeholder="Comment*" value="{{ old('message') }}">
                                    @if ($errors->has('message'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <input class="submit" type="submit" value="post comment">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection