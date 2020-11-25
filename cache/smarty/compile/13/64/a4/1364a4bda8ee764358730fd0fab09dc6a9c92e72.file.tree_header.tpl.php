<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:15
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18197642775fbe8bfb8865d4-28284662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1364a4bda8ee764358730fd0fab09dc6a9c92e72' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18197642775fbe8bfb8865d4-28284662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bfb8bee15_55228565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bfb8bee15_55228565')) {function content_5fbe8bfb8bee15_55228565($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
