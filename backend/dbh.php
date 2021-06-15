<?php
  $conn = mysqli_connect("localhost","root","","movies");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
