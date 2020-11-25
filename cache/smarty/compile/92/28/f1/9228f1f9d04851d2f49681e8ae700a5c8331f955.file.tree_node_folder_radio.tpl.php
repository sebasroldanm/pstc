<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:15
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\tree\tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12817650165fbe8bfbd25b82-69268934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9228f1f9d04851d2f49681e8ae700a5c8331f955' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder_radio.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12817650165fbe8bfbd25b82-69268934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'root_category' => 0,
    'input_name' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bfbd3c891_09888758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bfbd3c891_09888758')) {function content_5fbe8bfbd3c891_09888758($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\laragon\\www\\pstc\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['node']->value['id_category']!=$_smarty_tpl->tpl_vars['root_category']->value) {?>
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li>
<?php }} ?>
