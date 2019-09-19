<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['cat']))
		{
			$msg[]="Please full fill all requirement";
		}
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			$id = $_POST['cat'];
		
			$query= "INSERT INTO category (cat_nm) VALUES ('$id')";
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:category.php");
	
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	