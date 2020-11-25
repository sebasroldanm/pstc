<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:10
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\list\list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15658161045fbe8bf6f0a893-29428057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483fd54e09d7937d1662824b6a5ebc4be0c79b79' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\list\\list_action_details.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15658161045fbe8bf6f0a893-29428057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'params' => 0,
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf6f35f58_48192858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf6f35f58_48192858')) {function content_5fbe8bf6f35f58_48192858($_smarty_tpl) {?>

<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['action'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="">
	<i class="icon-eye-open"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
