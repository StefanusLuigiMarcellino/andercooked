<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="css/templates/master.css">
    <link rel="stylesheet" href="css/templates/sidebar.css">
    <link rel="stylesheet" href="css/templates/data-aos.css">
    <title>AnderCooked | {{ $title }}</title>
</head>
<body>
    <div class="columns">
        {{-- LEFT SIDE --}}
        {{-- <div class="column"> --}}
            @include('templates.sidebar')
        {{-- </div> --}}

        {{-- MAIN SIDE --}}
        <div class="column">
            @yield('mid-section')
        </div>

        {{-- RIGHT SIDE --}}
        <div class="column">
            @yield('right-section')
        </div>
    </div>

    {{-- JS for Animate on Scroll --}}
    @include('templates.data-aos')
</body>
</html>