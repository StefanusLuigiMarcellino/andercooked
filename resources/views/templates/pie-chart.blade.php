{{-- PIE CHART --}}
<div class="header-font mt-6">Weekly Report</div>

<div class="container-pie-chart">
    <div class="chart-container" style="width: 18vw; margin: 0 auto;">
        <canvas class="my-chart"></canvas>
    </div>

    <script src="/javascript/pie-chart.js"></script>

    <script>
        const chartData = {
            labels: ["Calories", "Fats", "Carbs", "Protein"],
            data: [
                {{$user->total_calories}}, 
                {{$user->total_fat}}, 
                {{$user->total_carbohydrates}}, 
                {{$user->total_protein}}
            ],
        };

        const myChart = document.querySelector(".my-chart");

        new Chart(myChart, {
        type: "doughnut",
        data: {
            labels: chartData.labels,
            datasets: [
            {
                label: " ",
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
        <div class="ovr">
            <div class="nutrient">
                <div class="color-nutrient food-cream"></div>
                <div class="explanation">
                    <div class="nutrient-title black">Calories</div>
                    <div class="nutrient-amount dark-grey">{{$user->total_calories}}cal</div>
                </div>
            </div>
            <div class="nutrient">
                <div class="color-nutrient food-orange"></div>
                <div class="explanation">
                    <div class="nutrient-title black">Fats</div>
                    <div class="nutrient-amount dark-grey">{{$user->total_fat}}g</div>
                </div>
            </div>
            <div class="nutrient">
                <div class="color-nutrient food-purple"></div>
                <div class="explanation">
                    <div class="nutrient-title black">Carbs</div>
                    <div class="nutrient-amount dark-grey">{{$user->total_carbohydrates}}g</div>
                </div>
            </div>
            <div class="nutrient">
                <div class="color-nutrient food-green"></div>
                <div class="explanation">
                    <div class="nutrient-title black">Protein</div>
                    <div class="nutrient-amount dark-grey">{{$user->total_protein}}g</div>
                </div>
            </div>
        </div>
    </div>
</div>