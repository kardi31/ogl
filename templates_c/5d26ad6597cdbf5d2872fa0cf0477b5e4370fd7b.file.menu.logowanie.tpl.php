<?php /* Smarty version Smarty-3.1.15, created on 2015-12-01 13:35:28
         compiled from ".\templates\new_red\menu.logowanie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21675564e1eb340d0f5-31065498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d26ad6597cdbf5d2872fa0cf0477b5e4370fd7b' => 
    array (
      0 => '.\\templates\\new_red\\menu.logowanie.tpl',
      1 => 1448973327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21675564e1eb340d0f5-31065498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564e1eb3610e15_42367431',
  'variables' => 
  array (
    'user_id' => 0,
    'lang' => 0,
    'user_nick' => 0,
    'gift_on' => 0,
    'user_ile_money' => 0,
    'vipend' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'u_kv' => 0,
    'u_ko' => 0,
    'newpw' => 0,
    'newzp' => 0,
    'user_nickn' => 0,
    'user_adm' => 0,
    'site_url' => 0,
    'oua' => 0,
    'ou_id' => 0,
    'ou_loginn' => 0,
    'ou_login' => 0,
    'ouab' => 0,
    'pwojids' => 0,
    'pwojs' => 0,
    'ust_wiek' => 0,
    'wiek_max' => 0,
    'fb_login' => 0,
    'online_user' => 0,
    'online_login_user' => 0,
    'user_ile_zar' => 0,
    'user_ile_women' => 0,
    'user_ile_men' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e1eb3610e15_42367431')) {function content_564e1eb3610e15_42367431($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>
<center>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[118];?>
 <b style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['user_nick']->value;?>
</b><br/>
<?php if ($_smarty_tpl->tpl_vars['gift_on']->value==1) {?>

<?php echo $_smarty_tpl->tpl_vars['lang']->value[119];?>
 <b><?php echo $_smarty_tpl->tpl_vars['user_ile_money']->value;?>
</b><br/>
<?php if ($_smarty_tpl->tpl_vars['vipend']->value>=1&&$_smarty_tpl->tpl_vars['vipendd']->value>=$_smarty_tpl->tpl_vars['vip_time']->value) {?><?php echo $_smarty_tpl->tpl_vars['lang']->value[120];?>
 <b><?php echo $_smarty_tpl->tpl_vars['vipend']->value;?>
</b><?php }?>

<br/>
<br/>
<?php }?>

<b>
<a href="user/panel/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[121];?>
</div></a>
<a href="user/zmien-haslo/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[122];?>
</div></a>
<?php if ($_smarty_tpl->tpl_vars['gift_on']->value==1) {?><a href="doladuj-konto/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[123];?>
</div></a><?php }?>
<a href="user/moje-zdjecia/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[124];?>
</div></a>
<a href="user/moje-filmy/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[657];?>
 / Dodaj</div></a>
<a href="user/kupione-filmy/" class="mb_buta"><div class="mb_but">Kupione filmy</div></a>
<a href="user/imprezy/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[125];?>
</div></a>
<a href="panel-ogl.php" class="mb_buta"><div class="mb_but">Dodaj ogłoszenia</div></a>
<a href="user/znajomi/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[126];?>
</div></a>
<?php if ($_smarty_tpl->tpl_vars['u_kv']->value>=1) {?><a href="user/kto-ogladal-profil/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[127];?>
</div></a><?php }?>
<?php if ($_smarty_tpl->tpl_vars['u_ko']->value>=1) {?><a href="user/kto-ocenial-zdjecia/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[128];?>
</div></a><?php }?>
<a href="pw/" class="mb_buta"><div class="mb_but"><?php if ($_smarty_tpl->tpl_vars['newpw']->value>=1) {?><span style="color:black;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[129];?>
 (<?php echo $_smarty_tpl->tpl_vars['newpw']->value;?>
)</span><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang']->value[129];?>
<?php }?></div></a>
<a href="zaproszenia/" class="mb_buta"><div class="mb_but"><?php if ($_smarty_tpl->tpl_vars['newzp']->value>=1) {?><span style="color:black;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[130];?>
 (<?php echo $_smarty_tpl->tpl_vars['newzp']->value;?>
)</span><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang']->value[130];?>
<?php }?></div></a>
<a href="profil/<?php echo $_smarty_tpl->tpl_vars['user_nickn']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[131];?>
</div></a><br>
<a href="/dodaj-reklame/" class="mb_buta"><div class="mb_but">Dodaj reklame</div></a>
<?php if ($_smarty_tpl->tpl_vars['user_adm']->value=="adm") {?><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
admin/" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[653];?>
</div></a><br><?php }?>
<a href="logout.php" class="mb_buta"><div class="mb_but"><?php echo $_smarty_tpl->tpl_vars['lang']->value[132];?>
</div></a>
</b>
</center>
<br/>
<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value[133];?>
 <?php if ($_smarty_tpl->tpl_vars['oua']->value>=1) {?>(<?php echo $_smarty_tpl->tpl_vars['oua']->value;?>
)<?php }?></h3>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ou_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<a href="profil/<?php echo $_smarty_tpl->tpl_vars['ou_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['ou_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" class=""><?php echo $_smarty_tpl->tpl_vars['ou_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a>
<?php endfor; endif; ?>

<?php if ($_smarty_tpl->tpl_vars['ouab']->value=="0") {?><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[134];?>
</b></center><?php }?>

<br/>
<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value[135];?>
</h3>
<form action="dos.php" method="post">


<table>
<tr><td><?php echo $_smarty_tpl->tpl_vars['lang']->value[136];?>


<select name="woj">
 <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[137];?>
</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pwojids']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
  <option value="<?php echo $_smarty_tpl->tpl_vars['pwojids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" ><?php echo $_smarty_tpl->tpl_vars['pwojs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</option>
<?php endfor; endif; ?>

</select>


</td></tr>
<tr><td><?php echo $_smarty_tpl->tpl_vars['lang']->value[138];?>
 <input type="text" name="miasto"></td></tr>
<tr><td><?php echo $_smarty_tpl->tpl_vars['lang']->value[139];?>


<?php echo $_smarty_tpl->tpl_vars['lang']->value[140];?>
 <select name="od">  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[142];?>
</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['name'] = 'fooa';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['start'] = (int) $_smarty_tpl->tpl_vars['ust_wiek']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wiek_max']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['fooa']['total']);
?>
  <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fooa']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fooa']['index'];?>
</option>
<?php endfor; endif; ?>
</select>

<?php echo $_smarty_tpl->tpl_vars['lang']->value[141];?>
 <select name="do">  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[142];?>
</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foos'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['name'] = 'foos';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['start'] = (int) $_smarty_tpl->tpl_vars['ust_wiek']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wiek_max']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foos']['total']);
?>
  <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foos']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foos']['index'];?>
</option>
<?php endfor; endif; ?>
</select>


</td></tr>
<tr><td><?php echo $_smarty_tpl->tpl_vars['lang']->value[143];?>


<select name="plec">  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[137];?>
</option>
<option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value[144];?>
</option>
<option value="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value[145];?>
</option>
</select>

</td></tr>
<tr><td><input type="checkbox" name="online" value="1"> <?php echo $_smarty_tpl->tpl_vars['lang']->value[146];?>
 <input type="checkbox" name="img" value="1"> <?php echo $_smarty_tpl->tpl_vars['lang']->value[147];?>
</td></tr>
</table>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[148];?>
" name="szukaj">
</form>

<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['user_adm']->value=="error") {?><center><span id="ukryj" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[149];?>
</span></center><?php }?>
<form action="" method="post">
<table>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[150];?>
</b></td>
<td><input type="text" name="login" style="width:130px"/></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[151];?>
</b></td>
<td><input type="password" name="haslo" style="width:130px"/></td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" name="zamn" value="1"/> <?php echo $_smarty_tpl->tpl_vars['lang']->value[152];?>
</td>
</tr>
<tr>

<td colspan="2"><center><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[153];?>
" name="login_user"/></center></td>
</tr>
</table>

</form>
<?php if ($_smarty_tpl->tpl_vars['fb_login']->value=="1") {?>
<center>
	<a href="fbc.php?login=fb"><img src="images/facebook_zaloguj.png"></a>
<center>
<?php }?>
<br/>
<a href="register/"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[154];?>
</b></a><br>
<a href="zapomniane-haslo/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[155];?>
</a>

<?php }?>

<br/><br/>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[156];?>
 <?php echo $_smarty_tpl->tpl_vars['online_user']->value;?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[157];?>
 <?php echo $_smarty_tpl->tpl_vars['online_login_user']->value;?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[158];?>
 <?php echo $_smarty_tpl->tpl_vars['user_ile_zar']->value;?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[159];?>
 <?php echo $_smarty_tpl->tpl_vars['user_ile_women']->value;?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[160];?>
 <?php echo $_smarty_tpl->tpl_vars['user_ile_men']->value;?>
<?php }} ?>
