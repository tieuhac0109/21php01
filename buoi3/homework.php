<?php 

	//Câu 1
	$arr = array(
		'hieu' => array('name' => 'Đặng Văn Hiếu', 'birthday' => '01/09/1992', 'email' => 'dangvanhieu0109@gmail.com'),
		'bao'=> array('name' => 'Nguyễn Hoàng Duy Bảo', 'birthday' => '03/05/1998', 'email' => 'duybao@gmail.com'),
		'son' => array('name' => 'Trịnh Ngọc Sơn', 'birthday' => '11/02/1999', 'email' => 'sonle1122@gmail.com'),
		'trang' => array('name' => 'Nguyễn Thị Thu Trang', 'birthday' => '23/11/1998', 'email' => 'trangnaukhesanh@gmail.com'),
		'thanh' => array('name' => 'Nguyễn Thị Hoài Thanh', 'birthday' => '15/03/1998', 'email' => 'thanhhhoaii@gmail.com'),
	);
	echo "<br>";

	//Câu 2
	function writeInfo($array) {
		foreach ($array as $key => $value) {
			foreach ($value as $key1 => $value1) {
				echo $key1.' - '.$value1;
				echo "<br>";
			}
		}
	}
	writeInfo($arr);
	echo "<br>";

	//Câu 3
	$arr['bao']['name'] = 'Nguyễn Văn Tuấn';
	writeInfo($arr);
	echo "<br>";

	//Câu 4
	unset($arr['son']);
	writeInfo($arr);
	echo "<br>";

	//Câu 5
	$arr5 = array(
		array('Đặng Văn Hiếu', '01/09/1992', 'dangvanhieu0109@gmail.com'),
		array('Nguyễn Hoàng Duy Bảo', '03/05/1998', 'duybao@gmail.com'),
		array('Trịnh Ngọc Sơn', '11/02/1999', 'sonle1122@gmail.com'),
		array('Nguyễn Thị Thu Trang', '23/11/1998', 'trangnaukhesanh@gmail.com'),
		array('Nguyễn Thị Hoài Thanh', '15/03/1998', 'thanhhhoaii@gmail.com'),
	);
	echo "<br>";

	for ($i=0; $i < 5; $i++) { 
		if (strpos($arr5[$i][2], "n") != 0) {
			foreach ($arr5[$i] as $arrP) {
 				echo $arrP;
			}
		echo "<br>";

		}
	}
?>