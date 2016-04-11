<html>
<head>
	<title>Mi Fabrica</title>
</head>
<body>
	<?php
	require_once("empleado.php");
	require_once("fabrica.php");

	$unaFabrica = new Fabrica("Rudolf");
	$empleadoUno = new Empleado("Rodriguez", "Jose", "20234435", "Masculino", "123", "$10000");
    $empleadoDos = new Empleado("Lopez", "Mauro", "33555675", "Masculino", "124", "$15000");

    $unaFabrica->AgregarEmpleado($empleadoUno);
    $unaFabrica->AgregarEmpleado($empleadoDos);
    $unaFabrica->AgregarEmpleado($empleadoUno);

    //var_dump($unaFabrica);

    echo $unaFabrica->ToString();
    echo "<br>";
    echo "<br>";

    $unaFabrica->EliminarEmpleado($empleadoDos);

    echo $unaFabrica->ToString();
	echo "<br>";
	echo "<br>";	



	?>

</body>
</html>