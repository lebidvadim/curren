<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:02:07
         compiled from "/home/dimckale/bustool.pro/www/modules/poster/themes/admin/robot-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21132673015b850f8f9816b0-97500564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdabdbf65d9494ca3f033c2eb42e23d218c7d4b5' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/modules/poster/themes/admin/robot-edit.tpl',
      1 => 1532434465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21132673015b850f8f9816b0-97500564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'robot' => 0,
    'html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850f8f9b8331_54206724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850f8f9b8331_54206724')) {function content_5b850f8f9b8331_54206724($_smarty_tpl) {?><form action="" method="post">
    <div><b>Ссылка:</b> <a href="<?php echo $_smarty_tpl->tpl_vars['robot']->value->url;?>
" target="_blank">ссылка поста</a></div>
    <div><b>Сайт:</b> <a href="http://<?php echo $_smarty_tpl->tpl_vars['robot']->value->site;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['robot']->value->site;?>
</a></div>
    <div><b>Емаил:</b> <?php echo $_smarty_tpl->tpl_vars['robot']->value->email_u;?>
</div>
    <button class="btn mt-3" name="btn" type="submit" value="pars">Парсить</button>
    <button class="btn mt-3" name="btn" type="submit" value="email">Отправить письмо</button>
</form>
<div><?php echo $_smarty_tpl->tpl_vars['html']->value;?>
</div>
<?php }} ?>