@extends('templates.2-row')

@section('main-section')
    <div class="background-image" style="background-image: url('../assets/food-pics/foodexample.png');"></div>
    <div class="main-page-large">
        <div class="upper-section">
            <div class="header-font-serif white">Chicken & Spinach Skillet Pasta with Lemon & Parmesan</div>
            <div class="like-count">
                @include('icons.love')
            </div>
            <div class="description-font-serif">This one-pan chicken pasta combines lean chicken breast and sautéed spinach for a one-bowl meal that's garlicky, lemony and best served with a little Parm on top. I call it "Mom's Skillet Pasta" and she called it "Devon's Favorite Pasta." Either way it's a quick and easy weeknight dinner we created together and scribbled on a little recipe card more than a decade ago, and it remains in my weekly dinner rotation to this day. It's a simple dinner the whole family will love.</div>
        </div>

        <div class="lower-section">
            <button class="start-cooking-button white">Start Cooking</button>
        </div>

        <div class="nutrient-fact"></div>
    </div>  
@endsection