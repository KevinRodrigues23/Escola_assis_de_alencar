<?php 
include('../assets/header.php');



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Template de dashboard, usando Bootstrap.</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="dashboard.css" rel="stylesheet">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=1_vjzqoP_6fAucT98GBH75RaG-gXqVDHkdNJAL_OHa89gj5Q3nGWobRyYJQPPJSIohbFENeAssiAcanQ3fiHLDjtIbgBGD76irD0QKshT4o" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9nZXRib290c3RyYXAuY29tLmJyL2RvY3MvNC4xL2V4YW1wbGVzL2Rhc2hib2FyZC8"/></head>
  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'controle de frequência', 'desenvolvimentos das turmas', 'Organização', 'Diciplina', 'Queixas negativa', 'Average'],
          ['Fevereiro',  165,      938,         522,             998,           450,      614.6],
          ['Março',  135,      1120,        599,             1268,          288,      682],
          ['Abril',  157,      1167,        587,             807,           397,      623],
         
        ]);

        var options = {
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
   
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
    
    <?php
    include('../assets/footer.php');
    ?>
  </body>
</html>