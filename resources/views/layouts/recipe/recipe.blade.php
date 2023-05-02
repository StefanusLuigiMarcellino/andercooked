<head>
    <link rel="stylesheet" href="css/layouts/recipe.css">
</head>

@extends('templates.3-row')

@section('mid-section')
    <div class="main-page">
        @include('templates.search')

        <div class="header-font margin-2">My Recipe</div>
        <div class="recipe-list margin-2">
            @for ($i = 1; $i <= 100; $i++) 
                <div class="list-detail" data-aos="zoom-in-up">
                    <div class="pics">
                        <img src="assets/menu-pics/{{ $i }}.jpg" alt="">
                    </div>
                    <div class="info">
                        <h1 class="title-recipe-font black">Thai Basil Rolls with Hoisin-Peanut Sauce</h1>
                        <h2 class="subtitle-recipe-font dark-grey">129cal</h2>
                        
                        <div class="btn-pack mt-5 is-pulled-right">
                            <div class="preview">Preview Menu</div>
                            <div class="vertical-line"></div>
                            <div class="del-btn">
                                @include('icons.delete')
                            </div>
                        </div>
                    </div>
                </div>
            @endfor 
            @include('templates.no-result-display')
        </div>      
    </div>
@endsection

@section('right-section')
    <section class="side-page" data-aos="fade-left">
        @include('templates.user1-profile')

        {{-- Preview Menu --}}
        {{-- PIE CHART --}}
        <div class="header-font margin-2">Nutrient Details</div>

        <div class="recipe-details margin-2">
            <div class="img-wrap">
                <img src="assets/menu-pics/1.jpg" alt="">
            </div>
            <div class="padding">
                <div class="like-count-container center">
                    <div class="center gap-10">
                        @include('icons.loveTEMP')
                        <div class="black">12.9k</div>
                    </div>
                    <div class="center gap-10">
                        @include('icons.save')
                        <div class="black">12.9k</div>
                    </div>
                </div>
                <div class="information-container mt-4">
                    <div class="nutrient">
                        <div class="color-nutrient food-cream"></div>
                        <div class="explanation">
                            <div class="nutrient-title black">Calories</div>
                            <div class="nutrient-amount dark-grey">12890cal</div>
                        </div>
                    </div>
                    <div class="nutrient">
                        <div class="color-nutrient food-orange"></div>
                        <div class="explanation">
                            <div class="nutrient-title black">Fats</div>
                            <div class="nutrient-amount dark-grey">558g</div>
                        </div>
                    </div>
                    <div class="nutrient">
                        <div class="color-nutrient food-purple"></div>
                        <div class="explanation">
                            <div class="nutrient-title black">Carbs</div>
                            <div class="nutrient-amount dark-grey">765g</div>
                        </div>
                    </div>
                    <div class="nutrient">
                        <div class="color-nutrient food-green"></div>
                        <div class="explanation">
                            <div class="nutrient-title black">Protein</div>
                            <div class="nutrient-amount dark-grey">596g</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <a href="/add-recipe" class="add-recipe-button">
        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="11.4231" width="27" height="4.15385" rx="2" fill="white"/>
            <rect x="11.4231" y="27" width="27" height="4.15385" rx="2" transform="rotate(-90 11.4231 27)" fill="white"/>
        </svg>    
    </a>

@endsection

    