<?php

include 'connection.php';

$CustName=$_GET["Sender"];
$CustEmail=$_GET["Email"];
$CurrentBal=$_GET["Current_Balance"];

?>


<html>
	<head>
		<title>Fourth Page</title>
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
			
			button{
			width:120px;
			height:60px;
			}
			
			
			
			
			.container .btn {
			  position: absolute;
			  top: 80%;
			  left: 50%;
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
	
	<form name="myform" action="Last_Page.php" method="GET">
	<h2 align="center"> Enter Amount and select the beneficiary  </h2>
	Enter Amount : <input type="text" name="amt" required></input><br>
	<input type="hidden" name="Sender" value=<?php echo $CustName  ?> >
	<input type="hidden" name="Sender_amount" value=<?php echo $CurrentBal  ?> >
	
	
	<br>
	<table>
		<tr>
			<th>Customer Name</th>
			<th>Email</th>
			<th>Current Balance</th>
			<th>Action</th>
		</tr>
		
		<tr>
		<?php  
		
			$query= 'select * from customer';
			
			$fetchtable=mysqli_query($dbvar,$query);
			while($result=mysqli_fetch_array($fetchtable))
			{
				if($result['Customer Name']!=$CustName && $result['Email']!=$CustEmail )
				{
				?>
			<td><?php echo $result['Customer Name']   ?></td>
			<td><?php  echo $result['Email']    ?></td>
			<td> <?php echo $result['Current Balance']   ?> </td>
			<td><?php echo '<input type="radio" name="rbutt" value='.$result[0].' required/>'  ?>   </td>
		</tr>
			<?php } } ?>

	</table>
		<div class="container">
		<br><br>
		<Center><button class="btn" name="submit">Pay Now</button></center>
	</form>
	</div>
</body>
</html>