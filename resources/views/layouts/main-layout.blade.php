<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    {{-- segnaposto titolo in comics --}}
    @yield('head')
</head>
<body>
    {{-- segnaposto contenuto in header --}}
    @include('components.header')
    {{-- segnaposto contenuto in comics --}}
    @yield('content')
    {{-- segnaposto contenuto in footer --}}
    @include('components.footer')
</body>
</html>