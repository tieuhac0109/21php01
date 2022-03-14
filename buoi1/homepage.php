<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
		<h1>My website</h1>
		<img src="" alt="Image">
		<p>This is my website</p>
		<?php 
			$title = "Đây là website tin tức";
			echo $title;
			// Comment trong php
			/* Comment trong php */
			$x = 5;
			$y = 10;
			echo "<br/>";
			echo $x + $y;
			$user_name = "dangkey";
			$userName = "danghieu";
			function sumary() {
				$z = 11111111;
				echo "Test function $z";
			}
			echo "<br/>";
			sumary();

			function total($x = 7, $y = 44) {
				echo $x + $y;
			}
			echo "<br/>";
			total(5, 19);
			echo "<br/>";
			total();

		 ?>
</body>
</html>