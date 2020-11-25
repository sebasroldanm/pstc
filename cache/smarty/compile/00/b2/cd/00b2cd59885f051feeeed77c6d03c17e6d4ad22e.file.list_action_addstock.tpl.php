<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:10
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\list\list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13754378765fbe8bf6c3d057-82076963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00b2cd59885f051feeeed77c6d03c17e6d4ad22e' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\list\\list_action_addstock.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13754378765fbe8bf6c3d057-82076963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf6c679b8_51101898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf6c679b8_51101898')) {function content_5fbe8bf6c679b8_51101898($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
