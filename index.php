<html>
<head>
	<title>Mi Fabrica</title>
</head>
<body>
	<?php
	require_once("empleado.php");
	require_once("fabrica.php");
    $unaFabrica = new Fabrica("Rudolf");
/*	$empleadoUno = new Empleado("Rodriguez", "Jose", "20234435", "Masculino", "123", "$10000");
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
	echo "<br>";	*/
	?>

    <form method="post" action="administracion.php">
        <br>
        <H2>Ingreso de empleados</H2>
        
        Nombre:
        <input type="text" name="nombre">
        Apellido:
        <input type="text" name="apellido">
        <br><br>
        Dni:
        <input type="text" name="dni">
        <br><br>

        SEXO <BR>
        <input type="radio" name="sexo" value="masculino">Masculino
        <br>
        <input type="radio" name="sexo" value="femenino">Femenino
        <br>
        <input type="radio" name="sexo" value="otro">Otro
        
        <br><br>
        Legajo:
        <input type="text" name="legajo">
        <br><br>
        Sueldo:
        <input type="text" name="sueldo">
        <br><br>
        <input type="submit" name="btn" value="Cargar">
    </form>

</body>
</html>