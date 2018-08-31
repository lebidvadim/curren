<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:45:34
         compiled from "/home/dimckale/bustool.pro/www/themes/users/invitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12984173605b850baebf46f3-52093718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3de4664ddc53c42be677d08bd48ae1be48ef132f' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/users/invitation.tpl',
      1 => 1532596838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12984173605b850baebf46f3-52093718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'invited' => 0,
    'i' => 0,
    'command' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850baec64a15_56485367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850baec64a15_56485367')) {function content_5b850baec64a15_56485367($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['message']->value){?>
    <div style="margin-top: 30px"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
<div class="titleH3"><h3>Вас пиглашают!</h3></div>
<?php if (count($_smarty_tpl->tpl_vars['invited']->value)>0){?>
<div class="command invited">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['invited']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['invited']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
    <div class="item blue">
        <div class="left">
            <div class="card-user">
                <div class="foto"></div>
                <div class="info">
                    <div class="username"><?php echo $_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['id_u']['username'];?>
</div>
                    <div class="email"><?php echo $_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['id_u']['email'];?>
</div>
                </div>
            </div>
        </div>
        <div class="btn-bk">
            <a href="/delegation/accept/<?php echo $_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['id_d'];?>
" class="btn btn-l btn-grin">Принять</a>
            <a href="/delegation/reject/<?php echo $_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['id_d'];?>
" class="btn btn-l btn-red">Отклонить</a>
        </div>
    </div>
    <?php }} ?>
</div>
<?php }else{ ?>
    <div class="info-bk bl">
        <div class="icon"></div>
        <div class="text">Вас не кто в свою команду не пригласил.</div>
    </div>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['command']->value)>0){?>
    <div class="titleH3"><h3>Вы в команде</h3></div>
<div class="invitation">
    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['command']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['command']->value); $_smarty_tpl->tpl_vars['j']->value++){
?>
    <div class="item grey">
        <div class="item-bk">
            <div class="card-user">
                <div class="foto"></div>
                <div class="info">
                    <div class="username"><?php echo $_smarty_tpl->tpl_vars['command']->value[$_smarty_tpl->tpl_vars['j']->value]['id_u']['username'];?>
</div>
                    <div class="email"><?php echo $_smarty_tpl->tpl_vars['command']->value[$_smarty_tpl->tpl_vars['j']->value]['id_u']['email'];?>
</div>
                </div>
            </div>
            <div><a href="/delegation/delcom/<?php echo $_smarty_tpl->tpl_vars['command']->value[$_smarty_tpl->tpl_vars['j']->value]['id_d'];?>
" class="del"></a></div>
        </div>
    </div>
    <?php }} ?>
</div>
<?php }else{ ?>
    
        
        
    
<?php }?><?php }} ?>