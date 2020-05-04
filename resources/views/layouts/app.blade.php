<!doctype html>
<html lang="en">
<head>
    @yield('head')
    @livewireStyles
<script src="{{url('/js/app.js')}}"></script>
</head>
<body>
    @yield('content')
    @livewireScripts
</body>
</html>