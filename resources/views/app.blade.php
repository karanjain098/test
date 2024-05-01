<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    @viteReactRefresh 
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    @inertiaHead
    <!-- Styles -->
   
</head>

<body class="antialiased">
    <x-ale/>
    <div id="app" data-page="{{ json_encode($page) }}"></div>

    @inertia

</body>

</html>
