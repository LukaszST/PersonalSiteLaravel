@if(Session::has('message'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('message')}}
    </div>
@endif

<div id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-left page-scroll" href="#page-top"><div class="logo"></div></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">{{__('translations.menu.about')}}</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">{{__('translations.menu.skills')}}</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">{{__('translations.menu.portfolio')}}</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">{{__('translations.menu.contact')}}</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</div>
