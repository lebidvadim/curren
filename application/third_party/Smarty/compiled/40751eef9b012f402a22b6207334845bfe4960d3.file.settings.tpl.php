<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:01:03
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4235738175b850f4fc5cad7-22337599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40751eef9b012f402a22b6207334845bfe4960d3' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/settings.tpl',
      1 => 1534234312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4235738175b850f4fc5cad7-22337599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'sett' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850f4fc89fe1_87216744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850f4fc89fe1_87216744')) {function content_5b850f4fc89fe1_87216744($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['message']->value){?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php }?>
<form action="" method="post">
    <div class="form-block flex">
        <div class="checkbox-bk">
            <input type="checkbox" name="publish" class="checkbox" id="s1"<?php if (!empty($_smarty_tpl->tpl_vars['sett']->value->json->publish)&&$_smarty_tpl->tpl_vars['sett']->value->json->publish==1){?> checked=""<?php }?>>
            <label for="s1"></label>
        </div>
        <label for="" class="checkbox-label">Опубликовать запись на сайте</label>
    </div>
    <div class="form-block flex">
        <div class="checkbox-bk">
            <input type="checkbox" name="comment" class="checkbox" id="s2"<?php if (!empty($_smarty_tpl->tpl_vars['sett']->value->json->comment)&&$_smarty_tpl->tpl_vars['sett']->value->json->comment==1){?> checked=""<?php }?>>
            <label for="s2"></label>
        </div>
        <label for="" class="checkbox-label">Разрешить комментарии для записи</label>
    </div>
    <div class="form-block flex">
        <div class="checkbox-bk">
            <input type="checkbox" name="send_pict" class="checkbox" id="s3"<?php if (!empty($_smarty_tpl->tpl_vars['sett']->value->json->send_pict)&&$_smarty_tpl->tpl_vars['sett']->value->json->send_pict==1){?> checked=""<?php }?>>
            <label for="s3"></label>
        </div>
        <label for="" class="checkbox-label">Загрузить картинки на сайт к записи</label>
    </div>
    <div class="form-block flex">
        <div class="checkbox-bk">
            <input type="checkbox" name="sour" class="checkbox" id="s4"<?php if (!empty($_smarty_tpl->tpl_vars['sett']->value->json->sour)&&$_smarty_tpl->tpl_vars['sett']->value->json->sour==1){?> checked=""<?php }?>>
            <label for="s4"></label>
        </div>
        <label for="" class="checkbox-label">Подставить источник в конец стати</label>
    </div>
    <div class="form-bk flex buts">
        <button type="submit" name="save" value="1" class="btn btn-l btn-grin">Сохранить</button>
        <button type="submit" name="reset" value="1" class="btn btn-l btn-red">Сбросить</button>
    </div>
</form><?php }} ?>