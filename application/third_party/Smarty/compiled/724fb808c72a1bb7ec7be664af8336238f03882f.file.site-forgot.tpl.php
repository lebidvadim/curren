<?php /* Smarty version Smarty-3.1.13, created on 2018-08-29 06:24:13
         compiled from "/home/dimckale/bustool.pro/www/themes/auth/site-forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10940379925b8611dd5e62d0-22131420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '724fb808c72a1bb7ec7be664af8336238f03882f' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/auth/site-forgot.tpl',
      1 => 1532354787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10940379925b8611dd5e62d0-22131420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'crumbs' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b8611dd64bfd6_91329366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8611dd64bfd6_91329366')) {function content_5b8611dd64bfd6_91329366($_smarty_tpl) {?><div class="container mh-vh">
    <div class="title"><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1></div>
    <div class="crumbs">
        <?php echo $_smarty_tpl->tpl_vars['crumbs']->value;?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['message']->value){?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php }?>
    <div class="form-block">
        <form action="" method="post">
            <div class="form-bk<?php if (form_error('email')){?> error<?php }?>">
                <input type="text" name="email" value="<?php echo set_value('email');?>
" class="style-input" placeholder="Введите e-mail">
                <?php echo form_error('email','<div class="error">','</div>');?>

            </div>
            <div class="form-bk bkCenter">
                <button type="submit" class="btn btn-blue btn-m">Востановить</button>
            </div>
        </form>
    </div>
</div><?php }} ?>