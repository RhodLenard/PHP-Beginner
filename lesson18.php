<?php
    
    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

    /*
    foreach($_COOKIE as $value => $key){
        echo "{$value} = {$key} <br>";
    }
    */

    if(isset($_COOKIE["fav_food"])){
        echo"Buy some {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo "You haven't set your favorite food yet.";
    }

    
?>