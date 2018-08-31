<?php /* Smarty version Smarty-3.1.13, created on 2018-08-28 12:02:00
         compiled from "/home/dimckale/bustool.pro/www/modules/admin/themes/admin/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1993661385b850f889bb3e3-63738566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '009790e96d72e6f5ffb583cd2922277c7893af54' => 
    array (
      0 => '/home/dimckale/bustool.pro/www/modules/admin/themes/admin/main.tpl',
      1 => 1533813502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1993661385b850f889bb3e3-63738566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'crumbs' => 0,
    'active_list' => 0,
    'user_count' => 0,
    'blacklist_count' => 0,
    'message' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b850f889e52b0_41376863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b850f889e52b0_41376863')) {function content_5b850f889e52b0_41376863($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


</head>
<body class="bg-light">
	
	
	<div class="container mt-4">
	<nav aria-label="breadcrumb" role="navigation">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="/panel">Главная</a></li>
	    <?php echo $_smarty_tpl->tpl_vars['crumbs']->value;?>

	  
	  </ol>
	</nav>
	</div>
	<div class="container mt-4 mb-3">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-12 mb-4">
		<div class="list-group">
			<a href="/admin" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action<?php if ($_smarty_tpl->tpl_vars['active_list']->value=='home'){?> active<?php }?>">
		    	Главная
		  	</a>
		  	<a href="/admin/users" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action<?php if ($_smarty_tpl->tpl_vars['active_list']->value=='users'){?> active<?php }?>">Пользователи<span class="badge badge-primary badge-pill"><?php echo $_smarty_tpl->tpl_vars['user_count']->value;?>
</span></a>
		  	<a href="/admin/blacklist" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action<?php if ($_smarty_tpl->tpl_vars['active_list']->value=='blacklist'){?> active<?php }?>">Чорный список<span class="badge badge-primary badge-pill"><?php echo $_smarty_tpl->tpl_vars['blacklist_count']->value;?>
</span></a>
		  	<a href="/admin/purse" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action<?php if ($_smarty_tpl->tpl_vars['active_list']->value=='purse'){?> active<?php }?>">Кошелек</a>
		  	<a href="/admin/rates" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action<?php if ($_smarty_tpl->tpl_vars['active_list']->value=='rates'){?> active<?php }?>">Тарифы</a>
			<a href="/admin/poster" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action<?php if ($_smarty_tpl->tpl_vars['active_list']->value=='poster'){?> active<?php }?>">Постер</a>
			<a href="/admin/promo" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action<?php if ($_smarty_tpl->tpl_vars['active_list']->value=='promo'){?> active<?php }?>">Промо коды</a>
		  	
		</div>
		</div>
		<div class="col-xl-9 col-lg-9 col-md-12">
			<?php if ($_smarty_tpl->tpl_vars['active_list']->value=='blacklist'){?>
			<nav class="nav nav-pills flex-column flex-sm-row">
				<a class="flex-sm-fill text-sm-center nav-link active" href="/admin/blacklist/all">Все</a>
				<a class="flex-sm-fill text-sm-center nav-link" href="/admin/blacklist/us">Пользователей</a>
				<a class="flex-sm-fill text-sm-center nav-link" href="/admin/blacklist/ser">Сервиса</a>
				<a class="flex-sm-fill text-sm-center nav-link" href="/admin/blacklist/mod">На модерации</a>
			</nav>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</div>
	</div>
	
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="/themes/js/common.js"></script>
</body>
</html><?php }} ?>