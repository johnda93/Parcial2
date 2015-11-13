<?php

class calificacion extends object_standard
{

	protected $codigo;
	protected $parque;
	protected $valor;
	protected $fecha;

	var $components = array();
	var $auxiliars = array();

	public function metadata()
	{
		return array(
			"codigo" => array(),
			"parque" => array("foreign_name" => "p_c", "foreign" => "parque", "foreign_attribute" => "codigo"),
			"valor" => array(),
			"fecha" => array()
		);
	}

	public function primary_key()
	{
		return array("codigo");
	}

	public function relational_keys($class, $rel_titulo)
	{
		switch ($class) {
			case "parque":
				switch ($rel_titulo) {
					case "p_c":
						return array("parque");
					break;
				}
			break;
			
			default: break;
		}
	}

	public function validar_valor(){
		if(is_numeric($this->valor) && ($this->valor + 0 >= 1) && ($this->valor + 0 <= 5)) {
			return true;
		} else {
			return false;
		}
	}
}

?>