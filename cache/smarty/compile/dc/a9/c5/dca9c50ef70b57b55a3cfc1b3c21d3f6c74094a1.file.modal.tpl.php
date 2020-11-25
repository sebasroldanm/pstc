<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:13
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13734071245fbe8bf9c29369-23213055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca9c50ef70b57b55a3cfc1b3c21d3f6c74094a1' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13734071245fbe8bf9c29369-23213055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf9c31a30_58984338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf9c31a30_58984338')) {function content_5fbe8bf9c31a30_58984338($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
