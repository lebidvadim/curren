<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:44:33
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:705826725b850b71e29442-10964006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83d8f46e97014dc9234939c17264fef1b670607d' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/site.tpl',
      1 => 1532599361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '705826725b850b71e29442-10964006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'poster_site' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850b71e90d00_85439845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850b71e90d00_85439845')) {function content_5b850b71e90d00_85439845($_smarty_tpl) {?><div class="black-list-top add-site">
    <div class="info">
        <div class="flex">Список сайтов</div>
        <p>Для того что бы начать публиковать материалы на сайт, вам необходимо добавить сайт на который вы хотите опубликовать материал.</p>
    </div>
    <a href="/panel/poster/site-add" class="btn btn-m btn-grin">Добавить сайт</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['message']->value){?>
    <div style="margin-top: 30px"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['poster_site']->value)>0){?>
<div class="title-supp">Подключенные сайты</div>
<div class="black-list or blacklist-checkbox">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['poster_site']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['poster_site']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
        <div class="item">
            <div class="item-bk<?php if ($_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==0){?> re<?php }elseif($_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==1){?> gr<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==0){?><?php echo $_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['error'];?>
<?php }elseif($_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['status']==1){?>Сайт успешно подлючен.<?php }?>">
                <div class="left">
                    <img src="http://www.google.com/s2/favicons?domain=<?php echo $_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
" alt="">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
</a>
                </div>
                <div class="right">
                    <a href="/panel/poster/site/<?php echo $_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" title="Редактировать сайт" class="edit"></a>
                    <a href="/poster/delsite/<?php echo $_smarty_tpl->tpl_vars['poster_site']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" title="Удалить сайт" class="del"></a>
                </div>
            </div>
        </div>
    <?php }} ?>
</div>
<?php }else{ ?>
    <div class="info-bk bl">
        <div class="icon"></div>
        <div class="text">Вы еще не добавили ни одного сайта.</div>
    </div>
<?php }?><?php }} ?>