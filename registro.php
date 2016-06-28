<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/registro.css"  />
<?php
include("php/conn.php");
if(isset($_POST["bandera"])){
	$banderaError = false;
	$clave = $_POST["clave"];
	$clave2 = $_POST["clave2"];
	$empresa = $_POST["empresa"];
	$nombre = $_POST["nombre"];
	$apellidoPaterno = $_POST["apellidoPaterno"];
	$apellidoMaterno = $_POST["apellidoMaterno"];
	$fechaNacimiento = $_POST["fechaNacimiento"];
	$correo = $_POST["correo"];
	$correo2 = $_POST["correo"];
	$direccion = $_POST["direccion"];
	$entreCalles = $_POST["entreCalles"];
	$colonia = $_POST["colonia"];
	$ciudad = $_POST["ciudad"];
	$estado = $_POST["estado"];
	$codigoPostal = $_POST["codigoPostal"];
	$pais = $_POST["pais"];
	$telefono = $_POST["telefono"];
	$observaciones = $_POST["observaciones"];
	//Validacion
	if($correo!=$correo2){
		$banderaError = true;
	} else if($clave==$clave2){
		$banderaError = true;
	} else if($nombre=="" || $apellidoPaterno=="" || $fechaNacimiento==""){
		$banderaError = true;
	} else if($correo=="" || $correo2=="" || $clave=="" || $clave2==""){
		$banderaError = true;
	} else if($direccion =="" || $entreCalles=="" || $colonia==""){
		$banderaError = true;
	} else if($ciudad =="" || $estado=="" || $pais==""){
		$banderaError = true;
	} else if($codigoPostal =="" || $telefono==""){
		$banderaError = true;
	}
	if($banderaError==false){
		$q = "INSERT INTO usuarios SET ";
		$q.= "empresa='".$empresa."', ";
		$q.= "clave='".$clave."', ";
		$q.= "correo='".$correo."', ";
		$q.= "nombre='".$nombre."', ";
		$q.= "apellidoPaterno='".$apellidoPaterno."', ";
		$q.= "apellidoMaterno='".$apellidoMaterno."', ";
		$q.= "fechaNacimiento='".$fechaNacimiento."', ";
		$q.= "direccion='".$direccion."', ";
		$q.= "entreCalles='".$entreCalles."', ";
		$q.= "colonia='".$colonia."', ";
		$q.= "ciudad='".$ciudad."', ";
		$q.= "estado='".$estado."', ";
		$q.= "codigoPostal='".$codigoPostal."', ";
		$q.= "pais='".$pais."', ";
		$q.= "telefono='".$telefono."', ";
		$q.= "observaciones='".$observaciones."' ";
		if(mysqli_query($link, $q)){
			$mensaje = "Se registraron correctamente los datos";
		} else {
			$mensaje = "Error al registrar los datos";
		}
		
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
<!-------- 	CONTENT --------->
<article>
  <div id="ru-titulo"><h1>Registro:</h1>
  </div>
	<p>Favor de capturar los datos para continuar con su compra:</p>
	<p id="mensaje">&nbsp;</p>
    <form id="ru-formulario" method="post" action="registro.php">
    	<input type="hidden" name="bandera" value="1"/>
      <table width="100%" border="0">
        <tr>
          <td width="22%">Empresa:</td>
          <td width="2%">&nbsp;</td>
          <td width="36%"><input type="text" name="empresa" id="empresa" placeholder="Nombre de la empresa"/></td>
          <td width="15%">Dirección:</td>
          <td width="2%" class="rojo">*</td>
          <td width="23%"><input type="text" name="direccion" id="direccion" required placeholder="Escriba su dirección"/></td>
        </tr>
        <tr>
          <td>Nombre:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="nombre" id="nombre" required placeholder="Escriba su nombre"/></td>
          <td>Entre calles:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="entreCalles" id="entreCalles" required placeholder="Entre calles"/></td>
        </tr>
        <tr>
          <td>Apellido paterno:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="apellidoPaterno" id="apellidoPaterno" required placeholder="Apellido paterno"/></td>
          <td>Colonia:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="colonia" id="colonia" required placeholder="Colonia"/></td>
        </tr>
        <tr>
          <td>Apellido materno:</td>
          <td class="rojo">&nbsp;</td>
          <td><input type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="Apellido Materno"/></td>
          <td>Ciudad:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="ciudad" id="ciudad" required placeholder="Escriba su ciudad"/></td>
        </tr>
        <tr>
          <td>Fecha de nacimiento:</td>
          <td class="rojo">*</td>
          <td><input type="date" name="fecha" id="fecha" required placeholder="Fecha de nacimiento"/></td>
          <td>Estado:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="estado" id="estado" required placeholder="Escriba su estado"/></td>
        </tr>
        <tr>
          <td>Cuenta de correo</td>
          <td class="rojo">*</td>
          <td><input type="email" name="correo" id="correo" required placeholder="Escriba su mail"/></td>
          <td>Código Postal:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="codigoPostal" id="codigoPostal" required placeholder="Código Postal"/></td>
        </tr>
        <tr>
          <td>Confirma cuenta de correo:</td>
          <td class="rojo">*</td>
          <td><input type="email" name="correo2" id="correo2" required placeholder="Confirme su mail"/></td>
          <td>País:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="pais" id="pais" required placeholder="Escriba su país"/></td>
        </tr>
        <tr>
          <td>Contraseña:</td>
          <td class="rojo">*</td>
          <td><input type="password" name="clave" id="clave" required placeholder="Clave secreta"/></td>
          <td>Teléfono:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="telefono" id="telefono" required placeholder="Escriba su teléfono"/></td>
        </tr>
        <tr>
          <td>Confirma contraseña:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="clave2" id="clave2" required placeholder="Confirme su clave"/></td>
          <td>Observaciones:</td>
          <td class="rojo">&nbsp;</td>
          <td><input type="text" name="observaciones" id="observaciones" /></td>
        </tr>
        <tr>
          <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="6"><p><a href="aviso.php"> Aviso de Privacidad</a></p>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="registrate" id="registrate" value="Regístrate &gt;&gt;" /></td>
        </tr>
      </table>
  </form>
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
