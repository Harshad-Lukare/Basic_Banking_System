<?php

include 'connection.php';

	if(isset($_REQUEST['submit']))
	{
		$Amt=$_GET['amt'];
		$Sender_name=$_GET['Sender'];
		$Sender_Amt=$_GET['Sender_amount'];
		$Receiver_name=$_REQUEST['rbutt'];
		
		$sql3= "SELECT `Email`,`Current Balance` FROM `customer` WHERE `Customer Name` = '$Receiver_name' ";
		
		$q=mysqli_query($dbvar,$sql3);
		
		$Receiver_Amt_arr=mysqli_fetch_array($q);
		
		$Receiver_Amt=$Receiver_Amt_arr[1];
		
		
		$insertsql= "INSERT INTO `transfer`(`Sender_Name`, `Receiver_Name`, `Transfer_Amount`) VALUES ('$Sender_name','$Receiver_name','$Amt')" ;
		
		if(mysqli_query($dbvar,$insertsql))
		{
			echo "Transfer Table updated";
		}
		
		$newamt1=$Amt+$Receiver_Amt;
		$newamt2=$Sender_Amt-$Amt;
		
		$sql1 = "UPDATE `customer` SET `Current Balance`='$newamt1' WHERE `Customer Name`= '$Receiver_name'";
			
		$sql2 = "UPDATE `customer` SET `Current Balance`='$newamt2' WHERE `Customer Name`= '$Sender_name'";

		if(mysqli_query($dbvar, $sql1))
		{
			echo "<br>"."Receiver Data Updated ";
		}
		else
		{
			echo "<br>"."Receiver Data not updated";
		}
		if(mysqli_query($dbvar, $sql2))
		{
			echo "<br>"."Sender Data Updated ";
		}
		else
		{
			echo "<br>"."Sender Data not updated";
		}
		
		if(mysqli_query($dbvar, $sql1) && mysqli_query($dbvar, $sql2) )
		{
			?>
			<script>
				alert("Transaction is Successful");
			</script>
			<?php
		}
		else
		{
			header("location:Fourth_Page.php");
			?>
			<script>
				alert("Transaction is NOT Successful");
			</script>
			<?php
			
		}
		
	}							
?>




<html>
	<head>
		<title>Last Page</title>
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
			
			.container .btn {
			  position: absolute;
			  top: 90%;
			  left: 45%;
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

			.container .btn1 {
			  position: absolute;
			  top: 90%;
			  left: 60%;
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

			.container .btn1:hover {
			  background-color: black;
			  color: white;
			}
		</style>
		
	</head>
<body>
	<form name="myform"  method="get" >
	<h2 align="center">Cutomer Details with updated Balance </h2>
		<table>
		<tr>
			<th>Customer Name</th>
			<th>Email</th>
			<th>Current Balance</th>
		</tr>
		<?php

			
			
			$display= "select * from customer";

			
			$query=mysqli_query($dbvar,$display);


			while($res=mysqli_fetch_array($query))
			{
				?>
				<tr>
					<td><?php echo $res[0] ?></td>
					<td><?php echo $res[1] ?></td>
					<td><?php echo $res[2] ?></td>
				</tr>
			
				<?php			
			}
		    ?>
	</table>
	<div class="container">
	<br><br>
		<Center><button class="btn" name="button1" formaction="Home_Page.php" target="_self">Home</button>
		<button class="btn1" name="button2" formaction="Transfer_Page.php" target="_blank">Transfer History</button></center>
	</div>
	</form>
</body>
</html>