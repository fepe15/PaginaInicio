<?php
require_once("empleado.php");
require_once("fabrica.php");

	if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["legajo"]) && !empty($_POST["sueldo"]) && !empty($_POST["sexo"])) {
		$empleadoUno = new Empleado($_POST["apellido"],$_POST["nombre"],$_POST["dni"], $_POST["sexo"],$_POST["legajo"],$_POST["sueldo"]);
		echo "El empleado se agrego correctamente <br><br>";
		echo $empleadoUno->ToString();
	}
	else
		echo "Error. debe completar todos los campos";

?>
<br>
<br>
<a href="index.php">volver</a>
