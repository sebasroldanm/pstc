<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:46
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\groups\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1615913765fbe8bdeea2cd7-48012904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0dd7bbe22ad218248433e886624afcd0eef6d9' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\groups\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1615913765fbe8bdeea2cd7-48012904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bdeec9e41_54038967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bdeec9e41_54038967')) {function content_5fbe8bdeec9e41_54038967($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
