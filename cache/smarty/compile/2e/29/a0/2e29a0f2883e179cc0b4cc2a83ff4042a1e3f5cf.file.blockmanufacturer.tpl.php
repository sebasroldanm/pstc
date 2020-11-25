<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:52
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\blockmanufacturer\blockmanufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9176572225fbe8be4e8e676-38675898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e29a0f2883e179cc0b4cc2a83ff4042a1e3f5cf' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9176572225fbe8be4e8e676-38675898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be4eab4f5_30097328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be4eab4f5_30097328')) {function content_5fbe8be4eab4f5_30097328($_smarty_tpl) {?>

<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
		<?php if ($_smarty_tpl->tpl_vars['display_link_manufacturer']->value) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
">
		<?php }?>
				<?php echo smartyTranslate(array('s'=>'Manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['display_link_manufacturer']->value) {?>
			</a>
		<?php }?>
	</p>
	<div class="block_content list-block">
		<?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['text_list']->value) {?>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
					<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']) {?>first_item<?php } else { ?>item<?php }?>">
						<a 
						href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about %s','mod'=>'blockmanufacturer','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name'])),$_smarty_tpl);?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</li>
					<?php }?>
				<?php } ?>
			</ul>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['form_list']->value) {?>
				<form action="<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8', true);?>
" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0"><?php echo smartyTranslate(array('s'=>'All manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
						</select>
					</div>
				</form>
			<?php }?>
		<?php } else { ?>
			<p><?php echo smartyTranslate(array('s'=>'No manufacturer','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
