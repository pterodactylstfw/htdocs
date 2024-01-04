<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root','db_contact');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];


// database insert SQL code
$sql = "INSERT INTO `tbl_comanda` (`ID`, `Nume`, `E-Mail`, `Numar`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone' )";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>