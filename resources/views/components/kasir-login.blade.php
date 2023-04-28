<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="barayaDigital - Point Of Sale">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="barayaDigital - Point Of Sale">
    <meta name="robots" content="noindex, nofollow">
    <title>{{ $title ?? 'default title' }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('kasir-assets') }}/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/plugins/fontawesome/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('kasir-assets') }}/css/costume.css">
    @livewireStyles
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

<div class="wrapper-login d-flex align-items-center justify-content-center">
   {{ $slot }}
</div>

@livewireScripts

<script src="{{ asset('kasir-assets') }}/js/jquery-3.6.0.min.js"></script>

<script src="{{ asset('kasir-assets') }}/js/feather.min.js"></script>

<script src="{{ asset('kasir-assets') }}/js/jquery.slimscroll.min.js"></script>

<script src="{{ asset('kasir-assets') }}/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('kasir-assets') }}/js/dataTables.bootstrap4.min.js"></script>

<script src="{{ asset('kasir-assets') }}/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('kasir-assets') }}/plugins/select2/js/select2.min.js"></script>

<script src="{{ asset('kasir-assets') }}/js/moment.min.js"></script>
<script src="{{ asset('kasir-assets') }}/js/bootstrap-datetimepicker.min.js"></script>

<script src="{{ asset('kasir-assets') }}/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="{{ asset('kasir-assets') }}/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="{{ asset('kasir-assets') }}/js/script.js"></script>

{{ $script }}

</body>

</html>