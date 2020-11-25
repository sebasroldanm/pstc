<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:48
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12837840905fbe8be038aa44-61018356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34ccc2dd377b0fda6b9ea1db60333b60634215a6' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12837840905fbe8be038aa44-61018356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be0395213_56880866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be0395213_56880866')) {function content_5fbe8be0395213_56880866($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
