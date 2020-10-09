<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title') || {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{!!  asset('admin/front/img/core-img/favicon.ico') !!}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('admin/front/style.css')}}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="/"><img src="{{URL::to('admin/front/img/core-img/logo.png')}}" alt="Logo-Newspaper"></a>
                            </div>
    
                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Login -->
                                <div class="login d-flex">
                                @guest
                                    <a href="/login">Login</a>
                                    @if (Route::has('register'))
                                    <a href="/register">Register</a>
                                    @endif

                                    @else
                                    <a href="/dashboard">Dashboard</a>
                                    <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" style="background:#ee002d" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"  href="{{ route('logout') }}"
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
                                </div>

                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="/search" >
                                        <input type="search" name="search" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{URL::to('admin/front/img/core-img/logo.png')}}" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav align-middle">
                            @php
                                $menus = App\Menu::all();
                            @endphp
                                <ul>
                                @if(count($menus)>0)
                                @foreach($menus as $menu)
                                    <li ><a href="{{$menu->url}}">{{$menu->label}}</a></li>
                                @endforeach
                                @else
                                <h1>Please create menu !!!</h1>
                                @endif
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    