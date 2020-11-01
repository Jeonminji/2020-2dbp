<?php
	$link = mysqli_connect("localhost", "admin", "admin", "");
	if(mysqli_connect_error($link)) {
		echo "MariaDB connection Failed!!", "<br>";
		echo "error: ", mysqli_connect_error();
	} else {
		echo "MariaDB connection Success!!";
	}
	mysqli_close($link);
?>
