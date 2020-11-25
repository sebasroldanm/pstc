<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:58
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9145425735fbe8bea1bd319-19556972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5da03ccd1a09b1d2ed94e8bd2ccc787024436d24' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9145425735fbe8bea1bd319-19556972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bea1ca200_32699301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bea1ca200_32699301')) {function content_5fbe8bea1ca200_32699301($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
