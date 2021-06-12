<?php

$username="root";
$password="";
$server="localhost";
$db="basic banking system";

$dbvar=mysqli_connect($server,$username,$password,$db);

if($dbvar)
{
	?>
	<script>
	alert("Connection is done");
	</script>
	<?php
}
else
{
	?>
	<script>
	alert("Not connected to database");
	</script>
	<?php
}

?>