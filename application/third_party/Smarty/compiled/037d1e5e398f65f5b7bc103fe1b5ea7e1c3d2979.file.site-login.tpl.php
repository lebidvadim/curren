<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:41:28
         compiled from "/home/dimckale/bustool.pro/www/themes/auth/site-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:979169925b850ab86ad552-25105996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '037d1e5e398f65f5b7bc103fe1b5ea7e1c3d2979' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/auth/site-login.tpl',
      1 => 1532428810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '979169925b850ab86ad552-25105996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850ab86d1329_62706490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850ab86d1329_62706490')) {function content_5b850ab86d1329_62706490($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="/themes/css/style.css">
    <link rel="stylesheet" href="/themes/css/adapt_site.css">
</head>
<body>
<div class="topPlash auth-m">
    <a href="/" class="logo">
        <span>bus</span>
        <span class="or">tool</span>
    </a>
    <div class="login">
        <a href="/">Главная</a>
        <a href="/registration">Регистрация</a>
    </div>
</div>
<div class="auth">
    <div class="auth-bk">
        <div class="auth-title">Войти</div>
        <form action="" method="post">
            <div class="form-bk<?php if (form_error('email')){?> error<?php }?>">
                <input type="text" name="email" class="style-input" value="<?php echo set_value('email');?>
" placeholder="Введите e-mail">
                <?php echo form_error('email','<div class="error">','</div>');?>

            </div>
            <div class="form-bk<?php if (form_error('password')){?> error<?php }?>">
                <input type="password" name="password" class="style-input" placeholder="Введите пароль">
                <a href="/forgot" title="Забыли пароль?">?</a>
                <?php echo form_error('password','<div class="error">','</div>');?>

            </div>
            <div class="form-bk flex">
                <button type="submit" class="btn btn-blue btn-m">Войти</button>
                <div>
                    <input type="checkbox" class="checkbox" id="remember">
                    <label for="remember">Запомнить меня</label>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html><?php }} ?>