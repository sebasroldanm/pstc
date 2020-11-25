<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:47
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5542793815fbe8bdfc2f725-09843737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '058ce5a2729421c97bb33210538063c2d874f6b7' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\index.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5542793815fbe8bdfc2f725-09843737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bdfc5eb05_98526085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bdfc5eb05_98526085')) {function content_5fbe8bdfc5eb05_98526085($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?><?php }} ?>
