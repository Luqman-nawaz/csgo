<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/vendor/css/style.css">
        <link href="https://api.fontshare.com/v2/css?f[]=nippo@500,700,400&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/assets/fav.png">
        @yield('title')
    </head>

    <body>
        
        @yield('content')
        
        
        @stack('js')
    </body>

</html>