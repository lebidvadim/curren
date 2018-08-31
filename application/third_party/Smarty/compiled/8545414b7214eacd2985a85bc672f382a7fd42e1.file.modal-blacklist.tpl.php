<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 15:57:50
         compiled from "/home/dimckale/bustool.pro/www/themes/blacklist/modal-blacklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123216855b8546ce665492-86704050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8545414b7214eacd2985a85bc672f382a7fd42e1' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/blacklist/modal-blacklist.tpl',
      1 => 1528980284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123216855b8546ce665492-86704050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_modal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b8546ce68cb05_27956724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8546ce68cb05_27956724')) {function content_5b8546ce68cb05_27956724($_smarty_tpl) {?><div class="title-m"><?php echo $_smarty_tpl->tpl_vars['title_modal']->value;?>
</div>
<form action="" method="post">
    <div class="form-bk">
        <input type="text" name="url_add" placeholder="Адрес сайта" class="style-input">
    </div>
    <input type="hidden" name="type_url" value="1">
    <div class="btn-center form-pt">
        <button type="submit" class="btn btn-m btn-grin">Добавить сайт</button>
    </div>
</form><?php }} ?>