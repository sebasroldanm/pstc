<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:16
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3262728105fbe8bfc204905-71579051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba17f082e3d4a6fccb9c777058f119ae2bbb8abb' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3262728105fbe8bfc204905-71579051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bfc23ef01_92877109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bfc23ef01_92877109')) {function content_5fbe8bfc23ef01_92877109($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
