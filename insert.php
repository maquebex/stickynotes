<?php

$name=$_GET["username"];
$pass=$_GET["pass"];
$con=mysqli_connect("localhost","root","","sticky");

 if(mysqli_connect_errno($con))
  echo "error";
 else {
 	$str="insert into users values ('".$name."','".$pass."')";
 $res=mysqli_query($con,$str);
 if($res)
 echo "inserted";
 else {
     die("unable to enter stuff");
 }
 
     
 }
?>