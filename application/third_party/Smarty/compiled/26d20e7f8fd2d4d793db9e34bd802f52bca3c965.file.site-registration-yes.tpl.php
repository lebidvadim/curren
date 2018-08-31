<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 18:33:01
         compiled from "/home/dimckale/bustool.pro/www/themes/auth/site-registration-yes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20327364225b856b2d06de87-71559354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26d20e7f8fd2d4d793db9e34bd802f52bca3c965' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/auth/site-registration-yes.tpl',
      1 => 1532379610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20327364225b856b2d06de87-71559354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'crumbs' => 0,
    'email_us' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b856b2d071f26_30799423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b856b2d071f26_30799423')) {function content_5b856b2d071f26_30799423($_smarty_tpl) {?><div class="container mh-vh">
    <div class="title"><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1></div>
    <div class="crumbs">
        <?php echo $_smarty_tpl->tpl_vars['crumbs']->value;?>

    </div>
    <div class="form-rezul reg">
        <p>Для завершения регистрации вам необходимо подтвердить емейл. В течении 5-ти минут <br>вам должно прийти письмо на емейл <b><?php echo $_smarty_tpl->tpl_vars['email_us']->value;?>
</b>. Если не пришло то проверьте папку Спам.</p>
        <!--<div class="bkCenter"><a href="#" class="btn btn-blue btn-m">Повторно отправить письмо</a></div>-->
    </div>
</div>
<?php }} ?>