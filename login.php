
<?php

if(isset($_POST['txtName']))
{
	$con = mysqli_connect('localhost','root','','db_login');
}

$txtName = $_POST['txtName'];
$txtPassword = $_POST['txtPassword'];

$sql = "INSERT INTO 'tbl_login' ('fldName','fldPassword') VALUES ('$txtName','$txtPassword')";

$rs = mysql_query($con, $sql);

if($rs){
	echo "Data Entered Successfully";
}
else{
	echo "Unsuccessful"
}

?>