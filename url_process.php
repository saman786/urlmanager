<?php
		

		require_once 'db_connection.php';


 		$title=$_POST['title'];
 	    $description=$_POST['description'];
 		$url=$_POST['url'];
 		

 		$myQuery="INSERT INTO url_data(title,description,url) VALUES('$title','$description','$url')";
		$record=mysqli_query($myCon,$myQuery);

		if($record){
			header('location:urldisplay.php');
		}else{
			header('location:urldata.php');
		}



?>