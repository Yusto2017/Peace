<?php
session_start();
//connect to database

$db = mysqli_connect("localhost", "root", "", "peace" );
if (isset($_Post['register_btn'])){
	session_start();
	$Username=msql_real_escape_string($_Post['Username']);
	$PhoneNumber=msql_real_escape_string($_Post['Phone Number']);
	$Region=msql_real_escape_string($_Post['Region']);
	$Password=msql_real_escape_string($_Post['Password']);
	$cPassword=msql_real_escape_string($_Post['cPassword']);
	
	if ($password==$cpassword){
		
		//create user
	}
	else{
		//failed
		
	}
	
}



?>



<!Doctype html>
<html>
<head>
<title>Login Page</title>

<link rel="stylesheet" href="css/#">
</head>
<body>
<form method="post" action="Signup.php">

<table>

<tr>

<td>Username</td>
<td><input type="text" name="Username" class="user"></td>
</tr>

<tr>
<td>Phone Number</td>
<td><input type="number_format" name="Phone Number"></td>

</tr>

<tr>
<td>Region</td>
<td><input type="text" name="Region"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password"></td>

</tr>

<tr>
<td>C Password</td>
<td><input type="password" name="cpassword"></td>

</tr>

<td><input type="submit" name="register_btn" value="Register"></td>


</table>


</form>


</body>


</html>