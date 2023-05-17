<head>
    <link rel="stylesheet" href="css/layouts/favorite-history.css">
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
                <a href="/menu?category=foodies"><div class="category-set">Food</div></a>
                <a href="/menu?category=beverages"><div class="category-set">Drink</div></a>
            </div>
            <div class="menu-list-large margin-2">
                @if ($menus->count())
                    @foreach($menus as $menu)
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
                                    @include('icons.loveTEMP')
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            @if ($menus->count() == False)
                @include('templates.no-result-display')
            @endif

            <div class="">
                {{ $menus->links('vendor.pagination.bulma') }}
            </div>

    </section>
@endsection
