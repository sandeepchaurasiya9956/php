<html>
<head>

<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet"/>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="js/jquery.js"></script>
@yield('styles')
</head>
<body>
<div class="container-fluid">
    @include('layout.header')

    @yield('main_content')

    @include('layout.footer')
</div>
</body>
</html>