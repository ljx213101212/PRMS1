<html>
<head>

    @include('includes.head')

     @yield('css')
</head>
<body>

<header>
@include('includes.header')
</header>

@yield('middle')

<footer>
@include('includes.footer')
</footer>

<script src="{!! asset('jquery/jquery.min.js') !!}"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="/js/material.min.js"></script>
<script src="/js/app.js"></script>
@yield('js')
</body>
</html>