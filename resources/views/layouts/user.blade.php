<!DOCTYPE html>
<html lang="en" ng-app="AdminApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل کاربری</title>
    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfect-scrollbar.css') }}" rel="stylesheet">
</head>
<body>
<div class="app-admin-wrap">
@include('partials.admin._user-header')
@include('partials.admin._user-sidebar')
<!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <main class="py-2">
            @yield('content')
        </main>
        @include('partials.admin._user-footer')
    </div>
</div>
<script src="{{asset('js/admin.js')}}"></script>
</body>
</html>
