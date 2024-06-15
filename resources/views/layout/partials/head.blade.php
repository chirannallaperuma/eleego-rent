<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('build/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ url('build/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ url('build/plugins/fontawesome/css/all.min.css') }}">

@if (
    !Route::is([
        'coming-soon',
        'error-404',
        'error-500',
        'register',
        'login',
        'reset-password',
        'forgot-password',
        'maintenance',
    ]))
    @if (!Route::is(['pricing', 'faq', 'gallery', 'our-team', 'terms-condition', 'privacy-policy']))
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ url('build/plugins/select2/css/select2.min.css') }}">
    @endif
    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/aos/aos.css') }}">
@endif

@if(Route::is(['user-payment','user-bookings']))
<!-- Datatables CSS -->
<link rel="stylesheet" href="{{url('build/plugins/datatables/datatables.min.css')}}">
@endif

@if (Route::is(['about-us', 'index', 'listing-details', 'listing-grid']))
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ url('build/css/bootstrap-datetimepicker.min.css') }}">
@endif

@if (Route::is(['booking-payment', 'booking', 'about-us', 'index', 'listing-details']))
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('build/css/owl.carousel.min.css') }}">
@endif

@if (Route::is(['gallery']))
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/fancybox/jquery.fancybox.min.css') }}">
@endif

@if (Route::is(['listing-grid', 'listing-list']))
    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ url('build/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
@endif

@if (!Route::is(['error-404', 'error-500']))
    <!-- Fearther CSS -->
    <link rel="stylesheet" href="{{ url('build/css/feather.css') }}">
@endif

<!-- Datatables CSS -->
<link rel="stylesheet" href="{{ url('build/plugins/datatables/datatables.min.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ url('build/css/style.css') }}">
