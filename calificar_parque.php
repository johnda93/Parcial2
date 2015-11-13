<?php

require('configs/include.php');

class c_calificar_parque extends super_controller { 

	public function calificar() {
		$calificacion = new calificacion($this->post);
		$calificacion->set('fecha', date("y-m-d"));

		if (!$calificacion->validar_valor()) {
			throw_exception("Valor de la calificacion a ingresar inválido!");
		}

		$this->orm->connect();
		$this->orm->insert_data("normal", $calificacion);
		$this->orm->close();
		
		$this->type_warning = "success";
		$this->msg_warning = "Calificación registrada!";
		
		$this->temp_aux = 'message.tpl';
		
		$this->engine->assign('type_warning', $this->type_warning);
		$this->engine->assign('msg_warning', $this->msg_warning);
	}
	
	public function display()
	{
		$this->engine->assign('titulo', "Parques COMFAMA : Calificar Parque");
		$this->engine->assign('parque', $this->get->codigo);
			
		$this->engine->display('header.tpl');
		$this->engine->display($this->temp_aux);
		$this->engine->display('calificar_parque.tpl');
		$this->engine->display('footer.tpl');
	}	
	
	public function run()
	{	
		try {
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$this->calificar();
			}
		} catch (Exception $e) {
			$this->error = 1;
			$this->engine->assign('object', $this->post);
			$this->msg_warning = $e->getMessage();
			$this->engine->assign('type_warning', $this->type_warning);
			$this->engine->assign('msg_warning', $this->msg_warning);
			$this->temp_aux = 'message.tpl';
		}

		$this->display();	
	}
}

$call = new c_calificar_parque();
$call->run();

?>