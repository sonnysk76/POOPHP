<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Información de nuestros productos</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/aviso.css"  />
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.1.custom.min.js"></script>
<script>
var secciones_array = new Array({a:"Dioses", n:1},{a:"Diosas", n:2},{a:"Semidioses", n:3},{a:"Animales", n:4},{a:"Ciudades", n:5});
var dioses_array = new Array({a:"Zeus", n:1},{a:"Poseidón", n:1},{a:"Ares", n:1},{a:"Ades", n:1},{a:"Hermes", n:1});
var diosas_array = new Array({a:"Atenea", n:2},{a:"Afrodita", n:2},{a:"Caliope", n:2},{a:"Artemisa", n:2},{a:"Hera", n:2});
var semidioses_array = new Array({a:"Perseo", n:3},{a:"Heracles", n:3},{a:"Aquiles", n:3},{a:"Ajax", n:3},{a:"Teseo", n:3});
var animales_array = new Array({a:"Pegaso", n:4},{a:"Unicornio", n:4},{a:"Fénix", n:4},{a:"Hidra", n:4},{a:"Arpía", n:4});
var ciudades_array = new Array({a:"Atenas", n:5},{a:"Troya", n:5},{a:"Argos", n:5},{a:"Esparta", n:5},{a:"Maratón", n:5});
var todos_array = dioses_array.concat(diosas_array, semidioses_array, animales_array, ciudades_array);
$(document).ready(function(){
	var numSecciones = secciones_array.length;
	var sec = 0;
	$("#reiniciar").hide();
	$("#evaluar").show();
	$("#evaluar").click(evaluar);
	//
	for(var i=0; i<numSecciones; i++){
		//1) ajustamos la sección
		sec = i + 1;
		//2) Buscamos el número aleatorio
		r = Math.floor(Math.random()*secciones_array.length);
		//3) Desplegamos la palabra
		$("#t"+sec).html("<h3>"+secciones_array[r].a+"</h3>");
		//4) Almacenamos en data-sec
		$("#a"+sec).attr("data-sec", secciones_array[r].n);
		//5) Eliminamos el elemento del arreglo
		secciones_array.splice(r,1);	
	}
	
	//Desplegamos palabras
	numPalabras = todos_array.length;
	sec = 0;
	for(i=0; i<numPalabras; i++){
		sec++;
		if(sec>numSecciones) sec = 1;
		r = Math.floor(Math.random()*todos_array.length);
		$("#p"+sec).append("<div class='palabra' data-sec='"+todos_array[r].n+"'>"+todos_array[r].a+"</div>");
		todos_array.splice(r,1);	
	}
	
	//Hacemos a las palabras arrastrables
	$(".palabra").draggable({
		revert:"invalid",
		drag: function(){
			d = $(this);	
		}
	});
	
	$(".area").droppable({
		accept:".palabra",
		tolerance: "pointer",
		drop: function(){
			t = d.html();
			n = d.attr("data-sec");
			a = $(this).attr("data-sec");
			if(n==a){
				$(this).append("<div class='palabra' data-res='1'>"+t+"</div><br>");	
			} else {
				$(this).append("<div class='palabra' data-res='0'>"+t+"</div><br>");
			}
			d.remove();
		}	
	});
	
});
function evaluar(){
	var buenas = 0;
	var malas = 0;
	$(".palabra").each(function(i){
		r = $(this).attr("data-res");
		if(r==1){
			$(this).css("background","#6e9");
			buenas++;
		} else {
			$(this).css("background","#930");
			malas++;
		} 
		$(this).off();
	});	
	if(buenas==numPalabras){
		alert("felicidades, tienes un 10% de descuento con la clave XXXX");
	} else {
		alert("Tuviste "+buenas+" palabras correctas y "+malas+" palabras incorrectas");
	}
	$("#reiniciar").show();
	$("#evaluar").hide();
	$("#reiniciar").click(reiniciar);
}
function reiniciar(){
		location.reload(true);
}
</script>
<style>
.palabra{
	width:110px;
	text-align:center;
}
.area{
	width:110px;
	height:220px;
	text-align:center;
	background:#f96;
	font-size:20px;
}
h3{
	text-align:center;
	padding:10px 0px;
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
<article>
	<div id="co-caja">
    <div id="co-titulo"><h1>Información de nuestros productos</h1></div>
    <div id="av-texto">
        <h3>Arrastra la palabra a la sección correcta y gana un 10% de descuento</h3>
<table border="1">
<tr>
	<td><div id="p1"></div></td>
	<td><div id="p2"></div></td>
    <td><div id="p3"></div></td>
    <td><div id="p4"></div></td>
    <td><div id="p5"></div></td>
</tr>
<tr>
	<td><div id="t1"></div></td>
	<td><div id="t2"></div></td>
    <td><div id="t3"></div></td>
    <td><div id="t4"></div></td>
    <td><div id="t5"></div></td>
</tr>
<tr>
	<td><div id="a1" class="area"></div></td>
	<td><div id="a2" class="area"></div></td>
    <td><div id="a3" class="area"></div></td>
    <td><div id="a4" class="area"></div></td>
    <td><div id="a5" class="area"></div></td>
</tr>
</table>
<button id="evaluar">Evaluar</button>
<button id="reiniciar">Reiniciar</button>
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
