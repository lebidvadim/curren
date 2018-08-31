<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:41:39
         compiled from "/home/dimckale/bustool.pro/www/themes/referrals/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19814654745b850ac3c6f146-12849431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de2045483143dd95e12ffee292e57336ea4e9fa1' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/referrals/users.tpl',
      1 => 1535445486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19814654745b850ac3c6f146-12849431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850ac3c96587_71007433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850ac3c96587_71007433')) {function content_5b850ac3c96587_71007433($_smarty_tpl) {?><div class="info-bk bl">
    <div class="icon"></div>
    <div class="text">Ваша реф ссылка: https://bustool.pro/registration?r=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</div>
</div>
<div class="info-bk or">
    <div class="icon"></div>
    <div class="text">Идет разработка функционала рефералов.</div>
</div><?php }} ?>