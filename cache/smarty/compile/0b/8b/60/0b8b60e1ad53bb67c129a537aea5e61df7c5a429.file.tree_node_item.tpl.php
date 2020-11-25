<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:15
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13713976165fbe8bfbe706a2-01549614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b8b60e1ad53bb67c129a537aea5e61df7c5a429' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13713976165fbe8bfbe706a2-01549614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bfbe9bd15_60032821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bfbe9bd15_60032821')) {function content_5fbe8bfbe9bd15_60032821($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
