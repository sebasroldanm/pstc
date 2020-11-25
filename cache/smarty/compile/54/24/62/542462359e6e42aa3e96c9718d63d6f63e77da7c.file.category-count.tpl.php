<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:44
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9254716785fbe8bdc9d3307-68941654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '542462359e6e42aa3e96c9718d63d6f63e77da7c' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\category-count.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9254716785fbe8bdc9d3307-68941654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bdca06768_80265830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bdca06768_80265830')) {function content_5fbe8bdca06768_80265830($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
