<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.menu')
    <div style="padding-top:60px">
        @yield('content')
    </div>
    @include('includes.footer')
</body>
</html>