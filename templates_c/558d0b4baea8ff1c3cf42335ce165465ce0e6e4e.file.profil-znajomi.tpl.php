<?php /* Smarty version Smarty-3.1.15, created on 2015-10-20 09:35:11
         compiled from "./templates/new_red/profil-znajomi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16157647705625eeafec4a63-02877297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '558d0b4baea8ff1c3cf42335ce165465ce0e6e4e' => 
    array (
      0 => './templates/new_red/profil-znajomi.tpl',
      1 => 1445282912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16157647705625eeafec4a63-02877297',
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
    'stan' => 0,
    'u_id' => 0,
    'u_loginn' => 0,
    'u_wiek' => 0,
    'u_miasto' => 0,
    'u_woj' => 0,
    'u_plec' => 0,
    'u_login' => 0,
    'u_img' => 0,
    'u_plecnr' => 0,
    'site_url' => 0,
    'u_online' => 0,
    'nrip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625eeb0026958_44770815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625eeb0026958_44770815')) {function content_5625eeb0026958_44770815($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




		<div class="left">
		
		<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[329];?>
 <a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_lo']->value;?>
</a></h1>
		
		<p>

<center>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==7) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[330];?>
</b></center></div><?php }?>
<table >
<tr>
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

<td class="profil-m">
<a href="profil/<?php echo $_smarty_tpl->tpl_vars['u_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['u_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/" style="text-decoration:none;" onmouseover="return overlib('<?php echo $_smarty_tpl->tpl_vars['lang']->value[12];?>
 <?php echo $_smarty_tpl->tpl_vars['u_wiek']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lang']->value[13];?>
 <?php echo $_smarty_tpl->tpl_vars['u_miasto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lang']->value[14];?>
 <?php echo $_smarty_tpl->tpl_vars['u_woj']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lang']->value[15];?>
 <?php echo $_smarty_tpl->tpl_vars['u_plec']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
', CAPTION, '<b><center><?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</center>');" onmouseout="return nd();"><?php if ($_smarty_tpl->tpl_vars['u_img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=='') {?><?php if ($_smarty_tpl->tpl_vars['u_plecnr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="1") {?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/women.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/men.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php }?><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
upload/zdjecia/<?php echo $_smarty_tpl->tpl_vars['u_img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php }?><br/><center><?php if ($_smarty_tpl->tpl_vars['u_online']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]>=1) {?><img src="images/online.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[16];?>
" key="On"><?php } else { ?><img src="images/ofline.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[17];?>
" key="Off"><?php }?><b><?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b></center></a></td><?php if ($_smarty_tpl->tpl_vars['nrip']->value++%5==0) {?></tr><?php }?>

<?php endfor; endif; ?>
</table>
</center>





  </p>
		  
	<?php } else { ?>
<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[329];?>
 <a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_lo']->value;?>
</a></h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[331];?>
 </b>
</center>
</p>

<?php }?>	  
		</div>
		

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
