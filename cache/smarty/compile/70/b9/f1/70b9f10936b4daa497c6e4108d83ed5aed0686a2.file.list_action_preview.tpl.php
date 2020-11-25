<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:11
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8832584485fbe8bf73c2401-51892795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70b9f10936b4daa497c6e4108d83ed5aed0686a2' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8832584485fbe8bf73c2401-51892795',
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
  'unifunc' => 'content_5fbe8bf73cbe19_69247608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf73cbe19_69247608')) {function content_5fbe8bf73cbe19_69247608($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
