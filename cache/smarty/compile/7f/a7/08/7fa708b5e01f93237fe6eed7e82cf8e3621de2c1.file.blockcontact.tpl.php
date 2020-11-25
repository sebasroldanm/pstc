<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:51
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\blockcontact\blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8257767905fbe8be349fd83-55493399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fa708b5e01f93237fe6eed7e82cf8e3621de2c1' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\blockcontact\\blockcontact.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8257767905fbe8be349fd83-55493399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be34dcfe0_58005565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be34dcfe0_58005565')) {function content_5fbe8be34dcfe0_58005565($_smarty_tpl) {?>

<div id="contact_block" class="block">
	<h4 class="title_block">
		<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>

	</h4>
	<div class="block_content clearfix">
		<p>
			<?php echo smartyTranslate(array('s'=>'Our support hotline is available 24/7.','mod'=>'blockcontact'),$_smarty_tpl);?>

		</p>
		<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!='') {?>
			<p class="tel">
				<span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>

			</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['email']->value!='') {?>
			<a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>

			</a>
		<?php }?>
	</div>
</div><?php }} ?>
