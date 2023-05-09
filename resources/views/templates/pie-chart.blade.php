{{-- PIE CHART --}}
<div class="header-font margin-20">Weekly Report</div>
{{-- <div class="container">
    <?php
        $food_cream = 15;
        $food_green = $food_cream + 40;
        $food_orange = $food_green + 5;
        $food_purple = $food_orange + 0;
    ?>
    <div class="pie-chart" 
    style="background: conic-gradient(var(--food-cream) 0 {{ $food_cream }}%, var(--food-green) 0 {{ $food_green }}%, var(--food-orange) 0 {{ $food_orange }}%, var(--food-purple) 0 {{ $food_purple }}%);"></div>
    @include('piechart.pie-chart-google')
    <div class="information">
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
</div> --}}

<div class="container">
    <div>
        <canvas id="pie-chart"></canvas>
    </div>
</div>

<script>
    
</script>