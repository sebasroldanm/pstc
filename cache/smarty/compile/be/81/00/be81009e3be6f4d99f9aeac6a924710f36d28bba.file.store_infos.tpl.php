<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:23
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14812028305fbe8c03c0c4c3-75306812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be81009e3be6f4d99f9aeac6a924710f36d28bba' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\store_infos.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14812028305fbe8c03c0c4c3-75306812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8c03c16b58_89410036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8c03c16b58_89410036')) {function content_5fbe8c03c16b58_89410036($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>
