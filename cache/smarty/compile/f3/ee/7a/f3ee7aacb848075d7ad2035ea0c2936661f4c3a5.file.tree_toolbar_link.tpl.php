<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:16
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\tree\tree_toolbar_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16678714555fbe8bfc5339d3-81013113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ee7aacb848075d7ad2035ea0c2936661f4c3a5' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\tree\\tree_toolbar_link.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16678714555fbe8bfc5339d3-81013113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'action' => 0,
    'id' => 0,
    'icon_class' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bfc544b43_81195715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bfc544b43_81195715')) {function content_5fbe8bfc544b43_81195715($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="btn btn-default">
	<?php if (isset($_smarty_tpl->tpl_vars['icon_class']->value)) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>

</a><?php }} ?>
