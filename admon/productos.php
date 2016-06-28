<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Productos ABC</title>
<?php 
include("../php/conn.php");
//
$q = "SELECT p.id, p.numero, p.descripcion, p.precio, ";
$q.= "p.stock, d.depto ";
$q.= "FROM productos as p, deptos as d ";
$q.= "WHERE p.depto=d.id ";
$q.= "ORDER BY p.numero";
$r = mysqli_query($link, $q);
?>
</head>

<body>
<table border="1">
	<tr>
	<th>num</th>
    <th>SKU</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Stock</th>
    <th>Departamento</th>
    <th>Borrar</th>
    <th>Modificar</th>
    <th>Imagen</th>
	</tr>
    
    <?php
		while($obj = mysqli_fetch_object($r)){
			print "<tr>";
			print "<td align='center'>".$obj->id."</td>";
    		print "<td align='center'>".$obj->numero."</td>";
    		print "<td>".$obj->descripcion."</td>";
    		print "<td align='center'>".number_format($obj->precio,0)."</td>";
    		print "<td align='center'>".$obj->stock."</td>";
			print "<td align='center'>".$obj->depto."</td>";
			print "<td align='center'><a href='productosBorrar.php?id=".$obj->id."'>Borrar</a></td>";
			print "<td align='center'><a href='productosModificar.php?id=".$obj->id."'>Modificar</td>";
			print "<td align='center'><img src='../img/productos/".$obj->numero.".jpg' width='100'></td>";
			print "</tr>";
		}
	?>
</table>
<br>
<form action="productoAlta.php" method="post">
<input type="submit" value="Nuevo producto" name="nuevo"/>
</form>
</body>
</html>