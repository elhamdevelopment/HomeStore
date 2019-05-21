<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>رستوران</title>
    <!-- Styles -->
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">

</head>
<body dir="rtl">

@include('partials._shopping-cart')
@include('partials._login')
@include('partials.register')
@include('partials._header')

<main class="my-3">
    @yield('content')
</main>

@include('partials._footer')

<script src="{{asset('js/web.js')}}"></script>
</body>
</html>
