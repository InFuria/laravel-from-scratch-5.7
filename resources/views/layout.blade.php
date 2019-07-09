<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laracast')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">

</head>

<body style="background-color: whitesmoke">

{{-- Header logo--}}
<header class="main-header">
    <nav class="navbar navbar-static-top">
        <a href="/" class="mr-4">
            <i class="fab fa-gg-circle fa-3x" style="color: black"></i>
        </a>
    </nav>
</header>

{{-- Content --}}
<div class="row">
    {{-- Sidebar --}}
    <div class="col-md-3" id="first">
        <h5 id="sub-title">Menu Principal</h5>
        <div id="sub">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('about') }}"><i class="fa fa-fw fa-glasses"></i>Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects.index') }}"><i class="fa fa-fw fa-laptop-code"></i>Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}"><i class="fa fa-fw fa-envelope-open-text"></i>Contacto</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-9">
        {{-- Breadcrumb --}}
        <div style="margin-left: -15px">
            @yield('breadcrumb')
        </div>

        {{-- Body content --}}
        <div class="">
            @yield('content')
        </div>

    </div>
</div>

<style>
    #first {
        height: 720px;
        display: block;
        border: 1px solid;
        border-radius: 1px;
        width: auto;
        border-color: #080808;
        text-align: center;
        background: #3c3c3c;
        background: -moz-linear-gradient(top, #3c3c3c 0%, #222222 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3c3c3c), color-stop(100%, #222222));
        background: -webkit-linear-gradient(top, #3c3c3c 0%, #222222 100%);
        background: -o-linear-gradient(top, #3c3c3c 0%, #222222 100%);
        background: -ms-linear-gradient(top, #3c3c3c 0%, #222222 100%);
        background: linear-gradient(top, #3c3c3c 0%, #222222 100%);
    }

    #sub-title {
        margin-top: 10px;
    }

    #sub {
        background-color: #222222;
        border-radius: 2px;
        width: 105%;
        text-align: left;
        height: 90%;
        margin-left: 2px;
    }

    .navbar.navbar-static-top {
        height: 60px;
        align-content: center;

        color: #dedede;
        text-decoration: none;
        font-weight: bold;
        text-shadow: 1px 1px 0 #ffffff, -1px -1px 0 #a1a1a1;
        box-shadow:
                2px 2px 0.5em rgba(155, 155, 155, 0.55),
                inset 1px 1px 0 rgba(255, 255, 255, 0.9),
                inset -1px -1px 0 rgba(0, 0, 0, 0.21)
    ;
        border: 1px solid #cacaca;
        background:
                -moz-linear-gradient(
                        #ffffff,
                        #e3e3e3
                );
        background:
                -webkit-linear-gradient(
                        #ffffff,
                        #e3e3e3
                );
        background:
                -o-linear-gradient(
                        #ffffff,
                        #e3e3e3
                );
        background:
                linear-gradient(
                        #ffffff,
                        #e3e3e3
                );
    }

    h5 {
        color: #e3e3e3;
    }

    a.nav-link {
        color: #e3e3e3;
        font-size: 20px;
    }

    i.fa {
        margin-right: 10px;
    }
</style>

</body>
</html>