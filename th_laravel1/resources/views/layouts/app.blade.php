<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/fonts/fontawesome-free-5.11.2-web/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container">
            <header class="header header1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <ul class="list-controllers">
                                <li><a href="{{route('gio-hang')}}"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <li><a href="{{route('dang-nhap')}}"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
                                <li><a href="{{route('dang-nhap')}}"><i class="fas fa-user"></i> Đăng ký</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <header class="header header2">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route("home")}}"><img class="logo" src="{{ asset('/assets/frontend/images/logo.jpg') }}"></a>
                    </div>
                    <div class="col-md-3 col-md-offset-3">
                        <div class="area-search">
                            <form action="{{route('tim-kiem')}}" method="post">
                                <input type="text" class="form-control keyword" name="keyword"><i class="fas fa-search"></i>
                                <p><b>Từ khóa</b>: giày thể thao</p>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        @php
            $list_root_category=DB::table('categories')->where('parent','=',null)->get();
            $list_sub_category=DB::table('categories')->where('parent','!=',null)->get();


        @endphp
        <nav class="nav">
            <div class="container">
                <ul class="list-main-menu">
                    <li><a href="{{route('home')}}" class="active">Home</a></li>
                    @foreach($list_root_category as $root_category)
                        <li>
                            <a href="javascript:void(0)">{{$root_category->category_name}}</a>
                            <ul class="sub-category">
                                @foreach ($list_sub_category as $sub_category)
                                    @if ($sub_category->parent==$root_category->id)
                                        <li><a href="{{route('danh-muc',$sub_category->id)}}">{{$sub_category->category_name}}</a></li>
                                    @endif
                                @endforeach

                            </ul>
                        </li>
                    @endforeach
                    <li><a href="{{route('gioi-thieu')}}">Giới thiệu</a></li>
                    <li><a href="{{route('lien-he')}}">Liên hệ</a></li>
                </ul>
            </div>
        </nav>
        <nav style="display: none" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            @yield('content')
        </main>
    </div>
</body>
</html>
