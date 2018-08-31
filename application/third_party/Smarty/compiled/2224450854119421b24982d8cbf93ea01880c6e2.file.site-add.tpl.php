<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:46:48
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/site-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13875983035b850bf89003d9-00448224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2224450854119421b24982d8cbf93ea01880c6e2' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/site-add.tpl',
      1 => 1533044766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13875983035b850bf89003d9-00448224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850bf892d281_80054284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850bf892d281_80054284')) {function content_5b850bf892d281_80054284($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['message']->value){?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<?php }?>
<form action="" method="post">
    <div class="titleH3"><h3>Добавить сайт</h3></div>
    <div class="form-bk w-400<?php if (form_error('url_add')){?> error<?php }?>">
        <input type="url" class="style-input" name="url_add" value="<?php echo set_value('url_add');?>
" placeholder="http(s)://site.ru" required>
        <?php echo form_error('url_add','<label>','</label>');?>

    </div>
    <div class="form-bk w-400<?php if (form_error('cms')){?> error<?php }?>">
        <select class="style-select" name="cms" id="">
            <option value="WP">WordPress</option>
        </select>
        <?php echo form_error('cms','<label>','</label>');?>

    </div>
    <div class="form-bk w-400<?php if (form_error('img_size')){?> error<?php }?>">
        <input type="text" class="style-input" name="img_size" value="<?php echo set_value('img_size');?>
" placeholder="Мак. ширина картинки при загрузки">
        <?php echo form_error('img_size','<label>','</label>');?>

    </div>
    <div class="form-bk w-400<?php if (form_error('login')){?> error<?php }?>">
        <input type="text" class="style-input" name="login" value="<?php echo set_value('login');?>
" placeholder="Логин">
        <?php echo form_error('login','<label>','</label>');?>

    </div>
    <div class="form-bk w-400<?php if (form_error('password')){?> error<?php }?>">
        <input type="text" class="style-input" name="password" value="<?php echo set_value('password');?>
" placeholder="Пароль">
        <?php echo form_error('password','<label>','</label>');?>

    </div>
    <div class="form-bk flex">
        <button class="btn btn-l btn-grin">Сохранить</button>
    </div>
</form>
<?php }} ?>