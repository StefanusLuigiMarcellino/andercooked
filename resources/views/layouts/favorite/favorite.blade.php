<head>
    <link rel="stylesheet" href="/css/layouts/favorite-history.css">
    <link rel="stylesheet" href="/css/layouts/love.css">
</head>

@extends('templates.2-row')

@section('main-section')
    <section class="main-section">
        {{-- code here --}}
        <div class="header">
            @include('templates.search')
            @include('templates.user2-profile')
        </div>

        <div class="cooking-menus row-3 margin-2">
            <div class="header-font">Favorite</div>
            <div class="menu-list-large margin-2">
                @if ($favorites->count())
                    @foreach($favorites as $favorite)
                        <div class="list" data-aos="zoom-in-up">
                            <div class="image-wrapper">
                                <a href="/menu-details/{{ $favorite->menu->slug }}"><img src="{{ asset('storage/' . $favorite->menu->menu_pics) }}" alt=""></a>
                            </div>
                            {{-- <div class="filter"></div> --}}
                            <div class="list-information">
                                <div class="left-list">
                                    <div class="title-font">{{ $favorite->menu->menu_name }}</div>
                                    <div class="sub-title-font">{{ $favorite->menu->calories }} cal</div>
                                </div>
                                <div class="right-list">
                                    <form action="/favorite/{{ $favorite->menu->id }}" method="post">
                                        @csrf
                                        <button>
                                            <i class="far fa-heart {{ $favorite->menu->likedByUser() ? 'fas fa-heart' : 'far fa-heart' }}"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- notes: nanti akan dibuat animasi spt ini -->https://codepen.io/pugson/pen/wMBjLz --}}
                @endif
            </div>
            @if($favorites->count() == False)
                @include('templates.no-result-display')
            @endif
    </section>
@endsection

@section('script')
    <script src="https://kit.fontawesome.com/1e23f5acef.js" crossorigin="anonymous"></script>
@endsection
