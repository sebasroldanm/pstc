<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:55
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:633320365fbe8be76b83d4-15576002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f30d3161b2ff339dbd8eb7faabf8766b6b70416' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\blockwishlist\\my-account.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633320365fbe8be76b83d4-15576002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be76c2e71_25762035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be76c2e71_25762035')) {function content_5fbe8be76c2e71_25762035($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
