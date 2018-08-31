<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 15:57:50
         compiled from "/home/dimckale/bustool.pro/www/themes/blacklist/blacklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1694200975b8546ce692569-35503457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c5cca7df503d3d0662da6d48c352d41b348eca2' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/blacklist/blacklist.tpl',
      1 => 1532355554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1694200975b8546ce692569-35503457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'message' => 0,
    'i' => 0,
    'black_list' => 0,
    'j' => 0,
    'flag' => 0,
    'fl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b8546ce714608_73845034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8546ce714608_73845034')) {function content_5b8546ce714608_73845034($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user']->value->rates->id_r!=1){?>
<div class="black-list-top">
    <div class="info">
        <div>Ваш чёрный список</div>
        <p>Вы можете создать свой собственный чёрный список и уже строить анализ ссылок по своему чёрному списку
            + чёрный список от сервиса</p>
    </div>
    <a href="#" class="btn btn-m btn-grin" data-modal="pod-mod-bl">Добавить сайт</a>
</div>
    <?php if ($_smarty_tpl->tpl_vars['message']->value){?>
        <div style="margin-top: 30px">
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
    <?php }?>
<div class="black-list or blacklist-checkbox">
    <?php $_smarty_tpl->tpl_vars['fl'] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['black_list']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['black_list']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
        <?php if ($_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['type_b']==1){?>
    <div class="item">
        <div class="item-bk or">
            <div class="left">
                <img src="http://www.google.com/s2/favicons?domain=<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['url_b'];?>
" alt="">
                <a href="http://<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['url_b'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['url_b'];?>
</a>
            </div>
            <div class="right">
                <div class="checkbox-bk or">
                    <?php $_smarty_tpl->tpl_vars['flag'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['user']->value->hide_black_list)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['user']->value->hide_black_list); $_smarty_tpl->tpl_vars['j']->value++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b']==$_smarty_tpl->tpl_vars['user']->value->hide_black_list[$_smarty_tpl->tpl_vars['j']->value]){?>
                            <?php $_smarty_tpl->tpl_vars['flag'] = new Smarty_variable(1, null, 0);?>
                        <?php }?>
                    <?php }} ?>
                    <input type="checkbox" class="checkbox" date-id-bl="<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b'];?>
" id="checkbox-u<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b'];?>
"<?php if ($_smarty_tpl->tpl_vars['flag']->value==0){?> checked<?php }?>/>
                    <label for="checkbox-u<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b'];?>
"></label>
                </div>
                <a href="/blacklist/del/<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b'];?>
" class="del"></a>
            </div>
        </div>
    </div>
            <?php $_smarty_tpl->tpl_vars['fl'] = new Smarty_variable(1, null, 0);?>
        <?php }?>
    <?php }} ?>
</div>
<?php if ($_smarty_tpl->tpl_vars['fl']->value==0){?>
    <div class="info-bk bl">
        <div class="icon"></div>
        <div class="text">В вашем чёрнм списку нету сайтов.</div>
    </div>
<?php }?>
<?php }else{ ?>
    <div class="info-bk bl">
        <div class="icon"></div>
        <div class="text">В этом тарифном плане вам не доступно формировать свой личный чёрный список.</div>
    </div>
<?php }?>
<div class="title-bl">Чёрный список сервиса</div>
<div class="black-list blacklist-checkbox">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['black_list']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['black_list']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
    <?php if ($_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['type_b']==0){?>
    <div class="item">
        <div class="item-bk">
            <div class="left">
                <img src="http://www.google.com/s2/favicons?domain=<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['url_b'];?>
" alt="">
                <a href="http://<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['url_b'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['url_b'];?>
</a>
            </div>
            <div class="right">
                <div class="checkbox-bk">
                    <?php $_smarty_tpl->tpl_vars['flag'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['user']->value->hide_black_list)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['user']->value->hide_black_list); $_smarty_tpl->tpl_vars['j']->value++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b']==$_smarty_tpl->tpl_vars['user']->value->hide_black_list[$_smarty_tpl->tpl_vars['j']->value]){?>
                            <?php $_smarty_tpl->tpl_vars['flag'] = new Smarty_variable(1, null, 0);?>
                        <?php }?>
                    <?php }} ?>
                    <input type="checkbox" class="checkbox" date-id-bl="<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b'];?>
" id="checkbox-s<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b'];?>
"<?php if ($_smarty_tpl->tpl_vars['flag']->value==0){?> checked<?php }?>/>
                    <label for="checkbox-s<?php echo $_smarty_tpl->tpl_vars['black_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b'];?>
"></label>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php }} ?>
</div><?php }} ?>