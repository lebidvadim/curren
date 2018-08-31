<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:41:30
         compiled from "/home/dimckale/bustool.pro/www/themes/panel/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9740670425b850abac33b61-49079611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50de7911a880a2d36477dacb66ec2e0d0d1591cc' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/panel/main.tpl',
      1 => 1535445312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9740670425b850abac33b61-49079611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'active' => 0,
    'user' => 0,
    'active_in' => 0,
    'content' => 0,
    'pub' => 0,
    'ajax_pub' => 0,
    'modal_deleg_add' => 0,
    'modal_transfer' => 0,
    'modal_force' => 0,
    'modal_blacklist' => 0,
    'modal_poster_buy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850abacaa474_74340571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850abacaa474_74340571')) {function content_5b850abacaa474_74340571($_smarty_tpl) {?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php if ($_smarty_tpl->tpl_vars['active']->value=='draft'){?>
        <link rel="stylesheet" href="/themes/css/chosen.min.css">
        <link rel="stylesheet" href="/themes/css/prism.css">
    <?php }?>
    <link rel="stylesheet" href="/themes/css/codemirror.css">
    <link rel="stylesheet" href="/themes/css/panel.css">
    <link rel="stylesheet" href="/themes/css/adapt_panel.css">
</head>
<body>
<div class="topPlash">
    <div class="content">
        <a href="/" class="logo">
            <span>bus</span>
            <span class="or">tool</span>
        </a>
        <div class="login">
            <a href="/panel/user">Мой профиль</a>
            <a href="/auth/logout" class="btn btn-blue btn-l">Выйти</a>
        </div>
    </div>
</div>
<div class="panel-wrap">
    <div class="panel-header">
        <div class="item user">
            <div class="panel-bk-l"></div>
            <div class="panel-bk-r">
                <div class="title-h"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</div>
                <div class="info-h">Тариф: <a href="/panel/rates"><?php echo $_smarty_tpl->tpl_vars['user']->value->rates->name_r;?>
</a></div>
            </div>
        </div>
        <div class="item force">
            <div class="panel-bk-l"></div>
            <div class="panel-bk-r">
                <div class="title-h"><?php echo $_smarty_tpl->tpl_vars['user']->value->force;?>
 <span>сил</span></div>
                <div class="info-h"><a href="#" data-modal="pod-mod-sil">Купить</a></div>
            </div>
        </div>
        <div class="item money">
            <div class="panel-bk-l"></div>
            <div class="panel-bk-r">
                <div class="title-h"><?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
 <span>руб</span></div>
                <div class="info-h"><a href="/panel/purse">Пополнить</a></div>
            </div>
        </div>
    </div>
    <div class="panel-content">
        <div class="content-panel">
            <div class="top-menu-panel">
                <ul>
                    <li<?php if ($_smarty_tpl->tpl_vars['active_in']->value=='analysis'){?> class="active"<?php }?>><a href="/panel">Авторство</a></li>
                    <li<?php if ($_smarty_tpl->tpl_vars['active_in']->value=='poster'){?> class="active"<?php }?>><a href="/panel/poster">Постер</a></li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['active']->value=='updates'){?> active<?php }?> updates">
                        <a href="/panel/updates">Обновления</a>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->updates==1){?><div class="blink"><span></span></div><?php }?>
                    </li>
                </ul>
            </div>
            <div class="content">
                <?php if ($_smarty_tpl->tpl_vars['active_in']->value=='analysis'){?>
                    <div class="dop_menu_con analysis">
                        <ul>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='home'){?> class="active"<?php }?>><a href="/panel">Анализ</a></li>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='blacklist'){?> class="active"<?php }?>><a href="/panel/black-list">Черный список</a></li>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='analysis'){?> class="active"<?php }?>><a href="/panel/analysis-list">История</a></li>
                        </ul>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['active_in']->value=='user'){?>
                    <div class="dop_menu_con user">
                        <ul>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='user'){?> class="active"<?php }?>><a href="/panel/user">Мой профиль</a></li>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='command'){?> class="active"<?php }?>><a href="/panel/user/command">Моя команда</a></li>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='invitation'){?> class="active"<?php }?>><a href="/panel/user/invitation">Приглашения</a></li>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='ref'){?> class="active"<?php }?>><a href="/panel/user/ref">Рефералы</a></li>
                        </ul>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['active_in']->value=='poster'){?>
                    <div class="dop_menu_con poster">
                        <ul>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='poster'){?> class="active"<?php }?>><a href="/panel/poster">Копировать статью</a></li>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='site'){?> class="active"<?php }?>><a href="/panel/poster/site">Мои сайты</a></li>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='draft'){?> class="active"<?php }?>><a href="/panel/poster/draft">Черновик</a></li>
                            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='settings'){?> class="active"<?php }?>><a href="/panel/poster/settings">Настройки</a></li>
                        </ul>
                    </div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div>

    </div>
    <div class="panel-footer">
        <a href="/panel/rates">Тарифы</a>
        <a href="/panel/purse">Пополнить баланс</a>
        <a href="/panel/support">Поддержка</a>
    </div>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['pub']->value)&&$_smarty_tpl->tpl_vars['pub']->value==1){?>
    <?php echo $_smarty_tpl->tpl_vars['ajax_pub']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['active_in']->value=='analysis'){?>
<div class="modal-bg" id="pod-mod">
    <div class="modal-bk-m">
        <div class="modal-bt">
            <div class="modal-bk">
                <button class="clous"></button>
                <div class="modal_analysis"></div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['active']->value=='command'){?>
<div class="modal-bg" id="pod-mod-del-add">
    <div class="modal-bk-m">
        <div class="modal-bt">
            <div class="modal-bk">
                <button class="clous"></button>
                <?php echo $_smarty_tpl->tpl_vars['modal_deleg_add']->value;?>

            </div>
        </div>
    </div>
</div>
<div class="modal-bg" id="pod-mod-del-tran">
    <div class="modal-bk-m">
        <div class="modal-bt">
            <div class="modal-bk">
                <button class="clous"></button>
                <?php echo $_smarty_tpl->tpl_vars['modal_transfer']->value;?>

            </div>
        </div>
    </div>
</div>
<?php }?>
<div class="modal-bg" id="pod-mod-sil">
    <div class="modal-bk-m">
        <div class="modal-bt">
            <div class="modal-bk">
                <button class="clous"></button>
                <?php echo $_smarty_tpl->tpl_vars['modal_force']->value;?>

            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['active']->value=='blacklist'){?>
<div class="modal-bg" id="pod-mod-bl">
    <div class="modal-bk-m">
        <div class="modal-bt">
            <div class="modal-bk">
                <button class="clous"></button>
                <?php echo $_smarty_tpl->tpl_vars['modal_blacklist']->value;?>

            </div>
        </div>
    </div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['active_in']->value=='poster'){?>
<div class="modal-bg" id="pod-mod-pos-buy">
    <div class="modal-bk-m">
        <div class="modal-bt">
            <div class="modal-bk">
                <button class="clous"></button>
                <?php echo $_smarty_tpl->tpl_vars['modal_poster_buy']->value;?>

            </div>
        </div>
    </div>
</div>
<?php }?>
<script src="/themes/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<?php if ($_smarty_tpl->tpl_vars['active']->value=='rates'){?>
    <script src="/themes/js/jquery.spincrement.min.js"></script>
<?php }?>
<script type="text/javascript" src="/themes/js/panel.js"></script>
<script type="text/javascript" src="/themes/js/ajax.js"></script>
<?php if ($_smarty_tpl->tpl_vars['active_in']->value=='analysis'){?>
    <script type="text/javascript" src="/themes/js/codemirror.js"></script>
    <script type="text/javascript" src="/themes/js/javascript.js"></script>
    <script type="text/javascript">
        var editor = {};
        $(window).ready(function() {
            if (CodeMirror) {
                if (document.getElementById("code")){
                    editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                        lineNumbers: true,
                        lineWrapping: true,
                        autofocus: true
                    });

                    editor.setCursor(2, 2);     // это значит поместить курсор на 3 строку (отсчёт от 0), символ 3

                    var pos = editor.posFromIndex(3);  //получить координаты 3-ей позиции (строку и символ)
                    editor.setCursor(pos.line, pos.ch);
                }
            }
        });
    </script>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['active']->value=='draft'){?>
    <script src="/themes/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({
            selector: '#textarea',
            menubar: false,
            theme: 'modern',
            plugins: [
                'print fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
            ],
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | image',
            language:"ru"
        });</script>
    <script src="/themes/js/bootstrap-tokenfield.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="/themes/js/chosen.jquery.min.js"></script>
    <script src="/themes/js/prism.js" type="text/javascript" charset="utf-8"></script>
    <script src="/themes/js/init.js" type="text/javascript" charset="utf-8"></script>

<?php }?>

</body>
</html><?php }} ?>