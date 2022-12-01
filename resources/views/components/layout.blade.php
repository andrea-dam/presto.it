<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-uno">

    <x-navbar />
    {{$slot}}
    <x-footer />
    @livewireScripts
    {{-- <script src="https://kit.fontawesome.com/c2171b1e0d.js" crossorigin="anonymous"></script> --}}
</body>
</html>