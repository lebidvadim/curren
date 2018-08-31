<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:04:11
         compiled from "/home/dimckale/bustool.pro/www/modules/users/themes/admin/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17602678245b85100ba31804-56498399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ed316e13f8bcc0ea44b9efea915b477b211bfb1' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/modules/users/themes/admin/user.tpl',
      1 => 1535346510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17602678245b85100ba31804-56498399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'users' => 0,
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b85100ba5d4a4_84906476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85100ba5d4a4_84906476')) {function content_5b85100ba5d4a4_84906476($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/dimckale/bustool.pro/www/application/third_party/Smarty/plugins/modifier.date_format.php';
?><div class="container pl-0 pr-0">
<div class="row">
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['users']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['users']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-4">
		<div class="bg-white pb-3 border border-secondary rounded d-flex flex-column align-items-center">
			<div class="mt-3"><img width="150" class="rounded-circle" src="/uploads/users/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['i']->value]['foto'];?>
" alt=""></div>
			<div class="border border-light border-right-0 border-left-0 border-bottom-0 w-100 mt-3 mb-3"></div>
			<div>Последний вход: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['i']->value]['last_login'],"%d-%m-%Y");?>
</div>
			<div class="w-100 pl-3 pr-3 d-flex justify-content-between">
				<a href="/admin/edit-user/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['i']->value]['username'];?>
</a>
				<div class="bg-primary rounded pl-2 pr-2 text-white"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['i']->value]['money'];?>
 руб.</div>
			</div>
		</div>
	</div>
	<?php }} ?>
</div>
</div>
<nav aria-label="...">
  <ul class="pagination">
<?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

</ul>
</nav><?php }} ?>