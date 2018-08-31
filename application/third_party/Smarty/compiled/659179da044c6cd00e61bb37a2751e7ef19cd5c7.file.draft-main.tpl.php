<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:01:12
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/draft-main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10395816315b850f58b9f2a9-76154226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '659179da044c6cd00e61bb37a2751e7ef19cd5c7' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/draft-main.tpl',
      1 => 1535028308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10395816315b850f58b9f2a9-76154226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'posts' => 0,
    'i' => 0,
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850f58bcee35_86444597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850f58bcee35_86444597')) {function content_5b850f58bcee35_86444597($_smarty_tpl) {?><div class="black-list-top poster">
    <div class="info">
        <div class="flex">Постер
            <span class="col_pos"><?php if ($_smarty_tpl->tpl_vars['user']->value->rates->id_r!=4){?><?php echo $_smarty_tpl->tpl_vars['user']->value->posts;?>
<?php }else{ ?>&infin;<?php }?></span>
            <div class="kup_pos">
                <div>публикаций</div>
                <a href="#" data-modal="pod-mod-pos-buy">Купить</a>
            </div>
        </div>
        <p>Этот инструмент даст вам возможность максимально быстро скопировать контент с другого сайта к себе на сайт.
            Копируется весь контент и картинки загружаются к статье автоматически.</p>
    </div>
</div>
<?php if (count($_smarty_tpl->tpl_vars['posts']->value)){?>
<div class="result-analz">
    <div class="title-supp">Черновик <a href="/poster/delall" class="btn btn-l btn-red">Очистить черновик</a></div>
    <div class="poster-bk">
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['posts']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['posts']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
        <div class="item">
            <div class="left"><a href="/panel/poster/draft/<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->tpl_vars['i']->value]['h1'];?>
</a></div>
            <div class="right">
                
                <a href="/poster/del/<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" class="del"></a>
            </div>
        </div>
        <?php }} ?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['navigation']->value){?>
        <div class="navig">
            <?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

        </div>
    <?php }?>
</div>
<?php }else{ ?>
    <div class="info-bk bl">
        <div class="icon"></div>
        <div class="text">У вас нет спарсеных статей.</div>
    </div>
<?php }?><?php }} ?>