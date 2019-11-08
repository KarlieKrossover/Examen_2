<?php
  include "../conexion.php";
  $sql = "select * from testimoniales";
  $rs = ejecutar($sql);
?>

<script>
  var testimoniales = new Array();
</script>

<?php
  	while($datos = mysqli_fetch_array($rs)){
		echo "<script language='javascript'";
		echo "testimoniales.push({testimonio:'".$datos["testimonio"]."', nombre:'".$datos["nombre"]."', puesto:'".$datos["puesto"]."', id:'".$datos["idTestimoniales"]"'})";
		echo "</script";
	}
?>