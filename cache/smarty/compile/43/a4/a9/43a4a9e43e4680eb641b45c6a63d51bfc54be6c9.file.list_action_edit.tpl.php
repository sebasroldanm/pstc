<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:04
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\tax_rules\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6112078235fbe8bf0561736-32424948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a4a9e43e4680eb641b45c6a63d51bfc54be6c9' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_action_edit.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6112078235fbe8bf0561736-32424948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf05948a0_38933938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf05948a0_38933938')) {function content_5fbe8bf05948a0_38933938($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
