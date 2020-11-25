<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:02
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\scenes\helpers\tree\tree_node_item_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15136261815fbe8beeac44c4-09174429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '806ad8af16e83868034faf94ec72e963a48b3f11' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\scenes\\helpers\\tree\\tree_node_item_checkbox.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15136261815fbe8beeac44c4-09174429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8beead2d14_39551222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8beead2d14_39551222')) {function content_5fbe8beead2d14_39551222($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="checkbox" name="categories[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
