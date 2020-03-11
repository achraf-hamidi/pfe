<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],


          ['2014', 1000, 400, 200],
          ['2014', 1000, 400, 200],
          ['2014', 1000, 400, 200],
          ['2014', 1000, 400, 200],
          ['2014', 1000, 400, 200],
          ['2014', 1000, 400, 200],
          ['2014', 1000, 400, 200],
          ['2014', 1000, 400, 200],


          ['2014', 1000, 400, 200]



        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
<body>

    <div id="columnchart_material" style="width: 1000px; height: 300px;"></div>


</body>
</html>
