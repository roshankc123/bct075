<?php
$i=0;
   $db_0=mysqli_connect("remotemysql.com","rFkNnFRKmV","vsn8jOgB89","rFkNnFRKmV");
   if(!$db_0) echo "our problem.sorry";
   //echo "<h5>".$_GET['message']." in ".$_GET['time']." user ".$_GET['user']."</h5>";
   if($_GET['message']!=NULL){
   $db_query=mysqli_query($db_0,"insert into messages values (NULL,'".$_GET['message']."','".$_GET['user']."','".$_GET['time']."')");
   if(!$db_query)echo mysqli_error($db_0);
      }
   $db_query_1=mysqli_query($db_0,"select * from messages");
   $fetch_res=mysqli_fetch_all($db_query_1);
   while(isset($fetch_res[$i][1])){
      $db_query_1=mysqli_query($db_0,"select u_name from second where session='".$fetch_res[$i][2]."';");
      if(!$db_query_1)echo mysqli_error($db_0);
      $query_res_1=mysqli_fetch_all($db_query_1);
      echo "<h5>".$query_res_1[0][0].":".$fetch_res[$i][1]."</h5>";
      $i++;
    }
?>