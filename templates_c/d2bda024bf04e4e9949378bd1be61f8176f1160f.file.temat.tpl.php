<?php /* Smarty version Smarty-3.1.15, created on 2015-10-23 05:31:50
         compiled from "./templates/new_red/temat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4962095795629aa26d9fa08-42575052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2bda024bf04e4e9949378bd1be61f8176f1160f' => 
    array (
      0 => './templates/new_red/temat.tpl',
      1 => 1445282914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4962095795629aa26d9fa08-42575052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'gt_nazwa' => 0,
    'go' => 0,
    'g_id' => 0,
    'g_nazwan' => 0,
    'g_nazwa' => 0,
    'gt_id' => 0,
    'gt_nazwan' => 0,
    'czlonek' => 0,
    'g_typ' => 0,
    'user_id' => 0,
    'user_adm' => 0,
    'kom_nick' => 0,
    'kom_nickn' => 0,
    'kom_idu' => 0,
    'kom_nickf' => 0,
    'kom_data' => 0,
    'g_user' => 0,
    'kom_del' => 0,
    'kom_tresc' => 0,
    't_t' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5629aa26e5a0d9_07660504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5629aa26e5a0d9_07660504')) {function content_5629aa26e5a0d9_07660504($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="left">

	<div class="post">
			<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[581];?>
 <?php echo $_smarty_tpl->tpl_vars['gt_nazwa']->value;?>
</h1>
<div class="entry"><p>

<?php if ($_smarty_tpl->tpl_vars['go']->value=="del-p") {?>
<div id="ukryj"><center><b style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value[582];?>
</b></center></div>
<?php }?>

<a href="grupy/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[583];?>
</a> >> <a href="grupa/<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['g_nazwan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['g_nazwa']->value;?>
</a> >> <a href="temat/<?php echo $_smarty_tpl->tpl_vars['gt_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['gt_nazwan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['gt_nazwa']->value;?>
</a>
<br><br>
<?php if (($_smarty_tpl->tpl_vars['czlonek']->value==1&&$_smarty_tpl->tpl_vars['g_typ']->value==0&&$_smarty_tpl->tpl_vars['user_id']->value>=1)||$_smarty_tpl->tpl_vars['g_typ']->value==1||$_smarty_tpl->tpl_vars['user_adm']->value=="adm") {?>

<table width="100%" cellspacing="0">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ile'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['name'] = 'ile';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kom_nick']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total']);
?>
<tr>
<td valign="top" style="width:120px;border:1px solid;" align="center">
<a href="user/<?php echo $_smarty_tpl->tpl_vars['kom_nickn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['kom_idu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['kom_nick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
</a><br>
<a href="user/<?php echo $_smarty_tpl->tpl_vars['kom_nickn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['kom_idu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['kom_nickf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
"></a><br>
<br>
</td>
<td valign="top" style="border:1px solid;" align="left">
<small><?php echo $_smarty_tpl->tpl_vars['lang']->value[584];?>
 <?php echo $_smarty_tpl->tpl_vars['kom_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>

<?php if (($_smarty_tpl->tpl_vars['user_adm']->value=="adm"||$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['kom_idu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']]||$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['g_user']->value)&&$_smarty_tpl->tpl_vars['kom_del']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']]!='') {?>
 | <a href="wyk/grupa.php?del=post&id=<?php echo $_smarty_tpl->tpl_vars['kom_del']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[585];?>
</a>
<?php }?>
</small><hr>
<?php echo $_smarty_tpl->tpl_vars['kom_tresc']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>

</td>
</tr>
<?php endfor; endif; ?>
</table>

<?php if (($_smarty_tpl->tpl_vars['czlonek']->value==1&&$_smarty_tpl->tpl_vars['g_typ']->value==0&&$_smarty_tpl->tpl_vars['user_id']->value>=1)||($_smarty_tpl->tpl_vars['g_typ']->value==1&&$_smarty_tpl->tpl_vars['user_id']->value>=1&&$_smarty_tpl->tpl_vars['czlonek']->value=="1")||$_smarty_tpl->tpl_vars['user_adm']->value=="adm") {?>

<br><hr>
<center>
<form action="" method="POST" name="addkom">
<p>
<table>
<tr>
<td align="left" valign="top"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[586];?>
</b></td><td>
<textarea style="width:450px;height:80px;" name="tresc"><?php echo $_smarty_tpl->tpl_vars['t_t']->value;?>
</textarea>
</td>
</tr>
</table>
<br />	
<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[587];?>
" name="addkom"/>
		
</p>		
</form>	
</center>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
<br>
<center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[588];?>
</b></center><?php }?>
<?php }?>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['go']->value!="add") {?><br><br><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[589];?>
</b></center><?php }?>
<?php }?>


</p>
    </div>	<div class="meta"></div></div>

  
		  
		
		

</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
