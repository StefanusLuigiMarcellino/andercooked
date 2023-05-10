@extends('templates.3-row')

{{-- Mid Section --}}
@section('mid-section')
    <section class="main-page">
        @include('templates.search')

        <div class="banner margin-3" data-aos="zoom-in">
            <div class="text">
                <div class="header-font white">Create your own recipe</div>
                <div class="search-font white">Upload your own-home made recipe and share it with other member of our community</div>
            </div>
            <div class="add-btn">
                <a href="/recipe"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="23.5" stroke="white" stroke-width="3"/>
                    <rect x="12.9412" y="23.5293" width="24.1176" height="2.35294" rx="1.17647" fill="white"/>
                    <rect x="23.8237" y="36.7646" width="24.1176" height="2.35294" rx="1.17647" transform="rotate(-90 23.8237 36.7646)" fill="white"/>
                </svg></a>
            </div>
        </div>

        <div class="cooking-menus margin-2">
            <div class="header-font">Top Cooking Recipes</div>
            <div class="menu-list margin-2">

            @for ($menu = 1; $menu <= 10; $menu++) 
                <div class="list" data-aos="zoom-in-up">
                    <div class="image-wrapper">
                        <a href="/menu-details"><img src="assets/menu-pics/{{ $menu }}.jpg" alt=""></a>
                    </div>
                    <div class="filter"></div>
                    <div class="list-information">
                        <div class="left-list">
                            <div class="title-font">Everything Bagel Crusted Salmon</div>
                            <div class="sub-title-font">569cal</div>
                        </div>
                        <div class="right-list">    
                            @include('icons.loveTEMP')
                        </div>
                    </div>
                </div>
            @endfor 
                {{-- notes: nanti akan dibuat animasi spt ini -->https://codepen.io/pugson/pen/wMBjLz --}}
            
        </div>

        @include('templates.no-result-display')
    </section>
@endsection

{{-- Right Section --}}
@section('right-section')
    <section class="side-page" data-aos="fade-left">
        @include('templates.user1-profile')
        @include('templates.pie-chart')
    </section>
@endsection