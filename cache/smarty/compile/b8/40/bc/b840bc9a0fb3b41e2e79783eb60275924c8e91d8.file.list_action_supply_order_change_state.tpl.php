<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:11
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\list\list_action_supply_order_change_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4664280525fbe8bf7638129-56371556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b840bc9a0fb3b41e2e79783eb60275924c8e91d8' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\list\\list_action_supply_order_change_state.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4664280525fbe8bf7638129-56371556',
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
  'unifunc' => 'content_5fbe8bf766f369_70001489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf766f369_70001489')) {function content_5fbe8bf766f369_70001489($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-time"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
