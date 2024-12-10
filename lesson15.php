<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <form action="lesson15.php" method="post">
          <input type="checkbox" name="iphone" value="IPhone">
          IPhone <br>
          <input type="checkbox" name="samsung" value="Samsung">
          Samsung <br>
          <input type="checkbox" name="xiaomi" value="Xiaomi">
          Xiaomi <br>
          <input type="submit" name="submit" value="Submit">
      </form>
</body>
</html>
<?php


     
      if(isset($_POST["submit"])){
          if(isset($_POST["iphone"])){
            $iphone = $_POST["iphone"];
              echo"You selected Iphone <br>";
          }
            if(isset($_POST["samsung"])){
              $samsung = $_POST["samsung"];
                echo"You selected Samsung <br>";
            }
              if(isset($_POST["xiaomi"])){
                $xiaomi = $_POST["xiaomi"];
                  echo"You selected Xiaomi <br>";
              }
                if(empty($_POST["iphone"])){
                  echo"You DONT like iphone";
                }
        
          /*if($sport == "Basketball"){
            echo"You selected Basketball";
          }
          elseif($sport == "Volleyball"){
            echo"You selected Volleyball";
          }
          elseif($sport == "Bike"){
            echo"You selected Cycling";
          }
          else{
            echo"Please make a selection";
          }*/
          
          /*switch($sport){
            case "Basketball":
              echo"You selected Basketball";
              break;
              case "Volleyball":
                echo"You selected Volleyball";
                break;
                case "Bike":
                  echo"You selected Cycling";
                  break;
                  default:
                    echo"Please make a selection";
          }*/
      }

      

?>