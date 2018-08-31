<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:44:28
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/site-id.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11362875125b850b6c5a3077-43036871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '752f3044eaf9be96b3e50e7183f96db88bdb16d3' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/site-id.tpl',
      1 => 1533045099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11362875125b850b6c5a3077-43036871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'site_id' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850b6c5ce841_63276457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850b6c5ce841_63276457')) {function content_5b850b6c5ce841_63276457($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['message']->value){?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['site_id']->value==1){?>

<form action="" method="post">
    <div class="titleH3"><h3>Настройка сайта</h3></div>
    <div class="form-bk w-400<?php if (form_error('site_url')){?> error<?php }?>">
        <input type="url" class="style-input" name="site_url" value="<?php echo $_smarty_tpl->tpl_vars['site']->value->url;?>
" placeholder="http(s)://site.ru" required>
        <?php echo form_error('site_url','<label>','</label>');?>

    </div>
    <div class="form-bk w-400<?php if (form_error('cms')){?> error<?php }?>">
        <select class="style-select" name="cms" id="">
            <option value="WP"<?php if ($_smarty_tpl->tpl_vars['site']->value->cms=='WP'){?> selected<?php }?>>WordPress</option>
        </select>
        <?php echo form_error('cms','<label>','</label>');?>

    </div>
    <div class="form-bk w-400<?php if (form_error('img_size')){?> error<?php }?>">
        <input type="text" class="style-input" name="img_size" value="<?php echo $_smarty_tpl->tpl_vars['site']->value->img_size;?>
" placeholder="Мак. ширина картинки при загрузки" title="Мак. ширина картинки при загрузки">
        <?php echo form_error('img_size','<label>','</label>');?>

    </div>
    <div class="form-bk w-400">
        <input type="text" class="style-input" name="login" value="<?php echo $_smarty_tpl->tpl_vars['site']->value->login;?>
" placeholder="Логин" title="Логин">
    </div>
    <div class="form-bk w-400">
        <input type="text" class="style-input" name="password" value="<?php echo $_smarty_tpl->tpl_vars['site']->value->password;?>
" placeholder="Пароль" title="Пароль">
    </div>
    <div class="form-bk flex">
    <button class="btn btn-l btn-grin">Сохранить</button>
    </div>
</form>
<?php }?><?php }} ?>