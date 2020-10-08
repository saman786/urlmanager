<?php

		
		require_once 'db_connection.php';

		
		if(isset($_GET['id'])){
 			$id=$_GET['id'];
 			$title=$_POST["title"];
            $description=$_POST["description"];
            $url=$_POST["url"];

	     $myQuery="UPDATE url_data set title='$title', description='$description', url='$url' where id='$id'";
			echo $record=mysqli_query($myCon,$myQuery);

			
		}

   header("location:urldisplay.php");
?>