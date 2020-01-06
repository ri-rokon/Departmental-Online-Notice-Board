<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
		<script src="conditional.js"></script>	
<script src="js/bootstrap.min.js"></script>
<style>

img {
	
    max-width: 100%;
    height: 55%;
}
</style>
	</head>
	<body style="background-color:PAPAYAWHIP;">
<nav class="navbar navbar-default navbar-fixed-top" style="background:LIGHTSTEELBLUE" >
<div class="container">
  
  <ul class="nav navbar-nav navbar-left" >
    <li style="background-color: PALEGREEN"><a href="index.php" style="border: 2px solid DARKGRAY"><span class="glyphicon glyphicon-send"></span> <strong><font color="MidnightBlue">Departmental Notice Board :: CSE </font></strong></a></li>
    <li style="background-color: LINEN"><a href="" style="border: 2px solid DARKGRAY"><b> <b><font color="MidnightBlue">Faculty Member</font></b></b></a></li>
    <li style="background-color: LINEN"><a href="" style="border: 2px solid DARKGRAY"> <b><font color="MidnightBlue">Important Links</font></b></a></li>
	<li style="background-color: LINEN"><a href="" style="border: 2px solid DARKGRAY"><b> <b><font color="MidnightBlue">Site map</font></b></b></a></li>
	<li style="background-color: AQUAMARINE"><a href="index.php?option=about" style="border: 2px solid DARKGRAY"> <b><font color="MidnightBlue">About</font></b></a></li>
	<li style="background-color: LIGHTSALMON"><a href="" style="border: 2px solid DARKGRAY"><b> <b><font color="MidnightBlue">FAQ</font></b></b></a></li>
  </ul>


   <ul class="nav navbar-nav navbar-right"> 
      <li>
	  
	  <ul class="nav navbar-nav navbar-right">
           <li class="dropdown" style="background-color: LIGHTBLUE">
      	       <a href="#" data-toggle="dropdown" class="dropdown-toggle"  style="border: 2px solid DARKGRAY" ><b><font color="MidnightBlue">Sign Up</font> </b><b class="caret"></b></a>
      	          <ul class="dropdown-menu">
                    <li style="background-color: LightGoldenrodYellow"><a href="index.php?option=New_user">Teacher Account</a></li>
                    <li style="background-color: PapayaWhip"><a href="index.php?option=New_user1">Student Account</a></li>
					<li style="background-color: Khaki"><a href="index.php?option=New_user2">Staff Account</a></li>
                       
                  </ul>
           </li>
           <li style="background-color: LIGHTBLUE"><a href="index.php?option=login" style="border: 2px solid DARKGRAY" ><span class="glyphicon glyphicon-log-in" ></span><b> <font color="MidnightBlue">Login</font></b></a></li>
     </ul>
	  
	  </li>
    </ul>



</div>
</nav>	

<img src="images/b.jpg" style="border:1px solid FloralWhite ;" width="3000" height="">



<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			else if($opt=="New_user1")
			{
			include('registration1.php');
			}
			else if($opt=="New_user2")
			{
			include('registration2.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo " <div class='col-sm-6'><h4>Dept. of Computer Science & Engineering (CSE)</h4> </div>
		<h5><font color='Black'>Computer engineering is a discipline that integrates several 
fields of electrical engineering and computer science requ-
ired to develop computer hardware and software.Computer engineers 
are involved in many hardware software aspects of computing, 
from the design of individual microprocessors, personal computers, 
and supercomputers,to circuit design.</font> </h5>";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-4" >
			<div class="panel panel-default">
  <div class="panel-heading" style="background:PAPAYAWHIP"><b><center><font color="black">Latest news</font></center></b></div>
  <div class="panel-body" style="background:PAPAYAWHIP"> <font color="black">
Due to the upgrade and maintenance process, Our online notice board may not work properly at the moment. </font>

  </div>
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:LIGHTSTEELBLUE">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-default">
    <li style="background:LIGHTSTEELBLUE"><a href="#"> <font color="Black">----------------------------------------------------------------------------------Computer Science and Engineering (CSE)--------------------------------------------------------------------------------</font></a></div></li>
      
	</ul>




</div>
</nav>
<!-- footer-->
