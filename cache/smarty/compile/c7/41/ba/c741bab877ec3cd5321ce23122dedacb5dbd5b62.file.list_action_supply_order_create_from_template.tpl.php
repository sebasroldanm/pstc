<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:11
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\list\list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1269668715fbe8bf770a444-83828386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c741bab877ec3cd5321ce23122dedacb5dbd5b62' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\list\\list_action_supply_order_create_from_template.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1269668715fbe8bf770a444-83828386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf7736752_47976587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf7736752_47976587')) {function content_5fbe8bf7736752_47976587($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
