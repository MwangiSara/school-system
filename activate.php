<?php
session_start();
$error ="";
if(isset( $_SESSION['error'] )) 
$error= $_SESSION['error'];
  ?>
<?php

require_once 'connect.php';

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $query1 = "SELECT * from users where user_id=  '$id' ";
  $result = mysqli_query($con,$query1);
        if(mysqli_num_rows($result)<=0)
        {
       $_SESSION['error'] = 'ACCOUNT DOES NOT EXIST';
        session_write_close();
        redirect("index.php");
       //exit();
      }else {

         $query3 = "SELECT * from users where user_id='$id' and verification ='verified'";
        $result2 = mysqli_query($con,$query3);
        if(mysqli_num_rows($result2)>0)
        {
       $_SESSION['error'] = 'ACCOUNT IS ALREADY ACTIVE, LOGIN';
        session_write_close();
        redirect("index.php");
       //exit();
      }else {

            $query = "UPDATE users SET ";
            $query .="verification = 'verified' ";
            $query .="WHERE  user_id = '{$id}'";
            //echo $query;
            if ($con->query($query) === TRUE) {
             $_SESSION['error'] = 'ACCOUNT  VERIFIED, PLEASE LOGIN AND CHANGE PASSWORD';
            session_write_close();
            redirect("real/index.php");
           // exit();
            } else {
            echo "Error updating record: " . $con->error;
            }
           
}
}
}
?>
<?php
session_start();
$error ="";
if(isset( $_SESSION['error'] )) 
$error= $_SESSION['error'];
  ?>
<?php

require_once 'connect.php';

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $query3566 = "SELECT * from users where user_id=  '$id' ";
  $result243 = mysqli_query($con,$query3566);
        if(mysqli_num_rows($result243)<=0)
        {
       $_SESSION['error'] = 'ACCOUNT DOES NOT EXIST';
        session_write_close();
        redirect("index.php");
       //exit();
      }else {

         $query3 = "SELECT * from users where user_id='$id' and verification ='verified'";
        $result2 = mysqli_query($con,$query3);
        if(mysqli_num_rows($result2)>0)
        {
       $_SESSION['error'] = 'ACCOUNT IS ALREADY ACTIVE, LOGIN';
        session_write_close();
        redirect("index.php");
       //exit();
      }else {

            $query = "UPDATE users SET ";
            $query .="verification = 'verified' ";
            $query .="WHERE  user_id = '{$id}'";
            //echo $query;
            if ($con->query($query) === TRUE) {
             $_SESSION['error'] = 'ACCOUNT  VERIFIED, PLEASE LOGIN AND CHANGE PASSWORD';
            session_write_close();
            redirect("real/index.php");
           // exit();
            } else {
            echo "Error updating record: " . $con->error;
            }
           
}
}
}
?>
