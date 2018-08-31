<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:04:24
         compiled from "/home/dimckale/bustool.pro/www/modules/users/themes/admin/edit_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3837882535b8510189c5e21-41485435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '031dd4755c039126e77c40384a49af61d57107a7' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/modules/users/themes/admin/edit_user.tpl',
      1 => 1533575207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3837882535b8510189c5e21-41485435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b8510189fd6a3_26499544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8510189fd6a3_26499544')) {function content_5b8510189fd6a3_26499544($_smarty_tpl) {?><div class="card">
  <h4 class="card-header">Редактировать пользователя - <b><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</b></h4>
  <div class="card-body">
    <form action="" method="post">
    	<div class="form-group">
			<label for="exampleInputEmail1">Имя пользователя</label>
		    <input type="text" name="username" class="form-control" placeholder="Имя пользователя" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" readonly>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Емаил пользователя</label>
		    <input type="text" name="email" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" readonly>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Деньги пользователя</label>
			<input type="text" name="money" class="form-control" placeholder="Имя пользователя" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Количество сил</label>
			<input type="text" name="force" class="form-control" placeholder="Имя пользователя" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->force;?>
">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Количество копирок</label>
			<input type="text" name="posts" class="form-control" placeholder="Имя пользователя" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->posts;?>
">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Тарифный план</label>
			<select class="form-control" name="type_tarif">
				<option value="1"<?php if ($_smarty_tpl->tpl_vars['user']->value->type_tarif==1){?> selected="selected"<?php }?>>Базовый</option>
				<option value="2"<?php if ($_smarty_tpl->tpl_vars['user']->value->type_tarif==2){?> selected="selected"<?php }?>>Стандарт</option>
				<option value="3"<?php if ($_smarty_tpl->tpl_vars['user']->value->type_tarif==3){?> selected="selected"<?php }?>>Продвинутый</option>
				<option value="4"<?php if ($_smarty_tpl->tpl_vars['user']->value->type_tarif==4){?> selected="selected"<?php }?>>Премиум</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Группа пользователя</label>
			<select class="form-control" name="group_id">
				<option value="1"<?php if ($_smarty_tpl->tpl_vars['user']->value->group_id==1){?> selected="selected"<?php }?>>Администратор</option>
				<option value="2"<?php if ($_smarty_tpl->tpl_vars['user']->value->group_id==2){?> selected="selected"<?php }?>>Пользователь</option>
				<option value="3"<?php if ($_smarty_tpl->tpl_vars['user']->value->group_id==3){?> selected="selected"<?php }?>>Партнеры</option>
				<option value="4"<?php if ($_smarty_tpl->tpl_vars['user']->value->group_id==4){?> selected="selected"<?php }?>>Менеджеры</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Активировать пользователя</label>
			<select class="form-control" name="active">
				<option value="0"<?php if ($_smarty_tpl->tpl_vars['user']->value->active==0){?> selected="selected"<?php }?>>Деактивировать</option>
				<option value="1"<?php if ($_smarty_tpl->tpl_vars['user']->value->active==1){?> selected="selected"<?php }?>>Активировать</option>
			</select>
		</div>
		
		
    	<button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
  </div>
</div>
<?php }} ?>