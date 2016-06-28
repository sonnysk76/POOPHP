<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contactanos</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/contacto.css"  />
<?php
	//Crear una variable
	$error = "";
	//Verifica el POST
	if(isset($_POST["envia"])){
		//Vacía los valores POST en variables
		$nombre=$_POST["nombre"];
		$apellidoPaterno=$_POST["apellidoPaterno"];
		$apellidoMaterno=$_POST["apellidoMaterno"];
		$email=$_POST["email"];
		$estado=$_POST["estado"];
		$codigo=$_POST["codigo"];
		$comentario=$_POST["comentario"];
		//Valida que algunas variables no estén vacías
		if($nombre==""){
			$error.="El nombre es un campo requerido<br>";
		}
		if($apellidoPaterno==""){
			$error.="El apellido paterno es un campo requerido<br>";
		}
		if($email==""){
			$error.="El mail es un campo requerido<br>";
		}
		if($comentario==""){
			$error.="El comentario es un campo requerido<br>";
		}
	}
?>
</head>

<body>
<header>
  <div class="encabezado">
		<div class="encabezado01">
        	<ul class="menu01" >
                <li><a href="callCenter.php">Call Center</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
		</div>
   		<div class="encabezado02">
			<div class="companias">
                <img class="imagen" src="img/compania01.png" width="183" height="30" alt="compañia 1" />
                <img class="imagen" src="img/compania02.png" width="72" height="30" alt="compañia 2" />
                <a href="ofertas.php" class="texto">OFERTAS ESPECIALES</a>
           	</div>  
            <div class="bolsa">
                <div class="titulo">Compras</div>
                <div class="imagen">
                	<div class="numero">0</div>
                    <div class="texto">Finalizar Compra</div>
               </div>
           	</div>
            <div class="telefonica"></div> 
    	</div>
	<div class="encabezado03">
    		<div class="Menu">
                <ul class="Menu" >
                    <li><a href="pintura.php">Pinturas</a></li>
                    <li><a href="pintura.php">Alfarería</a></li>
                    <li><a href="pintura.php">Esculturas</a></li>
                    <li><a href="pintura.php">Viajes a Grecia</a></li>
                </ul>
            </div>
            <div class="Search">
            	<div class="texto">Buscar...</div>
                <div class="Button"><a HREF="#"></a></div>
            </div>
   	  </div>
	</div>
</header>

<section>
<article>
	<div id="co-caja">
    <div id="co-titulo"><h1>Contáctanos</h1></div>
    <div id="co-texto"><p>Tus comentarios son muy importantes para nosotros. Selecciona el área a la que va dirigida.</p></div>
    <div class="rojo"><?php print "<p>".$error."</p>"; ?></div>
    <div id="co-forma">
    <form action="contacto.php" method="post" id="co-comentario">
      <table width="100%" border="0" cellspacing="10">
        <tr>
          <td class="der">Área que desea contactar:</td>
          <td><select name="area" id="area">
            <option value="No seleccionada">-No seleccionada-</option>
          </select></td>
        </tr>
        <tr>
          <td class="der">Nombre:</td>
          <td><input type="text" name="nombre" id="nombre" placeholder="Escriba su nombre"/></td>
        </tr>
        <tr>
          <td class="der">Apellido Paterno:</td>
          <td><input type="text" name="apellidoPaterno" id="apellidoPaterno" /></td>
        </tr>
        <tr>
          <td class="der">Apellido Materno:</td>
          <td><input type="text" name="apellidoMaterno" id="apellidoMaterno" /></td>
        </tr>
        <tr>
          <td class="der">Correo electrónico:</td>
          <td><input type="email" name="email" id="email" /></td>
        </tr>
        <tr>
          <td class="der">Estado:</td>
          <td><select name="estado" id="estado">
            <option>-No seleccionado-</option>
          </select></td>
        </tr>
        <tr>
          <td class="der">Código Postal:</td>
          <td><input type="text" pattern="^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$" name="codigo" id="codigo" /></td>
        </tr>
        <tr>
          <td class="der arriba">Comentario:</td>
          <td><textarea name="comentario" id="comentario" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="envia" id="envia" class="botonRojo" value="Envía Mensaje"/></td>
        </tr>
      </table>
      </form>
    </div>
  </div>
</article>
</section>
<!-------- FOOTER ------------>
<footer>
	<div class="pie">
        <div class="pie01">
            <div class="columna">
            	<div class="columnaTitulo">Siguenos</div>
                <ul class="Menu" >
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Foursquere</a></li>
                    <li><a href="#">Google+</a></li>
                </ul>
            </div>
            <div class="columna">
            	<div class="columnaTitulo">Quienes somos</div>
                <ul class="Menu" >
                    <li><a href="empresa.php">Nuestra Empresa</a></li>
                    <li><a href="equipo.php">Equipo de Trabajo</a></li>
                    <li><a href="socios.php">Paises Socios</a></li>
                    <li><a href="afiliadas.php">Empresas Afiliadas</a></li>
                    <li><a href="aviso.php">Política de Privacidad</a></li>
                </ul>
            </div>
            <div class="columna">
            	<div class="columnaTitulo">Servicios</div>
                <ul class="Menu" >
                    <li><a href="soporte.php">Soporte</a></li>
                    <li><a href="informacion.php">Información</a></li>
                    <li><a href="politicas.php">Politicas Devolución</a></li>
                    <li><a href="fqa.php">FQA</a></li>
                    <li><a href="contacto.php">Envíanos un mail</a></li>
                </ul>
            </div>
            <div class="columna">
            	<div class="columnaTitulo">Localizar</div>
                <ul class="Menu" >
                    <li><a href="tiendas.php">Localizar tiendas</a></li>
                    <li><a href="oficinas.php">Localizar oficinas</a></li>
                    <li><a href="callCenter.php">Localizar Call Center</a></li>
                </ul>
            </div>
             <div class="columna">
            	<img src="img/logo.png" width="153" height="52" alt="logo"  align="right"/> </div>
      		</div>
        <div class="pie02">
        </div>
	 </div>
</footer>
</body>
</html>
