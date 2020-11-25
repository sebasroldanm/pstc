<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:03
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10747753935fbe8bef426fb2-64529148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fac6d10ffbb15298c61c18870a45768f9e4fa51' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_header.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10747753935fbe8bef426fb2-64529148',
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
  'unifunc' => 'content_5fbe8bef45eae8_01145263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bef45eae8_01145263')) {function content_5fbe8bef45eae8_01145263($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
