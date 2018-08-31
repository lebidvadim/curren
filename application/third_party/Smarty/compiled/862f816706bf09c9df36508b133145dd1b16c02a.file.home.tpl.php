<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:49:42
         compiled from "/home/dimckale/bustool.pro/www/themes/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21220613085b850ca60243a1-80804688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '862f816706bf09c9df36508b133145dd1b16c02a' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/home.tpl',
      1 => 1533465098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21220613085b850ca60243a1-80804688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'rates' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850ca60d08a9_88506473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850ca60d08a9_88506473')) {function content_5b850ca60d08a9_88506473($_smarty_tpl) {?><div class="header">
    <div class="container">
        <div class="title">
            Бизнес
            <div>инструменты</div>
            <span>для вашего бизнеса</span>
        </div>
        <div class="clog">Автоматизируйте процесс — сократите расходы!</div>
    </div>
</div>
<div class="container">
    <h3 class="titleH3">идея</h3>
    <p>Наша идея заключается в максимальном упрощении процесса ведения бизнеса. Для этого мы постоянно обновляем функционал проекта, добавляя в него более новые и современные инструменты. Это помогает автоматизировать отдельные сегменты ведения бизнеса.</p>
    <p>Мы стараемся держать руку на пульсе инноваций и ведем к гармоничному взаимодействию технологий и потребителя. Это поможет сократить расходы на ведение бизнеса, а также существенно уменьшить время работы и вероятность ошибок.</p>
    <p>По сути, проект подразумевает создание удобного бизнес-помощника, который будет прост и доступен в использовании даже начинающими бизнесменами.</p>
    <p>К тому же, мы постоянно сотрудничаем с пользователями нашей системы, прислушиваясь к проблемам и сложностям, с которыми им приходится сталкиваться. Собрав и изучив актуальные вопросы потребителя, мы внедряем в практику новый инструмент, который должен помочь решить поставленную задачу максимально эффективно и просто.</p>
    <h3 class="titleH3 dopstlH3">Инструменты</h3>
    <div class="instrumenty">
        <div class="item-bk">
            <div class="item ic-search">
                <h4>Авторство</h4>
                <p>Проверить на запрещенный материал по ссылке (статья).</p>
            </div>
        </div>
        <div class="item-bk">
            <div class="item ic-post">
                <h4>Постер</h4>
                <p>Копируем статью у конкурента в один клик WordPress</p>
            </div>
        </div>
    </div>
    <h3 class="titleH3">Тарифы</h3>
    <div class="ratesPeriod">
        <button class="btn btn-gray btn-m active" date-proc="0" date-mes="1">Месяц</button>
        <button class="btn btn-gray btn-m" date-proc="7.8" date-mes="3">3 месяца</button>
        <button class="btn btn-gray btn-m" date-proc="15.7" date-mes="6">Пол года</button>
    </div>
    <div class="rates">
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['rates']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['rates']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
        <div class="item<?php if ($_smarty_tpl->tpl_vars['i']->value==0){?> gray<?php }elseif($_smarty_tpl->tpl_vars['i']->value==1){?> blue<?php }elseif($_smarty_tpl->tpl_vars['i']->value==2){?> purple<?php }elseif($_smarty_tpl->tpl_vars['i']->value==3){?> rid<?php }?>" date-money="<?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['price_r'];?>
">
            <div class="item-bk">
                <div class="titleRate"><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['name_r'];?>
</div>
                <div class="pric"><?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['price_r']==0){?>Бесплатно<?php }else{ ?><div><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['price_r'];?>
</div><span>руб</span><?php }?><?php if ($_smarty_tpl->tpl_vars['i']->value>0){?><p></p><?php }?></div>
                <div class="param">
                    1 сила = <?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['percent'];?>
 руб
                </div>
                <div class="param">
                    1 публикация = <?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p_c'];?>
 сил
                </div>
                <div class="param">
                    <?php if ($_smarty_tpl->tpl_vars['i']->value==0){?>
                        <?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_a'];?>
 единиц силы
                    <?php }else{ ?>
                        <span class="sil"><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_a'];?>
</span> единиц силы
                    <?php }?>
                </div>
                <div class="param" date-pub="<?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['i']->value==0){?>
                        <?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p'];?>
 публикаций
                    <?php }else{ ?>
                        <span class="pub"><?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p']==0){?>
                            &infin;
                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['force_p'];?>

                        <?php }?></span> публикаций
                    <?php }?>
                </div>
                <div class="param">
                    <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site']==0){?>&infin; <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site'];?>
 - <?php }?><?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site']==1){?>сайт<?php }elseif($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site']==2||$_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['site']==3){?>сайта<?php }else{ ?>сайтов<?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['black_list']==1){?>
                <div class="param">
                    Черный список
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['detailed_a']==1){?>
                <div class="param">
                    Подробный анализ
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]['delegation']==1){?>
                <div class="param">
                    Делегирование
                </div>
                <?php }?>
            </div>
        </div>
        <?php }} ?>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['user']->value){?>
    <div class="bkCenter">
        <a href="/login" class="btn btn-blue btn-x">Войти в сервис</a>
    </div>
    <?php }?>
</div><?php }} ?>