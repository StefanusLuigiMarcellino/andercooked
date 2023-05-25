<head>
    <link rel="stylesheet" href="/css/layouts/love.css">
</head>

@extends('templates.3-row')

{{-- Mid Section --}}
@section('mid-section')
    <section class="main-page">
        <form action="/menu" class="search-bar" data-aos="fade-down">
            @if (request('page'))
                <input type="hidden" name="page" value="{{ request('page') }}">
            @endif
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @include('icons.search')
            <input class="search-font grey" type="search" name="search" placeholder="Search by food or drink name" value="{{ request('search') }}">
            <button class="search-button">Search</button>
        </form>

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

            @if($menus->count())
            @foreach ($menus as $menu)
                <div class="list" data-aos="zoom-in-up">
                    <div class="image-wrapper">
                        <a href="/menu-details/{{ $menu->slug }}"><img src="{{ asset('storage/' . $menu->menu_pics) }}" alt=""></a>
                    </div>
                    {{-- <div class="filter"></div> --}}
                    <div class="list-information">
                        <div class="left-list">
                            <div class="title-font">{{ $menu->menu_name }}</div>
                            <div class="sub-title-font">{{ $menu->calories }} cal</div>
                        </div>
                        <div class="right-list">
                            <form action="/favorite/{{ $menu->id }}" method="post">
                                @csrf
                                <button>
                                    <i class="far fa-heart {{ $menu->likedByUser() ? 'fas fa-heart' : 'far fa-heart' }}"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach
                {{-- notes: nanti akan dibuat animasi spt ini -->https://codepen.io/pugson/pen/wMBjLz --}}

        </div>

        @else
        @include('templates.no-result-display')
        @endif
    </section>
@endsection

{{-- Right Section --}}
@section('right-section')
    <section class="side-page" data-aos="fade-left">
        @include('templates.user1-profile')
        @include('templates.pie-chart')
    </section>
@endsection

@section('script')
    <script src="https://kit.fontawesome.com/1e23f5acef.js" crossorigin="anonymous"></script>
@endsection
