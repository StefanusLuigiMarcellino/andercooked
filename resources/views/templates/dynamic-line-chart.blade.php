<!DOCTYPE html>
<html>
  <head>
    <title>Multi Axis Line Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
  </head>
  <body>
    <canvas id="myChart"></canvas>

    <script>
      const chartData = {
        labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
        datasets: [
          {
            label: "Calories",
            data: [150, 180, 200, 170],
            // yAxisID: "calories-axis",
            borderColor: "#FDECCE",
            backgroundColor: "transparent",
          },
          {
              label: "Fats",
              data: [50, 60, 55, 45],
              // yAxisID: "fats-axis",
              borderColor: "#FE8E04",
              backgroundColor: "transparent",
            },
          {
              label: "Carbohydrates",
              data: [120, 150, 130, 140],
              // yAxisID: "carbs-axis",
              borderColor: "#7D60F8",
              backgroundColor: "transparent",
            },
          {
            label: "Protein",
            data: [80, 90, 85, 95],
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
            caloriesAxis: {
              beginAtZero: true,
              position: "left",
              grid: {
                display: false,
              },
              title: {
                display: true,
                text: "Calories",
              },
            },
            carbsAxis: {
              beginAtZero: true,
              position: "right",
              grid: {
                display: false,
              },
              title: {
                display: true,
                text: "Carbohydrates",
              },
            },
            fatsAxis: {
              beginAtZero: true,
              position: "right",
              grid: {
                display: false,
              },
              title: {
                display: true,
                text: "Fats",
              },
            },
            proteinAxis: {
              beginAtZero: true,
              position: "right",
              grid: {
                display: false,
              },
              title: {
                display: true,
                text: "Protein",
              },
            },
          },
        },
      });
    </script>
  </body>
</html>
