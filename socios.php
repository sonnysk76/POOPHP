<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paises Socios</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/aviso.css"  />
<script src="js/jquery.js"></script>
<script>
var numCartas = 10;
var carta1 = " ";
var carta2 = " ";
var score = 0;
var puntos = 0;

$(document).ready(function inicio(){
	cargaCartas();
	$(".carta").on("click",voltear);
});
function voltear(){
	//Despliega numero
	$(this).children().css("display","block");
	//Aumentamos el score
	score++;
	$("#puntos").html("Score: "+score);
	//Primera carta
	if(carta1==" "){
		carta1 = $(this);
	} else {
		carta2 = $(this);
		$(".carta").off();
		setTimeout(verificar,1000);
	}
}
function verificar(){
	if(carta1.attr("data-num")==carta2.attr("data-num")){
		carta1.removeClass('carta').addClass('desaparece');	
		carta2.removeClass('carta').addClass("desaparece");
		puntos++;
		if(puntos==numCartas){
			alert("Felicidades, teminaste el juego");
		}
	} else {
		carta1.children().css("display","none");
		carta2.children().css("display","none");	
	}
	carta1 = " ";
	$(".carta").on("click",voltear);
}
function cargaCartas(){
	//Generar un arreglo vacio
	var paises_array = new Array();
	var num = 0;
	//Generar el arreglo
	paises_array.push({p:"México", n:1});
	paises_array.push({p:"Colombia", n:2});
	paises_array.push({p:"Venezuela", n:3});
	paises_array.push({p:"Bolivia", n:4});
	paises_array.push({p:"Guatemala", n:5});
	paises_array.push({p:"Argentina", n:6});
	paises_array.push({p:"Chile", n:7});
	paises_array.push({p:"Uruguay", n:8});
	paises_array.push({p:"Perú", n:9});
	paises_array.push({p:"Ecuador", n:0});
	//
	paises_array.push({p:"D.F.", n:1});
	paises_array.push({p:"Bogotá", n:2});
	paises_array.push({p:"Caracas", n:3});
	paises_array.push({p:"La Paz", n:4});
	paises_array.push({p:"Guatemala", n:5});
	paises_array.push({p:"Buenos Aires", n:6});
	paises_array.push({p:"Santiago", n:7});
	paises_array.push({p:"Montevideo", n:8});
	paises_array.push({p:"Lima", n:9});
	paises_array.push({p:"Quito", n:0});
	//
	$('.carta').each(function(i){
		//2) Numero de paises
		num = paises_array.length;
		//3) Numero aleatorio
		n = Math.floor(Math.random()*num);
		//4) Despliega el valor
		$(this).html("<p>"+paises_array[n].p+"</p>");
		//5) Almacena el valor
		$(this).attr("data-num",paises_array[n].n);
		//6) Elimina el valor del nodo
		paises_array.splice(n,1);
	});
	//7) Tiempo
	tiempo(2);
}
function tiempo(limite){
	var min = limite - 1;
	var seg = 59;
	t = setInterval(function(){
		$("#tiempo").html("");
		if(seg<10){
			$("#tiempo").append("00:0"+min+":0"+seg);
		} else {
			$("#tiempo").append("00:0"+min+":"+seg);
		}
		seg--;
		if(seg<0){
			seg=59;
			min--;
		}
		if(min<0){
			clearInterval(t);
			alert("Lo sentimos, el tiempo se terminó");
			$(".carta").off();
		}
	}, 1000);
}
</script>
<style>
#tablero{
	width:600px;
	margin:0px auto;
}
.carta{
	border-radius:1em;
	border: 3px solid white;
	background-color:#F93;
	cursor:pointer;
	display:inline-block;
	height:100px;
	width:100px;
	margin:.3em;
	overflow:hidden;
	vertical-align:top;	
}
.desaparece{
	background-color:white;
	border: 3px solid white;
	color: white;
	display:inline-block;
	height:100px;
	width:100px;
	vertical-align:top;	
	margin:.3em;
}
#tiempo{
	float:left;
	font-size:30px;
}
#puntos{
	float:right;
	font-size:30px;
}
#tablero p{
	color: white;
	margin-top:1.2em;
	z-index:1;
	font-size:16px;
	text-align:center;	
	display:none;
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
    <div id="co-titulo"><h1>Paises Socios</h1></div>
    <div id="av-texto">
        	
        <div id="tablero">
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <br>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <br>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <br>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <div class="carta" data-num=""></div>
        <br>
        <div id="score">
        <div id="tiempo">00:00:00</div>
        <div id="puntos">Score: 0</div>
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
