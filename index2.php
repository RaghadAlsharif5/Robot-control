<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'robot control';
$db_port = 3306;

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db);

  //check connection 
  if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;




    if(isset($_POST['Forward'])) {
        echo "<br>";

        $my_query = "";

        $my_query = "select Forward from robotcontrol";
        $result = mysqli_query($connection, $my_query);

        $my_query = "INSERT INTO robotcontrol(Forward) VALUES(1)";
        $result = mysqli_query($connection,$my_query);
        if($result)
        {
            echo "  done successfuly ";
        }
        else{
            echo "ERROR: Unable to past <br>";
        }
    }

    else if(isset($_POST['Left'])) {
        echo "<br>";

        $my_query = "";

        $my_query = "select isLeft from robotcontrol";
        $result = mysqli_query($connection, $my_query);

        $my_query = "INSERT INTO robotcontrol(isLeft) VALUES(1)";
        $result = mysqli_query($connection, $my_query);
        if($result)
        {
            echo "  done successfuly ";
        }
        else{
            echo "ERROR: Unable to past <br>";
        }
    }
      else if(isset($_POST['Right'])) {
      echo "<br>";

      $my_query = "";

      $my_query = "select isRight from robotcontrol";
      $result = mysqli_query($connection, $my_query);

      $my_query = "INSERT INTO robotcontrol(isRight) VALUES(1)";
      $result = mysqli_query($connection, $my_query);
      if($result)
      {
          echo "  done successfuly ";
      }
      else{
          echo "ERROR: Unable to past <br>";
      }
    }

    else if(isset($_POST['Stop'])) {
      echo "<br>";

      $my_query = "";

      $my_query = "select Stop from robotcontrol";
      $result = mysqli_query($connection, $my_query);

      $my_query = "INSERT INTO robotcontrol(Stop) VALUES(1)";
      $result = mysqli_query($connection, $my_query);
      if($result)
      {
          echo "  done successfuly ";
      }
      else{
          echo "ERROR: Unable to past <br>";
      }
    }
    else if(isset($_POST['Backward'])) {
      echo "<br>";

      $my_query = "";

      $my_query = "select Backward from robotcontrol";
      $result = mysqli_query($connection, $my_query);

      $my_query = "INSERT INTO robotcontrol(Backward) VALUES(1)";
      $result = mysqli_query($connection, $my_query);
      if($result)
      {
          echo "  done successfuly ";
      }
      else{
          echo "ERROR: Unable to past <br>";
      }
    }




    
?>