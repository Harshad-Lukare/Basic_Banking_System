<html>
	<head>
		<title>Second Page</title>
		<link rel="icon" type="image/jpg" href="TSFIMG.png" ></link>
		
		
		<style>
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 80%;
			  margin-left:auto;
			  margin-right:auto;
			}

			td, th {
			  border: 1px solid #dddddd;
			  text-align: center;
			  padding: 8px;
			}

			tr:nth-child(even) {
			  background-color: #dddddd;
			}
			
			
		</style>
	</head>
<body>
	<form name="myform" action="get">
	<h2 align="center" >Customer Details </h2>
		<table>
		<tr>
			<th>Customer Name</th>
			<th>Email</th>
			<th>Current Balance</th>
			<th>Action</th>
		</tr>
		<?php

			include 'connection.php';

			$display= "select * from customer";

			$query=mysqli_query($dbvar,$display);



			while($res=mysqli_fetch_array($query))
			{
				?>
				<tr>
					<td><?php echo $res['Customer Name'] ?></td>
					<td><?php echo $res['Email'] ?></td>
					<td><?php echo $res['Current Balance'] ?></td>
					<td><?php echo '<a target="_blank" href="Third_Page.php?Sender='.$res[0].'&Email='.$res[1].'&Current_Balance='.$res[2].'">Select</a> ' ?> </td>
				</tr>
			
				<?php			
			}
		    ?>
	</table>
	<br><br>
	</form>
</body>
</html>




