<?php 
	$myString = "Hello this is my string!";
	echo strlen($myString);
	echo "<br>";
	echo str_word_count($myString);
	echo "<br>";
	echo strpos($myString, "o");
	echo "<br>";
	echo strpos($myString, "i");
	echo "<br>";
	echo str_replace("is", "are", $myString);
	echo "<br>";
	echo strrpos($myString, "i");
	echo "<br>";
 ?>



<?php 
	$myString1 = "Dang Van Hieu";
	echo strlen($myString1);
	echo "<br>";
	echo str_word_count($myString1);
	echo "<br>";
	echo substr_count(substr($myString1, strpos($myString1, "Hieu"), strlen("Hieu")), "n");
	echo "<br>";
	echo substr_count($myString1, "n");
	echo "<br>";
	echo strrpos($myString1, " ");
	echo "<br>";
	echo strtoupper(substr($myString1, strpos($myString1, " "), strrpos($myString1, " ") - strpos($myString1, " ")));
	echo "<br>";
	echo strlen("Hieu");
	echo "<br>";
	echo str_replace("Van", "VAN", $myString1);
	echo "<br>";
	echo strtoupper(substr($myString1, strpos($myString1, "Van"), strlen("Van")));
	echo "<br>";
	echo str_replace("Hieu", "21PHP01", $myString1);
 ?>