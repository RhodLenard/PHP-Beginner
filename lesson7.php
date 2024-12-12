<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="lesson7.php" method="post">
        <label>Age</label><br>
        <input type="text" name="age"><br>
        <label>Filipino</label><br>
        <input type="checkbox" name="citizen"><br>
        <input type="submit" value="Enter"><br>
    </form>

    <form action="lesson7.php" method="post">
        <label>Just check the box if you are child or sr to get a discount!<label><br>
        <label>Child</label>
        <input type="checkbox" name="child"><br>
        <label>Senior</label>
        <input type="checkbox" name="senior"><br>
        <label>Adult</label>
        <input type="checkbox" name="adult"><br>
        <input type="submit" value="Enter"><br>
    </form>

</body>
</html>

<?php
    $temp = 28;
    $cloudy  = true;

    if($temp >= 0 && $temp <= 28){
      echo"The temperature is good <br>";
    }
    else{
      echo"The temperature is bad <br>";
    }

    if($temp < 0 || $temp > 28){
      echo"The temperature is bad <br>";
    }
    else{
      echo"The temperature is good <br>";
    }

    if(!$cloudy){
      echo"It's cloudy <br>";
    }
    else{
      echo"It's sunny <br>";
    }

    $age = $_POST["age"];
    $citizen = $_POST["citizen"];

    if($age >= 18 && $citizen){
      echo"You can vote <br>";
    }
    else{
      echo"You cannot vote if you are under 18 or not citizen of this <br>";
    }

    $child = $_POST["child"];
    $senior = $_POST["senior"];
    $adult = $_POST["adult"];
    $ticket = null;

    if($child || $senior){
      $ticket = 15;
    }
    else{
      $ticket = 20;
    }

    echo"Your ticket price is {$ticket} Php.";
?>