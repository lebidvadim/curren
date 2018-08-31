<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 13:05:06
         compiled from "/home/dimckale/bustool.pro/www/themes/purse/accounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11244811365b851e523f9716-51450581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb138c61d26c85b80130ce85689b81371043cd3' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/purse/accounts.tpl',
      1 => 1532352683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11244811365b851e523f9716-51450581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b851e5242c558_53537722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b851e5242c558_53537722')) {function content_5b851e5242c558_53537722($_smarty_tpl) {?><h1 class="rate-title">Пополнить баланс</h1>
<?php if ($_smarty_tpl->tpl_vars['message']->value){?><div class="pirse-info"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div><?php }?>
<div class="purse-money">
    <div>У вас на балансе</div>
    <span><?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
 руб</span>
    <input type="number" name="money" min="20" value="20" id="purse-money" class="style-input" placeholder="Сумма">
</div>
<div class="purse-opl">
    <div class="title-op">Способ оплаты</div>
    <div class="oplat">
        <div class="radio-style">
            <input class="radio" type="radio" name="radio[]" id="opl-wm" value="wm" checked>
            <label for="opl-wm"><img src="/themes/img/wm.png" alt=""></label>
        </div>
        <div class="radio-style">
            <input class="radio" type="radio" name="radio[]" id="opl-in" value="in">
            <label for="opl-in"><img src="/themes/img/in.png" alt=""></label>
        </div>
    </div>
    <form action="https://merchant.webmoney.ru/lmi/payment.asp" class="oplata-wm" method="post" accept-charset='windows-1251'>
        <input type="hidden" class="money-form" name="LMI_PAYMENT_AMOUNT" value="">
        <input type="hidden" name="LMI_PAYMENT_DESC" value="Пополнение баланса BusTool">
        <input type="hidden" name="LMI_PAYEE_PURSE" value="R620010346489">
        <input type="hidden" name="iduser" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
        <button type="submit" class="btn btn-l btn-grin">Пополнить</button>
    </form>
    <form id="payment" name="payment" method="post" class="oplata-in" action="https://sci.interkassa.com/" enctype="utf-8">
        <input type="hidden" name="ik_co_id" value="5b51fdcf3d1eaf3a0c8b4569" />
        <input type="hidden" name="ik_pm_no" value="id_<?php echo time();?>
" />
        <input type="hidden" name="ik_am" class="money-form" value="" />
        <input type="hidden" name="ik_cur" value="RUB" />
        <input type="hidden" name="ik_desc" value="Пополнение баланса BusTool" />
        <input type="hidden" name="ik_sign" value="">
        <input type="hidden" name="ik_x_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
        <button type="submit" class="btn btn-l btn-grin">Пополнить</button>
    </form>
    
</div><?php }} ?>