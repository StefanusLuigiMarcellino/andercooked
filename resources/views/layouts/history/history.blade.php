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
            <div class="header-font">History</div>
            <div class="menu-list-large margin-2">

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
            @endfor  --}}
            
        </div>
        @include('templates.no-result-display')

    </section>
@endsection