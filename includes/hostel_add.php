<?php
session_start();
if (isset($_POST['hostel_add_submit'])) {

  require 'config.inc.php';

  $rooms = $_POST['hostel_room'];
  $hostel_name = $_POST['hostel_name'];


 

    $sql = "SELECT Hostel_name FROM hostel WHERE Hostel_name=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      echo"<script>window.location='../admin/create_hostel.php'</script>";
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $hostel_name);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        echo"<script>window.location='../admin/create_hostel.php'</script>";
        exit();
      }
      else {

            $zz = 0;
            $sql = "INSERT INTO hostel ( Hostel_name , current_no_of_rooms, No_of_rooms , No_of_students) VALUES ('$hostel_name', $rooms, $rooms, 0)";
          $result = mysqli_query($conn, $sql);
          if($result){
            echo"<script>window.location='../admin/create_hostel.php'</script>";
          }
          else {
            echo"<script>alert('Error Occured, Try Again.');window.location='../admin/create_hostel.php'</script>";
          }
        


      }
    }

    mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  echo"<script>alert(' ');window.location='../admin/create_hostel.php'</script>";
  //header("Location: ../admin/create_hm.php");
  exit();
}
