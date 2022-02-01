<!--<?php
if(!empty($_POST)){
$dbhost="localhost";
$dbuser="form_user";

$dhost="localhost";
$dbuser="form_user";
$dbpass="secretpassword";
$dbname="reg_form";
$connection=mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno()){
die ("Database connection failed: ".mysqli_connect_error().
"(".mysqli_connect_errno().")");
}
$sql="INSERT INTO information (name,city,gender,age,postal) VALUES (
'{$connection-> real_escape_string($_POST['name'])}',
'{$connection-> real_escape_string($_POST['city'])}',
'{$connection-> real_escape_string($_POST['gender'])}',
'{$connection-> real_escape_string($_POST['age'])}',
'{$connection-> real_escape_string($_POST['Postal'])}')";
$insert=$connection->query($sql);
if($insert == TRUE){
echo "<h1>Success! Thank you for your time! </h1>";
} else{
die("Error: {$connection->errno} : {$connection->error}");
}
$connection->close();


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Databases</title>
</head>
<body>
<h1 align="center">Sign up for the updates about our new project</h1>
<form method="post" action="">
<fieldset>
<legend>Registration Form </legend>
Name: <input type="text" name="name"><br>
City: <input type="text" name="city"><br>
Gender: <input type="text" name="gender"><br>
Age:<input type="text" name="age"><br>
Postal code:<input name="postal" type="text"><br><br>
<input type="submit" name="Submit"><br>
</fieldset>
</form>
</body>
</html>-->


<?php
	if(!empty($_POST)){
		$dbhost="localhost";
		$dbuser="form_user";
		$dbpass="secretpassword";
		$dbname="reg_form";
		$connection=mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno()){
		die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
	$sql="INSERT INTO information (name,city,gender,age,postal) VALUES (
	'{$connection-> real_escape_string($_POST['name'])}',
	'{$connection-> real_escape_string($_POST['city'])}',
	'{$connection-> real_escape_string($_POST['gender'])}',
	'{$connection-> real_escape_string($_POST['age'])}',
	'{$connection-> real_escape_string($_POST['postal'])}')";

	$insert=$connection->query($sql);
	if($insert == TRUE){
		echo "<h1>Success! Thank you for your time! </h1>";
	} else{
		die("Error: {$connection->errno} : {$connection->error}");
	}
	$connection->close();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Databases</title>
</head>
<body>
	<h1 align="center">Sign up for the updates about our new project</h1>
	<form method="post" action="">
	<fieldset>
		<legend>Registration Form </legend>
		Name: <input type="text" name="name"><br>
		City: <input type="text" name="city"><br>
		Gender: <input type="text" name="gender"><br>
		Age:<input type="text" name="age"><br>
		Postal code:<input name="postal" type="text"><br><br>
		<input type="submit" name="Submit"><br>
	</fieldset>
	</form>
</body>
</html>

