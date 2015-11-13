<?php

require('configs/include.php');

class c_promedio_calificacion extends super_controller {


	public function display()
	{
		$options['calificacion']['lvl2'] = "alto";

		$this->orm->connect();
		$this->orm->read_data(array("caliicacion"), $options);
		$calificaciones = $this->orm->get_objects("caliicacion");
		$this->orm->close();

		$suma = 0;
		$cont = 0;

		foreach ($calificaciones as $caliicacion) {
			$suma += ($caliicacion->get('valor') + 0);
			$cont++;
		}

		$promedio = $suma / $cont;

		$this->engine->assign('titulo', "Parques COMFAMA : Promedio Calificaciones");
		$this->engine->assign('promedio', $promedio);
		
		$this->engine->display('header.tpl');
		$this->engine->display('promedio_calificacion.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_promedio_calificacion();
$call->run();

?>