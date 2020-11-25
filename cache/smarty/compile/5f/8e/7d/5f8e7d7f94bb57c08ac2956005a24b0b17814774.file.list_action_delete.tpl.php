<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:10
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16748927445fbe8bf6e1c4c9-13129014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f8e7d7f94bb57c08ac2956005a24b0b17814774' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16748927445fbe8bf6e1c4c9-13129014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf6e4b351_34734855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf6e4b351_34734855')) {function content_5fbe8bf6e4b351_34734855($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
