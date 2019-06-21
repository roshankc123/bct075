<?php
    $u_name=$_POST['u_name'];
	$u_password=$_POST['u_passwd'];
	////////for encrypting username/////////////
	$i=0;
	$u_enc_name=NULL;
	$u_enc_name=NULL;
	$u_enc_password=NULL;
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
    ////////encrypted//////	
	$db_0=mysqli_connect("localhost","root","","bct075");
	if(!$db_0)echo mysqli_connect_errno();
	$query_for_id=mysqli_query($db_0,"select * from first where username='".$u_enc_name_fin."';");
	$data_sql=mysqli_fetch_assoc($query_for_id);
	if($u_password == $data_sql['passwording'] && $u_password!=NULL){
		session_start();
	    $_SESSION['session']=$data_sql['username'];
		/////////////////////////////////echo $_SESSION['session'];
		header("Location: after_login_2.php");
	}
	else{
		session_start();
		session_unset();
		session_destroy();
		echo "sorry";
	}		
	?>
