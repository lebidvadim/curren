<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 23:25:35
         compiled from "/home/dimckale/bustool.pro/www/themes/delegation/modal-transfer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13477928615b85afbfa81912-58062849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '841cd8aeba6863beda0c2001a0b343afe3b9b77c' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/delegation/modal-transfer.tpl',
      1 => 1533466060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13477928615b85afbfa81912-58062849',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b85afbfa839a2_13741618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85afbfa839a2_13741618')) {function content_5b85afbfa839a2_13741618($_smarty_tpl) {?><form action="" method="post">
    <div class="title-m">Передать ресурсы</div>
    <div class="form-bk">
        <select name="type_tr" id="" class="style-select">
            <option value="1">Сила</option>
            <option value="2">Постеры</option>
        </select>
    </div>
    <div class="form-bk">
        <input type="number" name="number" class="style-input" placeholder="Количество">
    </div>
    <input type="hidden" name="type_mod" value="2">
    <input type="hidden" class="id_us_trans" name="id_us" value="">
    <div class="btn-center">
        <button class="btn btn-m btn-grin">Передать</button>
    </div>
</form><?php }} ?>