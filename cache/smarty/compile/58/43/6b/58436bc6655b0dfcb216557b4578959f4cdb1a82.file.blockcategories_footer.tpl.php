<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:50
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\blockcategories\blockcategories_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14244282435fbe8be2cd80c9-79979210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58436bc6655b0dfcb216557b4578959f4cdb1a82' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\blockcategories\\blockcategories_footer.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14244282435fbe8be2cd80c9-79979210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'numberColumn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be2d11199_90726853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be2d11199_90726853')) {function content_5fbe8be2d11199_90726853($_smarty_tpl) {?>

<!-- Block categories module -->
<section class="blockcategories_footer footer-block col-xs-12 col-sm-2">
	<h4><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl);?>
</h4>
	<div class="category_footer toggle-footer">
		<div class="list">
			<ul class="<?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

				<?php }?>
			
				<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['iteration']%$_smarty_tpl->tpl_vars['numberColumn']->value)==0&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
			</ul>
		</div>
	</div> <!-- .category_footer -->

	<div class="category_footer">
		<div class="list">
			<ul class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
				<?php }?>
			<?php } ?>
			</ul>
		</div>
	</div> <!-- .category_footer -->
</section>
<!-- /Block categories module -->
<?php }} ?>
