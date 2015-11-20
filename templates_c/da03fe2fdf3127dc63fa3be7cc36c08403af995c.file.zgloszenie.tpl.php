<?php /* Smarty version Smarty-3.1.15, created on 2015-10-20 22:05:57
         compiled from "./templates/new_red/zgloszenie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88058931156269ea5922983-02046811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da03fe2fdf3127dc63fa3be7cc36c08403af995c' => 
    array (
      0 => './templates/new_red/zgloszenie.tpl',
      1 => 1445282916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88058931156269ea5922983-02046811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_id' => 0,
    'lang' => 0,
    'user_id_kogo' => 0,
    'zgl' => 0,
    'user_zg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56269ea599e9f1_95975402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56269ea599e9f1_95975402')) {function content_56269ea599e9f1_95975402($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[432];?>
</h1>
<p>
<?php if ($_smarty_tpl->tpl_vars['user_id_kogo']->value>=1) {?>
<?php if ($_smarty_tpl->tpl_vars['zgl']->value==1) {?>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[433];?>
</b> <b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['user_zg']->value;?>
</b> <b><?php echo $_smarty_tpl->tpl_vars['lang']->value[434];?>
</b>
<?php } else { ?>

<form action="wyk/zgloszenie.php" method="POST">

<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[435];?>
</b> <b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['user_zg']->value;?>
</b><br><br>

<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[436];?>
</b><br>

<textarea style="width:600px;height:100px;" name="tresc"></textarea><br>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user_id_kogo']->value;?>
" name="kogo">
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[437];?>
" name="zglos">
</form>
<?php }?>
<?php } else { ?>
<center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[438];?>
</b></center>
<?php }?>
</p>
		
<?php } else { ?>

				<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[432];?>
</h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[439];?>
 </b>
</center>
</p>

<?php }?>		


	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
