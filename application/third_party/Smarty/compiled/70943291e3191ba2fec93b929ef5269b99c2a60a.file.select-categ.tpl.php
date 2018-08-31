<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:48:07
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/select-categ.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6625842025b850c47eb1e97-35445892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70943291e3191ba2fec93b929ef5269b99c2a60a' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/select-categ.tpl',
      1 => 1531815960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6625842025b850c47eb1e97-35445892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850c47edb1a4_27077333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850c47edb1a4_27077333')) {function content_5b850c47edb1a4_27077333($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['site']->value->error==''){?>
    <div class="form-bk categ">
        <label for="" class="label-title">Выбирете рубрику</label>
        <select data-placeholder="Рубрики" name="categ[]" class="chosen-select" multiple tabindex="4">
            <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = 0;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['site']->value->categ)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['site']->value->categ); $_smarty_tpl->tpl_vars['j']->value++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['site']->value->categ[$_smarty_tpl->tpl_vars['j']->value][0];?>
"<?php if ($_smarty_tpl->tpl_vars['site']->value->categ[$_smarty_tpl->tpl_vars['j']->value][1]==1){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['site']->value->categ[$_smarty_tpl->tpl_vars['j']->value][0];?>
</option>
            <?php }} ?>
        </select>
    </div>
<?php }else{ ?>
    <div class="info-bk re categ">
        <div class="icon"></div>
        <div class="text">Сайт ненастроен не указан логин или пароль либо они неверны либо сайт не на движке WordPress.</div>
    </div>
<?php }?><?php }} ?>