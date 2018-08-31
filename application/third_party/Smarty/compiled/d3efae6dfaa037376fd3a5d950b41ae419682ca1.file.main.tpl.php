<?php /* Smarty version Smarty-3.1.13, created on 2018-08-30 20:10:54
         compiled from "/home/midav/rooki.pro/currencies/modules/currencies/themes/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17784833755b88162352d999-37484952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3efae6dfaa037376fd3a5d950b41ae419682ca1' => 
    array (
      0 => '/home/midav/rooki.pro/currencies/modules/currencies/themes/main.tpl',
      1 => 1535648772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17784833755b88162352d999-37484952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b88162354f965_04401399',
  'variables' => 
  array (
    'i' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b88162354f965_04401399')) {function content_5b88162354f965_04401399($_smarty_tpl) {?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Курсы валют</title>
</head>
<body>

    <div class="container pt-3">
        <div class="row mb-3">
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['currencies']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['currencies']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
            <div class="col">
                <div class="bg-light border border-info rounded">
                    <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['ccy'];?>
-<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['base_ccy'];?>
</div>
                    <div class="text-center">Купить: <b><?php echo round($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['buy'],2);?>
</b> <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['base_ccy']=='UAH'){?>грн.<?php }elseif($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['base_ccy']=='USD'){?>$<?php }else{ ?>грн.<?php }?></div>
                    <div class="text-center">Продать: <b><?php echo round($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['sale'],2);?>
</b> <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['base_ccy']=='UAH'){?>грн.<?php }elseif($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['base_ccy']=='USD'){?>$<?php }else{ ?>грн.<?php }?></div>
                </div>
            </div>
            <?php }} ?>
        </div>
        <a href="/history" class="btn btn-primary">История</a>
    </div>

</body>
</html><?php }} ?>