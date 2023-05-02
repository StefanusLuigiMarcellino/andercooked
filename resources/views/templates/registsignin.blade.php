<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="css/layouts/register-signin.css">
    <link rel="stylesheet" href="css/templates/data-aos.css">
    <img src="assets/random/Background.png" alt="" class="backgroundimage">
    <title>AnderCooked | {{ $title }}</title>
    <link rel="icon" type="image/png" href="assets/logo/logo-png.png">
</head>
<body>
    <div class="bgImage is-centered mb-2">
        <img src="assets/logo/full-logo.svg" alt="" data-aos="fade-down">
    </div>
    
    @yield('registsignin')

    {{-- JS for Animate on Scroll --}}
    @include('templates.data-aos')
</body>
</html>
