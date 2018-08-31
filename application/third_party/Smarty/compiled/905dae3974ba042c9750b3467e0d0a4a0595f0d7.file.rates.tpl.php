<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 19:05:04
         compiled from "/home/dimckale/bustool.pro/www/themes/rates/rates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4245230185b8572b04ce036-26166095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '905dae3974ba042c9750b3467e0d0a4a0595f0d7' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/rates/rates.tpl',
      1 => 1533881408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4245230185b8572b04ce036-26166095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'i' => 0,
    'rates' => 0,
    'user' => 0,
    'promo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b8572b0590644_40754330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8572b0590644_40754330')) {function content_5b8572b0590644_40754330($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/dimckale/bustool.pro/www/application/third_party/Smarty/plugins/modifier.date_format.php';
?><h1 class="rate-title">Тарифы</h1>
<div class="ratesPeriod">
    <button class="btn btn-gray btn-m active" date-proc="0" date-mes="1">Месяц</button>
    <button class="btn btn-gray btn-m" date-proc="7.8" date-mes="3">3 месяца</button>
    <button class="btn btn-gray btn-m" date-proc="15.7" date-mes="6">Пол года</button>
</div>
<?php if ($_smarty_tpl->tpl_vars['message']->value){?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<?php }?>
<div class="info-bk or">
    <div class="icon"></div>
    <div class="text">При изменение тарифного плана с маленького на большой, новая дата тарифа будет браться от момента изменения тарифного плана.</div>
</div>

<div class="rates">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['rates']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['rates']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
    <div class="item<?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']==1){?> gray<?php }elseif($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']==2){?> blue<?php }elseif($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']==3){?> purple<?php }elseif($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']==4){?> rid<?php }?><?php if ($_smarty_tpl->tpl_vars['user']->value->type_tarif==$_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']){?> active<?php }?>" date-money="<?php if ($_smarty_tpl->tpl_vars['promo']->value==1){?><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['price_r']/2;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['price_r'];?>
<?php }?>" date-pub="<?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p'];?>
" date-sil="<?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_a'];?>
">
        <div class="item-bk">
            <div>
                <form action="" method="post">
                    <input type="hidden" name="type_form" value="2">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->type_tarif==$_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']){?><div class="tec">текущий</div><?php }?>
                    <div class="titleRate"><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['name_r'];?>
</div>
                    <div class="pric"><?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']>1){?><div><?php if ($_smarty_tpl->tpl_vars['promo']->value==1){?><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['price_r']/2;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['price_r'];?>
<?php }?></div><span>руб</span><p></p><?php }else{ ?>Бесплатно<?php }?></div>
                    <div class="btn-center<?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']==1&&$_smarty_tpl->tpl_vars['user']->value->end_date_tarif==0){?> nbsp<?php }?>">

                    <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']>1){?>
                        <input type="hidden" name="mes" class="rates_h_mes" value="1">
                        <input type="hidden" name="id_r" class="rates_h_id" value="<?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']==$_smarty_tpl->tpl_vars['user']->value->type_tarif){?>
                        <button name="sub" type="submit" class="btn btn-l btn-yellow" value="prod">Продлить</button>
                        <?php }elseif($_smarty_tpl->tpl_vars['user']->value->type_tarif<=4&&$_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']>$_smarty_tpl->tpl_vars['user']->value->type_tarif&&$_smarty_tpl->tpl_vars['user']->value->type_tarif!=1){?>
                        <button name="sub" type="submit" class="btn btn-l btn-yellow" value="izme">Изменить</button>
                        <?php }else{ ?>
                        <button name="sub" type="submit" class="btn btn-l btn-grin"<?php if ($_smarty_tpl->tpl_vars['user']->value->type_tarif>1){?> disabled<?php }?> value="zaca">Заказать</button>
                        <?php }?>
                    <?php }?>
                    </div>
                    <div class="param">1 сила = <?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['percent'];?>
 руб</div>
                    <div class="param">1 публикация = <?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p_c'];?>
 сил</div>
                    <div class="param">
                    <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']>1){?><span class="sil"><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_a'];?>
</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_a'];?>
<?php }?> единиц силы
                    </div>
                    <div class="param">
                    <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']>1){?>
                        <span class="pub"><?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p']==0){?>
                            &infin;
                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p'];?>

                        <?php }?></span>
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p'];?>

                    <?php }?> публикаций
                    </div>
                    <div class="param">
                        <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site']==0){?>&infin; <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site'];?>
 - <?php }?><?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site']==1){?>сайт<?php }elseif($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site']==2||$_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site']==3){?>сайта<?php }else{ ?>сайтов<?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['black_list']==1){?><div class="param">Черный список</div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['detailed_a']==1){?><div class="param">Подробный анализ</div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['delegation']==1){?><div class="param">Делегирование</div><?php }?>
                </form>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->type_tarif==$_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['id_r']&&$_smarty_tpl->tpl_vars['user']->value->type_tarif>1){?><div>
                <div class="period"><?php if ($_smarty_tpl->tpl_vars['user']->value->end_date_tarif>0){?>Действует до <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->end_date_tarif,"%Y.%m.%d");?>
<?php }else{ ?>Вечный<?php }?></div>
            </div>
            <?php }?>
        </div>
    </div>
    <?php }} ?>
</div>
<?php }} ?>