<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="/css/templates/master.css">
    <link rel="stylesheet" href="/css/templates/sidebar.css">
    <link rel="stylesheet" href="/css/templates/data-aos.css">
    <title>AnderCooked | {{ $title }}</title>
    @if($title  == 'Page not found')
        <link rel="icon" type="image/png" href="/assets/logo/logo-png-grayscale.png">
    @else
        <link rel="icon" type="image/png" href="/assets/logo/logo-png.png">
    @endif
</head>
<body>
    @yield('content')
</body>
@yield('script')
</html>
