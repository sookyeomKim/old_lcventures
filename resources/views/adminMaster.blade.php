<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') - 온라인마케팅 엘씨벤처스(주)</title>
    <link rel="stylesheet" href="{{elixir('css/adminApp.css')}}">
    <style>
        body {
            background: #f1f4f7;
            padding-top: 50px;
            color: #5f6468;
        }

        ul, ol {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
        }

        .admin-aside {
            position: fixed;
            top: 60px;
            bottom: 0;
            z-index: 1000;
            display: block;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #fff;
            box-shadow: 1px 0px 10px rgba(0, 0, 0, .05);
        }

        .admin-main {
            margin-top: 10px;
        }

        .admin-main h2{
            padding: 10px;
        }

        .breadcrumb {
            border-radius: 0;
            padding: 10px 15px;
            background: #e9ecf2;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            margin: 0;
        }
    </style>
    @yield('styles')
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/admin') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
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
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        @yield('contents')
    </div>
</div>
<script src="{{elixir('js/vendor.js')}}"></script>
<script src="{{elixir('js/adminApp.js')}}"></script>
<script>
    $.material.init();
</script>
@yield('scripts')
</body>
</html>