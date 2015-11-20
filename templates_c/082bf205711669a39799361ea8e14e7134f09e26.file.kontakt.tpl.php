<?php /* Smarty version Smarty-3.1.15, created on 2015-10-22 23:35:02
         compiled from "./templates/red/kontakt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184486316556295686ec9d01-77568816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '082bf205711669a39799361ea8e14e7134f09e26' => 
    array (
      0 => './templates/red/kontakt.tpl',
      1 => 1445282931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184486316556295686ec9d01-77568816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'kontaktt' => 0,
    'fk' => 0,
    'send' => 0,
    'error1' => 0,
    'error2' => 0,
    'error3' => 0,
    'error4' => 0,
    'error5' => 0,
    'eemail' => 0,
    'wemail' => 0,
    'token_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56295686f10819_41104857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56295686f10819_41104857')) {function content_56295686f10819_41104857($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[211];?>
</h1>
		<p>

<?php echo $_smarty_tpl->tpl_vars['kontaktt']->value;?>


<?php if ($_smarty_tpl->tpl_vars['fk']->value==1) {?>
<center>

<?php echo $_smarty_tpl->tpl_vars['lang']->value[212];?>
<br /><br/>

<?php if ($_smarty_tpl->tpl_vars['send']->value=="ok") {?>
<div id="ukryj" style="color:green"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[213];?>
</b></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['send']->value=="error") {?>
<div id="ukryj" style="color:red"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[214];?>
</b></div><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error1']->value=="pemail") {?>
<div style="color:red"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[215];?>
</b></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error2']->value=="ppemail") {?>
<div  style="color:red"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[216];?>
</b></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error3']->value=="pt") {?>
<div  style="color:red"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[217];?>
</b></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error4']->value=="pw") {?>
<div  style="color:red"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[218];?>
</b></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error5']->value=="pk") {?>
<div  style="color:red"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[219];?>
</b></div>
<?php }?>


	<form action="" method="post" name="submit">
		<table width="300" border="0">
			<tr>
			<td width="30%" valign="top"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[220];?>
</b></td></tr><tr>
			<td><input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['eemail']->value;?>
" name="email" style="width: 390px;" /><br />	
			

			</td>
			</tr>
			<tr>
			<td width="30%" valign="top"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[221];?>
</b></td></tr><tr>
			<td><select name="subject">
<option><?php echo $_smarty_tpl->tpl_vars['lang']->value[222];?>
</option>
<option><?php echo $_smarty_tpl->tpl_vars['lang']->value[223];?>
</option>
<option><?php echo $_smarty_tpl->tpl_vars['lang']->value[224];?>
</option>
<option><?php echo $_smarty_tpl->tpl_vars['lang']->value[225];?>
</option>
<option><?php echo $_smarty_tpl->tpl_vars['lang']->value[226];?>
</option>
</select><br />


			</td>
			</tr>
			<tr>
			<td width="30%" valign="top"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[227];?>
</b></td></tr><tr>
			<td><textarea name="text" style="width: 390px; height: 140px;"><?php echo $_smarty_tpl->tpl_vars['wemail']->value;?>
</textarea><br />

			</td>
			</tr>
		
			<tr>
			<td width="30%" valign="top"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[228];?>
</b></td></tr><tr>
			<td><?php echo $_smarty_tpl->tpl_vars['token_img']->value;?>
	
			

			</td>
			</tr>



		</table>
			<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[229];?>
" class="button"/>
	</form>
</center>

<?php }?>
</p>


	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
