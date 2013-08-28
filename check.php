<?php
    
    $con=mysqli_connect('localhost','root','','sticky');
	
	if(mysqli_connect_errno($con))
	echo "fail";
	else {
		//echo "ok";
		$user=$_GET["username"];
		$pass=$_GET["pass"];
		
		$q=mysqli_query($con,"select * from users where username='".$user."' and password='".$pass."' ");
		
		//echo count($q);

		while($ar=mysqli_fetch_row($q))
		{
			
			setcookie("user",$ar[0],time()*24*3600);
		 //echo $_COOKIE['user'];
		 header("Location:home.php");
		}
	}
?>