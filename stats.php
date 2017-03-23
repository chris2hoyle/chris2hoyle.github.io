<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js'></script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js'></script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js'></script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js'></script>
  	<script>
      var PieChartIndustry = new Chart({...})
      var PieChartEnergy = new Chart({...})
      var PieChartHealthcare = new Chart({...})
      var PieChartHealthyL = new Chart({...})
      var PieChartTech = new Chart({...})
      var myLineChart = new Chart({...})
      var myLineChart2 = new Chart({...})
      var myChart = new Chart({...})
      
  </script>

 
    
  <style>
    body { font-family: 'Roboto', sans-serif; }
  </style>
  </head>

  <body >
  <br><br>
    
    <br>
    <br>
    <br>



    <!-------------------- PIE CHART Industries ------------------>


    <!-- <center><h2>Deal-funnel Industries</h2></center><br> -->
    <canvas id="PieChartIndustry" width="300" height="100"></canvas>
    <div class="chart">
    <script>
    var ctx = document.getElementById("PieChartIndustry");
    var PieChartIndustry = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [
        "Energy",
        "Healthcare",
        "Healthy Lifestyles",
        "Tech",
        "Other"
    ],
    datasets: [
        {
            data: [6, 33, 15 , 63, 11],
            backgroundColor: [
                "#91CB24",
                "#F48024",
                "#80B1CE",
                "#EE3424",
                "#78A22F"

            ],
            hoverBackgroundColor: [
                "#91CB24",
                "#F48024",
                "#80B1CE",
                "#EE3424",
                "#78A22F"
            ]
        }]
  }})

    </script></div>


  </html>