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
$sql = "INSERT INTO donor(donor_name,phone,aadhar,district,email) VALUES ('$_POST[donor_name]','$_POST[phone]','$_POST[aadhar]', '$_POST[district]', '$_POST[email]')";
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
