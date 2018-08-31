<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:44:28
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/modal-buy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:357658015b850b6c52c0e2-90760393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d1ea4916581263bdf7d65d67641e2f4cb387549' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/modal-buy.tpl',
      1 => 1533465432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '357658015b850b6c52c0e2-90760393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850b6c599c21_28493794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850b6c599c21_28493794')) {function content_5b850b6c599c21_28493794($_smarty_tpl) {?><div class="title-m">Купить постов</div>
<?php if ($_smarty_tpl->tpl_vars['user']->value->rates->id_r!=4){?>
<div class="force-modal posts">
    <a href="#" class="col-force"><?php echo $_smarty_tpl->tpl_vars['user']->value->force;?>
 сил (<span><?php echo (int)($_smarty_tpl->tpl_vars['user']->value->force/$_smarty_tpl->tpl_vars['user']->value->rates->force_p_c);?>
</span> постов)</a>
    <div class="form-bk">
        <input type="number" placeholder="Количество" name="posts" class="style-input" id="posts-inp">
        <label></label>
    </div>
    <div class="pric">1 пост = <span id="posts-pric"><?php echo $_smarty_tpl->tpl_vars['user']->value->rates->force_p_c;?>
</span> сил</div>
    <div class="money"><span>0</span> сил</div>
    <div class="btn-center"><button id="posts-submit" class="btn btn-m btn-grin">Купить</button></div>
</div>
<?php }else{ ?>
    <div class="info-bk or">
        <div class="icon"></div>
        <div class="text">У вас безлим по постерам.</div>
    </div>
<?php }?><?php }} ?>