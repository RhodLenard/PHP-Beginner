<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="lesson9.php" method="post">
        <label>Enter the number you want to countdown</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="start">

    </form>
</body>
</html>

<?php

   $counter = $_POST["counter"];

   for($i = 1; $i <= $counter  ; $i++){
      echo $i . "<br>";
   }



?>