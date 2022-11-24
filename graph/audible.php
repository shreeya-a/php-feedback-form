<?php
include('../db_config.php');

$result = $conn->query('SELECT audible,COUNT(*) as count FROM feedback_data Where audible="Yes, very!"');
$yes = mysqli_fetch_assoc($result);

$result = $conn->query('SELECT audible,COUNT(*) as count FROM feedback_data Where audible="slightly"');
$slightly = mysqli_fetch_assoc($result);

$result = $conn->query('SELECT audible,COUNT(*) as count FROM feedback_data Where audible="moderately"');
$moderately = mysqli_fetch_assoc($result);

$result = $conn->query('SELECT audible,COUNT(*) as count FROM feedback_data Where audible="Nope, not at all!"');
$nope = mysqli_fetch_assoc($result);


$audible = array($nope['count'], $slightly['count'], $moderately['count'], $yes['count']);

// echo '<pre>'; print_r($audible); echo '</pre>';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Graph</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css">
  <link rel="stylesheet" href="../graphstyles.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link " href="table.php">Table</a>
          <a class="nav-link active" aria-current="page" href="graph.php">Graph</a>
        </div>
      </div>
    </div>
  </nav>

  
    <div class="container">
      <div class="chartBox">
        <canvas id="myChart"></canvas>
      </div>
      <div>
        
      </div>

    </div>
    <p>Do you have a hard time listening to the teacher's voice?</p>




  <script>
    function drawChart() {
      // Setup Block
      const audible = <?php echo json_encode($audible); ?>


      const labels = ['Nope, not at all!', 'Slightly', 'Moderately', 'Yes,very!'];
      const data = {
        labels: labels,
        datasets: [{
          label: "Do you have a hard time listening to the teacher's voice?",
          data: audible,

          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1
        }]
      };

      //Config Block

      const config = {
        type: 'bar',
        data,
        options: {
          scales: {
            y: {
              beginAtZero: true,
              // min:0,
              // max:100,
              grace: '5%',
              ticks: {
                stepSize: 2
              }
            }
          }
        },
      };

      //Render Block

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    }

    window.onload = function() {
      console.log(window.innerWidth)
      if (window.innerWidht >= 999) {
        Chart.defaults.font.size = 30;
      } else if (window.innerWidht >= 666 && window.innerWidht < 999) {
        Chart.defaults.font.size = 18;
      } else {
        Chart.defaults.font.size = 12;
      }
      drawChart();
    }
  </script>

</body>

</html>