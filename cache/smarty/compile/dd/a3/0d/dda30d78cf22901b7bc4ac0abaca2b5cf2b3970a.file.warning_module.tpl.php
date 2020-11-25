<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:51
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1238786125fbe8be345ea95-56905223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda30d78cf22901b7bc4ac0abaca2b5cf2b3970a' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1238786125fbe8be345ea95-56905223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be3467339_30411447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be3467339_30411447')) {function content_5fbe8be3467339_30411447($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
