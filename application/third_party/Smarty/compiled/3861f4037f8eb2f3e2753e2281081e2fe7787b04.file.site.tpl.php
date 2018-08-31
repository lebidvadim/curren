<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:02:03
         compiled from "/home/dimckale/bustool.pro/www/modules/poster/themes/admin/site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15902508345b850f8b69b189-54970287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3861f4037f8eb2f3e2753e2281081e2fe7787b04' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/modules/poster/themes/admin/site.tpl',
      1 => 1535110722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15902508345b850f8b69b189-54970287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count_post' => 0,
    'count' => 0,
    'i' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850f8b6ed540_18279960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850f8b6ed540_18279960')) {function content_5b850f8b6ed540_18279960($_smarty_tpl) {?>

<h3>Общая статистика</h3>
<hr>

<div><label for="">Опубликовано на сайты за севодня:</label> <?php echo $_smarty_tpl->tpl_vars['count_post']->value['day']['count'];?>
</div>
<div><label for="">Опубликовано на сайты за вчера:</label> <?php echo $_smarty_tpl->tpl_vars['count_post']->value['yesterday']['count'];?>
</div>
<div><label for="">Опубликовано на сайты за неделю:</label> <?php echo $_smarty_tpl->tpl_vars['count_post']->value['week']['count'];?>
</div>
<div><label for="">Опубликовано на сайты за текущий месяц (<?php echo $_smarty_tpl->tpl_vars['count_post']->value['current_month']['date_name'];?>
):</label> <?php echo $_smarty_tpl->tpl_vars['count_post']->value['current_month']['count'];?>
</div>
<div><label for="">Опубликовано на сайты за прошлый месяц (<?php echo $_smarty_tpl->tpl_vars['count_post']->value['last_month']['date_name'];?>
):</label> <?php echo $_smarty_tpl->tpl_vars['count_post']->value['last_month']['count'];?>
</div>



<hr>
<a href="/admin/poster/add" class="btn btn-success">Добавить сайт</a>
<a href="/admin/poster/robot" class="btn btn-success">Заявки на обучение</a>
<hr>
<div class="row mb-3">
    <div class="col">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Найти сайт</label>
                <input type="text" class="form-control" name="site">
            </div>
            <button type="submit" class="btn btn-primary">Найти</button>
        </form>
    </div>
</div>
<hr>
<?php if ($_smarty_tpl->tpl_vars['count']->value>0){?>
<div class="row">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['site']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['site']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
    <div class="col-12 col-lg-4 col-md-6"><div class="bg-white p-2 border mb-3"><a href="/admin/poster/edit/<?php echo $_smarty_tpl->tpl_vars['site']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['site']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
</a></div></div>
    <?php }} ?>
</div>
    <?php }else{ ?>
    нету сайта такого
<?php }?><?php }} ?>