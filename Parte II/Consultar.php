<?php
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="formulario";


$parametro=$_POST['parametro'];
$nuevo=$_POST['nuevo'];
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("No se ha podido conectar con el servidor de Base de datos");
$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la Base de datos");

$sql="SELECT * FROM datos WHERE $parametro='$nuevo'";

$ejecutar=mysqli_query($conexion,$sql) or die(mysqli_error());
while ($info=mysqli_fetch_row($ejecutar)) {
	echo "<center>";
	echo "<br><br><br><br>";
	echo "Nombre: ".$info[0]."<br>";
	echo "Apellido: ".$info[1]."<br>";
	echo "Email: ".$info[2]."<br>";
	echo "Tipo tarjeta: ".$info[3]."<br>";
	echo "Titular: ".$info[4]."<br>";
	echo "nmero de tarjeta: ".$info[5]."<br>";
	echo "cvv2: ".$info[6]."<br>";
	echo "año: ".$info[7]."<br>";
	echo "mes: ".$info[8]."<br>";
	echo "direccion: ".$info[9]."<br>";
	echo "ciudad: ".$info[10]."<br>";
	echo "telefono: ".$info[11]."<br>";
	echo "</center>";
}
echo "actualizacion correcta";
echo "datos guardados correctamente<br><a href='FormularioModificar.html'>Modificar datos</a>";
	echo ", o si quieres...<br><a href='Formulario.html'>volver llenar formulario</a>";
	echo ", o si quieres eliminar...<br><a href='FormularioEliminar.html'>Eliminar datos</a>";
	echo ", o si quieres Consultar...<br><a href='FormularioConsultar.html'>Consultar datos</a>";


?>