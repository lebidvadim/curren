<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:41:30
         compiled from "/home/dimckale/bustool.pro/www/themes/purse/modal-force.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19959888765b850abaae3b29-78765606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6de59958425a5bb1b0b542fd62628ff58eec3b9' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/purse/modal-force.tpl',
      1 => 1530533365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19959888765b850abaae3b29-78765606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_modal' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850abab18a44_78752709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850abab18a44_78752709')) {function content_5b850abab18a44_78752709($_smarty_tpl) {?><div class="title-m"><?php echo $_smarty_tpl->tpl_vars['title_modal']->value;?>
</div>
<div class="force-modal force">
        <a href="#" class="col-force"><?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
 руб (<span><?php echo (int)($_smarty_tpl->tpl_vars['user']->value->money/$_smarty_tpl->tpl_vars['user']->value->rates->percent);?>
</span> сил)</a>
        <div class="form-bk">
            <input type="number" placeholder="Количество" name="force" class="style-input" id="force-inp">
            <label></label>
        </div>
        <div class="pric">1 криптон = <span id="force-pric"><?php echo $_smarty_tpl->tpl_vars['user']->value->rates->percent;?>
</span> руб</div>
        <div class="money"><span>0.00</span> руб</div>
        <div class="btn-center"><button id="force-submit" class="btn btn-m btn-grin">Купить</button></div>
</div><?php }} ?>