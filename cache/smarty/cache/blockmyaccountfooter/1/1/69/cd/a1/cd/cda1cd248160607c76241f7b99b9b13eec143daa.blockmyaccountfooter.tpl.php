<?php /*%%SmartyHeaderCode:79845fbeca5ae706f4-89024267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cda1cd248160607c76241f7b99b9b13eec143daa' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79845fbeca5ae706f4-89024267',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbeca5b1a9878_58423089',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbeca5b1a9878_58423089')) {function content_5fbeca5b1a9878_58423089($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://pstc.test/index.php?controller=my-account" title="Administrar mi cuenta de cliente" rel="nofollow">Mi cuenta</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://pstc.test/index.php?controller=history" title="Mis pedidos" rel="nofollow">Mis pedidos</a></li>
						<li><a href="http://pstc.test/index.php?controller=order-slip" title="Mis facturas por abono" rel="nofollow">Mis facturas por abono</a></li>
			<li><a href="http://pstc.test/index.php?controller=addresses" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://pstc.test/index.php?controller=identity" title="Administrar mis datos personales" rel="nofollow">Mis datos personales</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
