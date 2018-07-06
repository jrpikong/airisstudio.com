<!-- BEGIN | Header -->
<header class="ht-header flower-hd2 flower-hd4" id="hd-fixed">
    <div class="row">
        <nav id="mainNav" class="navbar navbar-default navbar-custom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="row">
                    <div class="main-logo">
                        <div class="col-md-5">
                            <div class="mobile-btn">
                                <button id="btn"><i class="ion-navicon"></i></button>
                                <button id="close-btn"><i class="ion-android-close"></i></button>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <a class="hd-logo" href="/"><img  class="logo-2" src="{{asset('images/main-logo.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav hd-menu">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('home')}}" class="btn btn-default dropdown-toggle lv1">Home</a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1 grey " data-toggle="dropdown" data-hover="dropdown">
                                Catalog<i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1 pink">
                                <li><a href="{{route('catalog')}}"><i class="ion-ios-minus-empty"></i>All Catalog</a></li>
                                @if(!$categoryCatalog->isEmpty())
                                    @foreach($categoryCatalog as $item)
                                        <li><a href="{{route('catalog-by-category',[$item->slug])}}"><i class="ion-ios-minus-empty"></i>{{$item->tile}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('article')}}" class="btn btn-default dropdown-toggle lv1">Article</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('contact-us')}}" class="btn btn-default dropdown-toggle lv1">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</header>
<!-- END | Header -->