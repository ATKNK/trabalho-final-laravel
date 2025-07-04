<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terraria Setup Creator</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col justify-between items-center bg-sky-950 text-stone-100">
    <div class="w-full">@include('layout.navbar')</div>
    <div class="w-full p-3">
        @yield('content')
    </div>
    <div class="w-full">@include('layout.footer')</div>
</body>

</html>