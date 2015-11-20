<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 21:57:37
         compiled from "./templates/new_red/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62808783056254b31b5f0c1-09871906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '894004fe23d2d98b4b26069f0fd0212f470d8118' => 
    array (
      0 => './templates/new_red/register.tpl',
      1 => 1445282913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62808783056254b31b5f0c1-09871906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_nick' => 0,
    'rejestracja' => 0,
    'regok' => 0,
    'l' => 0,
    'ler' => 0,
    'h' => 0,
    'e' => 0,
    'ei' => 0,
    'e_plec' => 0,
    'e_wiek' => 0,
    'reg' => 0,
    't' => 0,
    'givereg' => 0,
    'lt' => 0,
    'et' => 0,
    'plec' => 0,
    'd' => 0,
    'm' => 0,
    'wiek_start' => 0,
    'wiek_max' => 0,
    'y' => 0,
    'regulamin' => 0,
    'tokenr' => 0,
    'token_img' => 0,
    'send' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254b31c50b87_61096321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254b31c50b87_61096321')) {function content_56254b31c50b87_61096321($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[370];?>
</h1>
		<p>
<?php if ($_smarty_tpl->tpl_vars['user_nick']->value==''&&$_smarty_tpl->tpl_vars['rejestracja']->value==1&&$_smarty_tpl->tpl_vars['regok']->value!=1) {?>
<?php if ($_smarty_tpl->tpl_vars['l']->value==1) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[371];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['ler']->value==1) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[372];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['h']->value==1) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[373];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['e']->value==1) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[374];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['ei']->value==1) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[699];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['e_plec']->value==1) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[375];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['e_wiek']->value==1) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[376];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['reg']->value==1) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[377];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['t']->value==1) {?><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[378];?>
</b></center><?php }?>
<br/>
<br/>
<?php if ($_smarty_tpl->tpl_vars['givereg']->value>=1) {?><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[379];?>
 <b style="color:red"><?php echo $_smarty_tpl->tpl_vars['givereg']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[380];?>
</b></center><?php }?>
<br/>
<form action="" method="post">
<table>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[381];?>
</b></td>
<td><input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['lt']->value;?>
"/></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[382];?>
</b></td>
<td><input type="password" name="haslo"/></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[383];?>
</b></td>
<td><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['et']->value;?>
"/></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[384];?>
</b></td>
<td><select name="plec">
<option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[385];?>
</option>
<option value="1" <?php if ($_smarty_tpl->tpl_vars['plec']->value=="1") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[386];?>
</option>
<option value="2" <?php if ($_smarty_tpl->tpl_vars['plec']->value=="2") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[387];?>
</option>
</select>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[388];?>
</b></td>
<td>
<select name="d">  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[389];?>
</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
  <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']==$_smarty_tpl->tpl_vars['d']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
</option>
<?php endfor; endif; ?>
</select>

<select name="m">  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[390];?>
</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
  <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']==$_smarty_tpl->tpl_vars['m']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
</option>
<?php endfor; endif; ?>
</select>

<select name="y">  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[391];?>
</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wiek_start']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = (int) $_smarty_tpl->tpl_vars['wiek_max']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
  <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']==$_smarty_tpl->tpl_vars['y']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
</option>
<?php endfor; endif; ?>
</select>
</td>
</tr>
<tr>
<td><b></b></td>
<td><input type="checkbox" name="regulamin" value="1" <?php if ($_smarty_tpl->tpl_vars['regulamin']->value==1) {?> checked<?php }?>/> <?php echo $_smarty_tpl->tpl_vars['lang']->value[393];?>
 <a href="regulamin/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[394];?>
</a> <?php echo $_smarty_tpl->tpl_vars['lang']->value[605];?>
 <a href="polityka/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[606];?>
</a></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['tokenr']->value==1) {?>

<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[395];?>
</b></td>
<td><?php echo $_smarty_tpl->tpl_vars['token_img']->value;?>
</td>
</tr>
<?php }?>
<tr>
<td></td>
<td><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[396];?>
" name="register"/></td>
</tr>
</table>

</form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['rejestracja']->value==0) {?><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[397];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['user_nick']->value!='') {?><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[398];?>
</b></center><?php }?>

<?php if ($_smarty_tpl->tpl_vars['regok']->value==1) {?><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[399];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['send']->value==1) {?><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[400];?>
</b></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['send']->value==2) {?><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[401];?>
</b></center><?php }?>
</p>

	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
