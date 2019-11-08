<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Eliminar</title>
</head>

<body>
  <?php
    // agrega tu código aqui
	    if(isset($_REQUEST["id"])){
        include "../conexion.php";
        $id = $_REQUEST["id"]; 
        $sql = "delete from karlie_testimoniales where idDirecorio=".$id;
        echo"<script language='javascript'>";
        echo"window.location.assign('index.php');";
        echo"</script>";
    }else{
        echo"<script language='javascript'>";
        echo"window.location.assign('index.php');";
        echo"</script>";
    }
  ?>
    
  </body>
</html> 