<head>
    <link rel="stylesheet" href="/css/layouts/love.css">
</head>

@extends('templates.2-row')

@section('main-section')
    <section class="">
        <div class="background-image" data-aos="fade-left">
            <img src="/storage/{{ $menu->menu_pics }}" alt="" width="100%">
        </div>
        <section class="main-page-large">
            <div class="upper-section">
                <div class="header-font-serif white">{{ $menu->name }}</div>
                <div class="like-count" style="background-color: white">
                    <div class="center gap-10">
                        {{-- <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.35689 3.32293C9.19078 3.32293 9.02259 2.33025 10.4066 1.49035C10.7578 1.27715 11.2847 1.04107 11.8112 1.01952C12.1367 1.00618 12.2251 0.9638 12.6822 1.03741C13.7225 1.20486 14.4035 1.67716 15.0259 2.44447C15.1742 2.62717 15.2756 2.81677 15.3868 3.03774C16.0375 4.33072 15.9938 5.82679 15.3151 7.18854C15.2561 7.30673 15.1941 7.40233 15.1362 7.50321L14.7725 8.0607C14.7082 8.15205 14.6422 8.23006 14.5708 8.3195C14.191 8.79429 13.3778 9.7185 12.9631 10.0349C12.8681 10.1074 12.8128 10.1679 12.7247 10.2571L11.4728 11.374C11.4119 11.4256 11.405 11.4199 11.3433 11.4748L8.42273 13.9831C8.35616 13.9385 8.3588 13.9296 8.29839 13.8771C8.23856 13.8249 8.22786 13.8255 8.16935 13.7758L6.40598 12.2492C6.34513 12.1977 6.33824 12.2033 6.2765 12.1483C6.22606 12.1033 6.21008 12.0794 6.15744 12.037L4.88337 10.9423C4.7819 10.8638 4.73762 10.7955 4.64407 10.721L3.90139 10.0489C3.71077 9.90164 3.58056 9.74959 3.41355 9.58258C3.25314 9.42216 3.10944 9.28594 2.95225 9.1226C2.86149 9.02831 2.83685 8.97098 2.73934 8.87494C2.6367 8.77391 2.60342 8.71101 2.50884 8.61188L2.10062 8.09883C1.74886 7.61993 1.65208 7.41216 1.39255 6.89866C0.695467 5.52019 0.932128 3.43657 1.99857 2.22878L2.2452 1.982C2.44183 1.81044 2.53172 1.70018 2.7741 1.55677C4.13908 0.748694 5.47165 0.826115 6.69279 1.6644L7.18107 2.0974C7.38342 2.29784 7.66333 2.66794 7.81143 2.91471C7.91788 3.09199 8.12888 3.32308 8.35719 3.32308L8.35689 3.32293ZM0 4.77061C0 6.06257 0.153082 6.78047 0.779486 7.90645C1.38961 9.00309 2.23934 9.81528 3.10079 10.6846C3.21619 10.8011 3.30519 10.8556 3.41414 10.9635C3.6093 11.1571 3.79142 11.3138 4.00418 11.4921L4.30022 11.7553C4.35609 11.8021 4.38072 11.8355 4.43278 11.886C4.5058 11.957 4.52383 11.9575 4.59627 12.0185C4.65302 12.0663 4.6756 12.1002 4.7297 12.1483C5.27018 12.6287 6.04424 13.2362 6.55554 13.7114C6.62695 13.778 6.64953 13.7815 6.71947 13.8436C6.93048 14.0316 7.75688 14.7674 7.96099 14.8724C8.29223 15.0425 8.52215 15.0378 8.86555 14.8865C9.01761 14.8195 9.07465 14.7478 9.18961 14.6511C9.40354 14.4711 9.58169 14.3177 9.7946 14.1376L12.2313 12.0339C12.297 11.9756 12.3128 11.9763 12.3788 11.9182L13.1196 11.2443C13.1897 11.1825 13.2131 11.1786 13.2843 11.113C13.3416 11.06 13.3755 11.0191 13.4313 10.9638L14.0077 10.4216C14.3127 10.1166 14.6802 9.76616 14.9604 9.43301C15.8972 8.31921 16.8455 6.85701 16.8455 5.33015C16.8455 4.35286 16.8021 3.81678 16.4224 2.89067C16.0708 2.03259 15.3928 1.16908 14.5978 0.701479C14.452 0.6157 14.386 0.562767 14.2246 0.482413C13.4586 0.101321 12.8752 0 11.9762 0C11.0893 0 10.0282 0.444436 9.45251 0.930955C9.31835 1.04445 9.21204 1.13506 9.08916 1.25853C8.97699 1.37114 8.84151 1.48932 8.74708 1.60736C8.66364 1.71147 8.48857 1.88434 8.45587 2.00707H8.39003C8.32669 1.76968 7.61201 1.11586 7.39324 0.930955C6.8205 0.446929 5.75963 0 4.86959 0C3.99421 0 3.3876 0.0994153 2.64316 0.471416C2.27189 0.65705 1.56836 1.15457 1.33008 1.46146C0.923917 1.98449 0.725966 2.14901 0.432412 2.86691C0.318921 3.14448 0.216866 3.40123 0.145457 3.73144C0.0797668 4.03497 0.000146634 4.42794 0.000146634 4.77061H0Z" fill="black"/>
                        </svg> --}}
                        <form action="/favorite/{{ $menu->id }}" method="post">
                            @csrf
                            <button>
                                <i class="far fa-heart {{ $menu->likedByUser() ? 'fas fa-heart' : 'far fa-heart' }}"></i>
                            </button>
                        </form>
                        <p style="color: #222222">{{ $menu->total_of_likes }}</p>
                    </div>
                </div>
                <div class="description-font-serif">{{ $menu->description }}</div>
            </div>

            <div class="lower-section" id="start-cooking" onclick="startCooking()">
                <a href="#section"><button id="button" class="start-cooking-button white">Start Cooking</button></a>
            </div>

            <div class="nutrient-fact">
                <h3 class="white">Nutrient Facts</h3>
                <div class="nutrient-contents mt-2">
                    <div class="nutrient">
                        <div class="color-nutrient food-cream"></div>
                        <div class="ml-2">
                            <div class="nutrient-title">Calories</div>
                            <div class="nutrient-amount">{{ $menu->calories }}cal</div>
                        </div>
                    </div>
                    <div class="nutrient">
                        <div class="color-nutrient food-orange"></div>
                        <div class="ml-2">
                            <div class="nutrient-title">Fats</div>
                            <div class="nutrient-amount">{{ $menu->fat }}g</div>
                        </div>
                    </div>
                    <div class="nutrient mt-2">
                        <div class="color-nutrient food-purple"></div>
                        <div class="ml-2">
                            <div class="nutrient-title">Carbs</div>
                            <div class="nutrient-amount">{{ $menu->carbohydrates }}g</div>
                        </div>
                    </div>
                    <div class="nutrient mt-2">
                        <div class="color-nutrient food-green"></div>
                        <div class="ml-2">
                            <div class="nutrient-title">Protein</div>
                            <div class="nutrient-amount">{{ $menu->protein }}g</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section id="section" class="main-page-large" style="display: none;">
        <div class="header-font-serif white">{{ $menu->menu_name }}</div>

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

        <form class="lower-section" action="/menu-details/{{ $menu->id }}" method="post">
            @csrf
            <a href="#section"><button id="button" class="start-cooking-button white">Finish Cooking</button></a>
        </form>

        <div class="box is-invisible"></div>

    </section>

    {{-- JS when press button shows the cooking steps in detail --}}
    <script>
        const button = document.getElementById('button');
        const section = document.getElementById('section');

        button.addEventListener('click', function() {
            section.style.display = 'block';
        })

        function startCooking() {
            var startButton = document.getElementById("start-cooking");
            var finishButton = document.getElementById("finish-cooking");

            startButton.style.display = "none";
            finishButton.style.display = "block";
        }
    </script>

    {{-- JS for Animate on Scroll --}}
    @include('templates.data-aos')

    <script src="https://kit.fontawesome.com/1e23f5acef.js" crossorigin="anonymous"></script>
@endsection
