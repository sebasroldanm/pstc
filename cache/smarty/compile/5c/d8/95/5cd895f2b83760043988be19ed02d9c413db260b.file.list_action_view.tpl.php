<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:11
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9093715195fbe8bf7956f38-58772020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cd895f2b83760043988be19ed02d9c413db260b' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9093715195fbe8bf7956f38-58772020',
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
  'unifunc' => 'content_5fbe8bf7984ae2_40776238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf7984ae2_40776238')) {function content_5fbe8bf7984ae2_40776238($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
