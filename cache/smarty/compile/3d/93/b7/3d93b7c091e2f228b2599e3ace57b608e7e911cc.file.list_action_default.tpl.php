<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:10
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11166684305fbe8bf6d09ed2-49415138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d93b7c091e2f228b2599e3ace57b608e7e911cc' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11166684305fbe8bf6d09ed2-49415138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf6d4b695_90330125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf6d4b695_90330125')) {function content_5fbe8bf6d4b695_90330125($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
