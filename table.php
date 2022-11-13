<?php
  include('./db_config.php');
  $sql = "select * from feedback_data ";
  $result = $conn -> query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="table.php">Table</a>
        <a class="nav-link" href="graph.php">Graph</a>
      </div>
    </div>
  </div>
</nav>

    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">SN</th>
            <th scope="col">Name</th>
            <th scope="col">Do you find it simple to communicate with your teacher?</th>
            <th scope="col">Do you fully understand the concepts covered in class? </th>
            <th scope="col">Do you feel nervous or scared to ask questions to your teacher?</th>
            <th scope="col">Do you think the recommended reading materials, websites, texts, or reference books are relevant to you?</th>
            <th scope="col">Do you think the teacher has sound knowledge of the topic being discussed in the classroom? Are you happy with the teacher's technical knowledge?</th>
            <th scope="col">Does your teacher follow the syllabus and the course structure correctly and timely?</th>
            <th scope="col">Does your teacher share the knowledge outside the book/practical knowledge?</th>
            <th scope="col">Do you have a hard time listening to the teacher's voice?</th>
            <th scope="col">Would you like to recommend the same teacher for another semester for you and your junior?</th>
            <th scope="col">How would you rate your experience?</th>
            <th scope="col">Any feedback/suggestion?</th>
            </tr>
        </thead>
        <?php 
            while($row= $result->fetch_assoc()){ 
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['communication'] ?></td>
                <td><?php echo $row['understandability'] ?></td>
                <td><?php echo $row['nervous'] ?></td>
                <td><?php echo $row['recommended-material'] ?></td>
                <td><?php echo $row['knowledgeable'] ?></td>
                <td><?php echo $row['follow-syllabus'] ?></td>
                <td><?php echo $row['practical'] ?></td>
                <td><?php echo $row['audible'] ?></td>
                <td><?php echo $row['recommend'] ?></td>
                <td><?php echo $row['rating'] ?></td>
                <td><?php echo $row['suggestions'] ?></td>
                <td>
            </tr>
        <?php
            }
        ?> 
    </table>

</body>
</html>