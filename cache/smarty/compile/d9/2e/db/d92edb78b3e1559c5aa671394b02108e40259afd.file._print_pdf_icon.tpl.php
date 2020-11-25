<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:54
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\outstanding\_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17995382505fbe8be6de92a2-27025399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd92edb78b3e1559c5aa671394b02108e40259afd' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\outstanding\\_print_pdf_icon.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17995382505fbe8be6de92a2-27025399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be6e17298_40442111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be6e17298_40442111')) {function content_5fbe8be6e17298_40442111($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
