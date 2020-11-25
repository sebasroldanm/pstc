<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:47
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13942208755fbe8bdfb32319-35829991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f13ec4fa113b847c874094ac0ccb1b0e0a5c8f09' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13942208755fbe8bdfb32319-35829991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bdfb9e481_60892741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bdfb9e481_60892741')) {function content_5fbe8bdfb9e481_60892741($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
