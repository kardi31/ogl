<?php /* Smarty version Smarty-3.1.15, created on 2015-10-23 16:07:32
         compiled from "./templates/new_red/zapomniane.haslo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1948806351562a3f24819d73-98437185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47975fca278527a5260081833ffa9a7b893715fb' => 
    array (
      0 => './templates/new_red/zapomniane.haslo.tpl',
      1 => 1445282915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1948806351562a3f24819d73-98437185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'akt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_562a3f2488f1a6_57444685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562a3f2488f1a6_57444685')) {function content_562a3f2488f1a6_57444685($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[416];?>
</h1>
		<p>

<?php if ($_smarty_tpl->tpl_vars['akt']->value==1) {?><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[417];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['akt']->value==2) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[418];?>
</b></center><?php }?>

<center>

<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[419];?>
</b><br><br>
<form action="" method="POST">

<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[420];?>
</b><input type="text" name="login">
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[421];?>
" name="nhzi">

</form>
</center>

</p>


	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
