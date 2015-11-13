<div class="square">
	<h2 class="title">Calificar parque:</h2>
	<form action="{$gvar.l_global}calificar_parque.php?codigo={$parque}" method="POST">
		<label for="codigo">Código:</label>
		<input id="codigo" name="codigo" type="text"/><br/>
		<label for="valor">Valor: (Entre 1 y 5)</label>
		<input id="valor" name="valor" type="number"/><br/>
		<input id="parque" name="parque" type="hidden" value={$parque} /><br/>

		<input class="btn btn-primary" type="submit" value="Ingresar"/>
	</form>
</div>