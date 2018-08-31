<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:04:52
         compiled from "/home/dimckale/bustool.pro/www/modules/rates/themes/admin/admin-rates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2717113455b851034084816-79481515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eecd852b496476c2e53e69a1857c68638e94ecc' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/modules/rates/themes/admin/admin-rates.tpl',
      1 => 1533575315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2717113455b851034084816-79481515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'rates_u' => 0,
    'j' => 0,
    'rates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b8510340ccd63_12871143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8510340ccd63_12871143')) {function content_5b8510340ccd63_12871143($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/dimckale/bustool.pro/www/application/third_party/Smarty/plugins/modifier.date_format.php';
?><div class="row">
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['rates_u']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['rates_u']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
	<div class="col-12">
		<div class="rates-admin">
			<div class="user-admin">
				<div class="img">
					<div style="background-image: url(/uploads/users/<?php echo $_smarty_tpl->tpl_vars['rates_u']->value[$_smarty_tpl->tpl_vars['i']->value]['foto'];?>
);"></div>
				</div>
				<div class="info">
					<div><b>Имя</b>: <?php echo $_smarty_tpl->tpl_vars['rates_u']->value[$_smarty_tpl->tpl_vars['i']->value]['username'];?>
</div>
					<div><b>Емаил</b>: <?php echo $_smarty_tpl->tpl_vars['rates_u']->value[$_smarty_tpl->tpl_vars['i']->value]['email'];?>
</div>
					<div><b>Денег</b>: <?php echo $_smarty_tpl->tpl_vars['rates_u']->value[$_smarty_tpl->tpl_vars['i']->value]['money'];?>
 руб.</div>
					<div><b>Сил</b>: <?php echo $_smarty_tpl->tpl_vars['rates_u']->value[$_smarty_tpl->tpl_vars['i']->value]['force'];?>
</div>
					<div><b>Тарифный план</b>: <?php echo $_smarty_tpl->tpl_vars['rates_u']->value[$_smarty_tpl->tpl_vars['i']->value]['rate_u']['name_r'];?>
</div>
					<div><b>Дата окончания тарифа</b>: <?php if ($_smarty_tpl->tpl_vars['rates_u']->value[$_smarty_tpl->tpl_vars['i']->value]['end_date_tarif']!=0){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rates_u']->value[$_smarty_tpl->tpl_vars['i']->value]['end_date_tarif'],"%d-%m-%Y, в %H:%M");?>
<?php }else{ ?>Закончился тарифный план<?php }?></div>
					
				</div>
			</div>
			<div class="table">
				<table style="width: 100%">
					<tr>
						<th>Имя тарифа</th>
						<th>Цена</th>
						<th>Дата старта</th>
						<th>Дата окончания</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['rates']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['rates']->value); $_smarty_tpl->tpl_vars['j']->value++){
?>
					<?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['j']->value]['id_u']==$_smarty_tpl->tpl_vars['rates_u']->value[$_smarty_tpl->tpl_vars['i']->value]['id']){?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['j']->value]['user']['rate']['name_r'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['j']->value]['user']['rate']['price_r'];?>
 руб.</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['j']->value]['date_ru_st'],"%d-%m-%Y, в %H:%M");?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['j']->value]['date_ru_end'],"%d-%m-%Y, в %H:%M");?>
</td>
					</tr>
					<?php }?>
					<?php }} ?>
				</table>
			</div>
		</div>
	</div>
	<?php }} ?>

</div><?php }} ?>