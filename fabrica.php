<?php
require_once("empleado.php");
/**
	* 
	*/
	class Fabrica 
	{
		public $_empleados;
		private $_razonSocial;
		
		function __construct($razonSocial)
		{
			$this->_razonSocial=$razonSocial;
			$this->_empleados=array();
		}

		public function AgregarEmpleado($unEmpleado)
		{
			array_push($this->_empleados, $unEmpleado);
		}

		public function CalcularSueldos()
		{
			$totalSueldos;
			foreach ($this->_empleados as $item) {
				$totalSueldos+=$item->getSueldo();
			}
			return $totalSueldos;
		}

		public function EliminarEmpleado($unEmpleado)
		{
			$cont=0;
			foreach ($this->_empleados as $item) {
				if ($unEmpleado == $item) {
					unset($this->_empleados[$cont]);
				}
				$cont++;
			}
		}

		private function EliminarEmpleadosRepetidos()
		{
			$this->_empleados=array_unique($this->_empleados);
		}

		public function ToString()
		{
			$infoEmpleados="";
			foreach ($this->_empleados as $item) {
				$infoEmpleados.=$item->ToString();
			}
			return "Razon social: ". $this->_razonSocial . "<br>" . "### EMPLEADOS ###<br>". $infoEmpleados; 
		}


	}	


?>