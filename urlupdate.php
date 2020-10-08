<?php
		
		require_once 'db_connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> URL Manager  </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	

		<!--All CSS-->	
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css"/>
	<link href="css/style.css" rel="stylesheet" />

</head>

<body>

<?php
 				

					if(isset($_GET['id'])){
                    $id=$_GET['id'];

 					$myQuery="select * from url_data where id='$id'";
					$record=mysqli_query($myCon,$myQuery);
					$row=mysqli_fetch_array($record);

				}
				

			?>


	<div class="container-fluid" align="center" style="margin-bottom: 20px">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
						<!--================Form============================-->
						<form action="urlupdate_process.php" method="POST" role="form">
							<h2 style="color:#000066">Update URL Data</h2>
							<hr>
							<div class="row">
								
									<div class="form-group">
										<input type="text" name="title" class="form-control input-lg" value="<?php echo $row['title'] ?>" required="">
									</div>
							
							
									<div class="form-group">
										<input type="text" name="url" class="form-control input-lg" value="<?php echo $row['url'] ?>" required="">
									</div>
							
								
					                 <div class="form-group">
								 <textarea type="text" rows="3" cols="4" name="description"  class="form-control input-lg" required=""><?php echo $row['description'] ?></textarea>
                                      </div>
						       
							
								<div ><input type="submit" value="Submit"  class="btn btn-block btn-lg"></div>
							
							</div>
						</form>
					</div>
				</div>
	</div>



</body>
</html>
