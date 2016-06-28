<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pinturas Griegas</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/aviso.css"  />
<style>
#contenido{
	position:relative;
	width:600px;
	margin:0;
	background:#fff;
	margin:30px auto;	
}
#contenedorCarrusel{
	height:320px;
	margin:0;
	background:#ccc 0px 0px url(fondos/fondo6.jpg);
	border-radius:1em;
	box-shadow:10px 10px 5px #000;
}
#contendorTexto{
	margin: 0px 0px 0px 165px;
	width:435px;
	padding: 0px 0px 0px 20px;
}
#carrusel{
	margin: 0px auto;
	height:250px;
	width:500px;
}
#datos{
	display:none;	
}
#descripcion h2{
	font-family:Verdana, Geneva, sans-serif;
	font-size:24px;
	margin:20px 0px 5px 0px;
	color:#03C;
	text-align:center;
}
#descripcion p{
	font-family:Verdana, Geneva, sans-serif;
	font-size:18px;
	text-align:justify;
	color:blue;
}
</style>
<script src="js/jquery-1.6.min.js"></script>
<script src="js/jquery.roundabout.min.js"></script>
<script>
$(document).ready(function(){
	$("#datos .item").each(function(i) {
        $("#carrusel").append($(this).find(".foto").html());
    });
	crearCarrusel();
	despliegaTexto();
});
function crearCarrusel(){
	$("#carrusel").roundabout({
		//1) StartingChild
		startingChild: window.startingItem,
		//2) Selector
		childSelector: "img",
		//3) tilt
		tilt: -5,
		//4) Opacity
		minOpacity: 0.75,
		//5) escala
		minScale: 0.75,
		//6) Duraión
		duration: 1200,
		//7) Click focus
		clickToFocus:true,
		//8) Callback
		clickToFocusCallback: despliegaTexto
	});
}
function despliegaTexto(){
	var elemento = $("#carrusel").data("roundabout").childInFocus;
	var texto = $("#datos .item .texto:eq("+elemento+")").html();
	$("#descripcion").html(texto);
	
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
    <div id="co-titulo"><h1>Pinturas griegas</h1></div>
    <div id="av-texto">
    
    <div id="contenido">
	<div id="contenedorCarrusel">
    	<div id="carrusel"></div>
    </div>
    <div id="contenedorTexto">
    	<div id="descripcion"></div>
    </div>
    <!--Datos -->
    <div id="datos">
    	<div class="item">
        	<div class="foto">
            	<img src="img/productos/hercules.jpg" alt="Las sirenas" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>Heracles</h2>
                <p>Heracles o Hércules es un héroe de la mitología griega. Era considerado hijo de Zeus y Alcmena, una reina mortal, hijo adoptivo de Anfitrión y bisnieto de Perseo por la línea materna.</p>
            </div>
        </div>
        
        <div class="item">
        	<div class="foto">
            	<img src="img/productos/afrodita.jpg" alt="El nacimiento de afrodita" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>El nacimiento de afrodita</h2>
                <p>El nacimiento de Venus (en italiano: Nascita di Venere) es una pintura de Sandro Botticelli (1445 - 1510). El nacimiento de Venus representa una de las obras cumbres del maestro italiano. Está ejecutada al temple sobre lienzo y mide 278,5 centímetros de ancho por 172,5 cm de alto.</p>
            </div>
        </div>
        
        <div class="item">
        	<div class="foto">
            	<img src="img/productos/afrodita2.jpg" alt="El basilísco" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>La venus del espejo</h2>
                <p>La Venus del espejo es un cuadro de Velázquez (1599-1660), el pintor más destacado del Siglo de Oro español. Actualmente se encuentra en la National Gallery de Londres, donde se la exhibe como The Toilet of Venus o The Rokeby Venus. El sobrenombre «Rokeby» proviene de que durante todo el siglo XIX estuvo en el Rokeby Hall de Yorkshire.1 Anteriormente perteneció a la Casa de Alba y a Manuel Godoy, época en la que seguramente se conservaba en el Palacio de Buenavista (Madrid), de donde probablemente fue robada por algún miembro del ejército inglés.</p>
            </div>
        </div>
        
        <div class="item">
        	<div class="foto">
            	<img src="animales/centauro.jpg" alt="El centauro" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>El centauro</h2>
                <p>En la mitología griega, el centauro  es una criatura con la cabeza, los brazos y el torso de un humano y el cuerpo y las piernas de un caballo. Las versiones femeninas reciben el nombre de centáurides.</p>
            </div>
        </div>
        
        <div class="item">
        	<div class="foto">
            	<img src="animales/arpia.jpg" alt="La arpía" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>La arpía</h2>
                <p>Las Arpías eran inicialmente seres con apariencia de hermosas mujeres aladas, que, valiéndose de su capacidad de volar, robaban continuamente la comida de aquél antes de que pudiera tomarla.</p>
            </div>
        </div>
        
        <div class="item">
        	<div class="foto">
            	<img src="animales/hidra.gif" alt="La hidra" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>La hidra</h2>
                <p>La Hidra de Lerna era un antiguo y despiadado monstruo acuático ctónico con forma de serpiente policéfala y aliento venenoso a la que Hércules mató en el segundo de sus doce trabajos.</p>
            </div>
        </div>
        
        <div class="item">
        	<div class="foto">
            	<img src="animales/grifo.png" alt="El grifo" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>El grifo</h2>
                <p>El Grifo es una criatura cuya parte superior es la de un águila gigante, con plumas doradas, afilado pico y poderosas garras. La parte inferior es la de un león, con pelaje amarillo, musculosas patas y rabo.</p>
            </div>
        </div>
        
        <div class="item">
        	<div class="foto">
            	<img src="animales/quimera.jpg" alt="La quimera" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>La quimera</h2>
                <p>Quimera era un monstruo horrendo, hija de Tifón y de Equidna, que vagaba por las regiones de Asia Menor aterrorizando a las poblaciones y engullendo rebaños y animales.</p>
            </div>
        </div>
        
        <!--<div class="item">
        	<div class="foto">
            	<img src="animales/medusa.jpg" alt="La medusa" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>La medusa</h2>
                <p>Medusa era un monstruo ctónico femenino, que convertía en piedra a aquellos que la miraban. Fue decapitada por Perseo, quien después usó su cabeza como arma.</p>
            </div>
        </div>
        
        <div class="item">
        	<div class="foto">
            	<img src="animales/minotauro.jpg" alt="El minotauro" width="150px" height="100px"/>
            </div>
            <div class="texto">
            	<h2>El minotauro</h2>
                <p>El Minotauro, era un monstruo con cuerpo de hombre y cabeza de toro. Fue concebido de la unión entre Pasífae y un magnífico toro con motivo de una afrenta divina.</p>
            </div>
        </div>-->
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
