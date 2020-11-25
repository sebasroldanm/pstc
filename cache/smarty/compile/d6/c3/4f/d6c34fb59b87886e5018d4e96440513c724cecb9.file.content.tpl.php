<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:41
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4119685165fbe8bd93c64d7-89725506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6c34fb59b87886e5018d4e96440513c724cecb9' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\content.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4119685165fbe8bd93c64d7-89725506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bd97be059_19200618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bd97be059_19200618')) {function content_5fbe8bd97be059_19200618($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
