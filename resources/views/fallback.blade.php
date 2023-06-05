@extends('templates.master')

@section('content')
    <section class="fallback-section">
        <div class="fallback-wrapper">
            <img src="/assets/logo/logo.svg" alt="" width="250px">
            <div class="fallback-font">
                <span class="orange">Page</span>
                <span class="green">not found</span>
            </div>
            <div class="sub-fallback-font dark-grey">It seems that the page you are looking for is unavailable </div>
            <a href="/home"><button class="home-button white">Home</button></a>
        </div>
    </section>
@endsection