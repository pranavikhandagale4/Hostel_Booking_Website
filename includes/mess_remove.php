<?php
session_start();


if (isset($_POST['mess_remove_submit'])) {

  require 'config.inc.php';

  $mess_name = $_POST['mess_name'];
  $Adminpassword = $_POST['pass'];

  if (empty($mess_name) || empty($Adminpassword)) {
    echo"<script>alert('Input all fields');window.location='../admin/create_mess.php'</script>";
    exit();
  }
    else {
    

      $sql2 = "SELECT *FROM Mess WHERE Mess_name = '$mess_name'";
      $result2 = mysqli_query($conn, $sql2);
      if($row2 = mysqli_fetch_assoc($result2)){
        $HNO = $row2['Mess_id'];
        $sql3 = "DELETE FROM Mess WHERE Mess_name = '$mess_name'";
        $result3 = mysqli_query($conn, $sql3);
        if($result3){
            echo"<script>alert('Deletion Successful');window.location='../admin/create_mess.php'</script>";
          exit();
        }
        else {
          echo"<script>alert('Deletion Failed, Try Again');window.location='../admin/create_mess.php'</script>";
          exit();
        }
      
       
      }
      else {
        echo"<script>alert('Mess enetered doesn't exist');window.location='../admin/create_mess.php'</script>";
        exit();
      }

      
  
  }

}

