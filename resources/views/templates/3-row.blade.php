@extends('templates.master')

@section('content')
    <div class="columns" style="margin-bottom: 0 !important;">
        {{-- LEFT SIDE --}}
        <div class="column is-2 has-background-white">
            @include('templates.sidebar')
        </div>

        {{-- MAIN SIDE --}}
        <div class="column is-7 has-background-grey">
            @yield('mid-section')
        </div>

        {{-- RIGHT SIDE --}}
        <div class="column is-3 has-background-white">
            @yield('right-section')
        </div>
    </div>

    {{-- JS for Animate on Scroll --}}
    @include('templates.data-aos')
@endsection