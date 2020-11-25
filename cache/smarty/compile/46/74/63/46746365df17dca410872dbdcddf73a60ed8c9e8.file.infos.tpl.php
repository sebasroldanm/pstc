<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:57
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\cheque\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:989412855fbe8be964a182-19751716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46746365df17dca410872dbdcddf73a60ed8c9e8' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\cheque\\views\\templates\\hook\\infos.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '989412855fbe8be964a182-19751716',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be9653897_12133096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be9653897_12133096')) {function content_5fbe8be9653897_12133096($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
