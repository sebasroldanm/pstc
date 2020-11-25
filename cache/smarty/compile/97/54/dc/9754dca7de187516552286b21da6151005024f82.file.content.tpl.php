<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:03
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15660484185fbe8bef220065-77169292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9754dca7de187516552286b21da6151005024f82' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15660484185fbe8bef220065-77169292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bef24c6e9_05684658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bef24c6e9_05684658')) {function content_5fbe8bef24c6e9_05684658($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
