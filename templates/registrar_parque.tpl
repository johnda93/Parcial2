<div class="square">
	<h2 class="title">Registrar un parque COMFAMA:</h2>
	<form action="{$gvar.l_global}registrar_parque.php" method="POST">
		<label for="codigo">Código:</label>
		<input id="codigo" name="codigo" type="text"/><br/>
		<label for="nombre">Nombre:</label>
		<input id="nombre" name="nombre" type="text"/><br/>
		<label for="municipio">Municipio:</label>
		<input id="municipio" name="municipio" type="text"/><br/>
		<label for="nivel">Nivel:</label>
		<input id="nivel" name="nivel" type="text"/><br/>

		<input class="btn btn-primary" type="submit" value="Ingresar"/>
	</form>
</div>