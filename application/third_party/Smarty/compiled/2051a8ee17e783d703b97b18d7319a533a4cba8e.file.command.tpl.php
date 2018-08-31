<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 23:25:35
         compiled from "/home/dimckale/bustool.pro/www/themes/users/command.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16260024165b85afbfaa1b49-44465936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2051a8ee17e783d703b97b18d7319a533a4cba8e' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/users/command.tpl',
      1 => 1532611344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16260024165b85afbfaa1b49-44465936',
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
  'unifunc' => 'content_5b85afbfadee10_01907120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85afbfadee10_01907120')) {function content_5b85afbfadee10_01907120($_smarty_tpl) {?><div class="black-list-top deleg">
    <div class="info">
        <div>Построить свою команду</div>
        <p>Вы може сформировать свою команду. Это даст вам возможность распределять между своей
            команде силу и публикации.</p>
    </div>
    <a href="#" class="btn btn-m btn-grin" data-modal="pod-mod-del-add">Пригласить</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['message']->value){?>
    <div style="margin-top: 30px"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>


<?php if (count($_smarty_tpl->tpl_vars['invited']->value)>0){?>
    <div class="titleH3"><h3>Вы пригласили</h3></div>
<div class="invitation">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['invited']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['invited']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
    <div class="item<?php if ($_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['type_d']==1){?> red<?php }?>">
        <div class="item-bk">
            <div class="card-user">
                <div class="foto"></div>
                <div class="info">
                    <div class="username"><?php echo $_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['id_c']['username'];?>
</div>
                    <div class="email"><?php echo $_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['id_c']['email'];?>
</div>
                    <div class="message">
                        <?php if ($_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['type_d']==0){?>
                        Приглашение отправлено
                        <?php }elseif($_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['type_d']==1){?>
                        Приглашение откланено
                        <?php }?>
                    </div>
                </div>
            </div>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['type_d']==0){?>
                <a href="/delegation/del/<?php echo $_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['id_d'];?>
" class="btn btn-l btn-red">Отклонить</a>
                <?php }else{ ?>
                <a href="/delegation/del/<?php echo $_smarty_tpl->tpl_vars['invited']->value[$_smarty_tpl->tpl_vars['i']->value]['id_d'];?>
" class="del"></a>
                <?php }?>
            </div>
        </div>
    </div>
    <?php }} ?>
</div>
<?php }else{ ?>
    
        
        
    
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['command']->value)>0){?>
    <div class="titleH3"><h3>Моя команда</h3></div>
<div class="command my-command">
    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['command']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['command']->value); $_smarty_tpl->tpl_vars['j']->value++){
?>
    <div class="item">
        <div class="left">
            <div class="card-user">
                <div class="foto"></div>
                <div class="info">
                    <div class="username"><?php echo $_smarty_tpl->tpl_vars['command']->value[$_smarty_tpl->tpl_vars['j']->value]['id_c']['username'];?>
</div>
                    <div class="email"><?php echo $_smarty_tpl->tpl_vars['command']->value[$_smarty_tpl->tpl_vars['j']->value]['id_c']['email'];?>
</div>
                </div>
            </div>
            <div class="balan">
                <div><?php echo $_smarty_tpl->tpl_vars['command']->value[$_smarty_tpl->tpl_vars['j']->value]['id_c']['force'];?>
</div>
                <span>сил</span>
            </div>
            <div class="balan">
                <div><?php echo $_smarty_tpl->tpl_vars['command']->value[$_smarty_tpl->tpl_vars['j']->value]['id_c']['posts'];?>
</div>
                <span>публикаций</span>
            </div>
        </div>
        <div class="btn-bk">
            <a href="#" data-modal="pod-mod-del-tran" data-id="<?php echo $_smarty_tpl->tpl_vars['command']->value[$_smarty_tpl->tpl_vars['j']->value]['id_c']['id'];?>
" class="btn btn-l btn-yellow">Передать ресурсы</a>
            <a href="/delegation/del/<?php echo $_smarty_tpl->tpl_vars['command']->value[$_smarty_tpl->tpl_vars['j']->value]['id_d'];?>
" class="del"></a>
        </div>
    </div>
    <?php }} ?>
</div>
<?php }else{ ?>
    
        
        
    
<?php }?><?php }} ?>