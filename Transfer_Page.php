<html>
	<head>
		<title>Transaction History Page</title>
		<link rel="icon" type="image/jpg" href="TSFIMG.png" ></link>
		
		
		<style>
			.container {
				position: relative;
				width: 100%;
			}
			
			
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
			
			.container .btn {
			  position: relative;
			  top: 60%;
			  left: 0%;
			  transform: translate(-50%, -50%);
			  -ms-transform: translate(-50%, -50%);
			  background-color: #f1f1f1;
			  color: black;
			  font-size: 16px;
			  padding: 16px 30px;
			  border: none;
			  cursor: pointer;
			  border-radius: 5px;
			  text-align: center;
			}
			
			.container .btn:hover {
			  background-color: black;
			  color: white;
			}
		</style>
	</head>
<body>
	<form name="myform" action="get">
	<h2 align="center"> Transaction Details </h2>
	<div class="container">
		<table>
		<tr>
			<th>Transfer ID</th>
			<th>Sender Name</th>
			<th>Receiver name</th>
			<th>Transfer Amount</th>
		</tr>
		<?php

			include 'connection.php';

			$display= "select * from transfer";

			$query=mysqli_query($dbvar,$display);

			$nums=mysqli_num_rows($query);
			
			//echo $nums;
			if($nums==0)
			{
				?>
				<tr><td colspan="4"><?php echo "No transaction History Found";  ?></td></tr>
				
				<?php
			}
			else
			{
				while($res=mysqli_fetch_array($query))
				{
					?>
					<tr>
						<td><?php echo $res['Transfer_ID'] ?></td>
						<td><?php echo $res['Sender_Name'] ?></td>
						<td><?php echo $res['Receiver_Name'] ?></td>
						<td><?php echo $res['Transfer_Amount'] ?></td>
					</tr>
				
					<?php			
				}
			}
		    ?>
			
	</table>
	
	<br><br>
		<Center><button class="btn" name="button1" formaction="Home_Page.php">Home</button></center>
	</div>
	</form>
</body>
</html>


