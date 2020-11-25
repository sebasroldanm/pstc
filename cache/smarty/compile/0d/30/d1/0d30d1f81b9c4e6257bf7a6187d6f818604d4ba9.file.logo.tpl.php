<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:43
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\carrier_wizard\logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20802721325fbe8bdb428ee1-30267253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d30d1f81b9c4e6257bf7a6187d6f818604d4ba9' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\carrier_wizard\\logo.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20802721325fbe8bdb428ee1-30267253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier_logo' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bdb4416a8_49128753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bdb4416a8_49128753')) {function content_5fbe8bdb4416a8_49128753($_smarty_tpl) {?>

<div id="carrier_logo_block" class="panel">
	<div class="panel-heading">
		<?php echo smartyTranslate(array('s'=>'Logo'),$_smarty_tpl);?>

		<div class="panel-heading-action">
			<a id="carrier_logo_remove" class="btn btn-default" <?php if (!$_smarty_tpl->tpl_vars['carrier_logo']->value) {?>style="display:none"<?php }?> href="javascript:removeCarrierLogo();">
				<i class="icon-trash"></i>
			</a>
		</div>
	</div>
	<img id="carrier_logo_img" src="<?php if ($_smarty_tpl->tpl_vars['carrier_logo']->value) {?><?php echo $_smarty_tpl->tpl_vars['carrier_logo']->value;?>
<?php } else { ?>../img/admin/carrier-default.jpg<?php }?>" class="img-thumbnail" alt=""/>
</div>

<script type="text/javascript">
	var carrier_translation_undefined = '<?php echo smartyTranslate(array('s'=>'undefined','js'=>1),$_smarty_tpl);?>
';

	function removeCarrierLogo()
	{
		if (confirm('<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete the logo?','js'=>1),$_smarty_tpl);?>
'))
		{
			$('#carrier_logo_img').attr('src', '../img/admin/carrier-default.jpg');
			$('#logo').val('null');
			$('#carrier_logo_remove').hide();
		}
	}
	
	function uploadCarrierLogo() {
		$.ajaxFileUpload({
			url: 'ajax-tab.php?tab=AdminCarrierWizard&token=<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
&action=uploadLogo',
			secureuri: false,
			fileElementId: 'carrier_logo_input',
			dataType: 'xml',
			success: function (data, status) {
				data = data.getElementsByTagName('return')[0];
				var message = data.getAttribute("message");
				if (data.getAttribute("result") == "success")
				{
					$('#carrier_logo_img').attr('src', message);
					$('#logo').val(message);
					$('#carrier_logo_remove').show();
				}
				else
					alert(message);
			}
		});
	}
</script><?php }} ?>
