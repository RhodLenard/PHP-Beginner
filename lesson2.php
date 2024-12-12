<?php
//variable string
  $name = "Rhod Lenard";
  $food = "Tapsi";
  $email = "Rhod24@gmail.com";  

//Integers - Whole numbers
  $age = 25;
  $users = 2;
  $quantity = 4;

//float - Numbers contain decimal portion
  $gpa = 2.5;
  $price = 4.99;
  $tax_rate = 5.1;

//Booleans
  $employed = true;
  $online = true;
  $for_sale = true;

  $total = null;

  echo "Hello {$name}<br>";
  echo "You like {$food}<br>";
  echo "Your email {$email}<br>";

  echo "You are {$age} years old<br>";
  echo "There are {$users} users online<br>";
  echo "You would like to buy {$quantity} items";

  echo "Your gpa is {$gpa}<br>";
  echo "Your tapsi is \${$price}<br>";
  echo "The sales tax rate is: {$tax_rate}%<br>";

  echo "Onlie status: {$online}<br>";

  echo"You have ordered {$quantity}x {$food}<br>";
  $total = $quantity * $price;
  echo"Your total is: \${$total}<br>";

?>