<?php
    $adult = false;

    if ($adult){
        echo "You may enter this site <br>";
    }
    else{
        echo "You must be an adult to enter this site <br>";
    }

    $age = 13;

    if($age >=18){
      echo "You can enter to this site <br>";
    }
    else{
      echo "You must be 18+ to enter this site <br>";
    }

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;
    
    if($hours <= 0){
      $weekly_pay = 0;
    }
    elseif($hours <= 40){
      $weekly_pay = $hours * $rate;
    }
    else{
      $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week";
    
?>