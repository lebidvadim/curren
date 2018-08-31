<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:00:55
         compiled from "/home/dimckale/bustool.pro/www/themes/analysis/modal-analysis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9870996605b850f4721cb05-60441924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5a0b39611d99ebc8eaedb6ef62f77cc79710b7' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/analysis/modal-analysis.tpl',
      1 => 1532353192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9870996605b850f4721cb05-60441924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_modal' => 0,
    'user' => 0,
    'analysis' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850f472acb27_88531259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850f472acb27_88531259')) {function content_5b850f472acb27_88531259($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/dimckale/bustool.pro/www/application/third_party/Smarty/plugins/modifier.date_format.php';
?><div class="title-m"><?php echo $_smarty_tpl->tpl_vars['title_modal']->value;?>
</div>
<?php if ($_smarty_tpl->tpl_vars['user']->value->type_tarif>2){?>
<div class="url">
    <div class="title-u">Проверяемая ссылка</div>
    <div class="url-a"><a href="<?php echo $_smarty_tpl->tpl_vars['analysis']->value->url_a;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['analysis']->value->url_a;?>
</a></div>
    <div class="url-unic">Уникальность контента</div>
    <div class="url-proc<?php if ($_smarty_tpl->tpl_vars['analysis']->value->unik<=50){?> red<?php }?><?php if ($_smarty_tpl->tpl_vars['analysis']->value->unik>50){?> or<?php }?><?php if ($_smarty_tpl->tpl_vars['analysis']->value->unik>80){?> gr<?php }?>"><?php echo $_smarty_tpl->tpl_vars['analysis']->value->unik;?>
%</div>
    <div class="url-ist<?php if ($_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[0]['type']==0){?> gr<?php }else{ ?> rd<?php }?>">
        <div>Источник</div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['analysis']->value->url_a;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[0]['url_clean'];?>
</a>
    </div>
    <div class="url-sov">Другие источники</div>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['analysis']->value->pod_analysis)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['analysis']->value->pod_analysis); $_smarty_tpl->tpl_vars['i']->value++){
?>
    <div class="url-r<?php if ($_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[$_smarty_tpl->tpl_vars['i']->value]['type']==1){?> rd<?php }?>">
        <div class="url-hr">
            <img src="http://www.google.com/s2/favicons?domain=<?php echo $_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[$_smarty_tpl->tpl_vars['i']->value]['url_clean'];?>
" alt="">
            <a href="<?php echo $_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[$_smarty_tpl->tpl_vars['i']->value]['url_clean'];?>
</a>
        </div>
        <div class="url-r-pr<?php if ($_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[$_smarty_tpl->tpl_vars['i']->value]['percent']<=50){?> rd<?php }?><?php if ($_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[$_smarty_tpl->tpl_vars['i']->value]['percent']>50){?> or<?php }?><?php if ($_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[$_smarty_tpl->tpl_vars['i']->value]['percent']>80){?> gr<?php }?>"><?php echo $_smarty_tpl->tpl_vars['analysis']->value->pod_analysis[$_smarty_tpl->tpl_vars['i']->value]['percent'];?>
%</div>
    </div>
    <?php }} ?>
    <div class="url-btn"><a href="/analysis/del/<?php echo $_smarty_tpl->tpl_vars['analysis']->value->id_a;?>
" class="btn btn-m btn-red">Удалить из истории</a></div>
    <div class="url-date">Дата: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['analysis']->value->date_a,"%d.%m.%y в %H:%M");?>
</div>
</div>
    <?php }else{ ?>
    <div class="info-bk or">
        <div class="icon"></div>
        <div class="text">Подробный анализ ссылки доступен в тарифе «Продвинутый» и «Премиум».</div>

    </div>
    <div class="btn-center"><a href="/panel/rates" class="btn btn-m btn-blue">Изменить тариф</a></div>
<?php }?><?php }} ?>