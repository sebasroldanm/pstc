<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:15
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\tree\tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3267803945fbe8bfb648b90-88104212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfcbadb2a45f92d3ca5083ff0c256c61f3ebaaab' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\tree\\tree.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3267803945fbe8bfb648b90-88104212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bfb675e46_06871304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bfb675e46_06871304')) {function content_5fbe8bfb675e46_06871304($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>
