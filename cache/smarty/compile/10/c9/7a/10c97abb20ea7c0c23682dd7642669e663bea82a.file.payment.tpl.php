<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:57
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\cheque\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4830280515fbe8be9700700-17548253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c97abb20ea7c0c23682dd7642669e663bea82a' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\cheque\\views\\templates\\hook\\payment.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4830280515fbe8be9700700-17548253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be970cb49_84979729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be970cb49_84979729')) {function content_5fbe8be970cb49_84979729($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
