<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="/css/templates/master.css">
    <link rel="stylesheet" href="/css/templates/sidebar.css">
    <link rel="stylesheet" href="/css/templates/data-aos.css">
    <title>AnderCooked | {{ $title }}</title>
</head>
<body>
    <div class="columns">
        {{-- LEFT SIDE --}}
        <div class="column is-2 has-background-white">
            @include('templates.sidebar')
        </div>

        {{-- MAIN SIDE --}}
        <div class="column is-10">
            <section class="">
                <div class="background-image" data-aos="fade-left">
                    <img src="/assets/menu-pics/{{ $menu->menu_pics }}" alt="" width="100%">
                </div>
                <section class="main-page-large">
                    <div class="upper-section">
                        <div class="header-font-serif white">{{ $menu->menu_name }}</div>
                        <div class="like-count" style="background-color: blue">
                            <div class="center gap-10">
                                @include('icons.loveTEMP')
                                <p>{{ $menu->total_of_likes }}</p>
                            </div>
                            <div class="center gap-10">
                                @include('icons.save')
                                <p>12.9k</p>
                            </div>
                        </div>
                        <div class="description-font-serif">{{ $menu->description }}</div>
                    </div>
                   
                    <form class="lower-section" action="{{ route('saved.history') }}" method="post">
                        <a href="#section"><button id="button" class="start-cooking-button white">Start Cooking</button></a>
                    </form>

                    <div class="nutrient-fact">
                        <h3 class="white">Nutrient Facts</h3>
                        <div class="nutrient-contents mt-1">
                            <div class="nutrient">
                                <div class="color-nutrient food-cream"></div>
                                <div class="ml-2">
                                    <div class="nutrient-title">Calories</div>
                                    <div class="nutrient-amount">{{ $menu->calories }}</div>
                                </div>
                            </div>
                            <div class="nutrient">
                                <div class="color-nutrient food-orange"></div>
                                <div class="ml-2">
                                    <div class="nutrient-title">Fats</div>
                                    <div class="nutrient-amount">{{ $menu->fat }}</div>
                                </div>
                            </div>
                            <div class="nutrient mt-2">
                                <div class="color-nutrient food-purple"></div>
                                <div class="ml-2">
                                    <div class="nutrient-title">Carbs</div>
                                    <div class="nutrient-amount">{{ $menu->carbohydrates }}</div>
                                </div>
                            </div>
                            <div class="nutrient mt-2">
                                <div class="color-nutrient food-green"></div>
                                <div class="ml-2">
                                    <div class="nutrient-title">Protein</div>
                                    <div class="nutrient-amount">{{ $menu->protein }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            {{-- </section> --}}

            <section id="section" class="main-page-large" style="display: none;">
                <div class="header-font-serif white">{{ $menu->menu_name }}</div>

                {{-- Cooking Tools --}}
                {{-- <div class="subheader-font-serif white margin-2">Cooking Tools</div>
                <div class="description-font-serif white margin-2">
                    8 ounces gluten-free penne pasta or whole-wheat penne pasta <br>
                    2 tablespoons extra-virgin olive oil <br>
                    1 pound boneless, skinless chicken breast or thighs, trimmed, if necessary, and cut into bite-size pieces <br>
                    ½ teaspoon salt <br>
                    ¼ teaspoon ground pepper <br>
                    4 cloves garlic, minced
                </div> --}}

                {{-- Ingredients --}}
                <div class="subheader-font-serif white margin-2">Ingredients</div>
                <div class="description-font-serif white margin-2">
                    {!! nl2br($menu->ingredients) !!}
                </div>

                {{-- Directions --}}
                <div class="subheader-font-serif white margin-2">Directions</div>
                <div class="description-font-serif white margin-2">
                    {!! nl2br($menu->cooking_steps) !!}
                </div>
                <div class="box is-invisible"></div>
            </section>

            {{-- JS when press button shows the cooking steps in detail --}}
            <script>
                const button = document.getElementById('button');
                const section = document.getElementById('section');

                button.addEventListener('click', function() {
                    section.style.display = 'block';
                })
            </script>

        </div>

    </div>

    {{-- JS for Animate on Scroll --}}
    @include('templates.data-aos')
</body>
</html>
