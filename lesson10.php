<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="lesson10.php" method="post">
          <input type="submit" name="start" value="Start">
          <input type="submit" name="stop" value="Stop">

    </form>
</body>
</html>

<?php

    $seconds = 0;
    $running = true;

    while($running){
      if(isset($_POST["start"])){
        $seconds++;
        echo $seconds . "<br>";
      }
      elseif(isset($_POST["stop"])){
        $running = false;
      }
    }
?>