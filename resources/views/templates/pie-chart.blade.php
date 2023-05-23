{{-- PIE CHART --}}
<div class="header-font mt-6">Weekly Report</div>


<div class="container">
    <?php
        $food_cream = 15;
        $food_green = $food_cream + 40;
        $food_orange = $food_green + 5;
        $food_purple = $food_orange + 0;
    ?>
    
    {{-- <div class="pie-chart" 
    style="background: conic-gradient(var(--food-cream) 0 {{ $food_cream }}%, var(--food-green) 0 {{ $food_green }}%, var(--food-orange) 0 {{ $food_orange }}%, var(--food-purple) 0 {{ $food_purple }}%);"></div> --}}
    <div class="chart-container" style="width: 18vw; margin: 0 auto;">
        <canvas class="my-chart"></canvas>
    </div>
    <script src="/javascript/pie-chart.js"></script>
    <script>
        const chartData = {
        labels: ["Calories", "Carbs", "Fats", "Protein"],
        data: [30, 20, 15, 35],
        };

        const myChart = document.querySelector(".my-chart");

        new Chart(myChart, {
        type: "doughnut",
        data: {
            labels: chartData.labels,
            datasets: [
            {
                // label: "Language Popularity",
                data: chartData.data,
                backgroundColor: [
                    "#FDECCE",   // Color for "Calories"
                    "#FE8E04",   // Color for "Fats"
                    "#7D60F8",   // Color for "Carbs"
                    "#00A043",   // Color for "Protein"
                ],
            },
            ],
        },
        options: {
            borderWidth: 10,
            borderRadius: 10,
            hoverBorderWidth: 0,
            plugins: {
            legend: {
                display: false,
            },
            },
        },
        });

        const populateUl = () => {
        chartData.labels.forEach((l, i) => {
            let li = document.createElement("li");
            li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}%</span>`;
            ul.appendChild(li);
        });
        };

        populateUl();

    </script>

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
</div>

{{-- <div class="container">
    <div class="chart-container">
        <canvas class="my-chart"></canvas>
    </div>
</div> --}}

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const chartData = {
    labels: ["Python", "Java", "JavaScript", "C#", "Others"],
    data: [30, 17, 10, 7, 36],
    };

    const myChart = document.get(".my-chart");
    const ul = document.querySelector(".programming-stats .details ul");

    new Chart(myChart, {
    type: "doughnut",
    data: {
        labels: chartData.labels,
        datasets: [
        {
            label: "Language Popularity",
            data: chartData.data,
        },
        ],
    },
    options: {
        borderWidth: 10,
        borderRadius: 2,
        hoverBorderWidth: 0,
        plugins: {
        legend: {
            display: false,
        },
        },
    },
    });

    const populateUl = () => {
    chartData.labels.forEach((l, i) => {
        let li = document.createElement("li");
        li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}%</span>`;
        ul.appendChild(li);
    });
    };

    populateUl();

</script>