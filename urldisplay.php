<?php
		

		require_once 'db_connection.php';
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> URL data Display</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	

		<!--All CSS-->	
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css"/>
	<link href="css/style.css" rel="stylesheet" />

</head>

<body>
	
		<div class="container">
					
					<div id="cart_div" >
						<h1 class="text-center" style="margin-bottom:10px;"> URL Data Detail</h1>

                 		<table class="table table-bordered ">
								
                    			<thead style="background-color:#003366; color:white;">
                        			<tr>
                            			<th>Sr #</th>
                           				<th>Title</th>
                             			<th>Description</th>
                           				<th>URL</th>
                            			<th>Action</th>
                        			</tr>
                    			</thead>
                    			<tbody>

                    				<?php

										$myQuery="select * from url_data ";
										$record=mysqli_query($myCon,$myQuery);

										while($row=mysqli_fetch_array($record))
											{	
												$myText='';											
												$myText='<tr>';
                           				 		$myText.='<td>'.$row['id'].'</td>';
                            					$myText.='<td>'.$row['title'].'</td>';
                            					$myText.='<td>'.$row['description'].'</td>';
                            					$myText.='<td>'.$row['url'].'</td>';
                            					$myText.='<td><a  style="background-color:#003333" class=" btn btn-primary " title="Edit" href="urlupdate.php?id='.$row['id'].'" ><span class="glyphicon glyphicon-pencil" ></span></a>&nbsp;';
                            					$myText.='<a style="background-color:#333333" class="btn btn-primary " title="Delete" href="urldel_process.php?id='.$row['id'].'"><span class="glyphicon glyphicon-trash"></span></a>';
                            					$myText.='</td>';
                        						$myText.='</tr>';
                        						echo $myText;
											}
											
										?>             
                        			
                   				</tbody>
                			</table>
					</div>
</div>




<!--Scripts-->

	<script src="Scripts/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>
	


</body>
</html>