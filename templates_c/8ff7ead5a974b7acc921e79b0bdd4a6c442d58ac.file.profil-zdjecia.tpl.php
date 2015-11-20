<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 22:08:50
         compiled from "./templates/new_red/profil-zdjecia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114870562456254dd2add660-55714777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff7ead5a974b7acc921e79b0bdd4a6c442d58ac' => 
    array (
      0 => './templates/new_red/profil-zdjecia.tpl',
      1 => 1445282911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114870562456254dd2add660-55714777',
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
    'fopo' => 0,
    'fo_id' => 0,
    'fo_prv' => 0,
    'czyzn' => 0,
    'user_adm' => 0,
    'user_plec' => 0,
    'site_url' => 0,
    'fo_fm' => 0,
    'nrip' => 0,
    'poz' => 0,
    'naz' => 0,
    'fopoopis' => 0,
    'vip_o' => 0,
    'ocena' => 0,
    'glosy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254dd2b88e29_23302099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254dd2b88e29_23302099')) {function content_56254dd2b88e29_23302099($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[319];?>
 <a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_lo']->value;?>
</a></h1>
		<p>
<?php if (($_smarty_tpl->tpl_vars['vip_p']->value==1&&$_smarty_tpl->tpl_vars['vipendd']->value>=$_smarty_tpl->tpl_vars['vip_time']->value)||$_smarty_tpl->tpl_vars['vip_p']->value==0||$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['user_loid']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['fopo']->value=='') {?>

<table><tr>
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
<td class="profil-m">


<?php if ($_smarty_tpl->tpl_vars['fo_prv']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="1"&&$_smarty_tpl->tpl_vars['czyzn']->value=="0"&&$_smarty_tpl->tpl_vars['user_adm']->value!="adm") {?>

<?php if ($_smarty_tpl->tpl_vars['user_plec']->value=="1") {?>

<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/women-key.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[320];?>
" alt="key" />

<?php } else { ?>

<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/men-key.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[320];?>
" alt="key" />

<?php }?>

<?php } else { ?>

<a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
/zdjecia-img<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" style="text-decoration:none;" ><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
upload/zdjecia/<?php echo $_smarty_tpl->tpl_vars['fo_fm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" alt="Foto" /></a>

<?php }?>

</td><?php if ($_smarty_tpl->tpl_vars['nrip']->value++%5==0) {?></tr><?php }?>

<?php endfor; endif; ?>
</table>


<?php } else { ?>
<center>
<table><tr>
<td class="td_hover"><?php if ($_smarty_tpl->tpl_vars['poz']->value>0) {?><a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
/zdjecia-img<?php echo $_smarty_tpl->tpl_vars['poz']->value;?>
"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[321];?>
</b></a> <?php } else { ?><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[321];?>
 </b><?php }?> </b></td>
<td class="td_hover"><a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
/zdjecia"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[322];?>
</b></a> </b></td>
<td class="td_hover"><?php if ($_smarty_tpl->tpl_vars['naz']->value>0) {?> <a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
/zdjecia-img<?php echo $_smarty_tpl->tpl_vars['naz']->value;?>
"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[323];?>
</b></a><?php } else { ?> <b><?php echo $_smarty_tpl->tpl_vars['lang']->value[323];?>
</b><?php }?></b></td>
</tr></table>
<br>
<img src="upload/zdjecia/<?php echo $_smarty_tpl->tpl_vars['fopo']->value;?>
" key="foto"><br><br><?php echo $_smarty_tpl->tpl_vars['fopoopis']->value;?>
</center>


<?php if (($_smarty_tpl->tpl_vars['vip_o']->value==1&&$_smarty_tpl->tpl_vars['vipendd']->value>=$_smarty_tpl->tpl_vars['vip_time']->value)||$_smarty_tpl->tpl_vars['vip_o']->value==0) {?>

<div id="welcome">

<p>
<center>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/ocenianie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[324];?>
<?php echo $_smarty_tpl->tpl_vars['ocena']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[325];?>
 <?php echo $_smarty_tpl->tpl_vars['glosy']->value;?>
</b>
</center>
</p>

</div>



<?php } else { ?>

<br><br>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[326];?>
</b></center>
<?php }?>

<?php }?>


<br>


</p>
	
<?php } else { ?>

<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[327];?>
</b></center>

<?php }?>	


<?php } else { ?>
<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[319];?>
 <a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_lon']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_loid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_lo']->value;?>
</a></h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[328];?>
 </b>
</center>
</p>

<?php }?>

	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
