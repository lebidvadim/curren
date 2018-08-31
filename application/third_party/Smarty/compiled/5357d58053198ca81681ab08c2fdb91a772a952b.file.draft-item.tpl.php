<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:47:57
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/draft-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15158449225b850c3dcf7938-45380936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5357d58053198ca81681ab08c2fdb91a772a952b' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/draft-item.tpl',
      1 => 1534762306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15158449225b850c3dcf7938-45380936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'sites' => 0,
    'site' => 0,
    'i' => 0,
    'j' => 0,
    'sett' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850c3dd8f300_20215303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850c3dd8f300_20215303')) {function content_5b850c3dd8f300_20215303($_smarty_tpl) {?>
<div class="content-top">
    <div>
        <h1>Подготовка к публикации</h1>
        <div class="crumbs"><a href="/panel/poster">Постер</a><span>Опубликовать</span></div>
    </div>
</div>
<form action="" method="post">
    <div class="form-bk">
        <label for="" class="label-title">Заголовок материала</label>
        <input type="text" name="h1" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->h1;?>
" class="style-input">
    </div>
    <div class="form-bk img">
        <div class="label-title">Изображение записи</div>
        <?php if ($_smarty_tpl->tpl_vars['post']->value->or_image==''){?>
        <div class="img-zap no" date-no="Нету изображение записи">
        <?php }else{ ?>
        <div class="img-zap" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['post']->value->or_image;?>
)">
        <?php }?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value->or_image;?>
" alt="">
        </div>
        <div class="form-flex">
            <input type="url" name="img_post" date-id="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" id="img_post" class="style-input">
            <button type="button" class="btn btn-l btn-grin" id="img_post_bu">Изменить</button>
        </div>
        <label for="" class="label-title img"></label>
    </div>

    <?php if (count($_smarty_tpl->tpl_vars['sites']->value)==0){?>
        <div class="form-bk">
            <span class="label-title">Выберите сайт на который хотите опубликовать</span>

            <div class="black-list-top add-site">
                <div class="info">
                    <div class="flex">Необноружено сайтов</div>
                    <p>Для того что бы начать публиковать материалы на сайт, вам необходимо добавить сайт на который вы хотите
                        опубликовать материал.</p>
                </div>
                <a href="/panel/poster/site-add" class="btn btn-m btn-grin">Добавить сайт</a>
            </div>
        </div>
    <?php }else{ ?>

            <div class="form-bk<?php if (empty($_smarty_tpl->tpl_vars['site']->value->error)||$_smarty_tpl->tpl_vars['site']->value->error!=''){?> error<?php }?> site">
                <span class="label-title">Выбирете сайт на который хотите опубликовать</span>
                <select name="id_s" class="style-select" id="site-select" data-id-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['sites']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['sites']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['sites']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['post']->value->id_s==$_smarty_tpl->tpl_vars['sites']->value[$_smarty_tpl->tpl_vars['i']->value]['id']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sites']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
</option>
                    <?php }} ?>
                </select>
                <?php if (!empty($_smarty_tpl->tpl_vars['site']->value)||!empty($_smarty_tpl->tpl_vars['site']->value->error)!=''){?><label for="" class="label-title"><?php echo $_smarty_tpl->tpl_vars['site']->value->error;?>
</label><?php }?>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['site']->value)||!empty($_smarty_tpl->tpl_vars['site']->value->status)==1){?>
                <div class="form-bk categ">
                    <label for="" class="label-title">Категория материала</label>
                    <select data-placeholder="Рубрики" name="categ[]" class="chosen-select" multiple tabindex="4">
                        <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['site']->value->categ)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['site']->value->categ); $_smarty_tpl->tpl_vars['j']->value++){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['site']->value->categ[$_smarty_tpl->tpl_vars['j']->value][0];?>
"<?php if ($_smarty_tpl->tpl_vars['site']->value->categ[$_smarty_tpl->tpl_vars['j']->value][1]==1){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['site']->value->categ[$_smarty_tpl->tpl_vars['j']->value][0];?>
</option>
                        <?php }} ?>
                    </select>
                </div>
            <?php }else{ ?>
                <div class="info-bk re categ">
                    <div class="icon"></div>
                    <div class="text">Сайт ненастроен не указан логин или пароль либо они неверны либо сайт не на движке WordPress.</div>
                </div>
            <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['post']->value->html!=''){?>
    <div class="form-bk">
        <label for="" class="label-title">Контент материала</label>
        <textarea name="html" id="textarea" cols="30" rows="40">
            <?php echo base64_decode($_smarty_tpl->tpl_vars['post']->value->html);?>

        </textarea>
    </div>
    <div class="form-bk">
        <button type="submit" name="robot" value="1" class="btn btn-m btn-grin">Переобучить робота</button>
    </div>

    <?php }else{ ?>
    <div class="form-bk">
        <div class="black-list-top robot">
            <div class="info">
                <div class="flex">Ой! Робот не смог спарсить</div>
                <p>Робот Перси не умеет парсить статьи из сайта site.com. Вы можете подать заявку и наш департамент образования
                    интелекта обучит робота Перси парсить материалы с этого сайта.</p>
            </div>
            <button type="submit" name="robot" value="1" class="btn btn-m btn-grin">Обучить робота</button>
        </div>

    </div>
    <?php }?>
    <div class="form-bk">
        <button type="submit" name="pars" value="1" class="btn btn-l btn-blue">Перепарсить</button>
    </div>
    <div class="form-bk">
        <label for="" class="label-title">Метки</label>
        <input type="text" name="meta" class="tokenfield" placeholder="метка" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->meta;?>
" />
    </div>
    <div class="form-bk">
        <label for="" class="label-title">Настройки</label>
    </div>
    <div class="form-block flex">
        <div class="checkbox-bk">
            <input type="checkbox" name="publish" class="checkbox" id="s1"<?php if (!empty($_smarty_tpl->tpl_vars['sett']->value->json->publish)&&$_smarty_tpl->tpl_vars['sett']->value->json->publish==1||$_smarty_tpl->tpl_vars['post']->value->publish==1){?> checked=""<?php }?>>
            <label for="s1"></label>
        </div>
        <label for="" class="checkbox-label">Опубликовать запись на сайте</label>
    </div>
    <div class="form-block flex">
        <div class="checkbox-bk">
            <input type="checkbox" name="comment" class="checkbox" id="s2"<?php if (!empty($_smarty_tpl->tpl_vars['sett']->value->json->comment)&&$_smarty_tpl->tpl_vars['sett']->value->json->comment==1||$_smarty_tpl->tpl_vars['post']->value->comment==1){?> checked=""<?php }?>>
            <label for="s2"></label>
        </div>
        <label for="" class="checkbox-label">Разрешить комментарии для записи</label>
    </div>
    <div class="form-block flex">
        <div class="checkbox-bk">
            <input type="checkbox" name="send_pict" class="checkbox" id="s3"<?php if (!empty($_smarty_tpl->tpl_vars['sett']->value->json->send_pict)&&$_smarty_tpl->tpl_vars['sett']->value->json->send_pict==1||$_smarty_tpl->tpl_vars['post']->value->send_pict==1){?> checked=""<?php }?>>
            <label for="s3"></label>
        </div>
        <label for="" class="checkbox-label">Загрузить картинки на сайт к записи <span>(<?php echo $_smarty_tpl->tpl_vars['post']->value->img_soze;?>
)</span></label>
    </div>
    <div class="form-block flex">
        <div class="checkbox-bk">
            <input type="checkbox" name="sour" class="checkbox" id="s4"<?php if (!empty($_smarty_tpl->tpl_vars['sett']->value->json->sour)&&$_smarty_tpl->tpl_vars['sett']->value->json->sour==1||$_smarty_tpl->tpl_vars['post']->value->sour==1){?> checked=""<?php }?>>
            <label for="s4"></label>
        </div>
        <label for="" class="checkbox-label">Подставить источник в конец стати</label>
    </div>
    <div class="form-bk flex buts">
        <button type="submit" name="opub" value="1" class="btn btn-l btn-blue">Опубликовать</button>
        <button type="submit" name="save" value="1" class="btn btn-l btn-grin">Сохранить</button>
        <a href="/poster/del/<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" class="btn btn-l btn-red">Удалить</a>
    </div>
</form>
<?php }} ?>