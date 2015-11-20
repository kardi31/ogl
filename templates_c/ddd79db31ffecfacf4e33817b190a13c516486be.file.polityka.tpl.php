<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 21:48:45
         compiled from "./templates/blu/polityka.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20813564435625491d4cfd81-99686842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddd79db31ffecfacf4e33817b190a13c516486be' => 
    array (
      0 => './templates/blu/polityka.tpl',
      1 => 1445282889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20813564435625491d4cfd81-99686842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'polityka' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625491d4e74e2_25605230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625491d4e74e2_25605230')) {function content_5625491d4e74e2_25605230($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[601];?>
</h1><p>
<?php echo $_smarty_tpl->tpl_vars['polityka']->value;?>

		</p>
		



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
