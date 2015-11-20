<?php /* Smarty version Smarty-3.1.15, created on 2015-10-20 09:31:07
         compiled from "./templates/new_red/gift.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21408015395625edbbebfba6-78041384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39a1477567ab3147e077203f402bc2529b0771b' => 
    array (
      0 => './templates/new_red/gift.tpl',
      1 => 1445282907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21408015395625edbbebfba6-78041384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_id' => 0,
    'lang' => 0,
    'user_id_kogo' => 0,
    'stan' => 0,
    'site_url' => 0,
    'user_zg' => 0,
    'gi_id' => 0,
    'gi_nazwa' => 0,
    'gi_img' => 0,
    'gi_money' => 0,
    'gi_cena' => 0,
    'nrip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625edbc019c13_96215223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625edbc019c13_96215223')) {function content_5625edbc019c13_96215223($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



		<div class="left">
		<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>	
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[191];?>
</h1><p>

<?php if ($_smarty_tpl->tpl_vars['user_id_kogo']->value>=1) {?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==2) {?><div ><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[192];?>
</b><b>
<br><br><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
profil/<?php echo $_smarty_tpl->tpl_vars['user_zg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_id_kogo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[697];?>
</a>
</b></center></div><br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==1) {?><div ><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[193];?>
</b><b>
<br><br><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
profil/<?php echo $_smarty_tpl->tpl_vars['user_zg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_id_kogo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[697];?>
</a>
</b></center></div><br><?php }?>
<form action="give.php" method="POST">

<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[194];?>
 </b> <b style="color:green;"><?php echo $_smarty_tpl->tpl_vars['user_zg']->value;?>
</b><br><br>

<center>
<table >
<tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gi_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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

<td class="profil-m">
<table cellspacing="0" height="100%" width="100%">
<tr><td><b><?php echo $_smarty_tpl->tpl_vars['gi_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b></td></tr>
<tr><td height="100%"><img src="upload/gift/<?php echo $_smarty_tpl->tpl_vars['gi_img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['gi_money']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]>=1) {?> title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[195];?>
 <?php echo $_smarty_tpl->tpl_vars['gi_money']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"<?php }?>></td></tr>
<tr><td><?php echo $_smarty_tpl->tpl_vars['lang']->value[196];?>
 <?php echo $_smarty_tpl->tpl_vars['gi_cena']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br></td></tr>
<tr><td><input type="radio" name="id" value="<?php echo $_smarty_tpl->tpl_vars['gi_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"></td></tr>
</table>

</td>
<?php if ($_smarty_tpl->tpl_vars['nrip']->value++%5==0) {?></tr><?php }?>

<?php endfor; endif; ?>
</table>
</center>


<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user_id_kogo']->value;?>
" name="do">
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[197];?>
" name="zglos">
</form>

<?php } else { ?>
<center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[198];?>
</b></center>
<?php }?>


</p>
		
		<?php } else { ?>

				<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[191];?>
</h1><p>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[199];?>
 </b>
</center>
</p>

<?php }?>	


	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
