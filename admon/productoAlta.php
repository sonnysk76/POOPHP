<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Producto Alta</title>
<?php
include("../php/conn.php");
//Iniciamos variables
$mensaje= array("","","","","");
$sku="";
$descripcion = "";
$precio = "";
$stock = "";
$caducidad = "";
//Insert
if(isset($_POST["bandera"])){
	//Variables
	$sku = $_POST["sku"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];
	$stock = $_POST["stock"];
	$depto = $_POST["depto"];
	$producto = $_POST["producto"];
	$bandera = false;
	//Verificamos que no se vacio
	if($sku==""){
		$mensaje[0]="El campo de SKU es requerido";
		$bandera = true;
	}
	//Validar que no se duplique
	$q = "SELECT * FROM productos WHERE numero='".$sku."'";
	$r = mysqli_query($link, $q);
	$n = mysqli_num_rows($r);
	if($n>0){
		$mensaje[0] = "Esta clave ya existe, no se puede duplicar";
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
	//Copiamos el archivo de imagen
	if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		$foto = $sku.".jpg";
		copy($_FILES['foto']['tmp_name'], "../img/productos/$foto");
	}
	//Insertamos
	if($bandera==false){
		$f = $df[2]."-".$df[1]."-".$df[0];
		$q = "INSERT INTO productos SET ";
		$q.= "numero='".$sku."', ";	
		$q.= "descripcion='".$descripcion."', ";
		$q.= "depto=".$depto.", ";
		$q.= "precio=".$precio.", ";
		$q.= "producto='".$producto."', ";
		$q.= "stock=".$stock." ";
		//print $q;	
		if(mysqli_query($link, $q)){
			print "Producto actualizado exitosamente";
		} else {
			print "Error en la actualización";
		}
	}
}
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
<h2>Alta de producto</h2>
<form action="productoAlta.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="alta" name="bandera"/>
<table>
	<tr>
    	<td>* SKU</td>
        <td><input type="text" name="sku" id="sku" value="<?php print $sku; ?>"/></td>
        <td class="error"><?php print $mensaje[0]; ?></td>
    </tr>
    <tr>
    	<td>Producto:</td>
        <td><input type="text" name="producto" 
        id="producto"/></td>
        <td>&nbsp;</td>
    </tr>
	<tr>
    	<td>Descripción</td>
        <td><textarea name="descripcion" id="descripcion" rows="5"><?php print $descripcion; ?></textarea></td>
        <td><?php print $mensaje[1]; ?></td>
    </tr>
    <tr>
    	<td>Departamento</td>
        <td>
        <select name="depto">
        	<option value="0">== Selecciona un departamento ==</option>
        	<?php
				while($depto = mysqli_fetch_object($deptos)){
					print "<option value='".$depto->id."'>";
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
    	<td>Imagen</td>
        <td><input type="file" name="foto" id="foto"/></td>
        <td><?php print $mensaje[5]; ?></td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
        <td><input type="submit" name="enviar" id="enviar" value="Enviar"/></td>
    </tr>
</table>
</form>
</body>
</html>