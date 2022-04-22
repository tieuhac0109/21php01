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
	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$avatar = $_FILES['avatar'];
		$avatar_name = $avatar['name'];
		move_uploaded_file($avatar['tmp_name'], 'uploads/'.$avatar['name']);
		if ($avatar_name == '') {
			$avatar_name = 'default.jpg';
		}
		$sqlQuery = "INSERT INTO myschool (name, avatar) VALUES ('$name', '$avatar_name')";
		$connect->query($sqlQuery);
	}
	//Chuyển trang trong PHP
	header('Location: list_student.php');
 ?>

<h1>Đăng ký sinh viên</h1>
<form action="#" method="POST" enctype="multipart/form-data">
	<p>
		Name: <input type="text" name="name">
	</p>
	<p>
		Avatar: <input type="file" name="avatar">
	</p>
	<p>
		<input type="submit" name="register" value="Register">
	</p>	
</form>
<a href="list_student.php">List Student</a>