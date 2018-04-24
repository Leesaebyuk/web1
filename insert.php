<?php
  $conn =mysqli_connect("localhost","root","111111","web4");
  $sql ="insert into topic(
    title, description, created)
    value(
      'MySQL',
      'MySQL is ...',
      now())
      ";
  $result = mysqli_query($conn, $sql);
  if($result === false){
    echo mysqli_error($conn);
  }
 ?>
