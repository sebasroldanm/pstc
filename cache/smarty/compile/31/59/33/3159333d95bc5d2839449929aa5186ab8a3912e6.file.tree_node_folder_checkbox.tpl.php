<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:02
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\scenes\helpers\tree\tree_node_folder_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18481871785fbe8bee9ac2c7-60058085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3159333d95bc5d2839449929aa5186ab8a3912e6' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\scenes\\helpers\\tree\\tree_node_folder_checkbox.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18481871785fbe8bee9ac2c7-60058085',
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
  'unifunc' => 'content_5fbe8bee9e0fa7_96842353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bee9e0fa7_96842353')) {function content_5fbe8bee9e0fa7_96842353($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\laragon\\www\\pstc\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="categories[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
