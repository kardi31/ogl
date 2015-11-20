<?php /* Smarty version Smarty-3.1.15, created on 2015-10-21 21:51:36
         compiled from "./templates/new_red/usun-konto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14627835295627ecc8387036-80130829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7bd97a9a71303a793a336bf17109e3fb9ae7cfa' => 
    array (
      0 => './templates/new_red/usun-konto.tpl',
      1 => 1445282915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14627835295627ecc8387036-80130829',
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
  'unifunc' => 'content_5627ecc8400535_43369446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627ecc8400535_43369446')) {function content_5627ecc8400535_43369446($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[408];?>
</h1>
		<p>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>



<center>
<b>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[409];?>

</b>
<br><br>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==1) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[410];?>
</b></center></div><?php }?>

<form action="wyk/usun-konto.php" method="POST">
<table>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[411];?>
</td>
<td><input type="password" name="sh"><input type="submit"  onclick="return(potwierdz())" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[412];?>
" name="zh"></td>
</tr>
</table>
</center>
</form>
<br>

<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['stan']->value==2) {?>
<center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[413];?>
</b></center>
<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[414];?>
</b></center>
<?php }?>
<?php }?>

</p>
	



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
