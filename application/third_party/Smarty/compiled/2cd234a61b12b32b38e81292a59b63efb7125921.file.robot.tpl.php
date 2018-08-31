<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:02:05
         compiled from "/home/dimckale/bustool.pro/www/modules/poster/themes/admin/robot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9611970435b850f8daaee56-51264838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cd234a61b12b32b38e81292a59b63efb7125921' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/modules/poster/themes/admin/robot.tpl',
      1 => 1532433439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9611970435b850f8daaee56-51264838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'robot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850f8dae37f8_57933774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850f8dae37f8_57933774')) {function content_5b850f8dae37f8_57933774($_smarty_tpl) {?><div class="row">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['robot']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['robot']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
        <div class="col-12"><div class="bg-white p-2 border mb-3"><a href="/admin/poster/editr/<?php echo $_smarty_tpl->tpl_vars['robot']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['robot']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
</a></div></div>
    <?php }} ?>
</div><?php }} ?>