<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 16:52:54
         compiled from "C:\laragon\www\pstc\themes\default-bootstrap\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17461990785fbe8be6817115-55149717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cb529af5bc37bbb2167237a32dab0c0e0e872fc' => 
    array (
      0 => 'C:\\laragon\\www\\pstc\\themes\\default-bootstrap\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1504540662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17461990785fbe8be6817115-55149717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe8be6828f49_72877900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe8be6828f49_72877900')) {function content_5fbe8be6828f49_72877900($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Menu",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
