<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:41:37
         compiled from "/home/dimckale/bustool.pro/www/themes/users/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3598822615b850ac1dc0d15-12047857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae2f3f3aa1c9a399a30adec3bd8b92528e6ec0c2' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/users/settings.tpl',
      1 => 1529579101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3598822615b850ac1dc0d15-12047857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850ac1de3629_93005482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850ac1de3629_93005482')) {function content_5b850ac1de3629_93005482($_smarty_tpl) {?><form action="" method="post">
    <div class="titleH3"><h3>Личная информация</h3></div>
    <div class="form-bk w-400<?php if (form_error('username')){?> error<?php }?>">
        <input type="text" class="style-input" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" placeholder="Имя и Фамилия">
        <?php echo form_error('username','<label>','</label>');?>

    </div>
    <div class="titleH3"><h3>Изменить пароль</h3></div>
    <div class="form-bk w-400<?php if (form_error('password_old')){?> error<?php }?>">
        <input type="text" name="password_old" class="style-input" placeholder="Старый пароль">
        <?php echo form_error('password_old','<label>','</label>');?>

    </div>
    <div class="form-bk w-400<?php if (form_error('password')){?> error<?php }?>">
        <input type="password" name="password" class="style-input" placeholder="Новый пароль">
        <?php echo form_error('password','<label>','</label>');?>

    </div>
    <button type="submit" class="btn btn-l btn-grin">Сохранить</button>
</form><?php }} ?>