<?php
    /*
    session = SGB used to store information on a user to ve used across multiple pages.
    A user is assigned a session-id 
    ex. login credentials
    */

      session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="lesson19.php" method="post">
      <label>Username</label><br>
      <input type="text" name="username"><br>
      <label>Passwrod</label><br>
      <input type="password" name="password">
      <input type="submit" name="login" value="Enter">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        

        if(!empty($_POST["username"]) && 
           !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"]; 
            $_SESSION["password"] = $_POST["password"]; 

              header("Location: home.php");
        }
        else{
          echo"Invalid username or password!";
        }
    }
?>