<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials._head')
    @include('partials._css')

</head>

<body>
    @livewire('navbar')
    @yield('content')
    <x-footer/>
    @include('partials._script')

</body>

</html>
