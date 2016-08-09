<?php 
//This script retrieves all the records froom the users table

//connect to database.
/* use require to include the connectdb.php file which connect to the database */
include ('includes/connectdb.php');


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Manage Newsletters</h1>
	<a href="addnewsletter.php">Add Newsletter</a><br>
	<!-- Table header -->
	<table align="center" cellspacing="3" cellpadding="3"	width="75%">
		<tr>
			<td align="left"><b>ID</b></td>
			<td align="left"><b>Title</b></td>
			<td align="left"><b>Subtitle</b></td>
			<td align="left"><b>Teaser</b></td>
			<td align="left"><b>Miniteaser</b></td>
			<!--<td align="left"><b>Category</b></td>-->
			<td align="left"><b>Edit / </b><b>Delete</b></td>
				
		</tr>
		<?php
			$sql = "select id, title, subtitle, teaser, miniteaser from newsletter";
			$result = mysqli_query($dbc, $sql);
			if(mysqli_num_rows($result) > 0)
			{
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
				{

		?>
			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['title']?></td>
				<td><?php echo $row['subtitle']?></td>
				<td><?php echo $row['teaser']?></td>
				<td><?php echo $row['miniteaser']?></td>
				<td>
					<a href="http://localhost/newsletterdb/editnewsletter.php?id=<?php echo $row['id'] ?>">Edit</a>
					<a href="http://localhost/newsletterdb/deletenewsletter.php?id=<?php echo $row['id'] ?>">Delete</a>
				</td>


			</tr>
		<?php

			}
		}
		?>
	</table>
</body>
</html>