<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:03:24
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/email/robot-yes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3197536155b850fdc4cb491-55986320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc02125994e6872500ea942a5dc1f12cf4e49002' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/email/robot-yes.tpl',
      1 => 1532436108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3197536155b850fdc4cb491-55986320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_e' => 0,
    'url_e' => 0,
    'linck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850fdc4e7213_09703649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850fdc4e7213_09703649')) {function content_5b850fdc4e7213_09703649($_smarty_tpl) {?><html>
<body>
<h1>Мы обучили сайт <a href="<?php echo $_smarty_tpl->tpl_vars['site_e']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site_e']->value;?>
</a></h1>
<p><b>Ссылка:</b> <?php echo $_smarty_tpl->tpl_vars['url_e']->value;?>
</p>
<p>Зайдите в свой акаунт перейдите <a href="<?php echo $_smarty_tpl->tpl_vars['linck']->value;?>
" target="_blank">пост</a> и нажмите на кнопку "Перепарсить".</p>
</body>
</html><?php }} ?>