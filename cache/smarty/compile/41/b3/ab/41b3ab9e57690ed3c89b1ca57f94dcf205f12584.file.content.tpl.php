<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:52
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\not_found\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14442545865fbe8be40f7c53-62238878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41b3ab9e57690ed3c89b1ca57f94dcf205f12584' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\not_found\\content.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14442545865fbe8be40f7c53-62238878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be4133004_21428981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be4133004_21428981')) {function content_5fbe8be4133004_21428981($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)&&!empty($_smarty_tpl->tpl_vars['controller']->value)&&$_smarty_tpl->tpl_vars['controller']->value!='adminnotfound') {?>
	<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<?php }?>
<a class="btn btn-default" href="javascript:window.history.back();">
	<i class="icon-arrow-left"></i>
	<?php echo smartyTranslate(array('s'=>'Back to the previous page'),$_smarty_tpl);?>

</a>
<a class="btn btn-default" href="index.php">
	<i class="icon-dashboard"></i>
	<?php echo smartyTranslate(array('s'=>'Go to the dashboard'),$_smarty_tpl);?>

</a><?php }} ?>
