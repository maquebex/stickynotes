
<!Doctype html>
<?php session_start();?>
<html>
	<?php
	if(!isset($_SESSION['views']))
	    $_SESSION['views']=-1;
	else {
		$_SESSION['views']++;
	}
  if(!isset($_COOKIE["user"]))
   $_COOKIE['user']="guest";
   //setcookie("user","guest",time()*3600);
 
 ?>
	<head>
		<link rel="stylesheet" href="css/style.css"/>
		<script src="js/jquery-1.10.2.min.js"></script>
	</head>
	<body>
		<nav>
			<a href="#2">About</a>
			<a href="#2">Contact</a>
			<a href="#2">Work</a>
		</nav>
		
		<?php if(isset($_COOKIE["user"]))echo "welcome ". $_COOKIE['user']."views".$_SESSION["views"];?>
		<div id="floater"></div>
		<section id="logo"><a href="Home.php"><img src="img/PC/stickylogo.png"></a></section>
		<section><p>Make your post ITs.Be a <span id="#st" href="#2">STICK</span>ler for productivity.</p></section>
		 <aside><div id="signInLogo">
		 	<a href="#x">Sign In</a>
		 	<form name="usersignin" method="get" action="check.php">
		 		Username<input type="text" name="username" required="required" autofocus />
		 		Password<input type="password" name="pass" />
		 		<input type="submit" value="sign in" />
		 	</form>
		 	</div>
		 	<div id="signUpLogo"><a href="#2">Sign Up</a>
		 	<form name="usersignup" method="get" action="insert.php">
		 		Username<input type="text" name="username" required="required" autofocus />
		 		Password<input type="password" name="pass" />
		 		<input type="submit" value="sign up" />
		 	</form>
		 	</div>
		 	</aside>
		 
		 	<script>
		 		$(document).ready(function(){
		 			$("#signInLogo").click(function(){
		 				$("form[name='usersignin']").css("visibility","visible");
		 			});
		 			$("#signUpLogo").click(function(){
		 				$("form[name='usersignup']").css("visibility","visible");
		 			});
		 		});
		 	</script>
	<!--<footer><ul><li>Text1</li><li>Text2</li><li>Text3</li></ul><ul><li>Text4</li><li>Text5</li><li>Text6</li></ul></footer>-->
	</body>
</html>