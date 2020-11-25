<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:15
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\tree\tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16399451125fbe8bfb97ad87-20708164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddd96540edc6343285052472f1bae19c1a1f150e' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16399451125fbe8bfb97ad87-20708164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bfb9acdd5_50010865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bfb9acdd5_50010865')) {function content_5fbe8bfb9acdd5_50010865($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\laragon\\www\\pstc\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
