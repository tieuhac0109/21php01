<?php 
	//Kết nối MySQL mặc định ở locolhost
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$databaseName = 'myschool';
	$connect = new mysqli($server, $username, $password, $databaseName);

	//Check connection
	if ($connect->connect_error) {
		die("Connection failed: " . $connect->connect_error);
	} else {
		echo "Connect success!";
	}

	$id_delete = $_GET['id'];
	$sql = "DELETE FROM myschool WHERE id = $id_delete";
	$connect->query($sql);
	header('Location: list_student.php');

?>
