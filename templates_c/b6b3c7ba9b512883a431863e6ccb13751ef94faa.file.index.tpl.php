<?php /* Smarty version Smarty-3.1.15, created on 2015-10-22 17:03:21
         compiled from "./templates/red/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21304872515628fab92b7050-54555096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6b3c7ba9b512883a431863e6ccb13751ef94faa' => 
    array (
      0 => './templates/red/index.tpl',
      1 => 1445282930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21304872515628fab92b7050-54555096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'u_404' => 0,
    'lang' => 0,
    'user_id' => 0,
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
    'bo' => 0,
    'u_ido' => 0,
    'u_loginno' => 0,
    'u_wieko' => 0,
    'u_miastoo' => 0,
    'u_wojo' => 0,
    'u_pleco' => 0,
    'u_logino' => 0,
    'u_imgo' => 0,
    'u_plecnro' => 0,
    'u_onlineo' => 0,
    'nripp' => 0,
    'in_txt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5628fab9365575_54536675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628fab9365575_54536675')) {function content_5628fab9365575_54536675($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



     
        	
            <div class="left">
<?php if ($_smarty_tpl->tpl_vars['u_404']->value=="404") {?>
<div id="ukryj" >
<br>
<center>
<div id="red" style="border-style:solid;border-width:thin;width:550px;height:40px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[10];?>
</b></center></div>
</center><br></div>
<?php }?>	
		
<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?> 
<!-- Gdy zalogowany -->

		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[11];?>
</h1><p>

<center>
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
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[18];?>
</h1><p>

<?php if ($_smarty_tpl->tpl_vars['bo']->value>=1) {?>
<center>
<table >
<tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['u_ido']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<a href="profil/<?php echo $_smarty_tpl->tpl_vars['u_loginno']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['u_ido']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/" style="text-decoration:none;" onmouseover="return overlib('<?php echo $_smarty_tpl->tpl_vars['lang']->value[12];?>
 <?php echo $_smarty_tpl->tpl_vars['u_wieko']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lang']->value[13];?>
 <?php echo $_smarty_tpl->tpl_vars['u_miastoo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lang']->value[14];?>
 <?php echo $_smarty_tpl->tpl_vars['u_wojo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lang']->value[15];?>
 <?php echo $_smarty_tpl->tpl_vars['u_pleco']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
', CAPTION, '<b><center><?php echo $_smarty_tpl->tpl_vars['u_logino']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</center>');" onmouseout="return nd();"><?php if ($_smarty_tpl->tpl_vars['u_imgo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=='') {?><?php if ($_smarty_tpl->tpl_vars['u_plecnro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="1") {?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/women.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['u_logino']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/men.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['u_logino']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php }?><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
upload/zdjecia/<?php echo $_smarty_tpl->tpl_vars['u_imgo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['u_logino']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php }?><br/><center><?php if ($_smarty_tpl->tpl_vars['u_onlineo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]>=1) {?><img src="images/online.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[16];?>
" key="On"><?php } else { ?><img src="images/ofline.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[17];?>
" key="Off"><?php }?><b><?php echo $_smarty_tpl->tpl_vars['u_logino']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b></center></a></td><?php if ($_smarty_tpl->tpl_vars['nripp']->value++%5==0) {?></tr><?php }?>

<?php endfor; endif; ?>
</table>
</center>
<?php } else { ?>
<center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[19];?>
</b></center>
<?php }?>
		
		  </p>

<!-- Gdy zalogowany -->
<?php } else { ?>
<!-- Gdy nie zalogowany -->

<p><?php echo $_smarty_tpl->tpl_vars['in_txt']->value;?>
</p>

		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[20];?>
</h1><p>

<center>
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


<!-- Gdy nie zalogowany -->
<?php }?>  
		  
		</div>
		

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
