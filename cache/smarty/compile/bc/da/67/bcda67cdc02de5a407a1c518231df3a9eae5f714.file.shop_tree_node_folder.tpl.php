<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:03
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12374264555fbe8bef50e024-41192596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcda67cdc02de5a407a1c518231df3a9eae5f714' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_node_folder.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12374264555fbe8bef50e024-41192596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bef5198f9_74557752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bef5198f9_74557752')) {function content_5fbe8bef5198f9_74557752($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\laragon\\www\\pstc\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_group']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
