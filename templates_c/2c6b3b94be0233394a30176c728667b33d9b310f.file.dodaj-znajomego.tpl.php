<?php /* Smarty version Smarty-3.1.15, created on 2015-10-20 06:28:26
         compiled from "./templates/new_red/dodaj-znajomego.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2466303805625c2ea7f00e9-73469437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c6b3b94be0233394a30176c728667b33d9b310f' => 
    array (
      0 => './templates/new_red/dodaj-znajomego.tpl',
      1 => 1445282906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2466303805625c2ea7f00e9-73469437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_id' => 0,
    'lang' => 0,
    'user_id_kogo' => 0,
    'zgl' => 0,
    'site_url' => 0,
    'user_zg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625c2ea81fbd9_82139827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625c2ea81fbd9_82139827')) {function content_5625c2ea81fbd9_82139827($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



		<div class="left">
<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>	
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[165];?>
</h1><p>

<?php if ($_smarty_tpl->tpl_vars['user_id_kogo']->value>=1) {?>
<?php if ($_smarty_tpl->tpl_vars['zgl']->value==1) {?>
<center>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[166];?>
</b>
<b>
<br><br><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
profil/<?php echo $_smarty_tpl->tpl_vars['user_zg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_id_kogo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[697];?>
</a>
</b>
</center>
<?php } else { ?>

<form action="wyk/dodajznajomego.php" method="POST">

<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[167];?>
 </b> <b style="color:green;"><?php echo $_smarty_tpl->tpl_vars['user_zg']->value;?>
</b><br><br>

<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[168];?>
</b><br>

<textarea style="width:600px;height:70px;" name="tresc"></textarea><br>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user_id_kogo']->value;?>
" name="kogo">
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[169];?>
" name="zglos">
</form>
<?php }?>
<?php } else { ?>
<center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[170];?>
</b></center>
<?php }?>
</p>
		
	<?php } else { ?>

				<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[165];?>
</h1><p>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[171];?>
</b>
</center>
</p>

<?php }?>	


	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
