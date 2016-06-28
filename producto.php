<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Detalle producto</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/producto.css"  />
<script src="js/jquery.js"></script>
<script>
var t;
var f=1;
var bandera = false;
$(document).ready(function(){
	//1) Altura
	var h = $(".caja").height();
	//2) Hover
	$(".caja").hover(
	function(){
		//3) Animación de entrada
		$(this).children(".tooltip").animate({top:(h-50)+"px"},500);
	},
	function(){
		//4) Animación de salida
		$(this).children(".tooltip").animate({top:(h+1)+"px"},500);
	});	
});
</script>
<style>
.tooltip{
	position:absolute;
	width:200px;
	height:150px;
	background:rgba(0,0,0,0.5);
	left:0;
	top:216px;
	color:white;
	text-align:center;
	padding-top:5px;
}
.caja{
	display:block;
	margin:0px 15px 15px 0px;
	padding:0;
	width:200px;
	height:150px;
	/*float:left;*/
	position:relative;
	cursor:pointer;
	background:no-repeat 0px 0px;
	border: 1px solid black;
	overflow:hidden;
}
</style>
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
<div id="pd-content">
    <div id="pd-columnaIzq">
    	<div id="pd-migas">Home > Producto</div>
        <div id="pd-fotos"><img src="img/producto.png" width="100%" height="100%"></div>
        <div id="pd-marcas"><p>Núm producto: 77462519376</p><p>Precio: $9,999.00</p></div>   
        <div id="pd-descripcion"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
    </div>
    
    <div id="pd-columnaCen">
    	<div id="pd-encabezado"><h2>Atenea Partenos</h2><p>Original de Fidias, erigida en el siglo V a.C. en la Acrópolis de Atenas.</p></div>
        <div id="pd-producto"><h2>Descripción producto</h2><p>En la mitología griega, Atenea o Atena1 2 3 (del griego ático Ἀθήνη; transl., Athēnē o Ἀθηναίη, Athēnaiē), también conocida como Palas Atenea (Παλλὰς Ἀθήνη) es la diosa de la guerra, civilización, sabiduría, estrategia, de las artes, de la justicia y de la habilidad. Una de las principales divinidades del panteón griego y una de los doce dioses olímpicos, Atenea recibió culto en toda la Grecia Antigua y en toda su área de influencia, desde las colonias griegas de Asia Menor hasta las de la Península Ibérica y el norte de África. Su presencia es atestiguada hasta en las proximidades de la India. Por ello su culto tomó muchas formas e incluso tuvo una extensión considerable hasta el punto de que su figura fue sincretizada con otras divinidades en las regiones aledañas al Mediterráneo.</p></div>
    </div>
    
    <div id="pd-columnaDer">
    	<div id="pd-carrito">Tu carrito de compras</div>
        <div id="forma"><form><button>Comprar</button><button>Regresar</button></form></div>
        <div id="pd-accesorio1" class="pd-accesorio caja">
        <img src="img/productos/atenea.jpg" width="200" height="150">
        <div class="tooltip"><p>Atenea</p><p>Por Rubens</p></div>
        </div>
        <div id="pd-accesorio2" class="pd-accesorio caja"><img src="img/productos/afrodita.png" width="200" height="150">
        <div class="tooltip"><p>Afrodita</p><p>Por Botticeli</p></div>
        </div>
        <div id="pd-accesorio3" class="pd-accesorio caja"><img src="img/productos/hercules.jpg" width="200" height="150">
        <div class="tooltip"><p>Heracles</p><p>Por Rubens</p></div>
        </div>
        </div>
  	</div>
</div>
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
