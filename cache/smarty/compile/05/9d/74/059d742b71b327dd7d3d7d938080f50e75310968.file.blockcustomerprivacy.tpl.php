<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:51
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\blockcustomerprivacy\blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19194103705fbe8be3aa4ef2-34162092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059d742b71b327dd7d3d7d938080f50e75310968' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\blockcustomerprivacy\\blockcustomerprivacy.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19194103705fbe8be3aa4ef2-34162092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be3ace123_53749078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be3ace123_53749078')) {function content_5fbe8be3ace123_53749078($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3 class="page-subheading">
		<?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>

	</h3>
	<div style="width:21px; float:left;">
		<div class="required checkbox">
			<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" autocomplete="off"/>
		</div>
	</div>
	<div style="width: 92%; float: left; margin-top: 8px;">
        <label for="customer_privacy" style="font-weight: normal;"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>				
	</div>
</fieldset><?php }} ?>
