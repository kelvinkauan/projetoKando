<!DOCTYPE html>

<html>

<head>

  <link href="https://form$formn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../views/Styleforms/charts.css">

  <!--Load the AJAX API-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    // Load the Visualization API and the corechart package.
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
       
        ['Sim', <?= $data['contSim']['c'] ?>],
        ['Não', <?= $data['contNao']['c'] ?>],
        ['NA',  <?= $data['contNa']['c']  ?>],

      ]);

      // Set chart options
      var options = {
        'title': 'Respostas Assinaladas',
        'width': 400,
        'height': 300,
        'pieHole': 0.4,
      };



      


      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
      
    }
  </script>
  <title>Gráfico</title>

</head>



<body>
  <nav>
    <div id=" title">
      <h1> Relatório IPAL </h1>
    </div>
    <ul>
      <a class="a" href="./UsuarioController.php?action=PaginaPrincipal">
        <li>Home</li>
      </a>
    </ul>
  </nav>
  <?php 
  if(isset($data['data']))
  foreach($data['data'] as $form):  ?>
  <div class="container-info">
  <div class="info">
 
  <div class="data">
    <p>
    <label for=""> Nº O.S: </label>
    <?= $form['NOS'] ?>
    </p>
  </div>
  <div>
    <p>
  <label for=""> Empresa: </label>
  <?= $form['empresa'] ?>
  </p>
  </div>
  <div>
    <p>
  <label for=""> Data: </label>
  <?= $form['data_form'] ?>
  </p>
  </div>
  <div>
    <p>
  <label for="">Reponsável pelo serviço: </label>
  <?= $form['responsavel'] ?>
  </p>
  </div>
  </div>
  </div>

  <?php endforeach; ?>


  <div class="container">
    <div class="subT">
      <h3>
        Gráfico
      </h3>
    </div >
    
    <div class="chart">
      <div id="top_x_div" style="width: 100px; height: 500px;"></div>
    </div>
 


    
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']}, {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'NC', { role: "style" } ],
          
         ['NA',  <?= $data['contNa']['c']  ?>, '#b87333']
         
        ]);

        var options = {
          width: 295,
          
          chart: {
            title: 'Não Conformidades',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div class="container" >
      <div   style="margin:auto; width: 77px; height: 500px;padding-top: 89px; " id="columnchart_material" ></div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage' ],
          
        ['Sim', <?= $data['contSim']['c'] ?>],
        ['Não', <?= $data['contNao']['c'] ?>],
        ['NA',  <?= $data['contNa']['c']  ?>],
        ]);

        var options = {
          width: 500,
          legend: { position: 'none' },
          chart: {
            title: '',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

   
</body>

</html>