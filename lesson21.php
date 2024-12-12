<?php
    $password = "Rhod1234";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("Rhod1234" , $hash)){
        echo"You are logged in";
    }
    else{
        echo"Your password is incorrect";
    }
?>