<?php 
error_reporting(0);
///////session manager////////
session_start();
////////session//////////////
$db_0=mysqli_connect("localhost","root","hellow0rl_d","bct075");
$sql_sec=mysqli_query($db_0,"select * from second where session='".$_SESSION['session']."';");
$sql_fetch_sec=mysqli_fetch_assoc($sql_sec);
if($_SESSION['u_name']!=$sql_fetch_sec['u_name'] || $_SESSION['session']==NULL){
	echo "some login problem";
	session_unset();
	session_destroy();
	header("location: index.html");
}
else{
$sql_friends=mysqli_query($db_0,"select u_name from second");
$sql_fetch_friends=mysqli_fetch_all($sql_friends);
//////////////declare//////////////////////
$_SESSION['u_address']=$sql_fetch_sec['u_address'];
$u_name=$sql_fetch_sec['u_name'];
$u_point=$sql_fetch_sec['u_point'];
///////////////declare finished////////////
 ///////////start echo//////////////////////////
echo ' 
<html>
<head>
					<title>PASBCT075</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/style_homepage.css">
	<link rel="stylesheet" type="text/css" href="style/onhover_profile.css">
	<link rel="stylesheet" type="text/css" href="style/style_onmob.css">
	<script type="text/javascript" src="script/homepage.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  	
</head>
<body>
   <div id="form_1" onmouseover="text_move()">
      <u id="u_all">BCT-075</u>
      <div class="profile_display"><h5>'.$u_name.'</h5>
			<div  class="profile_display_btm">
				<h4>Points</h4>
			  <div id="profile_border">'.$u_point.'</div> 
				<h4>My Profile</h4>
				<hr>
				<h4>Settings</h4>
				<hr>
				<h4>Network</h4>
				<hr>
				<h4>Logout</h4>
			</div>
      </div>
      <span class="hello">
	      <h3 class="activities">
		      <i class="fa fa-bell"></i>
			  Notifications
		  </h3>
		  <h3 class="messages">
			   <i class="fa fa-envelope"></i>
			   Messages
		  </h3>
		  <h3 class="QA">
				Q/A
		   </h3>
	   </span>
      
	  <div class="log">
             <h2 class="glyphicon glyphicon-cog"></h2>
             <div class="log-drop">
				<h6>a</h6>
				<hr>
				<h6>b</h6>
				<hr>
				<h6>c</h6>
				<hr>
				<h6>d</h6>
				<hr>
				<h6>e</h6>
			 </div>
      </div>
   </div>
  <span class="main">
        <div id="side" >
			<a href="#middle"><div class="cross_left"><h3>X</h3></div></a>
                <h4>hello don</h4><br>
				<i> Definition - What does Cybercrime mean?
				Cybercrime is defined as a crime in which a computer is the object of the crime 
				(hacking, phishing, spamming) or is used as a tool to commit an offense (child pornography, hate crimes).
				Cybercriminals may use computer technology to access personal information, business trade secrets or use the internet for exploitative or malicious purposes.
				Criminals can also use computers for communication and document or data storage.
				Criminals who perform these illegal activities are often referred to as hackers.
				</i>
        </div>
        <div id="middle">
				<p>I am in middle! 
				i i am a terrible developer who has no idea what the hell he is doing like this. 
				dont know why i am here like this
				</p>
        </div>
        <div id="sidebar">
			<a href="#middle"><div class="cross_right"><h3>X</h3></div></a>';
		     ////////////////friends////////////
			 $i=0;
			 while(isset($sql_fetch_friends[$i])){
				 echo "<a href=''><h2>".$sql_fetch_friends[$i][0]."</h2></a>";
				 $i++;
			 }
	echo	'</div>
  </span>
   <div id="footer">copyright @wrc_bct_075</div>
   <a id="round_left" href="#sidebar"><h2>C</h2></a>
   <a id="round_right" href="#side"><h2>M</h2></a>
</body>
</html> '; //end echo
}
?>