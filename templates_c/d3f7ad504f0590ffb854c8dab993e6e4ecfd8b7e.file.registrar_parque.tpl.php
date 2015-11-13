<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 17:00:42
         compiled from "C:/xampp/htdocs/parcial2/templates\registrar_parque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268575646092aae7080-61178521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3f7ad504f0590ffb854c8dab993e6e4ecfd8b7e' => 
    array (
      0 => 'C:/xampp/htdocs/parcial2/templates\\registrar_parque.tpl',
      1 => 1447430401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268575646092aae7080-61178521',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
	<h2 class="title">Registrar un parque COMFAMA:</h2>
	<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrar_parque.php" method="POST">
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