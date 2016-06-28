<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Forma de pago</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/login.css"  />
<script>
window.onload = function(){
	var envia = document.getElementById("continuar");
	envia.onclick = function(){
		location.href = "verifica.php";
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
	<article>
    	<div class="pasos"><p>1.- Iniciar sesión > 2.- Datos de envío > <span class="rojo">3.- Forma de pago</span> > 4.- Revisar</p></div>
        <div id="lo-titulo"><h1>Indica la forma de pago</h1></div>
        <div id="lo-forma">
            <form id="lo-login" action="verifica.php">
              <table width="100%" border="0" cellspacing="10">
                <tr>
                  <td width="51%" class="der">Tarjeta de crédito 1:</td>
                  <td width="49%"><input type="radio" name="radio" id="tarjeta1" value="tarjeta1"></td>
                </tr>
                <tr>
                  <td class="der">Tarjeta de crédito 2:</td>
                  <td><input type="radio" name="radio" id="tarjeta2" value="tarjeta2"></td>
                </tr>
                <tr>
                  <td class="der">Tarjeta de crédito 3:</td>
                  <td><input type="radio" name="radio" id="tarjeta3" value="tarjeta3"></td>
                </tr>
                <tr>
                  <td class="der">Pay pal:</td>
                  <td><input type="radio" name="radio" id="paypal" value="paypal"></td>
                </tr>
                <tr>
                  <td class="der">Efectivo:</td>
                  <td><input type="radio" name="radio" id="efectivo" value="efectivo"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="continuar" id="continuar" value="Continuar &gt;&gt;"></td>
                </tr>
              </table>
              </form>
        </div>
        <div id="lo-aviso"><p></p>
        <p>Lee nuestro 
        <a href="aviso.php"  class="enalceRojo"> Aviso de Privacidad</a></div>
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
