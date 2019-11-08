<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Agregar</title>
</head>

<body>
  <?php
    // Agrega el código aqui
	if(isset($_POST ["testimonio"])){
		$id = $_POST["idTestimoniales"];
		$testimonio = $_POST["testimonio"];
		$nombre = $_POST["nombre"];
		$puesto = $_POST["puesto"];
		
		include "../conexion.php"
			if($accion == "agregar"){
				$sql = "insert into karlie_testimoniales(testimonio, nombre, puesto) values ('$testimonio', '$nombre', '$puesto')";
				$nada = ejecutar($sql);
			}
		ejecutar($sql);
		echo "<script language = 'javascript'>";
		echo "window.location.assign('testimoniales.php');";
		echo "</script"
	}else{
		echo "<script language = 'javascript'>";
		echo "window.location.assign('testimoniales.php');";
		echo "</script"
	}
  ?>  
  </body>
</html> 
