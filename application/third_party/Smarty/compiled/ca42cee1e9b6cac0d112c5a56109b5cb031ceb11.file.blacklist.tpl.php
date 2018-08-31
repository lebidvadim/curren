<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:04:13
         compiled from "/home/dimckale/bustool.pro/www/modules/blacklist/themes/admin/blacklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7203959745b85100d2cb1b1-22530229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca42cee1e9b6cac0d112c5a56109b5cb031ceb11' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/modules/blacklist/themes/admin/blacklist.tpl',
      1 => 1520431462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7203959745b85100d2cb1b1-22530229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'blacklist' => 0,
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b85100d3454b2_74842356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85100d3454b2_74842356')) {function content_5b85100d3454b2_74842356($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/dimckale/bustool.pro/www/application/third_party/Smarty/plugins/modifier.date_format.php';
?><div class="row mt-3">
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['blacklist']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['blacklist']->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
  <div class="col-sm-6 mb-4">
    <div class="bg-white border<?php if ($_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['type_b']==1){?> border-warning<?php }?><?php if ($_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['type_b']==2){?> border-danger<?php }?><?php if ($_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['type_b']==0){?> border-secondary<?php }?>">
      <div class="card-body">
        <div class="d-flex ">
        	<img src="http://www.google.com/s2/favicons?domain=<?php echo $_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['url_b'];?>
" alt="">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['url_b'];?>
"><?php echo $_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['url_b'];?>
</a>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['date_b']!=''){?>
        <p class="card-text">Дата добавления: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['date_b'],"%d.%m.%y");?>
</p>
        <?php }?>
        <a href="/admin/blacklist/edit/<?php echo $_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b'];?>
" class="btn btn-primary">Редактировать</a>
        <a href="/admin/blacklist/del/<?php echo $_smarty_tpl->tpl_vars['blacklist']->value[$_smarty_tpl->tpl_vars['i']->value]['id_b'];?>
" class="btn btn-danger">Удалить</a>
      </div>
    </div>
  </div>
	<?php }} ?>
</div>
<nav aria-label="...">
  <ul class="pagination">
<?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

</ul>
</nav><?php }} ?>