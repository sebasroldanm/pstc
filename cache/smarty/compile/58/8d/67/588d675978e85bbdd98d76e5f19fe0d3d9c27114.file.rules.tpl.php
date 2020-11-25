<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:53:00
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\referralprogram\views\templates\front\rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13745892345fbe8becc93545-11753489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588d675978e85bbdd98d76e5f19fe0d3d9c27114' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\front\\rules.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13745892345fbe8becc93545-11753489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8becca3c13_86744243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8becca3c13_86744243')) {function content_5fbe8becca3c13_86744243($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\laragon\\www\\pstc\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
