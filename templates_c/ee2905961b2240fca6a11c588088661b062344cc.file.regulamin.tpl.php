<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 21:48:42
         compiled from "./templates/blu/regulamin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18642779725625491ac46b58-29605538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee2905961b2240fca6a11c588088661b062344cc' => 
    array (
      0 => './templates/blu/regulamin.tpl',
      1 => 1445282891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18642779725625491ac46b58-29605538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'regulamin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625491acb2ff5_68482316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625491acb2ff5_68482316')) {function content_5625491acb2ff5_68482316($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[402];?>
</h1><p>
<?php echo $_smarty_tpl->tpl_vars['regulamin']->value;?>

		</p>
		



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
