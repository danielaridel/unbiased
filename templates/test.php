<?php
  // The global $_POST variable allows you to access the data sent with the POST method
  // To access the data sent with the GET method, you can use $_GET
  $say = htmlspecialchars($_GET['say']);
  $to  = htmlspecialchars($_GET['to']);

  echo  $say, ' ', $to;
