<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:58
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\loyalty\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5337061525fbe8bea5cc346-74563338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '953faf4952c423c9947f123a752a31b0ff486073' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\loyalty\\views\\templates\\hook\\my-account.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5337061525fbe8bea5cc346-74563338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bea6077d1_27766428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bea6077d1_27766428')) {function content_5fbe8bea6077d1_27766428($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
