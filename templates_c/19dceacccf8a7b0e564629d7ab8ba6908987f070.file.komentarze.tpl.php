<?php /* Smarty version Smarty-3.1.15, created on 2015-10-20 06:28:13
         compiled from "./templates/new_red/komentarze.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1612320195625c2dd5e1465-75092870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19dceacccf8a7b0e564629d7ab8ba6908987f070' => 
    array (
      0 => './templates/new_red/komentarze.tpl',
      1 => 1445282907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1612320195625c2dd5e1465-75092870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kom_ile' => 0,
    'lang' => 0,
    't_n' => 0,
    'k_n' => 0,
    'k_add' => 0,
    'komentowanie' => 0,
    'user_id' => 0,
    'user_nick' => 0,
    't_t' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625c2dd667a03_92969190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625c2dd667a03_92969190')) {function content_5625c2dd667a03_92969190($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['kom_ile']->value==0) {?>
<center><div><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[202];?>
</b></div></center>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['t_n']->value==1) {?>
<center><div id="ukryj"><div style="color:red"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[203];?>
</b></div></div></center>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['k_n']->value==1) {?>
<center><div style="color:red"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[204];?>
</b></div></center>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['k_add']->value==1) {?>
<center><div id="ukryj" style="color:green"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[205];?>
</b></div></center>
<?php }?>
<?php if (($_smarty_tpl->tpl_vars['komentowanie']->value==1)||($_smarty_tpl->tpl_vars['komentowanie']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value>=1)) {?>
<form action="" method="POST" name="addkom">
<p>
<table>
<!---
<tr>
<td><b>Nick:</b></td>
<td>
<input name="nick" <?php if ($_smarty_tpl->tpl_vars['user_nick']->value!='') {?> value="<?php echo $_smarty_tpl->tpl_vars['user_nick']->value;?>
" disabled="disabled" <?php }?> type="text" size="30" />
</td>
</tr>
--->
<tr>
<td align="left"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[206];?>
</b><br>
<textarea style="width:450px;height:80px;" name="tresc"><?php echo $_smarty_tpl->tpl_vars['t_t']->value;?>
</textarea>
</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['token']->value=="1") {?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['lang']->value[207];?>
</td>
<td>
<img src="include/kod.php">
</td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['lang']->value[208];?>
</td>
<td>
<input type="text" name="kod" style="width:50px;">
</td>
</tr>
<?php }?>
</table>
<br />	<br>
<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[209];?>
" name="addkom"/>
		
</p>		
</form>	
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['komentowanie']->value==2&&$_smarty_tpl->tpl_vars['user_nick']->value=='') {?>
<p><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[210];?>
</b></center></p>
<?php }?>

	<?php }} ?>
