<?php

		
		require_once 'db_connection.php';

		
		if(isset($_GET['id'])){

 			$id=$_GET['id'];


 			$myQuery="DELETE FROM url_data where id='".$id."'";
			$record=mysqli_query($myCon,$myQuery);

			
		}

    header("location:urldisplay.php");
?>