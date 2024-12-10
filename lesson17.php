<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="lesson17.php" method="post">
          <label>Username</label><br>
          <input type="text" name="username"><br>
          <label>Age</label><br>
          <input type="text" name="age"><br>
          <label>Email</label><br>
          <input type="email" name="email"><br>
          <input type="submit" name="login" value="Enter">
    </form>
</body>
</html>

<?php

  if(isset($_POST["login"])){
      $username = filter_input(INPUT_POST, "usernam", FILTER_SANITIZE_SPECIAL_CHARS);

      $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

      $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if(empty($email)){
        echo"That email wasn't valid";
    }
    else{
        echo"Your email is: {$email}";
    }
  }


?>


