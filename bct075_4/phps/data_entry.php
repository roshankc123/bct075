<?php
//error_reporting(0);
  echo '
    <html>
	<head>
	<style>
	  form input{
		  padding:10px;
		  margin-top:10px;
		  font-size:20px;
	  }
	</style>
	</head>
	<body>
	  <form action="" method="POST" style="padding:20px;">
	     <input placeholder="roll" name="roll" ></input>
	     <input placeholder="name" name="username"></input>
	     <input placeholder="password" name="password"></input>   
	     <input placeholder="address" name="address"></input>   
	     <input placeholder="email" name="email"></input>
         <input placeholder="photo link" name="id"></input>  
         <input type="submit" value="enter"></input>		 
	  </form>
	</body>
	</html>   ';
	$db_0=mysqli_connect("remotemysql.com","rFkNnFRKmV","vsn8jOgB89","rFkNnFRKmV");
	if(!$db_0) echo mysqli_connect_error();
    $u_roll=$_POST['roll'];
	$u_name=$_POST['username'];
	$u_password=$_POST['password'];
	$u_address=$_POST['address'];
	$u_email=$_POST['email'];
    $u_photo=$_POST['id'];
	if($u_roll==NULL || $u_name==NULL || $u_password==NULL || $u_address==NULL || $u_email==NULL){
		echo "please enter everything";
	}
	else{
		$i=0;
		$u_enc_name=NULL;
		$u_enc_password=NULL;
		$u_enc_name_1=NULL;
		$u_enc_password_1=NULL;
		$u_enc_name_fin=NULL;
		while(isset($u_name[$i])){
			$u_enc_name.=ord($u_name[$i]);
			$i=$i+1;
		} 
		$i=0;
		while(isset($u_password[$i])){
			$u_enc_password.=ord($u_password[$i]);
			$i=$i+1;
		}  
		$i=0;
		while(isset($u_enc_name[$i]) && isset($u_enc_password[$i])){
			$u_enc_name_fin.=$u_enc_name[$i].$u_enc_password[$i];
			$i=$i+5;
		}
		$input_first=mysqli_query($db_0,"INSERT INTO `first` VALUES (NULL,'".$u_roll."','".$u_enc_name_fin."','".$u_password."');"); 
		if(!$input_first)echo mysqli_error($db_0);
		$input_second=mysqli_query($db_0,"insert into second values (NULL,'".$u_enc_name_fin."','".$u_name."','".$u_password."','".$u_address."','".$u_email."','12','".$u_photo."','".$u_roll."')");
		if(!$input_second)echo mysqli_error($db_0);
		//echo $u_enc_password.":".$u_enc_name.":done";
		//echo  $u_enc_name_fin;
    }
?>
