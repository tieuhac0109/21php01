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
	
		$sqlQuery = "SELECT * FROM myschool";
		$listStudent = $connect->query($sqlQuery);
?>

<style>
	table, tr, td {
		border-collapse: collapse;
		border: 1px solid black;
	}
</style>
<h1>Danh sách sinh viên</h1>
<table>
	<?php while ($row = $listStudent->fetch_assoc()) { ?>
	<tr>
		<td>
		<?php 
			$id = $row['id'];
			echo $row['id'];
		 ?>
		</td>
		<td>
		<?php 
			echo $row['name'];
		 ?>
		</td>
		<td>
		<?php 
			$avatar = $row['avatar'];
			echo "<img src='uploads/$avatar' height = 100 width = 95";
		 ?>
		</td>
		<td>
			<a href="delete_student.php?id=<?php echo $id; ?>">Xóa</a>
		</td>
		<td>
			<a href="edit_student.php?id=<?php echo $id; ?>">Chỉnh sửa</a>
		</td>		
	</tr>
	<?php } ?>
</table>
<a href="add_student.php">Add student</a>