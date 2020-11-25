<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:57
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\cashondelivery\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17672949595fbe8be92d4a37-89806204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4249404ee3b776a1e76728f4186710b582c60fd' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\cashondelivery\\views\\templates\\hook\\payment.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17672949595fbe8be92d4a37-89806204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be9303973_45473747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be9303973_45473747')) {function content_5fbe8be9303973_45473747($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cash" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" rel="nofollow">
            	<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>

            	<span>(<?php echo smartyTranslate(array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl);?>
)</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
