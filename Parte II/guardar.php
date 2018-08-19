<?php
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="formulario";
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("No se ha podido conectar con el servidor de Base de datos");

$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la Base de datos");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['correo'];
$tipo_tarjeta=$_POST['tarjeta'];
$titular=$_POST['titular'];
$numero_tarjeta=$_POST['numerotarjeta'];
$cvv2=$_POST['cvv2'];
$año=$_POST['año'];
$mes=$_POST['mes'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$telefono=$_POST['telefono'];
//sentencia sql donde va es el triple hpta nombre de la tabla!
$sql="INSERT INTO datos VALUES('$nombre','$apellido',
'$email','$tipo_tarjeta','$titular','$numero_tarjeta','$cvv2','$año','$mes','$direccion','$ciudad','$telefono')";
//ejecutar
$ejecutar=mysqli_query($conexion,$sql);
//verificar ejecucion
if (!$ejecutar) {
	echo "hubo un error";
}else{
	echo "datos guardados correctamente<br><a href='FormularioModificar.html'>Modificar datos</a>";
	echo ", o si quieres...<br><a href='Formulario.html'>volver llenar formulario</a>";
	echo ", o si quieres eliminar...<br><a href='FormularioEliminar.html'>Eliminar datos</a>";
	echo ", o si quieres Consultar...<br><a href='FormularioConsultar.html'>Consultar datos</a>";
}
?>