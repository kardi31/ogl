<?php /* Smarty version Smarty-3.1.15, created on 2015-11-20 12:11:00
         compiled from ".\templates\new_red\profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24515564effc43785a5-51167326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '018c3f65afc2d0ab0ccd1c7b8ffea76b730a69af' => 
    array (
      0 => '.\\templates\\new_red\\profil.tpl',
      1 => 1448017089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24515564effc43785a5-51167326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rprou' => 0,
    'user_id' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'rpro' => 0,
    'lang' => 0,
    'login' => 0,
    'profil_vip' => 0,
    'gtime' => 0,
    'get_user_online' => 0,
    'vip_p' => 0,
    'id' => 0,
    'user_img' => 0,
    'user_plec' => 0,
    'site_url' => 0,
    'profil_ile_znajomi' => 0,
    'loginn' => 0,
    'profil_ile_galeria' => 0,
    'profil_ile_filmy' => 0,
    'profil_ile_imprezy' => 0,
    'gift_on' => 0,
    'profil_ile_prezenty' => 0,
    'wiek' => 0,
    'profil_plec' => 0,
    'profil_stc' => 0,
    'profil_miasto' => 0,
    'profil_woj' => 0,
    'datao' => 0,
    'profil_pale' => 0,
    'profil_alkochol' => 0,
    'profil_dzieci' => 0,
    'profil_wyks' => 0,
    'profil_wzrost' => 0,
    'profil_budowa_ciala' => 0,
    'profil_kolor_oczu' => 0,
    'profil_kolor_wlosu' => 0,
    'profil_jestem_ile' => 0,
    'd_id' => 0,
    'd_typ' => 0,
    'profil_jestem' => 0,
    'd_nazwa' => 0,
    'profil_szukam_ile' => 0,
    'profil_szukam' => 0,
    'czyzn' => 0,
    'omnie' => 0,
    'vip_k' => 0,
    'kom_nick' => 0,
    'kom_foto' => 0,
    'kom_idu' => 0,
    'kom_nickn' => 0,
    'kom_data' => 0,
    'kom_tresc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564effc4558df9_17311283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564effc4558df9_17311283')) {function content_564effc4558df9_17311283($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">

<!----Reklama profil----->
<?php if ($_smarty_tpl->tpl_vars['rprou']->value==1||($_smarty_tpl->tpl_vars['rprou']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rprou']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rpro']->value;?>

<?php }?>		
<!----Reklama profil----->

<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[21];?>
 <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['profil_vip']->value>=$_smarty_tpl->tpl_vars['gtime']->value) {?><?php echo $_smarty_tpl->tpl_vars['lang']->value[700];?>
<?php }?> <small style="font-size:12px;"><?php if ($_smarty_tpl->tpl_vars['get_user_online']->value>=1) {?><b style="color:green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[22];?>
</b><?php } else { ?><b style="color:silver;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[23];?>
</b><?php }?></small> </h1>
		<p>
<?php if (($_smarty_tpl->tpl_vars['vip_p']->value==1&&$_smarty_tpl->tpl_vars['vipendd']->value>=$_smarty_tpl->tpl_vars['vip_time']->value)||$_smarty_tpl->tpl_vars['vip_p']->value==0||$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['id']->value) {?>
<table width="100%">
<tr>
<td valign="top" width="10%">
<?php if ($_smarty_tpl->tpl_vars['user_img']->value=='') {?><?php if ($_smarty_tpl->tpl_vars['user_plec']->value=="1") {?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/women.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/men.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" /><?php }?><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
upload/zdjecia/<?php echo $_smarty_tpl->tpl_vars['user_img']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" /><?php }?>
<div class="profil-menu"><?php if ($_smarty_tpl->tpl_vars['profil_ile_znajomi']->value>=1) {?><a href="profil/<?php echo $_smarty_tpl->tpl_vars['loginn']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/znajomi"><?php echo $_smarty_tpl->tpl_vars['lang']->value[24];?>
 (<?php echo $_smarty_tpl->tpl_vars['profil_ile_znajomi']->value;?>
)</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang']->value[24];?>
 (0)<?php }?></div>
<div class="profil-menu"><?php if ($_smarty_tpl->tpl_vars['profil_ile_galeria']->value>=1) {?><a href="profil/<?php echo $_smarty_tpl->tpl_vars['loginn']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/zdjecia"><?php echo $_smarty_tpl->tpl_vars['lang']->value[25];?>
 (<?php echo $_smarty_tpl->tpl_vars['profil_ile_galeria']->value;?>
)</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang']->value[25];?>
 (0)<?php }?></div>
<div class="profil-menu"><?php if ($_smarty_tpl->tpl_vars['profil_ile_filmy']->value>=1) {?><a href="profil/<?php echo $_smarty_tpl->tpl_vars['loginn']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/filmy"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[658];?>
 (<?php echo $_smarty_tpl->tpl_vars['profil_ile_filmy']->value;?>
)</b></a><?php } else { ?><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[658];?>
 (0)</b><?php }?></div>
<div class="profil-menu"><?php if ($_smarty_tpl->tpl_vars['profil_ile_imprezy']->value>=1) {?><a href="profil/<?php echo $_smarty_tpl->tpl_vars['loginn']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/imprezy"><?php echo $_smarty_tpl->tpl_vars['lang']->value[26];?>
 (<?php echo $_smarty_tpl->tpl_vars['profil_ile_imprezy']->value;?>
)</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang']->value[26];?>
 (0)<?php }?></div>
<?php if ($_smarty_tpl->tpl_vars['gift_on']->value==1) {?><div class="profil-menu"><?php if ($_smarty_tpl->tpl_vars['profil_ile_prezenty']->value>=1) {?><a href="profil/<?php echo $_smarty_tpl->tpl_vars['loginn']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/prezenty"><?php echo $_smarty_tpl->tpl_vars['lang']->value[27];?>
 (<?php echo $_smarty_tpl->tpl_vars['profil_ile_prezenty']->value;?>
)</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang']->value[27];?>
 (0)<?php }?></div><?php }?>
</td>
<td valign="top" align="left" >
<b>
<table width="100%">
<tr>
<td align="left" valign="top" width="50%" bgcolor="white"> 

<?php if ($_smarty_tpl->tpl_vars['wiek']->value>=1) {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[28];?>
</b> <?php echo $_smarty_tpl->tpl_vars['wiek']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_plec']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[29];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_plec']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_stc']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[696];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_stc']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_miasto']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[30];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_miasto']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_woj']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[31];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_woj']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['datao']->value!="0000-00-00 00:00:00") {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[32];?>
</b> <?php echo $_smarty_tpl->tpl_vars['datao']->value;?>
<br><?php }?>
</td>
<td align="left" valign="top" width="50%" bgcolor="white">
<?php if ($_smarty_tpl->tpl_vars['profil_pale']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[33];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_pale']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_alkochol']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[34];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_alkochol']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_dzieci']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[35];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_dzieci']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_wyks']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[695];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_wyks']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_wzrost']->value!=''&&$_smarty_tpl->tpl_vars['profil_wzrost']->value>0) {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[37];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_wzrost']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[38];?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_budowa_ciala']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[39];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_budowa_ciala']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_kolor_oczu']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[40];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_kolor_oczu']->value;?>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_kolor_wlosu']->value!='') {?><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[41];?>
</b> <?php echo $_smarty_tpl->tpl_vars['profil_kolor_wlosu']->value;?>
<br><?php }?>

</td>
</tr>
<tr>
<td colspan="2" align="left" valign="top" bgcolor="white"><br>
<table width="100%">
<?php if ($_smarty_tpl->tpl_vars['profil_jestem_ile']->value>=2) {?>
<tr>
<td valign="top"><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[36];?>
</b></td>
<td width="100%">

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['d_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
  <?php if ($_smarty_tpl->tpl_vars['d_typ']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="je"&&in_array($_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']],$_smarty_tpl->tpl_vars['profil_jestem']->value)) {?><?php echo $_smarty_tpl->tpl_vars['d_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
, <?php }?>
<?php endfor; endif; ?>

</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['profil_szukam_ile']->value>=2) {?>
<tr>
<td valign="top"><b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[42];?>
</b></td>
<td width="100%">

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['d_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
  <?php if ($_smarty_tpl->tpl_vars['d_typ']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="sz"&&in_array($_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']],$_smarty_tpl->tpl_vars['profil_szukam']->value)) {?><?php echo $_smarty_tpl->tpl_vars['d_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
, <?php }?>
<?php endfor; endif; ?>

</td>
</tr>
<?php }?>
</table>

</td>
</tr>

<tr>
<?php if ($_smarty_tpl->tpl_vars['user_id']->value!=$_smarty_tpl->tpl_vars['id']->value) {?>
<td bgcolor="white" colspan="2" align="right" valign="top" width="100%">
<br>
<table>
<tr>
<td class="td_hover"><a href="pw/send/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[50];?>
</a></td>
<?php if ($_smarty_tpl->tpl_vars['gift_on']->value==1) {?><td class="td_hover"><a href="prezent/user-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value[51];?>
</a> </a><?php }?>
<?php if ($_smarty_tpl->tpl_vars['czyzn']->value==0) {?><td class="td_hover"><a href="dodaj-znajomego/user-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value[52];?>
</a> </td><?php } else { ?><td class="td_hover"><b style="color:green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[53];?>
</b> </td><?php }?>
<td class="td_hover"><a href="zgloszenie/user-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value[54];?>
</a></td>
</tr>
</table>

<br><br>
</td><?php }?>
</tr>

</table>


</td>
</tr>
</table>

<table bgcolor="white" width="100%">
<tr>
<td  align="left">
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[55];?>
</b><br>
<?php echo $_smarty_tpl->tpl_vars['omnie']->value;?>

</td>
</tr>
</table>

<br><br>
<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value[56];?>
</h3>

<?php if (($_smarty_tpl->tpl_vars['vip_k']->value==1&&$_smarty_tpl->tpl_vars['vipendd']->value>=$_smarty_tpl->tpl_vars['vip_time']->value)||$_smarty_tpl->tpl_vars['vip_k']->value==0) {?>

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
<table width="100%" bgcolor="white">
<tr>
<td valign="top" width="60">
<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['kom_foto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
" width="60" />
</td>
<td valign="top">
<?php echo $_smarty_tpl->tpl_vars['lang']->value[57];?>
 <b><?php if ($_smarty_tpl->tpl_vars['kom_idu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']]=='') {?><?php echo $_smarty_tpl->tpl_vars['kom_nick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
<?php } else { ?><a href="profil/<?php echo $_smarty_tpl->tpl_vars['kom_nickn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['kom_idu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['kom_nick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
</a><?php }?></b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[58];?>
 <?php echo $_smarty_tpl->tpl_vars['kom_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['kom_tresc']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>

</td>
</tr>
</table><br>

<?php endfor; endif; ?>

<center>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/komentarze.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</center>
<?php } else { ?>

<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[59];?>
</b></center>

<?php }?>
</p>

<?php } else { ?>

<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[60];?>
</b></center>

<?php }?>

<?php } else { ?>

		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[21];?>
 <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[61];?>
 <a href="register/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[62];?>
</a>. </b>
</center>
</p>

<?php }?>
	



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
