<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 11:46:43
         compiled from "/home/dimckale/bustool.pro/www/themes/poster/poster.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9882995335b850bf398cca1-86531952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099b8d057316b4fe9230dae086a108d7c982edb6' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/themes/poster/poster.tpl',
      1 => 1535028320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9882995335b850bf398cca1-86531952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850bf3b85751_10182908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850bf3b85751_10182908')) {function content_5b850bf3b85751_10182908($_smarty_tpl) {?><div class="black-list-top poster">
    <div class="info">
        <div class="flex">Постер
            <span class="col_pos"><?php if ($_smarty_tpl->tpl_vars['user']->value->rates->id_r!=4){?><?php echo $_smarty_tpl->tpl_vars['user']->value->posts;?>
<?php }else{ ?>&infin;<?php }?></span>
            <div class="kup_pos">
                <div>публикаций</div>
                <a href="#" data-modal="pod-mod-pos-buy">Купить</a>
            </div>
        </div>
        <p>Этот инструмент даст вам возможность максимально быстро скопировать контент с другого сайта к себе на сайт.
            Копируется весь контент и картинки загружаются к статье автоматически.</p>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['message']->value){?>
    <div style="margin-top: 30px"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>

<div class="title-supp">Копировать контент</div>
<form action="" method="post">
    <div class="form-flex">
        <input type="text" name="url_cop" placeholder="Укажите ссылку новости" class="style-input">
        <input type="hidden" name="copy" value="1">
        <button type="submit" class="btn btn-l btn-blue">Копировать</button>
    </div>
</form>
<?php }} ?>