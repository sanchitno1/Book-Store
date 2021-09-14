<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	$con = mysqli_connect("localhost","root","","books");
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  die();
	  }
	
	$r1=mysqli_query($con, "select * from contact1 where email='".$_REQUEST['email']."'");
	if($xy=mysqli_fetch_array($r1))
	{
		echo "please enter unique email id";
	
	?>
	<script>
		alert("enter unique id");
		location.href="contactus.html";
		</script>
	
	<?php
	}
	else{
	
		$r = mysqli_query($con, "INSERT INTO contact1 (`name`,`email`, `message`) VALUES ('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['message']."')");
		if(!$r){
			echo("Error description: " . mysqli_error($con));
		}else{
			echo "Thank You for contact with us we will response to you as soon as possible";
		}
		exit;
	}
	?>
</body>
</html>