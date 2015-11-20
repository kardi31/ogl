<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 22:45:47
         compiled from "./templates/new_red/polityka.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10638301655625567bee7744-87793063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c040caceed140d242945528f9637bcf5fc49e3e' => 
    array (
      0 => './templates/new_red/polityka.tpl',
      1 => 1445282911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10638301655625567bee7744-87793063',
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
  'unifunc' => 'content_5625567c014bb2_26615945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625567c014bb2_26615945')) {function content_5625567c014bb2_26615945($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
