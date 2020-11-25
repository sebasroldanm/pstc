<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:57
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\products\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6179810355fbe8be91bf656-69414534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61e956c6189550322b40c5ccae2aa8d2fc28dbe8' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\products\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6179810355fbe8be91bf656-69414534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be91cee89_03594445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be91cee89_03594445')) {function content_5fbe8be91cee89_03594445($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
