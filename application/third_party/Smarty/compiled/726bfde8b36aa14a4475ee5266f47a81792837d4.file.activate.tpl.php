<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 18:33:00
         compiled from "/home/dimckale/bustool.pro/www/themes/auth/email/activate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4167586745b856b2c2bf5d7-48192826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '726bfde8b36aa14a4475ee5266f47a81792837d4' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/auth/email/activate.tpl',
      1 => 1528448375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4167586745b856b2c2bf5d7-48192826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identity' => 0,
    'url_s' => 0,
    'id' => 0,
    'activation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b856b2c2d96e3_24389079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b856b2c2d96e3_24389079')) {function content_5b856b2c2d96e3_24389079($_smarty_tpl) {?><html>
<body>
	<h1>Активировать учетную запись для <?php echo $_smarty_tpl->tpl_vars['identity']->value;?>
</h1>
	<p>Пожалуйста, нажмите на эту ссылку <a href="https://<?php echo $_smarty_tpl->tpl_vars['url_s']->value;?>
/auth/activate/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['activation']->value;?>
">Активируйте вашу учетную запись</a></p>
</body>
</html>
<?php }} ?>