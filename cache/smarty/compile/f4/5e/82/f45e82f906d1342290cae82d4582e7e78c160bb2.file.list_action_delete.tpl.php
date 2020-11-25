<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:42
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\attachments\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6980810365fbe8bda6ac130-26764916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45e82f906d1342290cae82d4582e7e78c160bb2' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\attachments\\helpers\\list\\list_action_delete.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6980810365fbe8bda6ac130-26764916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'id_attachment' => 0,
    'product_attachements' => 0,
    'product_list' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bda772ba9_75427605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bda772ba9_75427605')) {function content_5fbe8bda772ba9_75427605($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="<?php if (isset($_smarty_tpl->tpl_vars['product_attachements']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id_attachment']->value, ENT_QUOTES, 'UTF-8', true)])) {?>if (attachments.confirmProductAttached('<?php echo $_smarty_tpl->tpl_vars['product_list']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id_attachment']->value, ENT_QUOTES, 'UTF-8', true)];?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};<?php } else { ?>return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')<?php }?>"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
