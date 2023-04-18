@extends('templates.2-row')

@section('main-section')
    {{-- <section class="main-page-large"> --}}
        <div class="background-image" data-aos="fade-left">
            <img src="../assets/food-pics/foodexample.png" alt="" width="100%">
        </div>
        <section class="main-page-large">
            <div class="upper-section">
                <div class="header-font-serif white">Chicken & Spinach Skillet Pasta with Lemon & Parmesan</div>
                <div class="like-count">
                    @include('icons.love')
                </div>
                <div class="description-font-serif">This one-pan chicken pasta combines lean chicken breast and sautéed spinach for a one-bowl meal that's garlicky, lemony and best served with a little Parm on top. I call it "Mom's Skillet Pasta" and she called it "Devon's Favorite Pasta." Either way it's a quick and easy weeknight dinner we created together and scribbled on a little recipe card more than a decade ago, and it remains in my weekly dinner rotation to this day. It's a simple dinner the whole family will love.</div>
            </div>
    
            <div class="lower-section">
                <a href="#section"><button id="button" class="start-cooking-button white">Start Cooking</button></a>
            </div>
    
            <div class="nutrient-fact"></div>
        </section>  
    {{-- </section> --}}

    <section id="section" class="main-page-large" style="display: none;">
        <div class="header-font-serif white">Chicken & Spinach Skillet Pasta with Lemon & Parmesan</div>
        
        {{-- Cooking Tools --}}
        <div class="subheader-font-serif white margin-2">Cooking Tools</div>
        <div class="description-font-serif white margin-2">
            8 ounces gluten-free penne pasta or whole-wheat penne pasta <br>
            2 tablespoons extra-virgin olive oil <br>
            1 pound boneless, skinless chicken breast or thighs, trimmed, if necessary, and cut into bite-size pieces <br>
            ½ teaspoon salt <br>
            ¼ teaspoon ground pepper <br>
            4 cloves garlic, minced
        </div>

        {{-- Ingredients --}}
        <div class="subheader-font-serif white margin-2">Ingredients</div>
        <div class="description-font-serif white margin-2">
            8 ounces gluten-free penne pasta or whole-wheat penne pasta <br>
            2 tablespoons extra-virgin olive oil <br>
            1 pound boneless, skinless chicken breast or thighs, trimmed, if necessary, and cut into bite-size pieces <br>
            ½ teaspoon salt <br>
            ¼ teaspoon ground pepper <br>
            4 cloves garlic, minced
        </div>

        {{-- Directions --}}
        <div class="subheader-font-serif white margin-2">Directions</div>
        <div class="description-font-serif white margin-2">
            Step 1 <br>
            Cook pasta according to package directions. Drain and set aside. <br> <br>

            Step 2 <br>
            Meanwhile, heat oil in a large high-sided skillet over medium-high heat. Add chicken, salt and pepper; cook, stirring occasionally, until just cooked through, 5 to 7 minutes. Add garlic and cook, stirring, until fragrant, about 1 minute. Stir in wine, lemon juice and zest; bring to a simmer. <br><br>

            Step 3 <br>
            Remove from heat. Stir in spinach and the cooked pasta. Cover and let stand until the spinach is just wilted. Divide among 4 plates and top each serving with 1 tablespoon Parmesan. 
        </div>
        <div class="box"></div>
    </section>

    {{-- JS when press button shows the cooking steps in detail --}}
    <script>
        const button = document.getElementById('button');
        const section = document.getElementById('section');

        button.addEventListener('click', function() {
            section.style.display = 'block';
        })
    </script>
@endsection