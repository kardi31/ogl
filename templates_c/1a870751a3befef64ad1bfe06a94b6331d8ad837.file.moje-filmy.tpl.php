<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 22:08:06
         compiled from "./templates/new_red/moje-filmy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202512781456254da609dde4-00366659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a870751a3befef64ad1bfe06a94b6331d8ad837' => 
    array (
      0 => './templates/new_red/moje-filmy.tpl',
      1 => 1445282909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202512781456254da609dde4-00366659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'stan' => 0,
    'cenaf' => 0,
    'fo_id' => 0,
    'fo_prv' => 0,
    'fo_fd' => 0,
    'fo_fm' => 0,
    'fo_opis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254da611c930_82682218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254da611c930_82682218')) {function content_56254da611c930_82682218($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




	<div class="left">
			<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[663];?>
</h1>
		<p>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>

<h3 style="color:black;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[664];?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==19) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[665];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==6) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[666];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==5) {?><div id="ukryj"><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[667];?>
</b></center></div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['cenaf']->value>=1) {?><br><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[669];?>
 <?php echo $_smarty_tpl->tpl_vars['cenaf']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[668];?>
</b></center><br><?php }?>
<form action="" method="POST" enctype="multipart/form-data" name="upf">

<table>
<tr>
<td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value[670];?>
:</td><td><input name="nazwa" type="text" style="width:450px;"/></td>
</tr>
<tr>
<td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value[671];?>
:</td><td><input name="film" type="text" style="width:450px;"/><br><small>np: http://www.youtube.com/watch?v=clltiQBBM08 lub http://youtu.be/clltiQBBM08 </small></td>
</tr>
<tr>
<td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value[672];?>
:</td>
<td><input name="prv" type="checkbox" value="1"/> <?php echo $_smarty_tpl->tpl_vars['lang']->value[673];?>
</td>
</tr>
<tr>
<td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value[674];?>
:</td>
<td><textarea name="opis" style="width:450px;height:50px"></textarea></td>
</table>

<input type="submit" value="Dodaj" name="upf">
</form>
<br>
<h3 style="color:black;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[675];?>
:</h3>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==7) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[676];?>
.</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==8) {?><div id="ukryj"><center><b style="color:green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[677];?>
.</b></center></div><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fo_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>

<table width="100%">
<tr>
<td colspan="2" align="left">
<a href="user/moje-filmy/del-<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[678];?>
</a> | <?php if ($_smarty_tpl->tpl_vars['fo_prv']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]==1) {?><a href="user/moje-filmy/all-<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[679];?>
</a><?php } else { ?><a href="user/moje-filmy/prv-<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[680];?>
</a><?php }?> 
</td>
</tr>
<tr>
<td valign="top" width="5%">
<img src="http://i2.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['fo_fd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/default.jpg">
</td>
<td valign="top" align="left">
<form  action="wyk/ezum.php"  method="POST">
<input name="nazwa" type="text" style="width:450px;" value="<?php echo $_smarty_tpl->tpl_vars['fo_fm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"/>
<textarea name="opis" style="width:450px;height:30px;"><?php echo $_smarty_tpl->tpl_vars['fo_opis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</textarea><br>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><input type="submit"  value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[681];?>
"></form>
</td>
</tr>
</table>
<hr>
<?php endfor; endif; ?>

<br>

<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[682];?>
</b></center>
<?php }?>

</p>
		


</div>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
