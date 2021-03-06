<!DOCTYPE html>
<!--值为zh-cn-->
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token方便前端的javascrit脚本获取CSRF令牌 -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'CuitWDT') - 校园微动态</title>
    <meta name="description" content="@yield('description', '校园微动态')" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">
        @include('layouts._message')
        @yield('content')

    </div>

    @include('layouts._footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>