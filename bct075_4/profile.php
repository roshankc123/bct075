<?php
session_start();
$u_session=$_SESSION['session'];
$u_name=$_SESSION['u_name'];
$db_0=mysqli_connect("remotemysql.com","rFkNnFRKmV","vsn8jOgB89","rFkNnFRKmV");
$sql_sec=mysqli_query($db_0,"select * from second where session='".$_SESSION['session']."';");
$sql_fetch_sec=mysqli_fetch_assoc($sql_sec);
if($u_name!=$sql_fetch_sec['u_name']){header("Location: ../");}
else{
  $u_photo=$sql_fetch_sec['id'];
}
echo '
<html>
    <title>My Profile</title>

    <head>                     
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <link rel="stylesheet" type="text/css" href="style/style_homepage.css">
                    <link rel="stylesheet" type="text/css" href="style/onhover_profile.css">
                    <link rel="stylesheet" type="text/css" href="style/style_onmob.css">
                    <link rel="stylesheet" type="text/css" href="style/myprofile.css">
                    <link rel="stylesheet" type="text/css" href="style/qa_box.css">
                    <link rel="stylesheet" type="text/css" href="style/activities_box.css">
                    <link rel="stylesheet" type="text/css" href="style/messages.css">
                    <link rel="stylesheet" type="text/css" href="style/style_profile.css">
                    <link rel="stylesheet" type="text/css" href="style/style_profile_onmob.css">
                    <script type="text/javascript" src="script/homepage.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  	
     </head>
    <body>
                   
    <meta http-equiv="refresh" content="25">
         <link rel="stylesheet" type="text/css" href="myprofile.css">
</head>
<body style="background-color: rgb(241, 237, 232)"></body> 
<div id="main">  
            <div id="form_1" onmouseover="text_move()">
                    <u id="u_all"><a href="home.php">BCT-075</a></u>
                    <div class="profile_display"><h5>'.$u_name.'</h5>
                          <div  class="profile_display_btm">
                              <h4>Points</h4>
                            <div id="profile_border"></div> 
                              <h4>My Profile</h4>
                             
                          </div>
                    </div>
                    <span class="hello">
                        <h3 class="activities">
                            <i class="fa fa-bell"></i>
                            Activities
                            <div class="activities_box"></div>
                        </h3>
                        <h3 class="messages">
                             <i class="fa fa-envelope"></i>
                              Messages<div class="message_box"><a href="#messages_box"></a>/div>
                            
                        </h3>
                        <h3 class="QA">
                              Q/A
                              <div class="qa_box"></div>
                         </h3>
                     </span>
                     <div class="log">
                        <h2 class="glyphicon glyphicon-cog"></h2>
                        <div class="log-drop">
                                    <hr>
                                    <h4>Settings</h4>
                                    <hr>
                                    <h4>Network</h4>
                                    <hr>
                                    <h4><a href="phps/logout.php">Logout</a></h4>
                        </div>
                 </div>
             </div>
                 
    <div id="Profile">
        <div id="intro">
             <img id="img_1" src="'.$u_photo.'" alt="image may contain a person with nose , eyes etc"/>
             <div id="bio">
             <p id="demo">
                 <h3>Name:</h3> '.$u_name.'<br>
                 <h3>address:</h3> '.$sql_fetch_sec['u_address'].'<br>
                 <h3>roll:</h3> PAS075BCT0'.$sql_fetch_sec['u_roll'].'<br>
             </p>
             </div>
             </div>
        <div class="mid" >
                <div id="points">
                    <h4>okok</h4>
                    <h4>You are in Golden Stage.</h4>
                </div>
                <div id="recent">helloworld</div>
                <div id="p_buttom">helloworld</div>
        </div>
        
    </div>
    <div id="footer">copyright @wrc_bct_075</div>
</div>      
</body>
</html>';

?>
