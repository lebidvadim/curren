<?php /* Smarty version Smarty-3.1.13, created on 2018-08-30 20:06:52
         compiled from "/home/midav/rooki.pro/currencies/modules/currencies/themes/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7663552625b8818f48363c2-32232263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4011be9777c7e138e472a4e1880f755009ebfaf' => 
    array (
      0 => '/home/midav/rooki.pro/currencies/modules/currencies/themes/history.tpl',
      1 => 1535648772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7663552625b8818f48363c2-32232263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b8818f48570f4_64064340',
  'variables' => 
  array (
    'i' => 0,
    'currencies' => 0,
    'j' => 0,
    'cur' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8818f48570f4_64064340')) {function content_5b8818f48570f4_64064340($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/midav/rooki.pro/currencies/application/third_party/Smarty/plugins/modifier.date_format.php';
?><!doctype html>
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
    <h2>История</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата</th>
            <th scope="col">EUR-UAH</th>
            <th scope="col">RUR-UAH</th>
            <th scope="col">USD-UAH</th>
            <th scope="col">BTC-USD</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['currencies']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['currencies']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
        <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
</th>
            <?php $_smarty_tpl->tpl_vars['cur'] = new Smarty_variable(json_decode($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['cur']), null, 0);?>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['i']->value]['date'],"%d.%m.%Y, %H:%M");?>
</td>
            <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['cur']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['cur']->value); $_smarty_tpl->tpl_vars['j']->value++){
?>
            <td>
                <div>Купить: <b><?php echo round($_smarty_tpl->tpl_vars['cur']->value[$_smarty_tpl->tpl_vars['j']->value]->buy,2);?>
</b> <?php if ($_smarty_tpl->tpl_vars['cur']->value[$_smarty_tpl->tpl_vars['j']->value]->base_ccy=='UAH'){?>грн.<?php }elseif($_smarty_tpl->tpl_vars['cur']->value[$_smarty_tpl->tpl_vars['j']->value]->base_ccy=='USD'){?>$<?php }else{ ?>грн.<?php }?></div>
                <div>Продать: <b><?php echo round($_smarty_tpl->tpl_vars['cur']->value[$_smarty_tpl->tpl_vars['j']->value]->sale,2);?>
</b> <?php if ($_smarty_tpl->tpl_vars['cur']->value[$_smarty_tpl->tpl_vars['j']->value]->base_ccy=='UAH'){?>грн.<?php }elseif($_smarty_tpl->tpl_vars['cur']->value[$_smarty_tpl->tpl_vars['j']->value]->base_ccy=='USD'){?>$<?php }else{ ?>грн.<?php }?></div>
            </td>
            <?php }} ?>
        </tr>
        <?php }} ?>

        </tbody>
    </table>
    <a href="/" class="btn btn-primary">Главная</a>
</div>

</body>
</html><?php }} ?>