<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dirección de envío</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/registro.css"  />
<script>
window.onload = function(){
	var envia = document.getElementById("continuar");
	envia.onclick = function(){
		location.href = "pago.php";
	}
}
</script>
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
                	<div class="numero" style="font-size:10px">0</div>
                    <div class="texto" style="text-align:center"><a href="carrito.php?e=1">Checkout</a></div>
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
	<div class="pasos"><p>1.- Iniciar sesión > <span class="rojo">2.- Datos de envío</span> > 3.- Forma de pago > 4.- Revisar</p></div>
  <div id="ru-titulo"><h1>Datos de envío:</h1>
  </div>
	<p>Favor de capturar los datos de envío para continuar con su compra:</p>
	<p>&nbsp;</p>
    <form id="ru-formulario">
      <table width="100%" border="0">
        <tr>
          <td width="22%">Empresa:</td>
          <td width="2%">&nbsp;</td>
          <td width="36%"><input type="text" name="empresa" id="empresa" placeholder="Nombre de la empresa" value="<?php print $u->empresa; ?>"/></td>
          <td width="15%">Dirección:</td>
          <td width="2%" class="rojo">*</td>
          <td width="23%"><input type="text" name="direccion" id="direccion" required placeholder="Escriba su dirección" value="<?php print $u->direccion; ?>"/></td>
        </tr>
        <tr>
          <td>Nombre:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="nombre" id="nombre" required placeholder="Escriba su nombre" value="<?php print $u->nombre; ?>"/></td>
          <td>Entre calles:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="calles" id="calles" required placeholder="Entre calles" value="<?php print $u->entreCalles; ?>"/></td>
        </tr>
        <tr>
          <td>Apellido paterno:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="apellidoPaterno" id="apellidoPaterno" required placeholder="Apellido paterno" value="<?php print $u->apellidoPaterno; ?>"/></td>
          <td>Colonia:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="colonia" id="colonia" required placeholder="Colonia" value="<?php print $u->colonia; ?>"/></td>
        </tr>
        <tr>
          <td>Apellido materno:</td>
          <td class="rojo">&nbsp;</td>
          <td><input type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="Apellido Materno" value="<?php print $u->apellidoMaterno; ?>"/></td>
          <td>Ciudad:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="ciudad" id="ciudad" required placeholder="Escriba su ciudad" value="<?php print $u->ciudad; ?>"/></td>
        </tr>
        <tr>
          <td>Fecha de nacimiento:</td>
          <td class="rojo">*</td>
          <td><input type="date" name="fecha" id="fecha" required placeholder="Fecha de nacimiento"value="<?php print $u->fechaNacimiento; ?>"/></td>
          <td>Estado:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="estado" id="estado" required placeholder="Escriba su estado" value="<?php print $u->estado; ?>"/></td>
        </tr>
        <tr>
          <td>Cuenta de correo</td>
          <td class="rojo">*</td>
          <td><input type="email" name="mail" id="mail" required placeholder="Escriba su mail" value="<?php print $u->correo; ?>"/></td>
          <td>Código Postal:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="codigoPostal" id="codigoPostal" required placeholder="Código Postal" value="<?php print $u->codigoPostal; ?>"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>País:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="pais" id="pais" required placeholder="Escriba su país"  value="<?php print $u->pais; ?>"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Teléfono:</td>
          <td class="rojo">*</td>
          <td><input type="text" name="telefono" id="telefono" required placeholder="Escriba su teléfono"  value="<?php print $u->telefono; ?>"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Observaciones:</td>
          <td class="rojo">&nbsp;</td>
          <td><input type="text" name="observaciones" id="observaciones"  value="<?php print $u->observaciones; ?>"/></td>
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
          <td><input type="button" name="continuar" id="continuar" value="Continuar &gt;&gt;" /></td>
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
