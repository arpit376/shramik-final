<html>
<body>
<?php

$con = mysqli_connect("localhost","arpit","arpit");
if(!$con)
{
	die('Could not connect'.mysql_error());
}
mysqli_select_db($con,"shramik");
if($con->connect_error)
{
	die("Connection failed:" . $con->connect_error);
}
echo "Connected Successfully";
$sql = "INSERT INTO `donee` (`name`, `phone_number`, `address`, `city`, `dependents`, `daily_income`, `id_proof`, `account_number`, `ifsc`)
VALUES
('$_POST[name]','$_POST[phone_number]','$_POST[address]', '$_POST[city]', '$_POST[dependents]','$_POST[daily_income]','$_POST[id_proof]','$_POST[account_number]','$_POST[ifsc]')";
if($con->query($sql)===TRUE)
{
	echo "New record inserted";
}
else {
echo "Error".$sql."<br>".$con->error;
}

mysqli_close($con);
?></body>
</html>

