<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 23:25:35
         compiled from "/home/dimckale/bustool.pro/www/themes/delegation/modal-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17233953825b85afbfa29a07-30581106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edd0c16e500788f6dac92aa86202930ed4a37f22' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/delegation/modal-add.tpl',
      1 => 1529748085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17233953825b85afbfa29a07-30581106',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b85afbfa78345_77252173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85afbfa78345_77252173')) {function content_5b85afbfa78345_77252173($_smarty_tpl) {?><form action="" method="post">
    <div class="title-m">Добавить в команду</div>
    <div class="form-bk">
        <input type="text" name="email" class="style-input" placeholder="Введите эмаил пользователя">
    </div>
    <input type="hidden" name="type_mod" value="1">
    <div class="btn-center">
        <button class="btn btn-m btn-grin">Добавить</button>
    </div>
</form><?php }} ?>