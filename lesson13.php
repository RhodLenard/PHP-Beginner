<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <form action="lesson13.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
      </form>
</body>
</html>

<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    /*
    $username = true;

    if(isset($username)){
      echo "The variable is empty <br>";
    }
    else{
        echo "The variable is NOT empty";
    }

    if(empty($username)){
        echo "The variable is empty";
    }
    else{
        echo "The variable is NOT empty";
    }
    */


    //foreach($_POST as $key => $value){
    //        echo "{$key} = {$value} <br>";
    //}
      if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

          if(empty($username)){
              echo"<font color='red'>";
              echo"Invalid Username or Password";
          }
          elseif(empty($password)){
              echo"<font color='red'>";
              echo"Invalid Username or Password";
          }
          else{
              echo"<font color='green'>";
              echo"Registracion succesful <br> <br>";
              echo"<font color='black'>";
              echo"Hello {$username}!";

          }
      }
  
?>