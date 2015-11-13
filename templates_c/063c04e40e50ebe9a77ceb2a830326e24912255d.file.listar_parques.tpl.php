<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 17:11:58
         compiled from "C:/xampp/htdocs/parcial2/templates\listar_parques.tpl" */ ?>
<?php /*%%SmartyHeaderCode:443056460bce177029-39917893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '063c04e40e50ebe9a77ceb2a830326e24912255d' => 
    array (
      0 => 'C:/xampp/htdocs/parcial2/templates\\listar_parques.tpl',
      1 => 1447431084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '443056460bce177029-39917893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
	<h2 class="title">Parques:</h2>
	<?php  $_smarty_tpl->tpl_vars['parque'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parques')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['parque']->key => $_smarty_tpl->tpl_vars['parque']->value){
?>
		<ul>
			<li><b>Código: </b><?php echo $_smarty_tpl->getVariable('parque')->value->get('codigo');?>
</li>
			<li><b>Nombre: </b><?php echo $_smarty_tpl->getVariable('parque')->value->get('nombre');?>
</li>
			<li><b>Municipio: </b><?php echo $_smarty_tpl->getVariable('parque')->value->get('municipio');?>
</li>
			<li><b>Nivel: </b><?php echo $_smarty_tpl->getVariable('parque')->value->get('nivel');?>
</li>
		</ul>
		<br />
	<?php }} ?>
</div>