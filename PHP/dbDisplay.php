<html lang="en">
	<head>
		<title>Display Users - Student Advising Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<style>
			table, th, td {
				background-color: lightgrey;
				border: 1px solid black !important;
				font-family: 'Lato', sans-serif !important;
				padding-left:5px!important;
			}
			
			h3 {
				color: white
			}
			
			html, body { 
				height: 100%;
			}
			
			.header {
				background-color: #00563f;
			}
			
			@media screen and (max-height: 450px) {
				.sidenav {padding-top: 15px;}
				.sidenav a {font-size: 18px;}
			}
		</style>
	</head>
    <body>
        <?php

            require_once('dbConnect.php');
			$sql = "SELECT * FROM Student"; 
			$result = mysqli_query($con, $sql);
        ?>
		<div class ="header">
			<div class="row">
				<div class="col-lg-11">
					<div class="container-fluid bg-1 text-left">
						<br>
							<h3>CSc Advising Form Users</h3>
						<br>
					</div>		
				</div>
					<div class="col-lg-1" style="background-color:#00563f;">
				</div>
			</div>
		</div>
		
		<table style="width:100%">
            <tr>
				<th>SacStateID</th>
				<th>LastName</th>
				<th>MiddleInitial</th>
				<th>FirstName</th>
				<th>EmailAddress</th>
				<th>CellPhoneNumber</th>
				<th>CatalogYear</th>
				<th>PlannedGraduationDate</th>
            </tr>
            <?php
				if (mysqli_num_rows($result) > 0) {
				   //while ($row = mysql_fetch_array($query)) {
				   while($row = mysqli_fetch_assoc($result)) {
					   echo "<tr>";
					   echo "<td>".$row["SacStateID"]."</td>";
					   echo "<td>".$row["LastName"]."</td>";
					   echo "<td>".$row["MiddleInitial"]."</td>";
					   echo "<td>".$row["FirstName"]."</td>";
					   echo "<td>".$row["EmailAddress"]."</td>";
					   echo "<td>".$row["CellPhoneNumber"]."</td>";
					   echo "<td>".$row["CatalogYear"]."</td>";
					   echo "<td>".$row["PlannedGraduationDate"]."</td>";
					   echo "</tr>";
				   }
				} else {
					echo "0 results";
				}
				
				mysqli_close($conn);

            ?>
        </table>
    </body>
</html>