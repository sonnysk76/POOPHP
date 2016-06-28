<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Equipo de trabajo</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/aviso.css"  />
<link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.10.1.custom.min.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.1.custom.min.js"></script>
<script>
$(function(){
	$("#tabs").tabs();
})
</script>
<?php
	include("php/conn.php");
	//
	$empleados = array();
	$q = "SELECT * FROM empleados";
	$r = mysqli_query($link, $q);
	while($obj = mysqli_fetch_object($r)){
		array_push($empleados, $obj);
	}
	function tablaEmpleado($depto){
		global $empleados;
		for($i=0; $i<count($empleados); $i++){
			if($empleados[$i]->departamento==$depto){
				print "<tr><td>Nombre:</td><td>".$empleados[$i]->nombre.", ".$empleados[$i]->apellidos."</td></tr>";
				print "<tr><td>Puesto:</td><td>".$empleados[$i]->puesto."</td></tr>";
				print "<tr><td>Departamento:</td><td>".$empleados[$i]->departamento."</td></tr>";
				print "<tr><td>Descripción:</td><td>".$empleados[$i]->descripcion."</td></tr>";
				print "<tr><td>Extensión:</td><td>".$empleados[$i]->extension."</td></tr>";
				print "<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
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
	<div id="co-caja">
    <div id="co-titulo"><h1>Equipo de trabajo</h1></div>
    <div id="av-texto">
    
    <div id="tabs">
	<ul>
		<li><a href="#admon">Administración</a></li>
		<li><a href="#sistemas">Sistemas</a></li>
		<li><a href="#ventas">Ventas</a></li>
	</ul>
	<div id="admon">
    	<table>
		<?php
			tablaEmpleado("Administracion");
		?>
        </table>
	</div>
	<div id="sistemas">
    <table>
		<?php
			tablaEmpleado("Sistemas");
		?>
        </table>
	</div>
	<div id="ventas">
    <table>
		<?php
			tablaEmpleado("Ventas");
		?>
        </table>
		
   	</div>
</div>

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
