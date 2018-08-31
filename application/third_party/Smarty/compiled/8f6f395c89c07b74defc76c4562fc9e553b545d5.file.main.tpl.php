<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 15:21:15
         compiled from "/home/dimckale/bustool.pro/www/themes/updates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14741156675b853e3b232714-66307530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f6f395c89c07b74defc76c4562fc9e553b545d5' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/updates/main.tpl',
      1 => 1533401633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14741156675b853e3b232714-66307530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'message' => 0,
    'i' => 0,
    'date_form' => 0,
    'j' => 0,
    'updates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b853e3b28e0e8_42822970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b853e3b28e0e8_42822970')) {function content_5b853e3b28e0e8_42822970($_smarty_tpl) {?><div class="content-top">
    <div>
        <h1>История обновлений</h1>
        <div class="crumbs"><a href="/panel">Главная</a><span>История обновлений</span></div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['user']->value->group_id==1){?>
<hr>
    <?php if ($_smarty_tpl->tpl_vars['message']->value){?>
        <div style="margin-top: 30px"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <?php }?>
<form action="" method="post" class="form-up">
    <select class="style-select" name="type" id="">
        <option value="1">Постер</option>
        <option value="2">Мой кабинет</option>
        <option value="3">Тарифы</option>
        <option value="4">Анализ</option>
        <option value="5">Дилигирование</option>
        <option value="6">Кошелек</option>
        <option value="7">Поддержка</option>
    </select>
    <textarea name="mess" id="" cols="30" rows="10" class="style-textarea"></textarea>
    <button type="submit" class="btn btn-grin btn-l">Отправить</button>
</form>
<hr>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['date_form']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['date_form']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
<div class="updates-bk">
    <div class="updates-date<?php if (date('d.m.Y',time())==$_smarty_tpl->tpl_vars['date_form']->value[$_smarty_tpl->tpl_vars['i']->value]){?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['date_form']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</div>
    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['updates']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['updates']->value); $_smarty_tpl->tpl_vars['j']->value++){
?>
        <?php if ($_smarty_tpl->tpl_vars['date_form']->value[$_smarty_tpl->tpl_vars['i']->value]==$_smarty_tpl->tpl_vars['updates']->value[$_smarty_tpl->tpl_vars['j']->value]['date_form']){?>
            <div class="updates-item">
                <div class="type"><?php echo $_smarty_tpl->tpl_vars['updates']->value[$_smarty_tpl->tpl_vars['j']->value]['type'];?>
</div>
                <div class="mess">—&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['updates']->value[$_smarty_tpl->tpl_vars['j']->value]['mess'];?>
</div>
            </div>
        <?php }?>
    <?php }} ?>
</div>
<?php }} ?><?php }} ?>