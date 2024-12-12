<?php
  include("database.php");

  $sql = "INSERT INTO users (user, password)
  VALUES ('Patrick', 'Pat102')";

  mysqli_query($conn, $sql);

  mysqli_close($conn);
?>