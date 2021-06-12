<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Basic Banking System Website">
	<meta name="keywords" content="Banking system,HTML, CSS, JavaScript">
	<meta name="author" content="Harshad Lukare">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link rel="icon" type="image/jpg" href="TSFIMG.png" ></link>
</head>
<style>

.container {
  position: relative;
  width: 100%;

}

.container img {
  width: 100%;
  height: auto;
}

.container p{
	position: absolute;
	top: 5%;
	left: 50%;
	transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	color: yellow;
	font-size:50px;
}
.container h3{
	position: absolute;
	top: 55%;
	left: 50%;
	transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	font-size:50px;
	color: yellow;
}

.container .btn {
  position: absolute;
  top: 80%;
  left: 40%;
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
  top: 80%;
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
<body>
	<div class="container">
		<img src="bg.jpg" alt="The spark foundation" >
		
		<p> By - Harshad Janardan Lukare </p>
		<form name="myform" target="_blank" >
			<h3>Basic Banking System</h3>
			
			<center><button class="btn" name="button1" formaction="Second_Page.php">View All Customer</button>
			<button class="btn1" name="button2" formaction="Transfer_Page.php">Transaction History</button></center>
		</form>
	</div>
</body>


<?php include 'connection.php' ?>



</html>