<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:00
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\referralprogram\views\templates\hook\order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11728265975fbe8becf11a13-09839862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aa140406da70c04a888a98e3f10f4348db61373' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\hook\\order-confirmation.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11728265975fbe8becf11a13-09839862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_firstname' => 0,
    'sponsor_lastname' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8becf40da6_92121722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8becf40da6_92121722')) {function content_5fbe8becf40da6_92121722($_smarty_tpl) {?>

<p class="success">
	<?php echo smartyTranslate(array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

</p>
<br/><?php }} ?>
