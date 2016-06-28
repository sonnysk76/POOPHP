<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Producto Modificar</title>
<?php
include("../php/conn.php");
//Iniciamos variables
$mensaje= array("","","","");
$sku="";
$descripcion = "";
$precio = "";
$stock = "";
//Insert
if(isset($_POST["bandera"])){
	//Variables
	$sku = $_POST["sku"];
	$id = $_POST["id"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];
	$stock = $_POST["stock"];
	$depto = $_POST["depto"];
	$bandera = false;
	//Verificamos que no se vacio
	if($sku==""){
		?><!--<script>alert("Error en sku");</script>--><?php
		$mensaje[0]="El campo de SKU es requerido";
		$bandera = true;
	}
	//Descripcion
	if($descripcion==""){
		$mensaje[1] = "La descripción es requerida";
		$bandera = true;
	}
	//Precio
	if($precio==""){
		$mensaje[2] = "El precio es requerido";
		$bandera = true;
	} else {
		//Convertimos a entero el campo
		$precio = (int) $precio;
		if($precio <= 0 || $precio > 100000){
			$mensaje[2] = "Precio fuera de rango";
			$bandera = true;	
		}
	}
	//stock
	if($stock==""){
		$mensaje[3] = "El stock es requerido";
		$bandera = true;
	} else {
		//Convertimos a entero el campo
		$stock = (int) $stock;
		if($stock <= 0 || $stock > 100){
			$mensaje[3] = "Stock fuera de rango";
			$bandera = true;	
		}
	}
	//Depto
	if($depto==0){
		$mensaje[4] = "El departamento es requerido";
		$bandera = true;
	}
	//Insertamos
	if($bandera==false){
		$q = "UPDATE productos SET ";
		$q.= "numero='".$sku."', ";	
		$q.= "descripcion='".$descripcion."', ";
		$q.= "depto=".$depto.", ";
		$q.= "precio=".$precio.", ";
		$q.= "stock=".$stock." ";
		$q.= "WHERE id=".$id;
		//print $q;	
		if(mysqli_query($link, $q)){
			?>
            <script>
				alert("los datos se modificaron exitosamente");
				window.open("productos.php","_self");
			</script>
            <?php
		} else {
			print $q;
		}
	}
}
//La primera vez que leemos los datos es con GET
if(isset($_GET["id"])){
	$id = $_GET["id"];
	//Leemos de la base de datos
	$q = "SELECT * FROM productos WHERE id=".$id;
	$r = mysqli_query($link, $q);
	$obj = mysqli_fetch_object($r);
	//Pasamos a las variables de trabajo
	$sku = $obj->numero;
	$descripcion = $obj->descripcion;
	$precio = $obj->precio;
	$stock = $obj->stock;
	$deptoNum = $obj->depto;
	
}//fin del GET[id]
//
//Lee catálogos
$q = "SELECT * FROM deptos ORDER BY depto";
$deptos = mysqli_query($link, $q);

?>
<style>
.error{
	color:red;
}
</style>
</head>

<body>
<h2>Modificar producto</h2>
<form action="productosModificar.php" method="post">
<input type="hidden" value="modifica" name="bandera"/>
<input type="hidden" value="<?php print $id; ?>" name="id"/>
<table>
	<tr>
    	<td>* SKU</td>
        <td><input type="text" name="sku" id="sku" value="<?php print $sku; ?>"/></td>
        <td class="error"><?php print $mensaje[0]; ?></td>
    </tr>
	<tr>
    	<td>Descripción</td>
        <td><input type="text" name="descripcion" id="descripcion" value="<?php print $descripcion; ?>"/></td>
        <td><?php print $mensaje[1]; ?></td>
    </tr>
    <tr>
    	<td>Departamento</td>
        <td>
        <select name="depto">
        	<option value="0">== Selecciona un departamento ==</option>
        	<?php
				while($depto = mysqli_fetch_object($deptos)){
					print "<option value='".$depto->id."' ";
					if($depto->id==$deptoNum){
						print "selected='selected'";
					}
					print ">";
					print $depto->depto;
					print "</option>";
				}
			?>
        </select>
        </td>
        <td><?php print $mensaje[4]; ?></td>
    </tr>
    <tr>
    	<td>Precio</td>
        <td><input type="text" name="precio" id="precio" value="<?php print $precio; ?>"/></td>
        <td><?php print $mensaje[2]; ?></td>
    </tr>
    <tr>
    	<td>Stock</td>
        <td><input type="text" name="stock" id="stock" value="<?php print $stock; ?>"/></td>
        <td><?php print $mensaje[3]; ?></td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
        <td><input type="submit" name="enviar" id="enviar" value="Enviar"/></td>
    </tr>
</table>
<a href="productos.php">Regresa</a>
</form>
</body>
</html>