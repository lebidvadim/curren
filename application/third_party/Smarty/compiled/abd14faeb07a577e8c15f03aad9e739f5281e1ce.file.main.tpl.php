<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:49:42
         compiled from "/home/dimckale/bustool.pro/www/themes/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7529128075b850ca60d53e7-85355465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abd14faeb07a577e8c15f03aad9e739f5281e1ce' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/main.tpl',
      1 => 1532623422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7529128075b850ca60d53e7-85355465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'active' => 0,
    'user' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850ca60f3ad1_19590821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850ca60f3ad1_19590821')) {function content_5b850ca60f3ad1_19590821($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="themes/css/style.css">
    <link rel="stylesheet" href="themes/css/adapt_site.css">
</head>
<body>
<div class="topPlash<?php if ($_smarty_tpl->tpl_vars['active']->value=='home'){?> home<?php }else{ ?> vnut<?php }?>">
    <a href="/" class="logo">
        <span>bus</span>
        <span class="or">tool</span>
    </a>
    <div class="login">
        <?php if ($_smarty_tpl->tpl_vars['user']->value){?>
            <a href="/panel">Мой кабинет</a>
            <a href="/auth/logout" class="btn btn-blue btn-l">Выйти</a>
        <?php }else{ ?>
            <a<?php if ($_smarty_tpl->tpl_vars['active']->value=='registration'){?> class="active"<?php }?> href="/registration">Регистрация</a>
            <a href="/login" class="btn btn-blue btn-l">Войти</a>
        <?php }?>
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<div class="footer<?php if ($_smarty_tpl->tpl_vars['active']->value=='home'){?> home<?php }?>">
    <div class="left">
        <a href="/" class="logo">
            <span>Bus</span>
            <span class="or">tool</span>
        </a>
        <ul>
            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='feedback'){?> class="active"<?php }?>><a href="/feedback">Написать нам</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['active']->value=='oferta'){?> class="active"<?php }?>><a href="/oferta">Соглашение</a></li>
        </ul>
    </div>
    <div class="ic-soc">
        <a href="https://www.facebook.com/Bustool.pro"><img src="themes/img/ic-soc-fb.png" alt=""></a>
        <a href="https://t.me/joinchat/E2u9DxFTdobgzMSD7XHBfA"><img src="themes/img/ic-soc-tl.png" alt=""></a>
        
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.4.2.min.js"></script>
<script src="themes/js/jquery.spincrement.min.js"></script>
<script src="themes/js/common.js"></script>
</body>
</html><?php }} ?>