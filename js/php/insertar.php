<!DOCTYPE html>
<html>


			<body>
				
	


			<?php
			include "conectar.php";
			$material=filter_input(INPUT_POST, 'material');
			$nombreimagen=$_FILES['imagen']['name'];
			$archivo=$_FILES['imagen']['tmp_name'];
			$ruta="../imagenesInventario";

			//echo $material;
			//echo $archivo;
			//echo $nombreimagen;

			$ruta=$ruta."/".$nombreimagen;
			move_uploaded_file($archivo, $ruta); //sudo chmod -R 777 ./personal_imag


			if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
			}
			else{
			$sql = "INSERT INTO material (material, foto_Ubicacion)
			values ('$material', '$ruta')";
			if ($conn->query($sql)){
			echo "Material introducido correctamente";
			echo "<br>";  
			echo "<br>";  
			}
			else{
			echo "Error: ". $sql ."
			". $conn->error;
			}
			echo "<br>";  
			echo "Nuevo resgistro tiene una id: " . mysqli_insert_id($conn);


			$conn->close();

			}



			?>
</body>
</html>




