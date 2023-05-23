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
            <div class="header-font">Food Category</div>
            <div class="category-wrapper">
                <form action="/menu" method="GET">
                    @if (request('page'))
                        <input type="hidden" name="page" value="1">
                    @endif
                    @if (request('search'))
                        <input type="hidden" name="search" value="{{ request('search') }}">
                    @endif
                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button category-set {{ request('category') === 'foodies' ? 'active-btn' : '' }}" type="submit" name="category" value="foodies"
                            {{ request('category') === 'foodies' ? 'active' : '' }}>Food</button>
                        </p>
                        <p class="control">
                            <button class="button category-set {{ request('category') === 'beverages' ? 'active-btn' : '' }}" type="submit" name="category" value="beverages"
                            {{ request('category') === 'beverages' ? 'active' : '' }}>Drinks</button>
                        </p>
                    </div>
                </form>

                {{-- <a href="/menu?category=foodies">
                    <div class="category-set">Food</div>
                </a>
                <a href="/menu?category=beverages">
                    <div class="category-set">Drink</div>
                </a> --}}
            </div>
            <div class="menu-list-large margin-2">
                @if ($menus->count())
                    @foreach ($menus as $menu)
                        <div class="list" data-aos="zoom-in-up">
                            <div class="image-wrapper">
                                <a href="/menu-details/{{ $menu->slug }}"><img
                                        src="{{ asset('storage/' . $menu->menu_pics) }}" alt=""></a>
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
                @endif
            </div>

            @if ($menus->count() == false)
                @include('templates.no-result-display')
            @endif

            <div class="mt-5">
                {{ $menus->appends(request()->except('page'))->links('vendor.pagination.bulma') }}
            </div>

    </section>
@endsection

@section('script')
    <script src="https://kit.fontawesome.com/1e23f5acef.js" crossorigin="anonymous"></script>
@endsection
