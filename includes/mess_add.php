<?php
session_start();
if (isset($_POST['mess_add_submit'])) {

  require 'config.inc.php';

  $type = $_POST['type'];
  $mess_name = $_POST['mess_name'];
  $Size = $_POST['Size'];
  $Vacancy  = $_POST['Size'];
  $description= $_POST['description'];;

 

    $sql = "SELECT Mess_name FROM Mess WHERE Mess_name=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      echo"<script>window.location='../admin/create_mess.php'</script>";
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mess_name);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        echo"<script>window.location='../admin/create_mess.php'</script>";
        exit();
      }
      else {

            $zz = 0;
            $sql = "INSERT INTO Mess ( Mess_name , Mess_type, Vacancy , Size, description) VALUES ('$mess_name','$type', $Vacancy, $Size,'$description')";
          $result = mysqli_query($conn, $sql);
          if($result){
            echo"<script>window.location='../admin/create_mess.php'</script>";
          }
          else {
            echo"<script>alert('Error Occured, Try Again.');window.location='../admin/create_mess.php'</script>";
          }
        


      }
    }

    mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  echo"<script>alert(' ');window.location='../admin/create_mess.php'</script>";
  //header("Location: ../admin/create_hm.php");
  exit();
}
