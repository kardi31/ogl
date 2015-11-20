<?php /* Smarty version Smarty-3.1.15, created on 2015-10-20 14:39:06
         compiled from "./templates/new_red/profil-prezenty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1194267102562635ea41e187-87103097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88dbb720ba854752c97abcef376eb60eceb0c497' => 
    array (
      0 => './templates/new_red/profil-prezenty.tpl',
      1 => 1445282911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1194267102562635ea41e187-87103097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_id' => 0,
    'lang' => 0,
    'user_lon' => 0,
    'user_loid' => 0,
    'user_lo' => 0,
    'vip_p' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'i_a' => 0,
    'gi_id' => 0,
    'gi_nazwa' => 0,
    'gi_img' => 0,
    'gi_od' => 0,
    'nrip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_562635ea4a7538_21872150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562635ea4a7538_21872150')) {function content_562635ea4a7538_21872150($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[314];?>
 <a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_lo']->value;?>
</a></h1>
		<p>

<?php if (($_smarty_tpl->tpl_vars['vip_p']->value==1&&$_smarty_tpl->tpl_vars['vipendd']->value>=$_smarty_tpl->tpl_vars['vip_time']->value)||$_smarty_tpl->tpl_vars['vip_p']->value==0||$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['user_loid']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['i_a']->value==0) {?><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[315];?>
</b></center><?php }?>

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
" title=""><br><?php echo $_smarty_tpl->tpl_vars['lang']->value[316];?>
 <?php echo $_smarty_tpl->tpl_vars['gi_od']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td></tr>
</table>

</td>
<?php if ($_smarty_tpl->tpl_vars['nrip']->value++%5==0) {?></tr><?php }?>

<?php endfor; endif; ?>
</table>
</center>

<br><br>

<?php } else { ?>

<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[317];?>
</b></center>

<?php }?>

</p>
<?php } else { ?>
		<h1 class="ng">Prezenty użytkownika: <a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_lo']->value;?>
</a></h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[318];?>
 </b>
</center>
</p>

<?php }?>


		



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
