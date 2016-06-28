<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Indice</title>
<style>
#productoDetalle{
	display:none;
}
#productoDetalle img{
	float:left;
	margin-right:15px;
}
</style>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.10.1.custom.min.css" />
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui-1.10.1.custom.min.js"></script>
<script>
var productos = new Array("afrodita.png",
"arpia.jpg",
"basilisco.jpg",
"caballo.jpg",
"centauro.jpg",
"fenix.jpg",
"gea.jpg",
"grifo.png",
"hidra.gif",
"kraken.jpg",
"medusa.png",
"minotauro.jpg",
"pegaso.jpg",
"poseidon.jpg",
"quimera.jpg",
"satiro.jpg",
"unicornio.jpg"
);
var t="";
window.onload=function(){
	//Producto modal
	$("#productoDetalle").dialog({
		autoOpen: false,
		show:{effect:"blind", duration:1000},
		hide:{effect:"explode", duration:1000},
		width:"500px",
		modal:true
	});
	//
	$(".foto").click(function(){
		$("#productoDetalle").dialog("open");
	});
	//Cargar las imágenes en las divisiones
	$(".Brand").each(function(i,elemento){
		$(this).html("<img src='img/minis/"+productos[i]+"' width=50 height=50>");
	});
	//Crear un efecto hover
	$(".Brand").hover(function(){
		$(this).css("cursor","pointer");
		$(this).find("img").animate({height:"52", opacity:".5"},1000);
	},
	function(){
		$(this).find("img").animate({height:"50", opacity:"1"},1000);
	});
	//Cambiar la imagen en el banner
	$(".Brand").click(function(){
		t = $(this).find("img").attr("src");
		t = t.replace("img/minis/","");
		p = t.indexOf(".");
		t = t.substring(0,p);
		t = "img/banner/"+t+".jpg";
		//Desvanece la foto del banner y manda a cambiaFoto
		$("#banner").fadeOut(1000,cambiaFoto);
	});
}
function cambiaFoto(foto){
	$("#banner").attr("src",t);
	$("#banner").fadeIn(1000);
}
</script>
<?php
require_once("php/funciones.php");
require_once("clases/productos.php");
$productos_array = Productos::caratula();
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
                <a href="ofertas.php" class="texto">Ofertas especiales hoy <?php print $hoy; ?></a>
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
  <div class="contenido">
		<div class="contenido01">
        <img class="imagen" id="banner" src="img/banner/afrodita.jpg" width="960" height="300" />
        </div>
   	<div class="contenido02">
    	<div class="list_carousel">
				<ul id="foo0">
					<li><div class="Brand"><img src="img/brand01.png" width="60" height="60" alt="Brand" /></div></li>
					<li><div class="Brand"><img src="img/brand02.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand03.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand04.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand05.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand06.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand07.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand08.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand09.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand10.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand11.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand12.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand13.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand14.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand15.png" width="60" height="60" alt="Brand" /></div></li>
                    <li><div class="Brand"><img src="img/brand16.png" width="60" height="60" alt="Brand" /></div></li>
				</ul>
				<div class="clearfix"></div>
		</div>
    </div>
    <div class="clearout"></div>

   	<div class="contenido03">
    <?php
		for($i=0; $i<count($productos_array); $i++){
    		print '<div class="producto">';
       		print '<div class="foto"><img src="img/productos/'.$productos_array[$i]->numero.'.jpg" width="150" height="200" alt="'.$productos_array[$i]->producto.'" /></div>';
        	print '<div class="descripcionA"><a href="producto.php">'.$productos_array[$i]->producto.'</a></div>';
            print '<div class="descripcionB">'.$productos_array[$i]->depto.'</div>';
            print '<div class="precio">$'.number_format($productos_array[$i]->precio,2).'</div>';
            print '<div class="compra"><a href="carrito.php?p='.$productos_array[$i]->id.'">Comprar</a></div>';
        	print '</div>';
		}
	?>
    </div>
  </div>
</section>

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
<div id="productoDetalle" title="Atenea, Diosa de la sabiduría">

<p><img src="img/productos/atenea.jpg">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
</div>
</body>
</html>
