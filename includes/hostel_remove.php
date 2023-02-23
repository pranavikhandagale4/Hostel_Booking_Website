<?php
session_start();


if (isset($_POST['hostel_remove_submit'])) {

  require 'config.inc.php';

  $hostel_name = $_POST['hostel_name'];
  $Adminpassword = $_POST['pass'];

  if (empty($hostel_name) || empty($Adminpassword)) {
    echo"<script>alert('Input all fields');window.location='../admin/create_hostel.php'</script>";
    exit();
  }
    else {
    

      $sql2 = "SELECT *FROM Hostel WHERE Hostel_name = '$hostel_name'";
      $result2 = mysqli_query($conn, $sql2);
      if($row2 = mysqli_fetch_assoc($result2)){
        $HNO = $row2['Hostel_id'];
        $sql3 = "DELETE FROM Hostel WHERE Hostel_name = '$hostel_name'";
        $result3 = mysqli_query($conn, $sql3);
        if($result3){
            echo"<script>alert('Deletion Successful');window.location='../admin/create_hostel.php'</script>";
          exit();
        }
        else {
          echo"<script>alert('Deletion Failed, Try Again');window.location='../admin/create_hostel.php'</script>";
          exit();
        }
      
       
      }
      else {
        echo"<script>alert('Hostel enetered doesn't exist');window.location='../admin/create_hostel.php'</script>";
        exit();
      }

      
  
  }

}

