<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:04:53
         compiled from "/home/dimckale/bustool.pro/www/modules/purse/themes/admin/admin-purse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8969194005b851035d840a9-84698895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b15653bcf777817fa752a8c50a6fe7b853e9ef2' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/modules/purse/themes/admin/admin-purse.tpl',
      1 => 1534241734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8969194005b851035d840a9-84698895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'api_balance' => 0,
    'balans' => 0,
    'balans_u' => 0,
    'rates_count' => 0,
    'rates_money' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b851035db0db2_82322709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b851035db0db2_82322709')) {function content_5b851035db0db2_82322709($_smarty_tpl) {?><h3>Баланс API</h3>
<hr>
<p>Баланс: <b><?php echo $_smarty_tpl->tpl_vars['api_balance']->value;?>
</b></p>
<p>Заявок: <b><?php echo $_smarty_tpl->tpl_vars['api_balance']->value/0.1;?>
</b></p>
<h3>Общая статистика</h3>
<hr>
<div><label for="">Сервис пополнили за весь время:</label> <?php echo $_smarty_tpl->tpl_vars['balans']->value['money']['money'];?>
 руб</div>
<div><label for="">Сервис пополнили за севодня:</label> <?php echo $_smarty_tpl->tpl_vars['balans']->value['day']['money'];?>
 руб</div>
<div><label for="">Сервис пополнили за вчера:</label> <?php echo $_smarty_tpl->tpl_vars['balans']->value['yesterday']['money'];?>
 руб</div>
<div><label for="">Сервис пополнили за неделю:</label> <?php echo $_smarty_tpl->tpl_vars['balans']->value['week']['money'];?>
 руб</div>
<div><label for="">Сервис пополнили за текущий месяц (<?php echo $_smarty_tpl->tpl_vars['balans']->value['current_month']['date_name'];?>
):</label> <?php echo $_smarty_tpl->tpl_vars['balans']->value['current_month']['money'];?>
 руб</div>
<div><label for="">Сервис пополнили за прошлый месяц (<?php echo $_smarty_tpl->tpl_vars['balans']->value['last_month']['date_name'];?>
):</label> <?php echo $_smarty_tpl->tpl_vars['balans']->value['last_month']['money'];?>
 руб</div>
<div><label for="">Сервис пополнили за <?php echo date('t');?>
 дней:</label> <?php echo $_smarty_tpl->tpl_vars['balans']->value['month']['money'];?>
 руб</div>
<hr>
<p>Сума сколько на щету у пользователей: <b><?php echo $_smarty_tpl->tpl_vars['balans_u']->value;?>
</b></p>
<h3>Тарифные планы</h3>
<hr>
<p>Количество покупок тарифного плана: <b><?php echo $_smarty_tpl->tpl_vars['rates_count']->value;?>
</b></p>

<p>Чиста прибыль с тарифных планов: <b><?php echo $_smarty_tpl->tpl_vars['rates_money']->value;?>
</b></p><?php }} ?>