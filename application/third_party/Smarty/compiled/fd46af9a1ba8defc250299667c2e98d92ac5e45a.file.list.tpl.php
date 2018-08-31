<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:32:09
         compiled from "/home/dimckale/bustool.pro/www/themes/analysis/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12150257175b851699f2ba83-44628504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd46af9a1ba8defc250299667c2e98d92ac5e45a' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/analysis/list.tpl',
      1 => 1532860385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12150257175b851699f2ba83-44628504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'analysis' => 0,
    'user' => 0,
    'i' => 0,
    'date_arr' => 0,
    'j' => 0,
    'n' => 0,
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b85169a107474_29574733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85169a107474_29574733')) {function content_5b85169a107474_29574733($_smarty_tpl) {?><div class="content-top">
    <div>
        <h1>История проверок</h1>
        <div class="crumbs"><a href="/panel">Анализ</a><span>История</span></div>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['analysis']->value)!=0){?>
    <div class="btn-r">
        <a href="/analysis/delall/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="btn btn-m btn-red">Очистить историю</a>
    </div>
    <?php }?>
</div>
<?php if (count($_smarty_tpl->tpl_vars['analysis']->value)!=0){?>
<div class="result-analz">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['date_arr']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['date_arr']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
        <div class="title ist"><?php echo $_smarty_tpl->tpl_vars['date_arr']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</div>
        <div class="result ist">
        <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['analysis']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['analysis']->value); $_smarty_tpl->tpl_vars['j']->value++){
?>
            <?php if ($_smarty_tpl->tpl_vars['date_arr']->value[$_smarty_tpl->tpl_vars['i']->value]==$_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['date_form']){?>
                <div class="item">
                    <div class="item-bk">
                        <div class="url">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['url_a'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['url_a'];?>
</a>
                        </div>
                        <div class="info-r">
                            <?php if ($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['error']==''){?>
                            <div class="proc<?php if ($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['unik']<=50){?> red<?php }?><?php if ($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['unik']>50){?> or<?php }?><?php if ($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['unik']>80){?> gr<?php }?>"><?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['unik'];?>
%</div>
                            <div class="ic-<?php if ($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['type']==0){?>yes<?php }else{ ?>no<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['type']==0){?>Даный посто можете копировать.<?php }else{ ?>Єсть совпадение с чёрным списоком, и сайт являетса первоисточником.<?php }?>"></div>
                            <div class="ic-pod"><button class="pod btn-analysis" data-modal="pod-mod" data-analysis-id="<?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['id_a'];?>
"></button></div>
                            <?php }else{ ?>
                                <div class="ic-no" style="margin-right: 0px" title="<?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['error'];?>
"></div>
                            <?php }?>
                        </div>
                    </div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['bl'])&&$_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['bl']==1){?>
                    <div class="site">
                        <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->value = 0;
  if ($_smarty_tpl->tpl_vars['n']->value<count($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'])){ for ($_foo=true;$_smarty_tpl->tpl_vars['n']->value<count($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis']); $_smarty_tpl->tpl_vars['n']->value++){
?>
                            <?php if ($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['type']==1){?>
                            <span><a href="<?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['url_clean'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['percent'];?>
%)</span>
                            <?php }?>
                        <?php }} ?>
                    </div>
                    <?php }else{ ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'])){?>
                        <div class="site">
                            <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->value = 0;
  if ($_smarty_tpl->tpl_vars['n']->value<count($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'])){ for ($_foo=true;$_smarty_tpl->tpl_vars['n']->value<count($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis']); $_smarty_tpl->tpl_vars['n']->value++){
?>
                                <?php if ($_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['type']==1){?>
                                    <span><a href="<?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['url_clean'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['analysis']->value[$_smarty_tpl->tpl_vars['j']->value]['pod_analysis'][$_smarty_tpl->tpl_vars['n']->value]['percent'];?>
%)</span>
                                <?php }?>
                            <?php }} ?>
                        </div>
                            <?php }?>
                    <?php }?>
                </div>
            <?php }?>
        <?php }} ?>
        </div>
    <?php }} ?>
    <?php if ($_smarty_tpl->tpl_vars['navigation']->value){?>
    <div class="navig">
    <?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

    </div>
    <?php }?>

</div>
<?php }else{ ?>
    <div class="info-bk bl">
        <div class="icon"></div>
        <div class="text">Вы еще не делали глубокий анализ ссылок.</div>
    </div>
<?php }?><?php }} ?>