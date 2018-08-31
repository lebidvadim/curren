<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 18:32:44
         compiled from "/home/dimckale/bustool.pro/www/themes/auth/site-registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2821096715b856b1c884857-86263209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac59c6fa51238fb5f88b9c7a0d9abec768633a86' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/auth/site-registration.tpl',
      1 => 1528453966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2821096715b856b1c884857-86263209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'crumbs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b856b1c8b5f49_11375769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b856b1c8b5f49_11375769')) {function content_5b856b1c8b5f49_11375769($_smarty_tpl) {?><div class="container mh-vh">
    <div class="title"><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1></div>
    <div class="crumbs">
        <?php echo $_smarty_tpl->tpl_vars['crumbs']->value;?>

    </div>
    <div class="form-block">
        <form action="" method="post">
            <div class="form-bk<?php if (form_error('first_name')){?> error<?php }?>">
                <input type="text" name="first_name" value="<?php echo set_value('first_name');?>
" class="style-input" placeholder="Как вас зовут?">
                <?php echo form_error('first_name','<div class="error">','</div>');?>

            </div>
            <div class="form-bk<?php if (form_error('email')){?> error<?php }?>">
                <input type="text" name="email" value="<?php echo set_value('email');?>
" class="style-input" placeholder="Ваш e-mail">
                <?php echo form_error('email','<div class="error">','</div>');?>

            </div>
            <div class="form-bk<?php if (form_error('password')){?> error<?php }?>">
                <input type="password" name="password" class="style-input" placeholder="Пароль">
                <?php echo form_error('password','<div class="error">','</div>');?>

            </div>
            <div class="form-bk<?php if (form_error('password_confirm')){?> error<?php }?>">
                <input type="password" name="password_confirm" class="style-input" placeholder="Пароль еще раз">
                <?php echo form_error('password_confirm','<div class="error">','</div>');?>

            </div>
            <div class="form-bk bkCenter">
                <button type="submit" class="btn btn-blue btn-m">Регистрация</button>
            </div>
        </form>
    </div>
</div><?php }} ?>