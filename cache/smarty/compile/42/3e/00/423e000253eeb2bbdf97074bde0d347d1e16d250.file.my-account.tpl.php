<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:58
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\favoriteproducts\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1392721715fbe8bea0c3c84-19689323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423e000253eeb2bbdf97074bde0d347d1e16d250' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\favoriteproducts\\views\\templates\\hook\\my-account.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1392721715fbe8bea0c3c84-19689323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bea0f28e9_07315330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bea0f28e9_07315330')) {function content_5fbe8bea0f28e9_07315330($_smarty_tpl) {?>

<li class="favoriteproducts">
	<a
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
"
	title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value) {?>
			<i class="icon-heart-empty"></i>
			<span><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>

		<?php }?>
	</a>
</li>
<?php }} ?>
