<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:41:30
         compiled from "/home/dimckale/bustool.pro/www/themes/analysis/url-analysis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10157113775b850abab80b41-27024485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfc44b2a80ac27a4f6bf12b1248fefb67d522453' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/analysis/url-analysis.tpl',
      1 => 1532860320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10157113775b850abab80b41-27024485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'analysis' => 0,
    'analys' => 0,
    'j' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850abac30658_81637357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850abac30658_81637357')) {function content_5b850abac30658_81637357($_smarty_tpl) {?><div class="black-list-top analysis">
    <div class="info">
        <div>Авторство</div>
        <p>Проверка контента на авторство. В нашей базе данных собраны сайты которые запрещают копирования контента. И для того что бы в дальнейшем избежать проблем, этот инструмент покажет вам первоисточника (покажет 90%-го источника).</p>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['message']->value){?>
    <div style="margin-top: 30px"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['analysis']->value>0){?>

    <div class="analysis-ajax" id="analysis" data-count="<?php echo $_smarty_tpl->tpl_vars['analysis']->value;?>
" >
        <div class="title">Пожайлуста подождите идет анализ!</div>
        <div class="progres"><span style="width: 0%;"></span></div>
        <div class="status_bar">Идет анализ: <span class="prov">0</span> из <span class="col"><?php echo $_smarty_tpl->tpl_vars['analysis']->value;?>
</span> проанализировано (<span class="proc">0</span>%)</div>

    </div>
<?php }else{ ?>
    <form action="" method="post">
        <textarea id="code" class="analis" name="url_an" id="" cols="30" rows="10"></textarea>
        <div class="foot-analiz">
            <div class="btn-bk">
                <button class="btn btn-m btn-blue" type="submit" id="but-ma">Запустить</button>
                
            </div>
            <div>Максимальное количество ссылок 50 в одном пакете проверок</div>
        </div>
    </form>

    <?php if (count($_smarty_tpl->tpl_vars['analys']->value)>0){?>
    <div class="result-analz">
        <div class="title ist">Результат анализа</div>
        <div class="result ist">
        <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['analys']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['analys']->value); $_smarty_tpl->tpl_vars['j']->value++){
?>

                <div class="item">
                    <div class="item-bk">
                        <div class="url">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['url_a'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['url_a'];?>
</a>
                        </div>
                        <div class="info-r">
                            <?php if ($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['error']==''){?>
                            <div class="proc<?php if ($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['unik']<=50){?> red<?php }?><?php if ($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['unik']>50){?> or<?php }?><?php if ($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['unik']>80){?> gr<?php }?>"><?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['unik'];?>
%</div>
                            <div class="ic-<?php if ($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['type']==0){?>yes<?php }else{ ?>no<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['type']==0){?>Даный посто можете копировать.<?php }else{ ?>Єсть совпадение с чёрным списоком, и сайт являетса первоисточником.<?php }?>"></div>
                            <div class="ic-pod"><button class="pod btn-analysis" data-modal="pod-mod" data-analysis-id="<?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['id_a'];?>
"></button></div>
                            <?php }else{ ?>
                                <div class="ic-no" style="margin-right: 0px" title="<?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['error'];?>
"></div>
                            <?php }?>
                        </div>
                    </div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['bl'])&&$_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['bl']==1){?>
                        <div class="site">
                            <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->value = 0;
  if ($_smarty_tpl->tpl_vars['n']->value<count($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'])){ for ($_foo=true;$_smarty_tpl->tpl_vars['n']->value<count($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis']); $_smarty_tpl->tpl_vars['n']->value++){
?>
                                <?php if ($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['type']==1){?>
                                    <span><a href="<?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['url_clean'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['percent'];?>
%)</span>
                                <?php }?>
                            <?php }} ?>
                        </div>
                    <?php }else{ ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'])){?>
                        <div class="site">
                            <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->value = 0;
  if ($_smarty_tpl->tpl_vars['n']->value<count($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'])){ for ($_foo=true;$_smarty_tpl->tpl_vars['n']->value<count($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis']); $_smarty_tpl->tpl_vars['n']->value++){
?>
                                <?php if ($_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['type']==1){?>
                                    <span><a href="<?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['url_clean'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['analys']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['percent'];?>
%)</span>
                                <?php }?>
                            <?php }} ?>
                        </div>
                            <?php }?>
                    <?php }?>
                </div>

        <?php }} ?>
    </div>
    </div>
    <?php }?>
<?php }?><?php }} ?>