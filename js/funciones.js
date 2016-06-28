function fechaHoy(){
//ArregloD
	var dias = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
	var meses = new Array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
	//Manejo de fechas
	var fecha = new Date();
	//dia de la semana
	var dia = fecha.getDay(); 
	//dia del mes
	var diaMes = fecha.getDate(); 
	//EL mes del año enero = 0 y diciembre = 11
	var mes = fecha.getMonth();
	//El año completo con 4 digitos
	var anio = fecha.getFullYear();
	//Hora 
	var hora = fecha.getHours();
	//Minutos
	var minutos = fecha.getMinutes();
	//Segundos
	var sec = fecha.getSeconds();
	//
	var hoy = dias[dia]+" "+diaMes+" de "+meses[mes]+" de "+anio+", "+hora+":"+minutos+":"+sec; 
	//	
	return hoy;
}