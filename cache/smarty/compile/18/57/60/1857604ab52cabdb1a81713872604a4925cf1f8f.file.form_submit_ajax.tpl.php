<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:06
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\form_submit_ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15957832275fbe8bf23ea525-49856859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1857604ab52cabdb1a81713872604a4925cf1f8f' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\form_submit_ajax.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15957832275fbe8bf23ea525-49856859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf23f5f20_70485954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf23f5f20_70485954')) {function content_5fbe8bf23f5f20_70485954($_smarty_tpl) {?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit(function(e) {
			e.preventDefault();
			var form_datas = new Object;
			form_datas['liteDisplaying'] = 1;
			form_datas['submitFormAjax'] = 1;
			var form_inputs = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form input, #<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form textarea, #<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form button');
			var form_selects = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form select');
			$.each(form_inputs, function() {
				if (this.type == 'radio' || this.type == 'checkbox')
					if (!this.checked)
						return true;
				form_datas[this.name] = this.value;
			});
			$.each(form_selects, function() {
				if	(this.options != undefined && this.options.selectedIndex != undefined && this[this.options.selectedIndex] != undefined)
					form_datas[this.name] = this[this.options.selectedIndex].value;
			});
			$.ajax({
				type: this.method,
				url : this.action,
				async: true,
				dataType: "html",
				data : form_datas,
				success : function(res)
				{
					// Replace de body by the new one
					$('body').html(res.replace(/^.*<body>/, '').replace(/<\/body>.*$/, ''));
				}
			});
		});
	});
</script>
<?php }} ?>
