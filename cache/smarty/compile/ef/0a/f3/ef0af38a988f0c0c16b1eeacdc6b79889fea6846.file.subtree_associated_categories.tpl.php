<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:56
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\products\helpers\tree\subtree_associated_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:390874035fbe8be8ad9001-65025368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef0af38a988f0c0c16b1eeacdc6b79889fea6846' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\products\\helpers\\tree\\subtree_associated_categories.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390874035fbe8be8ad9001-65025368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nodes' => 0,
    'selected_categories' => 0,
    'imploded_selected_categories' => 0,
    'id_tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be8ae9216_69647458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be8ae9216_69647458')) {function content_5fbe8be8ae9216_69647458($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

<?php }?>

<script type="text/javascript">
<?php if (isset($_smarty_tpl->tpl_vars['selected_categories']->value)&&!empty($_smarty_tpl->tpl_vars['selected_categories']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['imploded_selected_categories'] = new Smarty_variable(implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value), null, 0);?>
	var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').tree('collapseAll');
	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').find(":input").each(
		function()
		{
			if ($.inArray($(this).val(), selected_categories) != -1)
			{
				$(this).prop("checked", true);
				$(this).parent().addClass("tree-selected");
				$(this).parents("ul.tree").each(
					function()
					{
						$(this).children().children().children(".icon-folder-close")
							.removeClass("icon-folder-close")
							.addClass("icon-folder-open");
						$(this).show();
					}
				);
			}
		}
	);
<?php }?>
</script><?php }} ?>
