<?php
  //session manager///
  session_start();
  $id=$_SESSION['session'];
  ////////////////////
  //import from sql///
   $db_0=mysqli_connect("remotemysql.com","rFkNnFRKmV","vsn8jOgB89","rFkNnFRKmV");
  if(!$db_0)echo mysqli_connect_error();
  $db_1=mysqli_query($db_0,"select * from second where session='".$id."';");
  $data_sql=mysqli_fetch_assoc($db_1);
  $_SESSION['u_name']=$data_sql['u_name'];
  header("location: ../home.php");
  //echo Time();
?>
