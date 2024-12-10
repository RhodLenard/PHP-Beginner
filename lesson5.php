<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <!--
      <form action="lesson5.php" method="post">
      <label>x:</label>
      <input type="text" name="x"><br>
      <label>y:</label>
      <input type="text" name="y"><br>
      <label>z:</label>
      <input type="text" name="z"><br>
      <input type="submit" value="total">
    </form>
    -->

    <form action="lesson5.php" method="post">
      <label>radius:</label><br>
      <input type="text" name="radius"><br>
      <input type="submit" value="calculate">
    </form><br>


</body>
</html>

<?php
  //$x = $_POST["x"];
  //$y = $_POST["y"];
  //$z = $_POST["z"];
  //$total = null;

  //$total = abs($x);         absolute
  //$total = round($x);       round up
  //$total = floor($x);       round down
  //$total = ceil($x);        always round up
  //$total = sqrt($x);        square root 
  //$total = pow($x, $y);     to the power
  //$total = max($x, $y, $z); get maximum number
  //$total = min($x, $y, $z); get min
  //$total = pi();            pi function
  //$total = rand(1, 100);    random number
  
  //echo $total;

  $radius = $_POST["radius"];
  $circumference = null;
  $area = null;
  $diameter = null;
  $volume = null;

  $circumference = 2 * pi() * $radius;
  $circumference = round($circumference, 2);

  $area = pi() * pow($radius, 2);
  $area = round($area, 2);

  $diameter = 2 * $radius;
  $diameter = round($diameter, 2);

  $volume = 4/3 * pi() * pow($radius, 3);
  $volume = round($volume, 2);



  echo"Circumference = {$circumference}cm <br>";
  echo"Area = {$area}cm2 <br>";
  echo"Diameter = {$diameter}cm <br>";
  echo"Volume = {$volume}cm3 <br>";

?>