<?php /* Smarty version Smarty-3.1.15, created on 2015-11-20 09:21:57
         compiled from ".\templates\new_red\panel-ogl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9802564e263c1be166-23517928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4293c9e0e1a9ff24abbc7def041be5b3771b9484' => 
    array (
      0 => '.\\templates\\new_red\\panel-ogl.tpl',
      1 => 1448007716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9802564e263c1be166-23517928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564e263c246bf2_31508340',
  'variables' => 
  array (
    'user_id' => 0,
    'oglp' => 0,
    'zampkt' => 0,
    'addogl' => 0,
    'uppol' => 0,
    'p_nazwa' => 0,
    'p_opis' => 0,
    'lang' => 0,
    'delc' => 0,
    'faq_id' => 0,
    'faq_nazwa' => 0,
    'faq_data' => 0,
    'ust_ogloszenie_promo' => 0,
    'faq_opis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e263c246bf2_31508340')) {function content_564e263c246bf2_31508340($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng">Moje ogłoszenia</h1>
		<p>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>

<h3>Dodaj ogłoszenie</h3>

&nbsp;<b>Koszt dodania ogłoszenia: <?php echo $_smarty_tpl->tpl_vars['oglp']->value;?>
 PKT</b>
<br><br>

<?php if ($_smarty_tpl->tpl_vars['zampkt']->value==1) {?><div id="ukryj"><center><b style="color:red;">Masz zamało punktów</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['addogl']->value==1) {?><div id="ukryj"><center><b style="color:lime;">Dodano</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['uppol']->value==1) {?><div id="ukryj"><center><b style="color:red;">Uzupełnij wszystkie pola</b></center></div><?php }?>
<form action="panel-ogl.php" method="POST">

<table>

</td>
</tr>
<tr><td><b>Tytuł</b></td>
<td><input type="text" name="nazwa" style="width:500px;" value="<?php echo $_smarty_tpl->tpl_vars['p_nazwa']->value;?>
"></td></tr>
<tr>
<td valign="top"><b>Treść</b></td>
<td><textarea name="opis" style="width:500px;height:100px;" ><?php echo $_smarty_tpl->tpl_vars['p_opis']->value;?>
</textarea></td>
</tr>

</table>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[292];?>
" name="zd">
</form>
<br>
<h3>Ogłoszenia:</h3>
<?php if ($_smarty_tpl->tpl_vars['delc']->value==1) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[293];?>
</b></center></div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['faq_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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

<b><?php echo $_smarty_tpl->tpl_vars['faq_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b>  <?php echo $_smarty_tpl->tpl_vars['faq_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
  <a style="float:right;" href="panel-ogl.php?del=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[294];?>
</a> - <a style="float:right;margin-right:20px;" href="panel-ogl.php?promo=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
">Promuj(<?php echo $_smarty_tpl->tpl_vars['ust_ogloszenie_promo']->value;?>
 PKT)</a><br>

<?php echo $_smarty_tpl->tpl_vars['faq_opis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>

<hr><br>
<?php endfor; endif; ?>

<br><br>

<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[296];?>
</b></center>
<?php }?>

</p>
		



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
