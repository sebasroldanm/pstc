<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:57
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\favoriteproducts\views\templates\hook\favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7390763905fbe8be9f25cd3-79801406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19ecca565613019c167e84d4467987988f5d3cff' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\favoriteproducts\\views\\templates\\hook\\favoriteproducts-header.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7390763905fbe8be9f25cd3-79801406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be9f37c73_14541625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be9f37c73_14541625')) {function content_5fbe8be9f37c73_14541625($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_add'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),Tools::usingSecureMode()))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_remove'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),Tools::usingSecureMode()))),$_smarty_tpl);?>
<?php if (isset($_GET['id_product'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_id_product'=>intval($_GET['id_product'])),$_smarty_tpl);?>
<?php }?><?php }} ?>
