<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:02
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\request_sql\list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3557069005fbe8bee86d094-44636609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e8b0f2e4478152b28ad44e424894c54bea50ae6' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\request_sql\\list_action_export.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3557069005fbe8bee86d094-44636609',
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
  'unifunc' => 'content_5fbe8bee895233_63216089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bee895233_63216089')) {function content_5fbe8bee895233_63216089($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
