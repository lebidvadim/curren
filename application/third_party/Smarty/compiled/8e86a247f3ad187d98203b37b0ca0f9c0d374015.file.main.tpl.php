<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 16:05:37
         compiled from "/home/dimckale/bustool.pro/www/themes/support/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3701854785b8548a1a7e142-49442224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e86a247f3ad187d98203b37b0ca0f9c0d374015' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/support/main.tpl',
      1 => 1532353460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3701854785b8548a1a7e142-49442224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'message' => 0,
    'support' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b8548a1b0c472_12446038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8548a1b0c472_12446038')) {function content_5b8548a1b0c472_12446038($_smarty_tpl) {?><div class="black-list-top support">
    <div class="info">
        <div>Техподдержка</div>
        <p>Если у вас возникли какието вопросы по работе сервиса. Вы может написать нам и мы вам постараемся помочь. С уважением техническая поддержка проекта!</p>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->group_id!=1){?>
    <a href="/panel/support/add" class="btn btn-m btn-grin">Создать обращение</a>
    <?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['message']->value){?>
    <div style="margin-top: 30px"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['support']->value)>0){?>
<div class="title-supp">Список вашых обращений</div>
<div class="support-bk">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['support']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['support']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
    <div class="item">
        <div class="supp-l">
            <div class="supp-title"><a href="/panel/support/disc/<?php echo $_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['id_s'];?>
"><?php echo $_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['subject'];?>
</a></div>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->group_id!=1){?>
                <?php if ($_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==0){?>
                <div class="txt-c-or">Ожидается ответ от техподдержки</div>
                <?php }elseif($_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==1){?>
                    <div class="txt-c-gr">Получен ответ от техподдержки</div>
                <?php }elseif($_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==2){?>
                    <div class="txt-c-sr">Вопрос решен!</div>
                <?php }?>
            <?php }else{ ?>
                <?php if ($_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==0){?>
                    <div class="txt-c-or">Ожидается ответ от пользователя</div>
                <?php }elseif($_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==1){?>
                    <div class="txt-c-gr">Получен ответ от пользователя</div>
                <?php }elseif($_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==2){?>
                    <div class="txt-c-sr">Вопрос решен!</div>
                <?php }?>
            <?php }?>
        </div>
        <div class="supp-r">
            <?php if ($_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['count_dis']>0){?>
            <a href="/panel/support/disc/<?php echo $_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['id_s'];?>
" class="supp-em"></a>
            <?php }else{ ?>
            <span class="supp-em"></span>
            <?php }?>
            <a href="/panel/support/disc/<?php echo $_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['id_s'];?>
" class="btn btn-l btn-blue"><?php if ($_smarty_tpl->tpl_vars['support']->value[$_smarty_tpl->tpl_vars['i']->value]['status']!=2){?>Ответить<?php }else{ ?>Подробнее<?php }?></a>
        </div>
    </div>
    <?php }} ?>
</div>
<?php }else{ ?>
    <div class="info-bk bl">
        <div class="icon"></div>
        <div class="text">У вас нет вопросов в Техподержку.</div>
    </div>
<?php }?><?php }} ?>