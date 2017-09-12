
<html>
<head>
    <title>Сайтсофт</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="{{asset('media/bootstrap/js/bootstrap.min.js')}}"></script>
    <link href="{{asset('media/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="{{ url('/home') }}">Сайтсофт</a>
        <ul class="nav">
            <li class="active"><a href="{{ url('/home') }}">Главная</a></li>
            @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}">Авторизация</a></li>
            <li><a href="{{ url('/auth/register') }}">Регистрация</a></li>
            @endif
        </ul>
@if (!Auth::guest())
        <ul class="nav pull-right">
            <li><a>{{ Auth::user()->name }}</a></li>
            <li><a href="{{ url('/auth/logout') }}">Выход</a></li>
        </ul>
@endif
    </div>
</div>
    <div class="row-fluid">
	@yield('content')
    </div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
</body>
</html>
