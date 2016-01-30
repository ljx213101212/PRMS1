<html>
<head>
    <title> @yield('title') </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="/css/material.min.css" rel="stylesheet">
    <link href="/css/ripples.min.css" rel="stylesheet">
    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <link href="/css/custome_font.css" rel="stylesheet">

</head>
<body>

@include('navbar')
@yield('content')


<script src="{!! asset('jquery/jquery.min.js') !!}"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>
</body>
</html>