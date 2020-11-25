<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:01
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\products\specific_prices_shop_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11561329155fbe8bed2fd9d8-68411942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4500efe378ef3e36781f4c4bbc512a25b3e0e7c4' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\products\\specific_prices_shop_update.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11561329155fbe8bed2fd9d8-68411942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_list' => 0,
    'key_id' => 0,
    'row' => 0,
    'key_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bed32fc81_72282775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bed32fc81_72282775')) {function content_5fbe8bed32fc81_72282775($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<option value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_id']->value]);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_value']->value], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php } ?><?php }} ?>
