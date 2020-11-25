<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:03
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\slip\_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14050716485fbe8bef928128-80241381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '715605e8205379c70a0938483c80da1fa1914765' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\slip\\_print_pdf_icon.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14050716485fbe8bef928128-80241381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bef9332a4_30934661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bef9332a4_30934661')) {function content_5fbe8bef9332a4_30934661($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
