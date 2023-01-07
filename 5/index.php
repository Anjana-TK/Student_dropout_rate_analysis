<?php require_once 'connection.php' ?>
<?php
$query1 ="select sid, stype, dropout as t from byschool where stype='primary' and yrange='2014-15' group by sid";
$query2 ="select sid, stype, dropout as t from byschool where stype='secondary' and yrange='2015-16' group by sid";
$query3 ="select sid, stype, sum(dropout) as t from byschool where yrange='2018-19' group by sid";
$query4 = "select sid, gtype, sum(dropout) as t from bygender where yrange='2018-19' group by sid";
$query5 = "select sid, gtype, dropout as t from bygender where gtype='boys' and yrange='2015-16' group by sid";
$query6 = "select sid, gtype, dropout as t from bygender where gtype='girls' and yrange='2016-17' group by sid";
$result1 =mysqli_query($conn,$query1);
$result2 =mysqli_query($conn,$query2);
$result3 =mysqli_query($conn,$query3);
$result4 = mysqli_query($conn,$query4);
$result5 = mysqli_query($conn,$query5);
$result6 = mysqli_query($conn,$query6);
// while($value = mysqli_fetch_assoc($result)){
//     echo $value['sid'];
// }
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width,user-scalable-no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible">
<title>Pie Chart in Php</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawChart4);
      google.charts.setOnLoadCallback(drawChart5);
      google.charts.setOnLoadCallback(drawChart6);
      function drawChart1() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            while($chart = mysqli_fetch_assoc($result1)){

                echo "['".$chart['sid']."',".$chart['t']."],";
            }
          
          ?>
        ]);

        var options = {
          title: 'Dropout Rates of Primary Students in 2014-15 in the states of India',
            is3D:true
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie_chart1'));

        chart.draw(data, options);
      }
    

      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            while($chart = mysqli_fetch_assoc($result2)){

                echo "['".$chart['sid']."',".$chart['t']."],";
            }
          
          ?>
        ]);

        var options = {
          title: 'Dropout Rates of Secondary Students in 2015-16 in the states of India',
        pieHole:0.4
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_chart1'));

        chart.draw(data, options);
      }
      
      function drawChart3() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            while($chart = mysqli_fetch_assoc($result3)){

                echo "['".$chart['sid']."',".$chart['t']."],";
            }
          
          ?>
        ]);

        var options = {
          title: 'Dropout Rates of all Students in 2018-19 in the states of India',
           legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('column_chart1'));

        chart.draw(data, options);
      }
      function drawChart4() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            while($chart = mysqli_fetch_assoc($result4)){

                echo "['".$chart['sid']."',".$chart['t']."],";
            }
          
          ?>
        ]);

        var options = {
          title: 'Dropout Rates of both girls and boys Students in 2018-19 in the states of India',
           legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('column_chart2'));

        chart.draw(data, options);
      }
      function drawChart5() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            while($chart = mysqli_fetch_assoc($result5)){

                echo "['".$chart['sid']."',".$chart['t']."],";
            }
          
          ?>
        ]);

        var options = {
          title: 'Dropout Rates of Boys Students in 2015-16 in the states of India',
            is3D:true
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie_chart2'));

        chart.draw(data, options);
      }
    

      function drawChart6() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            while($chart = mysqli_fetch_assoc($result6)){

                echo "['".$chart['sid']."',".$chart['t']."],";
            }
          
          ?>
        ]);

        var options = {
          title: 'Dropout Rates of Girls Students in 2016-17 in the states of India',
        pieHole:0.4
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_chart2'));

        chart.draw(data, options);
      }
    </script>
<style>
    .grid_container{
        display: grid;
        grid-template-columns: 900px 900px;
    
    }
    </style>

</head>
<body>
    <div class="grid_container">
<div id="pie_chart1" style="width: 900px; height: 500px;"></div>
<div id="donut_chart1" style="width: 900px; height: 500px;"></div>
<div id="column_chart1" style="width: 900px; height: 500px;"></div>
<div id="column_chart2" style="width: 900px; height: 500px;"></div>
<div id="pie_chart2" style="width: 900px; height: 500px;"></div>
<div id="donut_chart2" style="width: 900px; height: 500px;"></div>
    </div>
</body>
</html>
