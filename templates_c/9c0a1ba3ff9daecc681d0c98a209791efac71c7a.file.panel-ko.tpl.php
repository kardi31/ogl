<?php /* Smarty version Smarty-3.1.15, created on 2015-10-20 09:38:24
         compiled from "./templates/new_red/panel-ko.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2738229255625ef70769f92-64870057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c0a1ba3ff9daecc681d0c98a209791efac71c7a' => 
    array (
      0 => './templates/new_red/panel-ko.tpl',
      1 => 1445282910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2738229255625ef70769f92-64870057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'u_ko' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'aile' => 0,
    'u_id' => 0,
    'u_loginn' => 0,
    'u_login' => 0,
    'user_nickn' => 0,
    'ko_foto' => 0,
    'ko_ocena' => 0,
    'ko_data' => 0,
    'podstron' => 0,
    'strona' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625ef70813da1_49587709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625ef70813da1_49587709')) {function content_5625ef70813da1_49587709($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		
				<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[297];?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>

<?php if ($_smarty_tpl->tpl_vars['u_ko']->value==1||($_smarty_tpl->tpl_vars['u_ko']->value==2&&$_smarty_tpl->tpl_vars['vipendd']->value>=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>


<?php if ($_smarty_tpl->tpl_vars['aile']->value==0) {?><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[298];?>
</b></center><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['u_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<a href="profil/<?php echo $_smarty_tpl->tpl_vars['u_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['u_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/" style="text-decoration:none;"><b><?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b></a> <?php echo $_smarty_tpl->tpl_vars['lang']->value[299];?>
 <a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_nickn']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
/zdjecia-img<?php echo $_smarty_tpl->tpl_vars['ko_foto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[300];?>
</a>  <?php echo $_smarty_tpl->tpl_vars['lang']->value[301];?>
  <b><?php echo $_smarty_tpl->tpl_vars['ko_ocena']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[302];?>
  <?php echo $_smarty_tpl->tpl_vars['ko_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br>

<?php endfor; endif; ?>




<?php if ($_smarty_tpl->tpl_vars['podstron']->value>1) {?>
<center>
<table border="0">
<tr>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['strona'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['name'] = 'strona';
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['podstron']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['strona']['total']);
?>

<td style="border: 1px solid #000000;width:15px;" align="center"><a href="user/kto-ocenial-zdjecia/<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['strona']['index']+1;?>
"><?php if ($_smarty_tpl->tpl_vars['strona']->value==$_smarty_tpl->getVariable('smarty')->value['section']['strona']['index']+1) {?><b><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['strona']['index']+1;?>
</b><?php } else { ?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['strona']['index']+1;?>
<?php }?></a></td>

<?php endfor; endif; ?>


</tr></table>
</center>
<?php }?>


  </p>

<?php } else { ?>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[303];?>
 </b>
</center>
<?php }?>

<?php } else { ?>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[304];?>
 </b>
</center>
<?php }?>
	


	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
