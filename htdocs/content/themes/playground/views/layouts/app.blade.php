<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Themosis</title>
    @head
</head>
<body>
    @include('layouts.header')
    <div id="page" class="site"> 
        @yield('content')
    </div>
    @include('layouts.footer')
    @footer
</body>
</html>