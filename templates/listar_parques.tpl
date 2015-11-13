<div class="square">
	<h2 class="title">Parques:</h2>
	{foreach $parques as $parque}
		<ul>
			<li><b>Código: </b>{$parque->get('codigo')}</li>
			<li>
				<b>Nombre: </b>
				<a href="{$gvar.l_global}calificar_parque.php?codigo={$parque->get('codigo')}">{$parque->get('nombre')}</a>
			</li>
			<li><b>Municipio: </b>{$parque->get('municipio')}</li>
			<li><b>Nivel: </b>{$parque->get('nivel')}</li>
		</ul>
		<br />
	{/foreach}
</div>