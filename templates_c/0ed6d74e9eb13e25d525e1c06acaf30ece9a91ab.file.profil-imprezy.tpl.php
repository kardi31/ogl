<?php /* Smarty version Smarty-3.1.15, created on 2015-11-19 17:45:49
         compiled from "./templates/new_red/profil-imprezy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2078170156564dfcbd921712-70819449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ed6d74e9eb13e25d525e1c06acaf30ece9a91ab' => 
    array (
      0 => './templates/new_red/profil-imprezy.tpl',
      1 => 1445282911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2078170156564dfcbd921712-70819449',
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
    'i_id' => 0,
    'i_nazwa' => 0,
    'lanf' => 0,
    'i_y' => 0,
    'i_m' => 0,
    'i_d' => 0,
    'i_h' => 0,
    'i_mi' => 0,
    'i_opis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564dfcbd9d6267_88147250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564dfcbd9d6267_88147250')) {function content_564dfcbd9d6267_88147250($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[309];?>
 <a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_lo']->value;?>
</a></h1>
		<p>
<?php if (($_smarty_tpl->tpl_vars['vip_p']->value==1&&$_smarty_tpl->tpl_vars['vipendd']->value>=$_smarty_tpl->tpl_vars['vip_time']->value)||$_smarty_tpl->tpl_vars['vip_p']->value==0||$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['user_loid']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['i_a']->value==0) {?><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[310];?>
</b></center><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['i_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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

<b><?php echo $_smarty_tpl->tpl_vars['i_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b> <br>
<?php echo $_smarty_tpl->tpl_vars['lanf']->value[311];?>
 <?php echo $_smarty_tpl->tpl_vars['i_y']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
-<?php echo $_smarty_tpl->tpl_vars['i_m']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
-<?php echo $_smarty_tpl->tpl_vars['i_d']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['i_h']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
:<?php echo $_smarty_tpl->tpl_vars['i_mi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['i_opis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>

<hr><br>
<?php endfor; endif; ?>

<br><br>
</p>

<?php } else { ?>

<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[312];?>
</b></center>

<?php }?>

<?php } else { ?>
<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[309];?>
<a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_lo']->value;?>
</a></h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[313];?>
 </b>
</center>
</p>

<?php }?>


		



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
