<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')
</head>
<body>
<!-- Main navigation container -->
<nav class="bg-gray-800">
    <x-container>
        <div class="relative flex h-16 items-center justify-between">
            <x-nav-bar.links/>

            <x-nav-bar.profile/>
        </div>
    </x-container>

</nav>

{{ $slot }}

<script>
    const menu = document.getElementById('user-menu');

    document.getElementById('user-menu-button').addEventListener('click', function (e) {
        menu.classList.toggle('hidden');
    });

    menu.addEventListener('click', function (e) {
        if (e.target.id === 'user-menu-item') {
            menu.classList.add('hidden');
        }
    });
</script>
</body>
