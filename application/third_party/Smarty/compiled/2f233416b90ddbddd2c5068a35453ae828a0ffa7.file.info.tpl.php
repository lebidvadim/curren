<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:44:31
         compiled from "/home/dimckale/bustool.pro/www/themes/panel/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13752092875b850b6f653388-20306998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f233416b90ddbddd2c5068a35453ae828a0ffa7' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/panel/info.tpl',
      1 => 1528990831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13752092875b850b6f653388-20306998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850b6f68a111_65027101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850b6f68a111_65027101')) {function content_5b850b6f68a111_65027101($_smarty_tpl) {?><div class="info-bk<?php if ($_smarty_tpl->tpl_vars['type']->value==0){?> re<?php }elseif($_smarty_tpl->tpl_vars['type']->value==1){?> or<?php }elseif($_smarty_tpl->tpl_vars['type']->value==2){?> bl<?php }elseif($_smarty_tpl->tpl_vars['type']->value==3){?> gr<?php }?>">
    <div class="icon"></div>
    <div class="text"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
</div><?php }} ?>