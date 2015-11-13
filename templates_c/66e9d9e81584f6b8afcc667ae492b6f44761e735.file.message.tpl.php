<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 17:01:11
         compiled from "C:/xampp/htdocs/parcial2/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1083256460947e7fd70-09227270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e9d9e81584f6b8afcc667ae492b6f44761e735' => 
    array (
      0 => 'C:/xampp/htdocs/parcial2/templates\\message.tpl',
      1 => 1354314637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1083256460947e7fd70-09227270',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div>
<div class="alert alert-<?php echo $_smarty_tpl->getVariable('type_warning')->value;?>
">
<strong><?php echo ucfirst($_smarty_tpl->getVariable('type_warning')->value);?>
</strong> <?php echo $_smarty_tpl->getVariable('msg_warning')->value;?>

</div>
</div>
