<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <title>Portfolio - Daryl ABRADOR</title>
    @head
</head>
<body>
    <div class="flex flex-col h-screen">
        <div>
            @include('layouts.menu')
        </div>
        <div class="flex-grow">
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>
  
    
    
    @footer
</body>
</html>