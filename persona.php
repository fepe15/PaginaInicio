<?php

/**
* 
*/
abstract class Persona
{
	private $_apellido;
	private $_nombre;
	private $_dni;
	private $_sexo;
	
	public function __construct($unApellido, $unNombre, $unDni, $unSexo)
	{
		$this->_apellido=$unApellido;
		$this->_nombre=$unNombre;
		$this->_dni=$unDni;
		$this->_sexo=$unSexo;
	}

	public function getApellido()
	{
		return $this->_apellido;
	} 
	public function getDni()
	{
		return $this->_dni;
	}
	public function getNombre()
	{
		return $this->_nombre;
	}
	public function getSexo()
	{
		return $this->_sexo;
	}

	public abstract function Hablar($idioma);

	public function ToString()
	{
		return "Nombre: ". $this->_nombre. " -- Apellido: ". $this->_apellido . " -- Dni: ". $this->_dni . " -- Sexo: " . $this->_sexo;
	}

}
?>