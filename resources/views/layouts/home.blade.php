@extends('templates.3-row')

{{-- Mid Section --}}
@section('mid-section')
    <section class="main-page">
        @include('templates.search')

        <div class="banner m-50"></div>

        <div class="cooking-menus m-40">
            <div class="header-font">Top Cooking Recipes</div>
            <div class="menu-list m-40">
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
                <div class="list" data-aos="zoom-in-up"></div>
            </div>
        </div>
    </section>
@endsection

{{-- Right Section --}}
@section('right-section')
    @include('templates.pie-chart')
@endsection