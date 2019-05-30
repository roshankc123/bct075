<?php
    $u_name=$_POST['u_name'];
	$u_passwd=$_POST['u_passwd'];
	$db_0=mysqli_connect("localhost","root","","bct075");
	if(!$db_0)echo mysqli_connect_errno();
	if($u_name=="roshan" && $u_passwd=="helloworld")
		echo "logged in";
	else
		echo "sorry";
?>