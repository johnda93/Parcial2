<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 17:50:42
         compiled from "C:/xampp/htdocs/parcial2/templates\calificar_parque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6712564614e25ca716-74471518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b92f7de04b8ac46e9acb5ccd84dc45c080bcd590' => 
    array (
      0 => 'C:/xampp/htdocs/parcial2/templates\\calificar_parque.tpl',
      1 => 1447433434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6712564614e25ca716-74471518',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
	<h2 class="title">Calificar parque:</h2>
	<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
calificar_parque.php?codigo=<?php echo $_smarty_tpl->getVariable('parque')->value;?>
" method="POST">
		<label for="codigo">Código:</label>
		<input id="codigo" name="codigo" type="text"/><br/>
		<label for="valor">Valor: (Entre 1 y 5)</label>
		<input id="valor" name="valor" type="number"/><br/>
		<input id="parque" name="parque" type="hidden" value=<?php echo $_smarty_tpl->getVariable('parque')->value;?>
 /><br/>

		<input class="btn btn-primary" type="submit" value="Ingresar"/>
	</form>
</div>