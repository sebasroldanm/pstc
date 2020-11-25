<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:05
         compiled from "C:\laragon\www\pstc\admin\themes\default\template\controllers\themes\helpers\view\importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17511353445fbe8bf172a8c3-41955332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd02786cd49cd968526742754133130da48bedd78' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\admin\\themes\\default\\template\\controllers\\themes\\helpers\\view\\importtheme_view.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17511353445fbe8bf172a8c3-41955332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_new_theme_label' => 0,
    'context_mode' => 0,
    'add_new_theme_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8bf1737a04_81749239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8bf1737a04_81749239')) {function content_5fbe8bf1737a04_81749239($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['context_mode']->value==Context::MODE_HOST) {?><?php echo smartyTranslate(array('s'=>'(Advanced)'),$_smarty_tpl);?>
<?php }?>
    </h3>
    <p><?php echo smartyTranslate(array('s'=>'Duplicate an existing theme and edit it; or create a new theme from scratch! Recommended for advanced users only.'),$_smarty_tpl);?>
</p>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>
