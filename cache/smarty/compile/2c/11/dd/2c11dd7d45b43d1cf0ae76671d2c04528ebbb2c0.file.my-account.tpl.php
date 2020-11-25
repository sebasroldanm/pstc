<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:58
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\mailalerts\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4338381225fbe8beae033c9-05576657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c11dd7d45b43d1cf0ae76671d2c04528ebbb2c0' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\mailalerts\\views\\templates\\hook\\my-account.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4338381225fbe8beae033c9-05576657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8beae0d578_69723912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8beae0d578_69723912')) {function content_5fbe8beae0d578_69723912($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
