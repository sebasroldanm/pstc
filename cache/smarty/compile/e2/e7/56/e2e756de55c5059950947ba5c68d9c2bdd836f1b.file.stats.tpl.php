<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:04
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\stats\stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12955274535fbe8bf0146e01-00734039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e756de55c5059950947ba5c68d9c2bdd836f1b' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\stats\\stats.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12955274535fbe8bf0146e01-00734039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf0154cc6_78257723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf0154cc6_78257723')) {function content_5fbe8bf0154cc6_78257723($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
