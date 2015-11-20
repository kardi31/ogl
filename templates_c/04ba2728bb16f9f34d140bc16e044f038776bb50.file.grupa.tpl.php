<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 22:15:55
         compiled from "./templates/new_red/grupa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179191198956254f7b54e9e1-16026314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04ba2728bb16f9f34d140bc16e044f038776bb50' => 
    array (
      0 => './templates/new_red/grupa.tpl',
      1 => 1445282907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179191198956254f7b54e9e1-16026314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'g_nazwa' => 0,
    'go' => 0,
    'g_id' => 0,
    'g_nazwan' => 0,
    'user_id' => 0,
    'g_user' => 0,
    'u_id' => 0,
    'u_loginn' => 0,
    'u_login' => 0,
    'u_akt' => 0,
    'u_cid' => 0,
    'stan' => 0,
    'g_typ' => 0,
    'czlonek' => 0,
    'user_adm' => 0,
    'gt_id' => 0,
    'gt_nazwan' => 0,
    'gt_nazwa' => 0,
    'gt_data' => 0,
    'gt_dataz' => 0,
    'gt_ile' => 0,
    'gt_user' => 0,
    'gt_del' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254f7b671ff5_41443117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254f7b671ff5_41443117')) {function content_56254f7b671ff5_41443117($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="left">

	<div class="post">
			<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[527];?>
 <?php echo $_smarty_tpl->tpl_vars['g_nazwa']->value;?>
</h1>
<div class="entry"><p>
<?php if ($_smarty_tpl->tpl_vars['go']->value=="g") {?><center><div id="ukryj"><b style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value[565];?>
</b></div></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['go']->value=="del-t") {?>
<div id="ukryj"><center><b style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value[528];?>
</b></center></div>
<?php }?>

<div style="float: left; ">
<a href="grupy/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[529];?>
</a> >> <a href="grupa/<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['g_nazwan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['g_nazwa']->value;?>
</a>
<?php if ($_smarty_tpl->tpl_vars['go']->value=="add") {?>
>> <a href="grupa/<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['g_nazwan']->value;?>
_add:user"><?php echo $_smarty_tpl->tpl_vars['lang']->value[530];?>
</a>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['go']->value=="user") {?>
>> <a href="grupa/<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['g_nazwan']->value;?>
_user:view"><?php echo $_smarty_tpl->tpl_vars['lang']->value[531];?>
</a>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['go']->value=="create") {?>
>> <a href="grupa/<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['g_nazwan']->value;?>
_create:topic"><?php echo $_smarty_tpl->tpl_vars['lang']->value[532];?>
</a>
<?php }?>
 </div>
<?php if ($_smarty_tpl->tpl_vars['go']->value=="user"&&$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['g_user']->value) {?>
<br><br>
<table>
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
<tr><td><a href="profil/<?php echo $_smarty_tpl->tpl_vars['u_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['u_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/"><?php echo $_smarty_tpl->tpl_vars['u_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a></td><td><?php if ($_smarty_tpl->tpl_vars['u_akt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="1") {?><?php echo $_smarty_tpl->tpl_vars['lang']->value[533];?>
<?php } else { ?><a href="wyk/u_zg.php?id=<?php echo $_smarty_tpl->tpl_vars['u_cid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[534];?>
</a><?php }?></td><td><a href="wyk/u_dg.php?id=<?php echo $_smarty_tpl->tpl_vars['u_cid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[535];?>
</a></td></tr>
<?php endfor; endif; ?>
</table>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['go']->value=="add") {?>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value=="dodano"&&$_smarty_tpl->tpl_vars['g_typ']->value=="1") {?>
<div id="ukryj"><br><br><center><b style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value[536];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value=="dodano"&&$_smarty_tpl->tpl_vars['g_typ']->value=="0") {?>
<div id="ukryj"><br><br><center><b style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value[537];?>
</b></center></div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['czlonek']->value=="1") {?>
<br><br><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[538];?>
</b></center>
<?php } else { ?>


<?php if ($_smarty_tpl->tpl_vars['stan']->value=="pn") {?><center><div id="ukryj"><br><br><b style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value[539];?>
</b></div></center><?php }?>
<center><br><br>
<b>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[540];?>
 <b style="color:orange"><?php echo $_smarty_tpl->tpl_vars['g_nazwa']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[541];?>
 <br><br>

<a href="wyk/add_g.php?id=<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
"><b style="font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[542];?>
</b></a><br><br>

<?php echo $_smarty_tpl->tpl_vars['lang']->value[543];?>
 <b style="color:orange"><?php echo $_smarty_tpl->tpl_vars['g_nazwa']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[544];?>
 <?php if ($_smarty_tpl->tpl_vars['g_typ']->value=="1") {?><?php echo $_smarty_tpl->tpl_vars['lang']->value[545];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang']->value[546];?>
<?php }?>.
</b>
</center>
<?php }?>
<?php } else { ?>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[547];?>
 </b>
</center>
<?php }?>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['czlonek']->value==1&&$_smarty_tpl->tpl_vars['g_typ']->value==0&&$_smarty_tpl->tpl_vars['user_id']->value>=1)||$_smarty_tpl->tpl_vars['g_typ']->value==1||$_smarty_tpl->tpl_vars['user_adm']->value=="adm") {?>
<?php if ($_smarty_tpl->tpl_vars['go']->value=="create") {?><br><br>
<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value=="dodano") {?><center><div id="ukryj"><b style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value[548];?>
</b></div></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value=="pn") {?><center><div id="ukryj"><b style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value[549];?>
</b></div></center><?php }?>
<form action="wyk/c_t.php?nazwa=<?php echo $_smarty_tpl->tpl_vars['g_nazwa']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
" method="POST">
<table>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['lang']->value[550];?>
</td><td> <input type="text" name="nazwa" style="width:300px;"></td></tr>
<td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value[551];?>
</td><td> <textarea name="tresc" style="width:500px;height:200px;"></textarea></td></tr>
</table>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[552];?>
">
</form>
<hr>

<?php } else { ?>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[553];?>
 </b>
</center>
<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['go']->value!="add"&&$_smarty_tpl->tpl_vars['go']->value!="user") {?>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?><div style="float: right; "><?php if ($_smarty_tpl->tpl_vars['czlonek']->value=="1") {?><a href="grupa/<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['g_nazwan']->value;?>
_create:topic"><?php echo $_smarty_tpl->tpl_vars['lang']->value[554];?>
</a> | <a href="wyk/op_g.php?id=<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[555];?>
</a><?php }?></div><?php }?>
<br><hr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gt_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<a href="temat/<?php echo $_smarty_tpl->tpl_vars['gt_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['gt_nazwan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['gt_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a>  <br>
<small><?php echo $_smarty_tpl->tpl_vars['lang']->value[556];?>
 <?php echo $_smarty_tpl->tpl_vars['gt_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
 | <?php echo $_smarty_tpl->tpl_vars['lang']->value[557];?>
 <?php echo $_smarty_tpl->tpl_vars['gt_dataz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
 | <?php echo $_smarty_tpl->tpl_vars['lang']->value[558];?>
 <?php echo $_smarty_tpl->tpl_vars['gt_ile']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>

<?php if ($_smarty_tpl->tpl_vars['user_adm']->value=="adm"||$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['gt_user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]||$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['g_user']->value) {?>
 | <a href="wyk/grupa.php?del=temat&id=<?php echo $_smarty_tpl->tpl_vars['gt_del']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[559];?>
</a>
<?php }?>
</small>
<hr>
<?php endfor; endif; ?>

<?php }?>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['go']->value!="add") {?><br><br><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[560];?>
</b></center><?php }?>
<?php }?>


</p>
    </div>	<div class="meta"></div></div>

  
		  
		
		</div>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
