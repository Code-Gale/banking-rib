<?php
include "connection.php";

	$username = $_GET["username"];
	$pasword = $_GET["pasword"];
echo "$pasword";

if($pasword!="" && $username!="" ){
	$sql = "SELECT id,username,pasword FROM login WHERE username='$username' and pasword='$pasword'";
	$result=$conn->query($sql);

	while($row = $result->fetch_assoc())
	{
		header ("location: index.html");
	}
}


?>