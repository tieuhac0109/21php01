<?php 
	$arr = array('Nam', 'Quoc', 'Tuan');
	//echo "<pre>";
	//var_dump($arr);
	foreach ($arr as $key => $value) {
		echo $key.' - '.$value;
		echo "<br>";
	}

	$arr2 = array('nam1' => 'Nam', 'quoc1' => 'Quoc', 'tuan1' => 'Tuan');
	foreach ($arr2 as $key => $value) {
		echo $key.' - '.$value;
		echo "<br>";
	}
	unset($arr2['quoc']);
	foreach ($arr2 as $key => $value) {
		echo $key.' - '.$value;
		echo "<br>";
	}
	echo "<br>";
	
	$arr3 = array(
		'nam' => array('age' => '22', 'name' => 'Nam', 'phone' => '0905111111'),
		'quoc' => array('age' => '33', 'name' => 'Quoc', 'phone' => '0905222222'),
		'tuan' => array('age' => '25', 'name' => 'Tuan', 'phone' => '0905333333'),
	);
	foreach ($arr3 as $key => $value) {
		foreach ($value as $key1 => $value1) {
			echo $key1.' - '.$value1;
			echo "<br>";
		}
	}
	//Đổi tuổi Quốc
	$arr3['quoc']['age'] = '55';
	function writeInfo($array) {
		foreach ($array as $key => $value) {
			foreach ($value as $key1 => $value1) {
				echo $key1.' - '.$value1;
				echo "<br>";
			}
		}
	}
	writeInfo($arr3);
	//Đổi số điện thoại Tuấn
	$arr3['tuan']['phone'] = '0999999999';
	writeInfo($arr3);
 ?>