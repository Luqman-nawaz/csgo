<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/assets/Logo.svg" type="image/svg+xml">
        <link rel="stylesheet" href="/vendor/css/index.css">
        <link rel="stylesheet" href="/vendor/css/style.css">
        <!-- slider -->
        @stack('css')
        <!-- slider -->
        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="icon" type="image/x-icon" href="/assets/fav.png">

        @yield('title')
    </head>

    <body>
        
        @yield('content')
        
        
        @stack('js')
        <script>
            function toggleDropdown() {
                var dropdownContent = document.getElementById("boostDropdown");
                dropdownContent.style.display === "none" ? dropdownContent.style.display = "flex" : dropdownContent.style.display = "none";
            }
        </script>
    </body>

</html>