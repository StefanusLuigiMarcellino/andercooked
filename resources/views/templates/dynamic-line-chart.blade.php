<!DOCTYPE html>
<html>
<head>
    <title>Multi Axis Line Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
</head>
<body>
    <canvas id="myChart"></canvas>

    <script>
        const weeklyReports = @json($reports);

        const weekIds = [];
        const proteins = [];
        const carbs = [];
        const calories = [];
        const fats = [];

        weeklyReports.reverse().forEach(report => {
            const { weekdays, weeklyprotein, weeklycarbohydrat, weeklycalories, weeklyfat } = report;
            if(weekdays == 0){
                weekIds.push(``);
                proteins.push(weeklyprotein);
                carbs.push(weeklycarbohydrat);
                calories.push(weeklycalories);
                fats.push(weeklyfat);
            } else {
                weekIds.push(`Week ${weekdays}`);
                proteins.push(weeklyprotein);
                carbs.push(weeklycarbohydrat);
                calories.push(weeklycalories);
                fats.push(weeklyfat);
            }
        });

        const chartData = {
            labels: weekIds,
            datasets: [
                {
                    label: "Calories",
                    data: calories,
                    // yAxisID: "calories-axis",
                    borderColor: "#FDECCE",
                    backgroundColor: "transparent",
                },
                {
                    label: "Fats",
                    data: fats,
                    // yAxisID: "fats-axis",
                    borderColor: "#FE8E04",
                    backgroundColor: "transparent",
                },
                {
                    label: "Carbohydrates",
                    data: carbs,
                    // yAxisID: "carbs-axis",
                    borderColor: "#7D60F8",
                    backgroundColor: "transparent",
                },
                {
                    label: "Protein",
                    data: proteins,
                    // yAxisID: "protein-axis",
                    borderColor: "#00A043",
                    backgroundColor: "transparent",
                },
            ],
        };

        const ctx = document.getElementById("myChart").getContext("2d");

        new Chart(ctx, {
            type: "line",
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        position: "left",
                        grid: {
                            display: false,
                        },
                    },
                    // caloriesAxis: {
                    //     beginAtZero: true,
                    //     position: "left",
                    //     grid: {
                    //         display: false,
                    //     },
                    //     title: {
                    //         display: true,
                    //         text: "Calories",
                    //     },
                    // },
                    // carbsAxis: {
                    //     beginAtZero: true,
                    //     position: "right",
                    //     grid: {
                    //         display: false,
                    //     },
                    //     title: {
                    //         display: true,
                    //         text: "Carbohydrates",
                    //     },
                    // },
                    // fatsAxis: {
                    //     beginAtZero: true,
                    //     position: "right",
                    //     grid: {
                    //         display: false,
                    //     },
                    //     title: {
                    //         display: true,
                    //         text: "Fats",
                    //     },
                    // },
                    // proteinAxis: {
                    //     beginAtZero: true,
                    //     position: "right",
                    //     grid: {
                    //         display: false,
                    //     },
                    //     title: {
                    //         display: true,
                    //         text: "Protein",
                    //     },
                    // },
                },
            },
        });
    </script>
</body>
</html>
