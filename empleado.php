<?php
require_once ("persona.php");
/**
* 
*/
class Empleado extends Persona 
{
	protected $_legajo;
	protected $_sueldo;
	
	public function __construct($unApellido, $unNombre, $unDni, $unSexo, $unLegajo, $unSueldo)
	{
		parent::__construct($unApellido, $unNombre, $unDni, $unSexo);
		$this->_legajo = $unLegajo;
		$this->_sueldo = $unSueldo;
	}

	public function getLegajo()
	{
		return $this->_legajo;
	}

	public function getSueldo()
	{
		return $this->_sueldo;
	}

	public function Hablar($idioma)
	{
		return "El empleado habla $idioma <br>";
	}

	public function ToString()
	{
		return parent::ToString() . " -- Legajo: " . $this->_legajo . " -- Sueldo: " . $this->_sueldo . "<br>";
	}


}





?>