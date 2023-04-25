<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets') }}/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/themes/layout/brand/light.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/themes/layout/aside/light.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <title>{{ $title ?? '' }}</title>
</head>
<body>
    @yield('main')
</body>
</html>