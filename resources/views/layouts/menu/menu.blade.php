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
            <div>
                <a href="/menu?categories=foodies">Food</a>
                <a href="/menu?categories=beverages">Drink</a>
            </div>
            <div class="menu-list-large margin-2">

                @if ($menus->count())
                    @foreach ($menus as $menu)
                        <div class="list" data-aos="zoom-in-up">
                            <div class="image-wrapper">
                                <a href="/menu-details"><img src="{{ asset('assets/menu-pics/' . $menu->menu_pics) }}" alt=""></a>
                            </div>
                            <div class="filter"></div>
                            <div class="list-information">
                                <div class="left-list">
                                    <div class="title-font">{{ $menu->menu_name }}</div>
                                    <div class="sub-title-font">{{ $menu->calories }}</div>
                                </div>
                                <div class="right-list">
                                    @include('icons.loveTEMP')
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @include('templates.no-result-display')
                @endif


                {{-- @for ($i = 1; $i <= 100; $i++)
                <div class="list" data-aos="zoom-in-up">
                    <div class="image-wrapper">
                        <a href="/menu-details"><img src="assets/menu-pics/{{ $i }}.jpg" alt=""></a>
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
            @endfor --}}
            </div>


    </section>
@endsection
