<?php
  // The global $_POST variable allows you to access the data sent with the POST method
  // To access the data sent with the GET method, you can use $_GET
  $say = $_GET['say'];
  $to  = $_GET['to'];

  echo  $say, ' ', $to;
?>
