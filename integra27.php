
<!DOCTYPE html> 
<html>
<head>
	<title>Itris Documentos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="css/img.css" />

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/img.js"></script>
	<script type="text/javascript" charset="utf-8" src="phonegap.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/mipropiojava.js"></script>
	
	<head>
	
	<body>
	<?php
echo "";

print '
<b><h3>Version 2.7.105</h3></b>
<h4>M&oacute;dulo: Adm. Integra</h4>
<p><b>Novedad: 25986</b></p>
<p>Verifica que se este ejecutando el ItsAsync cuando el servidor esta configurado como
primario.
</p>
<hr>

<b><h3>Version 2.7.104</h3></b>
<h4>M&oacute;dulo: Uso Integra</h4>
<p><b>Novedad: 25352</b></p>
<p>Version compatible con una base de arquitectura 2.08.
</p>
<hr>

<b><h3>Version 2.7.98</h3></b>
<h4>M&oacute;dulo: Adm. Integra</h4>
<p><b>Novedad: 23432</b></p>
<p>Consola, ahora permite generar archivos logs del servidor.
</p>
<hr>

<b><h3>Version 2.7.97</h3></b>
<h4>M&oacute;dulo: Uso Integra</h4>
<p><b>Novedad: 22834, 22858 y 22984</b></p>
<p>Agenda gr&aacute;fica, ahora permite configurar opciones de visualizaci&oacute;n.
</p>
<hr>

<b><h3>Version 2.7.96</h3></b>
<h4>M&oacute;dulo: Adm. Integra</h4>
<p><b>Novedad: 22328</b></p>
<p>Seguridad, permite activar o no los flujos de trabajo por grupo de usuarios.
</p>
<hr>

<h4>M&oacute;dulo: Des. Integra</h4>
<p><b>Novedad: 22465</b></p>
<p>Permite visualizar una clase en modo agenda gráfica.Novedad 22692
Constrolador fiscal Hasar: se agregó la función ItsCfSetImpuertoInterno que permite
setear impuestos internos.
</p>
<hr>

<b><h3>Version 2.7.93</h3></b>
<h4>M&oacute;dulo: Des. Integra</h4>
<p><b>Novedad: 22618</b></p>
<p>Controlador fiscal Hasar: se agrego la funcion ItsCfObtenerFechaHora que permite
obtener la fecha y la hora del controlador fiscal.
</p>
<hr>

<b><h3>Version 2.7.91</h3></b>
<h4>M&oacute;dulo: Des. Integra</h4>
<p><b>Novedad: 22217</b></p>
<p>Se agregó un nuevo tipo de editor para los campos caracteres y numericos que permite
ocultar el texto ingresado (campo de tipo clave)
</p>
<hr>
<p><b>Novedad: 22291</b></p>
<p>Se agregaron funciones que permite encriptar valores alfanumericos
</p>
<hr>

<b><h3>Version 2.7.89</h3></b>
<h4>M&oacute;dulo: Adm. Integra</h4>
<p><b>Novedad: 16437</b></p>
<p>Ahora en la consola hay una accion llamada "Generar log del servidor" que genera tres
archivos:
ItsActivity.log : Guarda informacion de la actividad entre el Servidor y el SQL. Es el
mismo que se genera con la opcion de "Crear Log de actividades" del menu contextual
del servidor cuando se ejecuta como aplicacion
ItsUser.log : Guarda informacion sobre todas las maquinas conectadas al servidor y que
estan consumiendo una licencia. Indica: servidor, ip del cliente, bases, usuario logueados,
ultimo acceso
ItsSocketAdmin.log : Guarda informacion de la conexiones de socket entre el servidor y
los clientes.
</p>
<hr>

';

?>

</body>
</html>