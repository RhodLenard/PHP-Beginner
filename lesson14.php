<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <form action="lesson14.php" method="post">
          <input type="radio" name="sport" value="Basketball">
          Basketball <br>
          <input type="radio" name="sport" value="Volleyball">
          Volleyball <br>
          <input type="radio" name="sport" value="Cycling">
          Cycling <br>
          <input type="submit" name="confirm" value="Confirm">
      </form>
</body>
</html>
<?php



      if(isset($_POST["confirm"])){
        if(isset($_POST["sport"])){
          $sport = $_POST["sport"];
            echo"You selected {$sport}";
        }
        else{
          echo"<font color ='red'>Please make a selection";
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