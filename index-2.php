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
<form action="login.php" method="get" class="loginform">
	<label class="SL">SL Bank</label><br>
	<label class="AfterSL">Non existing customer</label>

	<p>Name in full:</p><br>
	<input type="name" placeholder="name"  name="name" value=""><br>
	<p>NIC:</p><br>
	<input type="text" placeholder="nic"  name="nic" value=""><br>
	<p>Email Addres:</p><br>
	<input type="email" placeholder="email"  name="email" value=""><br>
	<p>User Name:</p><br>
	<input type="text" placeholder="username"  name="username" value=""><br>
	<p>Contact Number(personal):</p><br>
	<input type="text" placeholder="contact number "  name="contact_number" value=""><br>
	<p>Password:</p><br>
	<input type="pasword" placeholder="pasword"  name="pasword" value=""><br>

	<a href="#">frogot pasword</a><br>
	<button type="submit" name="log" class="btn">Login</button>
</form>
<?php

include "notregister.php";

$conn->close();
?>

</body>
</html>