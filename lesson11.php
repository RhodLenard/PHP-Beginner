<?php

  // array = "variable" which can hold more than one value at a time.

    $foods = array("apple", "orange", "banana", "coconut");

    //$foods[0] = "Pineapple";     edit
    //array_push($foods,"manggo"); add to last element
    //array_pop($foods);           remove last element
    //array_shift($foods);         remove first element
    //$reverse_food = array_reverse($foods); reverse
    echo count($foods) . "<br>";

   foreach($foods as $food){
      echo $food . "<br>";
  }

?>