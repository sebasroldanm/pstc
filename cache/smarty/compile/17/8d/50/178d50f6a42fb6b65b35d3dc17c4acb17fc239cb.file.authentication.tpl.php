<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:00
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\referralprogram\views\templates\hook\authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111009105fbe8becd8b525-40233775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '178d50f6a42fb6b65b35d3dc17c4acb17fc239cb' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\hook\\authentication.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111009105fbe8becd8b525-40233775',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8becd9ce31_43624291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8becd9ce31_43624291')) {function content_5fbe8becd9ce31_43624291($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo smartyTranslate(array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if (isset($_POST['referralprogram'])) {?><?php echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }} ?>
