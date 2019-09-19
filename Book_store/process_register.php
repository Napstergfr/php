<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		    $fnm=$_POST['fnm'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
			$gender=$_POST['gender'];
			$email=$_POST['mail'];
			$contact=$_POST['contact'];
			$city=$_POST['city'];
			
			
			
			$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city)
			values('$fnm','$unm','$pwd','$gender','$email','$contact','$city')";
			
			mysqli_query($conn, $query) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
	}
?>