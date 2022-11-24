<?php
include('../db_config.php');
// $sql = "select * from feedback_data ";
// $result = $conn -> query($sql);
//  $title = array();
//  $count = array();
// echo "tryyyy";

//   foreach($conn->query('SELECT knowledgeable,COUNT(*)
// FROM feedback_data
// GROUP BY knowledgeable') as $row) {
// // echo "<tr>";

// $title=$row['knowledgeable'];
// $count=$row['COUNT(*)'];

// echo "<td>" . $row['knowledgeable'] . "</td>" ;
// echo "<td>" . $row['COUNT(*)'] . "</td>" ."<br>";

// echo "<td>" . $title . "</td>" ;
// echo "<td>" . $count . "</td>" ;
// echo "</tr>"; 
// echo "<br>";



// }
// $knowledgeable = array($title,$count);


// echo "<br>"."try"."<br>";
//   // $sql = "select COUNT(*) from feedback_data where knowledgeable='Nope, not at all!'";
$result = $conn->query('SELECT knowledgeable,COUNT(*) as count FROM feedback_data Where knowledgeable="Yes, very!"');
$yes = mysqli_fetch_assoc($result);
// echo $yes['count'];
// echo "<br>";
$result = $conn->query('SELECT knowledgeable,COUNT(*) as count FROM feedback_data Where knowledgeable="slightly"');
$slightly = mysqli_fetch_assoc($result);
// echo $slightly['count'];
// echo "<br>";
$result = $conn->query('SELECT knowledgeable,COUNT(*) as count FROM feedback_data Where knowledgeable="moderately"');
$moderately = mysqli_fetch_assoc($result);
// echo $moderately['count'];
// echo "<br>";
$result = $conn->query('SELECT knowledgeable,COUNT(*) as count FROM feedback_data Where knowledgeable="Nope, not at all!"');
$nope = mysqli_fetch_assoc($result);
// echo $nope['count'];

$knowledgeable = array($nope['count'], $slightly['count'], $moderately['count'], $yes['count']);
// // foreach($knowledgeable as $value)
// // {
// //   echo $value;
// // }
// echo '<pre>'; print_r($knowledgeable); echo '</pre>';

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
   <style>
    .navbar{
      background: white;
    }
    .navbar-toggler-icon{
      background: #deb778;
    }
    /* .sidebar{
      background-color: red;
      width: 80vw;
    } */
   /* <!-- * {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    } */

    /* .chartMenu {
      width: 100vw;
      height: 40px;
      background: grey;
      color: white;
    }

    .chartMenu p {
      padding: 10px;
      font-size: 20px;
    } */

    /* .container {
      margin-top: 50px;
      width: 100%;
      height: 100%;
      background: rgba(255, 26, 104, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .chartBox {
      width: 80%;
      height: 80%;
      padding: 20px;
      border-radius: 20px;
      border: red;
      background: white;
    }
    p{
      text-align: center;
      margin-top: 10px;
      font-size: large;
    }*/
  </style> 

</head>

<body>
  <!-- <div class="container1">
    <div class="sidebar">
    <li>ques1</li>
    <li>ques2</li>
    <li>ques3</li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="communication.php">Do you find it simple to communicate with your teacher?</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
    </div> -->

  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link " href="table.php">Table</a>
          <a class="nav-link active" aria-current="page" href="graph.php">Graph</a>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="communication.php">Do you find it simple to communicate with your teacher?</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        </div>
      </div>
    </div>
  </nav> -->
<!-- 
  <div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
</div> -->
<!-- <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="list-item-1">Item 1</h4>
  <p>...</p>
  <h4 id="list-item-2">Item 2</h4>
  <p>...</p>
  <h4 id="list-item-3">Item 3</h4>
  <p>...</p>
  <h4 id="list-item-4">Item 4</h4>
  <p>...</p>
</div> -->

<!-- 
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar navbar-light navbar-toggler-icon"></span>
    </button>
  </div> -->

  
<!-- </nav> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link " href="../table.php">Table</a>
          <a class="nav-link active" aria-current="page" href="graph.php">Graph</a>
          <a class="nav-link " href="communication.php">Communication</a>

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

    </div>
    <p>Do you find it simple to communicate with your teacher?</p>


  <script>
    function drawChart() {
      // Setup Block
      const knowledgeable = <?php echo json_encode($knowledgeable); ?>


      const labels = ['Nope, not at all!', 'Slightly', 'Moderately', 'Yes,very!'];
      const data = {
        labels: labels,
        datasets: [{
          label: 'Do you find it simple to communicate with your teacher?',
          data: knowledgeable,

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