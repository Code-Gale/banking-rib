<html>
</head>
	<meta charset="utf-8">
	<title>Online Banking|welcome</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
<h1>Online Banking</h1>
<?php

//include "connection.php";


?>
<form action="login-2.php" method="get" class="loginform">
	<label class="SL">SL Bank</label><br>
	<label class="AfterSL">Log in to Online Banking</label>
	<p>Customer User Name:</p><br>
	<input type="text" placeholder="username"  name="username" value="" required="required"><br>
	<p>Password:</p><br>
	<input type="pasword" placeholder="pasword"  name="pasword" value="" required="required"><br>
	<a href="index-2.php">Non existing customer..?</a><br>
	<button type="submit" name="log" class="btn">Login</button><br>
	
</form>
<?php

include "login.php";

$conn->close();
?>

</body>
</html>
		