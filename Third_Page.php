<?php 

include 'connection.php';

$CustName=$_GET["Sender"];
$CustEmail=$_GET["Email"];
$CurrentBal=$_GET["Current_Balance"];

if($CustName!=null && $CustEmail!=null && $CurrentBal!=null )
{
	echo "<br>";
	
	?>
	<h2>Hello <?php echo $CustName ?> Ji, Please find below your Details :- </h2>
	<?php 
}
else
{
	header("location:Second_Page.php");
}


?>




<html>
	<head>
		<title>Third Page</title>
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
			  top: 60%;
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
	
	<form name="myform" action="Fourth_Page.php" method="GET" target="_blank">
	
	<input type="hidden" name="Sender" value=<?php echo $CustName  ?>   />
	<input type="hidden" name="Email" value=<?php echo $CustEmail  ?>   />
	<input type="hidden" name="Current_Balance" value=<?php echo $CurrentBal  ?>  />
	
	<table>
		<tr>
			<th>Customer Name</th>
			<th>Email</th>
			<th>Current Balance</th>
		</tr>
		
		<tr>
			<td><?php echo $CustName   ?></td>
			<td><?php  echo $CustEmail   ?></td>
			<td> <?php echo $CurrentBal   ?> </td>
		</tr>
		
	</table>
	<div class="container">


	<br></br>
	
		<h3 align="center">Please click on Transfer Money and select Customer to whom you want to transfer</h3>
		<Center><button class="btn" name="button1">Transfer Money</button></center>
	</form>
	</div>
</body>
</html>