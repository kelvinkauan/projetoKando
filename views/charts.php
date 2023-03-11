<!DOCTYPE html>

<html>
  <head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density" ]

        <?php 
          include "./connection/connection.php";
          $sql = "SELECT * FROM etapa";
          $consulta =mysqli_query($conn, $sql); 
          while($dados = mysqli_fetch_array($consulta)){
             $numero = $dados['valor'];
            //  if($numero = 1){
            //   return $numero;
            //  }if($numero = 2){
            //   return $numero;
            //  }if($numero = 3){
              // return $numero;
             
             $nome = $dados['nome'];?>
            

            [<?php echo $nome ?>, <?php echo $numero ?>]

            <?php }?>
       
      ]);
      

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Gráfico",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
</head>

<body>
  <h1>DashBoard</h1>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
sss
</body>






</html>