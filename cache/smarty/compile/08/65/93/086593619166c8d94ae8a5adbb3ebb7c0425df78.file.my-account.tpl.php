<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:00
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\referralprogram\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20903931135fbe8bece5a157-15798630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '086593619166c8d94ae8a5adbb3ebb7c0425df78' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\hook\\my-account.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20903931135fbe8bece5a157-15798630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bece80e75_27358971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bece80e75_27358971')) {function content_5fbe8bece80e75_27358971($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<li class="referralprogram">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-cogs"></i><span><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE ReferralProgram --><?php }} ?>
