<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
</head>

<body>
<div id="wrapper">
    @include('web.components.header')

    <main>
        @yield('content')
    </main>

    @include('web.components.footer')

</div>

<script src="{{ asset('frontend/js/libs.min.js') }}"></script>
<script src="{{ asset('frontend/js/common.js') }}"></script>

</body>

</html>
