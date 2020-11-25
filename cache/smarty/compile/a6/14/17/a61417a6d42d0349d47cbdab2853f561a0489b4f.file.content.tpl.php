<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:45
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6748194895fbe8bdd255064-96549003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a61417a6d42d0349d47cbdab2853f561a0489b4f' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6748194895fbe8bdd255064-96549003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bdd261d29_33771625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bdd261d29_33771625')) {function content_5fbe8bdd261d29_33771625($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
