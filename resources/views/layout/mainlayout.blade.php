<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams Rent | Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('/build/img/favicon.png') }}">
    @include('layout.partials.head')


</head>
@if (!Route::is(['coming-soon', 'error-404', 'error-500', 'maintenance']))

    <body>
@endif
@if (Route::is(['coming-soon', 'error-404', 'error-500', 'maintenance']))

    <body class="error-page">
@endif
@if (!Route::is(['forgot-password', 'login', 'register', 'reset-password']))
    <div class="main-wrapper">
@endif
@if (Route::is(['forgot-password', 'login', 'register', 'reset-password']))
    <div class="main-wrapper login-body">
@endif
@if (!Route::is(['coming-soon', 'error-404', 'error-500', 'maintenance']))
    @include('layout.partials.header')
@endif
@yield('content')
@if (!Route::is(['coming-soon', 'error-404', 'error-500', 'maintenance']))
    @include('layout.partials.footer')
@endif
</div>
@component('components.scrolltotop')
@endcomponent
@include('layout.partials.footer-scripts')
@component('components.modalpopup')
@endcomponent
</body>

</html>
