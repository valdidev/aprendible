<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- template inheritance --}}
    {{-- <title>Aprendible - @yield('title')</title> --}}
    {{-- <meta name="description" content="@yield('meta-description', 'default meta description goes here')"> --}}
    {{-- components --}}
    <meta name="descripion" content="{{ $metaDescription ?? 'Default meta description' }}">
    <title>{{ $title ?? '' }}</title>
</head>

<body>

    {{-- @include('partials.nav') --}}

    
    {{ $slot }}

    {{-- <pre>{{ $sum }}</pre> --}}
    
    
</body>

</html>