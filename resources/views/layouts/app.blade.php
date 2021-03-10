<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body class="sidebar-mini layout-fixed">
<div class="wrapper">
    @include('includes.header')
    @auth
        @include('includes.aside')
    @endauth
    <main class="py-4">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </main>
</div>
@include('includes.footer')
</body>
</html>
