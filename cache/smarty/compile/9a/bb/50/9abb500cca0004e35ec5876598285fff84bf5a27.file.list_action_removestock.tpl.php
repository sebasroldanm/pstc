<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:11
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\list\list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5875020395fbe8bf7487725-24245457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9abb500cca0004e35ec5876598285fff84bf5a27' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\list\\list_action_removestock.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5875020395fbe8bf7487725-24245457',
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
  'unifunc' => 'content_5fbe8bf74b4783_90438520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf74b4783_90438520')) {function content_5fbe8bf74b4783_90438520($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
