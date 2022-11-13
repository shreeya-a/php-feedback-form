<?php
 $conn = new mysqli("localhost:3307","root","","feedback_form");

 if($conn->connect_error){
     die("$conn->connect_error");
 }

?>