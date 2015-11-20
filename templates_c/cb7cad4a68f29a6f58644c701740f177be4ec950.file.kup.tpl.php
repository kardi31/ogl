<?php /* Smarty version Smarty-3.1.15, created on 2015-10-26 21:01:55
         compiled from "./templates/new_red/kup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88919691856254ca041b043-22413817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7cad4a68f29a6f58644c701740f177be4ec950' => 
    array (
      0 => './templates/new_red/kup.tpl',
      1 => 1445889710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88919691856254ca041b043-22413817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254ca056f6b4_13368296',
  'variables' => 
  array (
    'user_id' => 0,
    'lang' => 0,
    'typ_p' => 0,
    'stan' => 0,
    'get_id' => 0,
    'stan_pay' => 0,
    'get_typ' => 0,
    'dnidni' => 0,
    'dninumer' => 0,
    'dnitresc' => 0,
    'dnicenasms' => 0,
    'dnipkt' => 0,
    'pay_set' => 0,
    'dniid' => 0,
    'dnicena' => 0,
    'bum' => 0,
    'dnicpkt' => 0,
    'um' => 0,
    'ium' => 0,
    'cenapkt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254ca056f6b4_13368296')) {function content_56254ca056f6b4_13368296($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
		
		
				<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[230];?>
 <b style="font-size:12px;"> już od 100 kredytów na 7 dni</b></h1>
<?php if ($_smarty_tpl->tpl_vars['typ_p']->value=="0"||$_smarty_tpl->tpl_vars['typ_p']->value=='') {?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[451];?>

<?php } else { ?>
		<p>

<?php if ($_smarty_tpl->tpl_vars['stan']->value==3) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[607];?>
</b></center></div><br><br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==2) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[608];?>
</b></center></div><br><br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==1) {?><div id="ukryj"><center><b style="color:green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[609];?>
</b></center></div><br><br><?php }?>
<center>

<?php if ($_smarty_tpl->tpl_vars['get_id']->value>=1) {?>

<?php if ($_smarty_tpl->tpl_vars['stan_pay']->value=="2") {?>
<center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[610];?>
</b></center>
<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['get_typ']->value=="sms") {?>

<table width="100%">
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[611];?>
</b></center></td>
</tr>
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[612];?>
 <b><?php echo $_smarty_tpl->tpl_vars['dnidni']->value;?>
</b><?php echo $_smarty_tpl->tpl_vars['lang']->value[603];?>
</b></center></td>
</tr>
<tr>



<td width="50%" style="border:1px solid black;"><center>

<br><br>

<?php echo $_smarty_tpl->tpl_vars['lang']->value[613];?>
 <b><?php echo $_smarty_tpl->tpl_vars['dninumer']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[614];?>
 <b><?php echo $_smarty_tpl->tpl_vars['dnitresc']->value;?>
</b>.<br>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[615];?>
 <b><?php echo $_smarty_tpl->tpl_vars['dnicenasms']->value;?>
 PLN brutto</b>.
<br><br><br>
<?php if ($_smarty_tpl->tpl_vars['dnipkt']->value>=1) {?><?php echo $_smarty_tpl->tpl_vars['lang']->value[617];?>
 <?php echo $_smarty_tpl->tpl_vars['dnidni']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[618];?>
 <b><?php echo $_smarty_tpl->tpl_vars['dnipkt']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[619];?>
.<?php }?>
<br><br>
<?php echo $_smarty_tpl->tpl_vars['pay_set']->value['sms_info'];?>

<?php echo $_smarty_tpl->tpl_vars['pay_set']->value['sms_logo'];?>

<br><br>
</td>
</tr>

<tr><td  style="font-size:14px;height:35px;border:1px solid black;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[621];?>
</b></center></td></tr>
<tr><td  style="border:1px solid black;"><center>
<br><br>

<?php if ($_smarty_tpl->tpl_vars['stan_pay']->value=="1") {?><div id="ukryj"><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[622];?>
</b></div><?php }?>

<table><tr><td><b>Podaj kod:&nbsp;</b></td><td> <form action="" method="POST"><input type="text" name="kod"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[623];?>
"></form></td></tr></table>
<br><br>



</center>
</td></tr>
<tr><td colspan="2" style="border:1px solid black;"><center><b><a href="kontakt/" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[624];?>
 </a></b></center></td></tr>
</table>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['get_typ']->value=="pay") {?>

<table width="100%">
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[625];?>
</b></center></td>
</tr>
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[612];?>
 <b><?php echo $_smarty_tpl->tpl_vars['dnidni']->value;?>
</b><?php echo $_smarty_tpl->tpl_vars['lang']->value[603];?>
</b></center></td>
</tr>
<tr>
<td width="50%" style="border:1px solid black;"><center>
<br><br>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[626];?>
 
<br><br>
<a href="do_pay.php?id=<?php echo $_smarty_tpl->tpl_vars['dniid']->value;?>
&p=v" style="font-weight:bold;font-size:14px;text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[627];?>
 </a>

<br><br>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[630];?>
  <b><?php echo $_smarty_tpl->tpl_vars['dnicena']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[616];?>
</b>.
<br><br><br>
<?php if ($_smarty_tpl->tpl_vars['dnipkt']->value>=1) {?><?php echo $_smarty_tpl->tpl_vars['lang']->value[617];?>
 <?php echo $_smarty_tpl->tpl_vars['dnidni']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[618];?>
 <b><?php echo $_smarty_tpl->tpl_vars['dnipkt']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[619];?>
.<?php }?>
<br><br>
<?php echo $_smarty_tpl->tpl_vars['pay_set']->value['p_info'];?>

<?php echo $_smarty_tpl->tpl_vars['pay_set']->value['p_logo'];?>

<br><br>


</td>
</tr>

<tr><td colspan="2" style="border:1px solid black;"><center><b><a href="kontakt/" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[624];?>
 </a></b></center></td></tr>
</table>


<?php }?>
<?php if ($_smarty_tpl->tpl_vars['get_typ']->value=="pkt") {?>

<table width="100%">
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[628];?>
</b></center></td>
</tr>
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[612];?>
 <b><?php echo $_smarty_tpl->tpl_vars['dnidni']->value;?>
</b><?php echo $_smarty_tpl->tpl_vars['lang']->value[603];?>
</b></center></td>
</tr>
<tr>
<td width="50%" style="border:1px solid black;"><center>
<?php if ($_smarty_tpl->tpl_vars['bum']->value=="1") {?><div id="ukryj"><br><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[629];?>
</b></center></div><?php }?>
<br><br>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[630];?>
  <b><?php echo $_smarty_tpl->tpl_vars['dnicpkt']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[631];?>
</b>.
<br><br>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[632];?>
: <b><?php echo $_smarty_tpl->tpl_vars['um']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[633];?>
 <br><br>

<?php if ($_smarty_tpl->tpl_vars['ium']->value=="ok") {?>
<a href="kup.php?id=<?php echo $_smarty_tpl->tpl_vars['dniid']->value;?>
&typ=pkt&v=kup" style="font-weight:bold;font-size:14px;text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[634];?>
</></a>
<?php } else { ?>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[635];?>
</b>
<?php }?>
<br><br>

</td>
</tr>

<tr><td colspan="2" style="border:1px solid black;"><center><b><a href="kontakt/" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[624];?>
 </a></b></center></td></tr>
</table>


<?php }?>
<?php }?>

<?php } else { ?>

<table>
<tr><td></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[636];?>
</b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[637];?>
</b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[638];?>
</b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[639];?>
</b></center></td>

</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dniid']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<tr>
<td></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b><?php echo $_smarty_tpl->tpl_vars['dnidni']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b></center></td>

<?php if ($_smarty_tpl->tpl_vars['dnicena']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!='') {?>

<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b><?php if ($_smarty_tpl->tpl_vars['dnicena']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!='') {?><?php echo $_smarty_tpl->tpl_vars['dnicena']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[640];?>
<?php }?></b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b><?php if ($_smarty_tpl->tpl_vars['dnicena']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!='') {?><a href="kup.php?id=<?php echo $_smarty_tpl->tpl_vars['dniid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
&typ=pay"><?php echo $_smarty_tpl->tpl_vars['lang']->value[641];?>
</a><?php }?></b></center></td>

<?php } else { ?>

<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[642];?>
</b></center></td>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['dnicenasms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!='') {?>

<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b><?php if ($_smarty_tpl->tpl_vars['dnicenasms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!='') {?><?php echo $_smarty_tpl->tpl_vars['dnicenasms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[640];?>
<?php }?></b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b><?php if ($_smarty_tpl->tpl_vars['dnicenasms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!='') {?><a href="kup.php?id=<?php echo $_smarty_tpl->tpl_vars['dniid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
&typ=sms"><?php echo $_smarty_tpl->tpl_vars['lang']->value[641];?>
</a><?php }?></b></center></td>

<?php } else { ?>

<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[642];?>
</b></center></td>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['dnicpkt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!='') {?>

<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b><?php if ($_smarty_tpl->tpl_vars['dnicpkt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!='') {?><?php echo $_smarty_tpl->tpl_vars['dnicpkt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<?php }?></b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b><?php if ($_smarty_tpl->tpl_vars['dnicpkt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!='') {?><a href="kup.php?id=<?php echo $_smarty_tpl->tpl_vars['dniid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
&typ=pkt"><?php echo $_smarty_tpl->tpl_vars['lang']->value[641];?>
</a><?php }?></b></center></td>

<?php } else { ?>

<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[642];?>
</b></center></td>

<?php }?>
</tr>
<?php endfor; endif; ?>
</table>

<?php }?>
</center>


</p>
				<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[243];?>
</h1>
<p>
<center>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==11) {?><div id="ukryj"><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[244];?>
</b></center></div><br><br><?php }?>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[245];?>

</b><br><br>

<form action="do_kup.php?p=pkt" method="POST">
<?php echo $_smarty_tpl->tpl_vars['lang']->value[246];?>
 <input type="text"  id="ilepkt" onkeyup="cena_pkt(<?php echo $_smarty_tpl->tpl_vars['cenapkt']->value;?>
)" value="0" name="ilepkt"><br>
<br><b><table><tr><td><?php echo $_smarty_tpl->tpl_vars['lang']->value[247];?>
</td><td> <div id="cenapkt">0.00</div> </td><td> <?php echo $_smarty_tpl->tpl_vars['lang']->value[248];?>
</td></tr></table></b><br>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[643];?>
" onMouseOver="cena_pkt(<?php echo $_smarty_tpl->tpl_vars['cenapkt']->value;?>
)" id="but"><p style="color:red;font-weight:bold;display:none;" id="per" ><?php echo $_smarty_tpl->tpl_vars['lang']->value[644];?>
 </p>
</form>
</center>
</p>	
<?php }?>
<?php } else { ?>

				<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[249];?>
</h1><p>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[250];?>
</b>
</center>
</p>

<?php }?>

	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
