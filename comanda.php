<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
		$numar = $_POST['number'];
    }

	// database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_contact";

	$con = mysqli_connect($host, $username, $password, $dbname);

	if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

	$sql = "INSERT INTO tbl_comanda (ID, Prenume, Nume, Email, Numar_de_telefon) VALUES ('0', '$fname', '$lname', '$email', '$numar')";

	$rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Datele au fost transmise cu succes! Multumim!";
    }
  
	mysqli_close($con);

?>