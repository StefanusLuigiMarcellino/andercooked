<head>
    <link rel="stylesheet" href="/css/layouts/favorite-history.css">
    <link rel="stylesheet" href="/css/layouts/love.css">
</head>

@extends('templates.2-row')

@section('main-section')
    <section class="main-section">
        {{-- code here --}}
        <div class="header">
            <form action="/history" class="search-bar" data-aos="fade-down">
                {{-- @if (request('page'))
                    <input type="hidden" name="page" value="{{ request('page') }}">
                @endif
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif --}}
                @include('icons.search')
                <input class="search-font grey" type="search" name="search" placeholder="Search by food or drink name" value="{{ request('search') }}">
                <button class="search-button">Search</button>
            </form>
            @include('templates.user2-profile')
        </div>

        <div class="cooking-menus row-3 margin-2">
            <div class="header-font">History</div>
            <div class="menu-list-large margin-2">
                @if ($histories->count())
                    @foreach($histories as $history)
                        <div class="list" data-aos="zoom-in-up">
                            <div class="image-wrapper">
                                <a href="/menu-details/{{ $history->menu->slug }}"><img src="{{ asset('storage/' . $history->menu->menu_pics) }}" alt=""></a>
                            </div>
                            {{-- <div class="filter"></div> --}}
                            <div class="list-information">
                                <div class="left-list">
                                    <div class="title-font">{{ $history->menu->menu_name }}</div>
                                    <div class="sub-title-font">{{ $history->menu->calories }} cal</div>
                                </div>
                                <div class="right-list">
                                    <form action="/favorite/{{ $history->menu->id }}" method="post">
                                        @csrf
                                        <button>
                                            <i class="far fa-heart {{ $history->menu->likedByUser() ? 'fas fa-heart' : 'far fa-heart' }}"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            @if ($histories->count() == False)
                @include('templates.no-result-display')
            @endif
    </section>
@endsection

@section('script')
    <script src="https://kit.fontawesome.com/1e23f5acef.js" crossorigin="anonymous"></script>
@endsection
