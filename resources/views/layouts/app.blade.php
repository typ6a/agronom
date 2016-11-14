<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <title>агроном</title>


        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


        <style>
            body {
                font-family: sans-serif;
            }

            .fa-btn {
                margin-right: 6px;
            }


            .affix {
                top: 0;
                width: 100%;
            }

            .affix + .container-fluid {
                padding-top: 70px;

            }
        </style>
    </head>

    <body id="app-layout">
        <div class="container" style="background-color:#F44336;color:#fff;height:200px;">
            <h1>Пшеница</h1>
        </div>

        <nav class="navbar navbar-default" data-spy="affix" data-offset-top="197" role="navigation">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img alt="NEWSUPERLED" src= "/data/logo.gif">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/source/1"><img src="http://agronom.localhost/data/images/kolosokLogo.jpg" width="100" height="100" border="1">Колосок</a></li>
                        <li><a href="/source/2"><img src="http://agronom.localhost/data/images/apkUa.png" width="100" height="100" border="1">АПКУА</a></li>
                        <li><a href="/source/3"><img src="http://agronom.localhost/data/images/agroUkraine.png" width="100" height="100" border="1">agro-ukraine</a></li>
                        <li><a href="/source/4"><img src="http://agronom.localhost/data/images/agrotender-logo.png" width="100" height="100" border="1">agrotender</a></li>

                        @if (Auth::check())
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Админка <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>обновить Колосок</a></li>
                                <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>обновить АПКУА</a></li>
                                <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>обновить agro-ukraine</a></li>
                                <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>обновить agrotender</a></li>
                                <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>обновить</a></li>
                            </ul>
                        </li>         
                        
                        
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
<div class="container" style="background-color:#F44336;color:#fff; margin-top: 10px">
       
   

<div class="row">
  футер
    
  
</div>
    </div>
        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
