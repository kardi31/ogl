<?php /* Smarty version Smarty-3.1.15, created on 2015-10-21 20:33:27
         compiled from "./templates/new_red/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95352801456254da51c8fe6-39318070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8258763a2df0a61fe2a0fb8371cf8348ad59aae3' => 
    array (
      0 => './templates/new_red/panel.tpl',
      1 => 1445450091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95352801456254da51c8fe6-39318070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254da5353b26_87615476',
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'stan' => 0,
    'pwojid' => 0,
    'user_woj' => 0,
    'pwoj' => 0,
    'miasto' => 0,
    'd_id' => 0,
    'd_typ' => 0,
    'jko' => 0,
    'jestem' => 0,
    'd_nazwa' => 0,
    'iko' => 0,
    'szukam' => 0,
    'dzieci' => 0,
    'sylwetka' => 0,
    'wyks' => 0,
    'koczy' => 0,
    'kwlos' => 0,
    'papierosy' => 0,
    'alkochol' => 0,
    'wzrost' => 0,
    'plec' => 0,
    'd' => 0,
    'm' => 0,
    'wiek_start' => 0,
    'wiek_max' => 0,
    'y' => 0,
    'omnie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254da5353b26_87615476')) {function content_56254da5353b26_87615476($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[63];?>
</h1>
		<p>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>

<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value[64];?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==3) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[65];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==4) {?><div id="ukryj"><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[66];?>
</b></center></div><?php }?>
<form action="wyk/zmien_dane.php" method="POST">

<table>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[67];?>
 </b></td>
<td>
<select name="woj">
 <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[68];?>
</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pwojid']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
  <option value="<?php echo $_smarty_tpl->tpl_vars['pwojid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['user_woj']->value==$_smarty_tpl->tpl_vars['pwojid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['pwoj']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</option>
<?php endfor; endif; ?>

</select>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[69];?>
</td>
<td><input type="text" name="miasto" value="<?php echo $_smarty_tpl->tpl_vars['miasto']->value;?>
"></td>
</tr>


<tr>
<td valign="top"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[78];?>
:</b></td>
<td>
<table width="100%">
<tr>
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
  <?php if ($_smarty_tpl->tpl_vars['d_typ']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="je") {?><td  width="33%" align="left"><input type="checkbox" name="jestem[<?php echo $_smarty_tpl->tpl_vars['jko']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['jestem']->value[$_smarty_tpl->tpl_vars['jko']->value]==$_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]||in_array($_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']],$_smarty_tpl->tpl_vars['jestem']->value)) {?>checked<?php }?>><b><?php echo $_smarty_tpl->tpl_vars['d_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b></td><?php if ($_smarty_tpl->tpl_vars['jko']->value++%3==0) {?></tr><?php }?><?php }?>
<?php endfor; endif; ?>
</table>
</td>
</tr>
<tr>
<td valign="top"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[70];?>
</b></td>
<td>
<table width="100%">
<tr>
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
  <?php if ($_smarty_tpl->tpl_vars['d_typ']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="sz") {?><td  width="33%" align="left"><input type="checkbox" name="szukam[<?php echo $_smarty_tpl->tpl_vars['iko']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['szukam']->value[$_smarty_tpl->tpl_vars['iko']->value]==$_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]||in_array($_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']],$_smarty_tpl->tpl_vars['szukam']->value)) {?>checked<?php }?>><b><?php echo $_smarty_tpl->tpl_vars['d_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b></td><?php if ($_smarty_tpl->tpl_vars['iko']->value++%3==0) {?></tr><?php }?><?php }?>
<?php endfor; endif; ?>
</table>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[84];?>
</b></td>
<td>
<select name="dzieci">
  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[68];?>
</option>
  
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
	<?php if ($_smarty_tpl->tpl_vars['d_typ']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="d") {?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['dzieci']->value==$_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</option>
	<?php }?>
	<?php endfor; endif; ?>
 
</select>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[89];?>
</b></td>
<td>
<select name="sylwetka">
  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[68];?>
</option>
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
	<?php if ($_smarty_tpl->tpl_vars['d_typ']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="s") {?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['sylwetka']->value==$_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</option>
	<?php }?>
	<?php endfor; endif; ?>
</select>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[695];?>
</b></td>
<td>
<select name="wyks">
  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[68];?>
</option>
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
	<?php if ($_smarty_tpl->tpl_vars['d_typ']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="w") {?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['wyks']->value==$_smarty_tpl->tpl_vars['d_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</option>
	<?php }?>
	<?php endfor; endif; ?>
</select>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[96];?>
</td>
<td><input type="text" name="koczy" value="<?php echo $_smarty_tpl->tpl_vars['koczy']->value;?>
"></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[97];?>
</td>
<td><input type="text" name="kwlosy" value="<?php echo $_smarty_tpl->tpl_vars['kwlos']->value;?>
"></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[98];?>
:</b></td>
<td>
<select name="papierosy">
  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[68];?>
</option>
  <option <?php if ($_smarty_tpl->tpl_vars['papierosy']->value==$_smarty_tpl->tpl_vars['lang']->value[99]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[99];?>
</option>
  <option <?php if ($_smarty_tpl->tpl_vars['papierosy']->value==$_smarty_tpl->tpl_vars['lang']->value[100]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[100];?>
</option>
  <option <?php if ($_smarty_tpl->tpl_vars['papierosy']->value==$_smarty_tpl->tpl_vars['lang']->value[101]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[101];?>
</option>
</select>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[646];?>
:</b></td>
<td>
<select name="alkochol">
  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[68];?>
</option>
  <option <?php if ($_smarty_tpl->tpl_vars['alkochol']->value==$_smarty_tpl->tpl_vars['lang']->value[102]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[102];?>
</option>
  <option <?php if ($_smarty_tpl->tpl_vars['alkochol']->value==$_smarty_tpl->tpl_vars['lang']->value[103]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[103];?>
</option>
  <option <?php if ($_smarty_tpl->tpl_vars['alkochol']->value==$_smarty_tpl->tpl_vars['lang']->value[104]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[104];?>
</option>
</select>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[105];?>
:</b></td>
<td>
<select name="wzrost">
 <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[68];?>
</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = (int) 55;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=241) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']==$_smarty_tpl->tpl_vars['wzrost']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
</option>
<?php endfor; endif; ?>

</select> <?php echo $_smarty_tpl->tpl_vars['lang']->value[106];?>

</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[107];?>
:</b></td>
<td>
<select name="plec">
  <option value="1" <?php if ($_smarty_tpl->tpl_vars['plec']->value==1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[108];?>
</option>
  <option value="2" <?php if ($_smarty_tpl->tpl_vars['plec']->value==2) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[109];?>
</option>
</select>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[110];?>
</b></td>
<td>
<select name="d">  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[111];?>
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

<select name="m">  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[112];?>
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

<select name="y">  <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value[113];?>
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
<td valign="top"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[114];?>
</b></td>
<td><textarea name="omnie" style="width:500px;height:100px;"><?php echo $_smarty_tpl->tpl_vars['omnie']->value;?>
</textarea></td>
</tr>

</table>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[115];?>
" name="zd">
</form>

<br><br><br><br><br><br><br><br>
<center><table><tr><td class="td_hover"><a href="user/usun-konto/"><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[116];?>
</b></a></td></tr></table></center>
<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[117];?>
</b></center>
<?php }?>

</p>
		



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
