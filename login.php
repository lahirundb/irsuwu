<?php

 require('dbconnect.php');

 if(isset($_POST['email']) && isset($_POST['pw'])){
 	$un=$_POST['email'];
 	$pw=$_POST['pw'];
 	 $q=mysql_query("select count(*) as cnt from login where uname='".$un."' and pword='".$pw."'");

 	 $r=mysql_fetch_assoc($q)["cnt"];

 	 if($r==1){
 	 	header("location:submission.html");
 	 }else{
 	 	header("location:login.html?err=true");
 	 }
 }