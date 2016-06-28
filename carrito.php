<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carro de compras</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/carrito.css"  />
<link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.10.1.custom.min.css" />
<style>
#cantidad{ width:40px; }
</style>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui-1.10.1.custom.min.js"></script>
<script>
window.onload = function(){
	var pagar = document.getElementById("pagar");
	var seguir = document.getElementById("seguir");
	pagar.onclick = function(){
		if(confirm("¿Desea iniciar el proceso de pago?")){
			location.href="checkout.php";
		}
	}
	seguir.onclick = function(){
		document.getElementById("modo").value = "seguir";
		document.getElementById("carrito").submit();
	}
	actualizar.onclick = function(){
		document.getElementById("modo").value = "calcula";
		document.getElementById("carrito").submit();
	}
}
</script>
<?php
	
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

<!-------- 	CONTENT --------->
<section>
    <div id="ca-content">
	  <div id="ca-encabezado">Home &gt; Carrito</div>
        <div id="ca-detalle">
        <table width="100%">
        	<tr>
            	<th width="100">Producto</th>
                <th width="568">Descripción</th>
                <th width="87">Precio</th>
                <th width="58">Cant.</th>
                <th width="99">Subtotal</th>
                <th width="64">Borrar</th>
            </tr>
            <form id="carrito" name="carrito" method="post" action="actualizaCarrito.php">
            <?php
				for($i=0; $i<count($r); $i++){
            		print "<tr>";
            		print "<td height='161'>";
                	print '<img src="img/productos/'.$r[$i]->numero.'.jpg" width="105" height="143" alt="'.$r[$i]->producto.'">';
					print '<input type="hidden" value="'.$r[$i]->id.'" name="producto'.$i.'"/>';
                	print '</td>';
                	print '<td style="vertical-align:top">';
                	print '<p class="ca-descripcion">'.$r[$i]->descripcion.'</p>';
                	print '</td>';
                	print '<td class="ca-precio">'.number_format($r[$i]->precio,2).'</td>';
					print '<input type="hidden" value="'.$r[$i]->precio.'" name="precio'.$i.'"/>';
					//
                	print '<td class="ca-cant"><input name="cantidad'.$i.'" value="'.$r[$i]->cantidad.'"/></td>';
					//
					print '<td class="ca-subtotal">'.number_format($r[$i]->subtotal,2).'</td>';
                	print '<td class="ca-cant"><a href="borraItem.php?p='.$r[$i]->id.'">Borrar</a></td>';
					print '</tr>';
					$total = $r[$i]->total;
                }
				print '<input type="hidden" value="'.$numCarrito.'" name="carrito"/>';
				print '<input type="hidden" value="'.count($r).'" name="items"/>';
				print '<input type="hidden" value="calcula" name="modo" id="modo"/>';
                ?>
                </form>
        </table>
        <hr>
        <table width="100%">
        	<tr>
        	  <td></td>
        	  <td width="113" class="ca-precio">Subtotal:</td>
        	  <td class="ca-precio"> <?php print number_format($total,2); ?></td>
      	  </tr>
        	<tr>
        	  <td></td>
        	  <td class="ca-precio">Descuento:</td>
        	  <td class="ca-precio">$0.00</td>
      	  </tr>
        	<tr>
        	  <td></td>
        	  <td class="ca-precio">Costo de envío:</td>
        	  <td class="ca-precio"> $0.00</td>
      	  </tr>
          <tr>
        	  <td></td>
        	  <td class="ca-precio">Gran total:</td>
        	  <td class="ca-precio"><?php print number_format($total,2); ?></td>
      	  </tr>
          <tr>
            	<th width="781" class="ca-precio"><button id="seguir">Seguir comprando</button></th>
                <th class="ca-precio"><button id="actualizar">Actualizar carrito</button></th>
                <th width="90" class="ca-cant"><button id="pagar">Pagar</button></th>
            </tr>
        </table>
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
