@extends('templates.master')

@section('content')
    <div class="columns" style="margin-bottom: 0 !important;">
        {{-- LEFT SIDE --}}
        <div class="column is-2 has-background-white">
            @include('templates.sidebar')
        </div>

        {{-- MAIN SIDE --}}
        <div class="column is-10 {{ ($title === 'Details') ? '' : 'has-background-semi-white'}}">
            @yield('main-section')
        </div>
    </div>

    {{-- JS for Animate on Scroll --}}
    @include('templates.data-aos')
@endsection

@section('script')
    @yield('script')
@endsection

