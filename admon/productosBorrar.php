<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Productos Baja</title>
<?php
include("../php/conn.php");
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		if(isset($_GET["m"])){
			$m=$_GET["m"];
			if($m==1){
				$q = "DELETE FROM productos WHERE id=".$id;
				if(mysqli_query($link, $q)){
					?>
                    <script>
                    	alert("El archivo se borró exitosamente");
						window.open("productos.php","_self");
                    </script>
                    <?php
				} else {
					print "ERROR al borrar";
				}
			}
		} else {
			$q = "SELECT * FROM productos WHERE id=".$id;
			$r = mysqli_query($link, $q);
			$obj = mysqli_fetch_object($r);
		}
	}
?>
</head>

<body>
<h2>Borrar registro</h2>
<p>¿Seguro que desea borrar el producto ' 
<?php print $obj->descripcion; ?>'?</p>
<a href="productosBorrar.php?id=<?php print $id; ?>&m=1">Si</a>
&nbsp;
<a href="productos.php">No</a>
<p>Ciudado: El borrar datos es un proceso definitivo</p>
</body>
</html>