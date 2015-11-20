<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 22:33:06
         compiled from "./templates/new_red/zmien-haslo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1982682363562553822504a8-89089118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e90374fece9eb5b9e752c666e0b083159fc18b8c' => 
    array (
      0 => './templates/new_red/zmien-haslo.tpl',
      1 => 1445282916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1982682363562553822504a8-89089118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'stan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_562553822818d2_78870813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562553822818d2_78870813')) {function content_562553822818d2_78870813($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[440];?>
</h1>
		<p>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>

<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value[441];?>
</h3>

<?php if ($_smarty_tpl->tpl_vars['stan']->value==1) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[442];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==2) {?><div id="ukryj"><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[443];?>
</b></center></div><?php }?>

<form action="wyk/zmien_haslo.php" method="POST">
<table>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[444];?>
</td>
<td><input type="password" name="sh"></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[445];?>
</td>
<td><input type="password" name="nh"></td>
</tr>
</table>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[446];?>
" name="zh">
</form>
<br>

<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[447];?>
</b></center>
<?php }?>

</p>
	



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
