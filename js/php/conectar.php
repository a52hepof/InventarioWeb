<?php
	

		$servername = "localhost"; // work
		$username = "materi15_324adm";
		$password = "324CordobA";
		$dbname = "materi15_material324";

		// create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// check connection
		if ($conn) {
			echo "conexion establecida";
			echo "<br>";  
			echo "<br>";  
		}
		else{
			die("Connection failed: " . mysqli_connect_error());
		
		}


	
?>
