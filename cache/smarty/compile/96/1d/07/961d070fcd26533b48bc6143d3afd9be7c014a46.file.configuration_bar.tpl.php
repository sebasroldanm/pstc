<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:48
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\modules\configuration_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16355388655fbe8be073d9d7-27760276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '961d070fcd26533b48bc6143d3afd9be7c014a46' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\modules\\configuration_bar.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16355388655fbe8be073d9d7-27760276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'display_multishop_checkbox' => 0,
    'module' => 0,
    'current_url' => 0,
    'shop_context' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be0780db0_21261024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be0780db0_21261024')) {function content_5fbe8be0780db0_21261024($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\laragon\\www\\pstc\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?>

<?php $_smarty_tpl->tpl_vars['module_name'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['module_name']->value, ENT_QUOTES, 'UTF-8', true), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php echo (('/&module_name=').($_smarty_tpl->tpl_vars['module_name']->value)).('/');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkbox']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkbox']->value) {?>
<div class="bootstrap panel">
	<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Configuration'),$_smarty_tpl);?>
</h3>
	<input type="checkbox" name="activateModule" value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value->isEnabledForShopContext()) {?> checked="checked"<?php }?> 
		onclick="location.href = '<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['current_url']->value,Smarty::$_smarty_vars['capture']['default'],'');?>
&amp;module_name=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&amp;enable=' + (($(this).attr('checked')) ? 1 : 0);" />
	<?php echo smartyTranslate(array('s'=>'Activate module for this shop context: %s.','sprintf'=>$_smarty_tpl->tpl_vars['shop_context']->value),$_smarty_tpl);?>

</div>
<?php }?>
<?php }} ?>
