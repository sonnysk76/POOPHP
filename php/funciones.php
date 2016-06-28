<?php
//Dia de hoy
$t = time();
//Genera vector
$f = getdate($t);
//Crea el arreglo
$dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
//variable hoy
$hoy = $dias[$f["wday"]];
//Arreglo de meses
$meses = array("void","Enero", "Febrero","Marzo","Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>