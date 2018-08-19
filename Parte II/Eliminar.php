<?php
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="formulario";


$parametro=$_POST['parametro'];
$nuevo=$_POST['nuevo'];
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("No se ha podido conectar con el servidor de Base de datos");
$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la Base de datos");

$sql="DELETE FROM datos WHERE $parametro='$nuevo'";

$ejecutar=mysqli_query($conexion,$sql) or die(mysqli_error());
echo "actualizacion correcta";
echo "datos guardados correctamente<br><a href='FormularioModificar.html'>Modificar datos</a>";
	echo ", o si quieres...<br><a href='Formulario.html'>volver llenar formulario</a>";
	echo ", o si quieres eliminar...<br><a href='FormularioEliminar.html'>Eliminar datos</a>";
	echo ", o si quieres Consultar...<br><a href='FormularioConsultar.html'>Consultar datos</a>";

?>