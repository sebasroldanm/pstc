<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:57
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\favoriteproducts\views\templates\hook\favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13521642335fbe8be9e1d133-96099445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5049cded0555a000d28564acd555b2b329fa13a6' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\favoriteproducts\\views\\templates\\hook\\favoriteproducts-extra.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13521642335fbe8be9e1d133-96099445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be9e49237_43626415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be9e49237_43626415')) {function content_5fbe8be9e49237_43626415($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_add" class="add">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_remove">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li><?php }} ?>
