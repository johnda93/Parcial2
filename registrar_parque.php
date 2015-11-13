<?php

require('configs/include.php');

class c_registrar_parque extends super_controller { 

	public function registrar() {
		$parque = new parque($this->post);

		if (is_empty($this->post->nivel) || is_empty($this->post->municipio)) {
			throw_exception("Hay campos vacíos sin diligenciar!");
		} 

		if ($this->post->nivel !== "alto" && $this->post->nivel !== "bajo") {
			throw_exception("El nivel del parque a ingresar es inválido!");
		}

		if ($this->post->municipio !== "Medellín"
			&& $this->post->municipio !== "Rionegro"
			&& $this->post->municipio !== "La Estrella"
			&& $this->post->municipio !== "Copacabana"
			&& $this->post->municipio !== "Guatapé") {
			throw_exception("El municipio del parque a ingresar es inválido!");
		}

		$this->orm->connect();
		$this->orm->insert_data("normal", $parque);
		$this->orm->close();
		
		$this->type_warning = "success";
		$this->msg_warning = "Parque creado!";
		
		$this->temp_aux = 'message.tpl';
		$this->engine->assign('type_warning', $this->type_warning);
		$this->engine->assign('msg_warning', $this->msg_warning);
	}
	
	public function display()
	{
		$this->engine->assign('titulo', "Parques COMFAMA : Registrar Parque");
			
		$this->engine->display('header.tpl');
		$this->engine->display($this->temp_aux);
		$this->engine->display('registrar_parque.tpl');
		$this->engine->display('footer.tpl');
	}	
	
	public function run()
	{	
		try {
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$this->registrar();
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

$call = new c_registrar_parque();
$call->run();

?>