<?php

require('configs/include.php');

class c_listar_parques extends super_controller {


	public function display()
	{
		$options['parque']['lvl2'] = "all";

		$this->orm->connect();
		$this->orm->read_data(array("parque"), $options);
		$parques = $this->orm->get_objects("parque");
		$this->orm->close();

		$this->engine->assign('titulo', "Parques COMFAMA");
		$this->engine->assign('parques', $parques);
		
		$this->engine->display('header.tpl');
		$this->engine->display('listar_parques.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_listar_parques();
$call->run();

?>