<?php /* Smarty version Smarty-3.1.15, created on 2015-10-26 00:19:24
         compiled from "./templates/new_red/moje-zdjecia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2316180056254ce29902c3-70162295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78dd0cc1a720d8cccbb420ae36d7d12edaee4c71' => 
    array (
      0 => './templates/new_red/moje-zdjecia.tpl',
      1 => 1445814948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2316180056254ce29902c3-70162295',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254ce2a25461_18665739',
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'stan' => 0,
    'cenaf' => 0,
    'max_file_size' => 0,
    'fo_id' => 0,
    'fo_fm' => 0,
    'user_fotka' => 0,
    'fo_opis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254ce2a25461_18665739')) {function content_56254ce2a25461_18665739($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[251];?>
</h1>
		<p>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>

<h3>Dodaj Zdjęcie</h3>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==21) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[683];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==19) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[252];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==6) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[253];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==5) {?><div id="ukryj"><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[254];?>
</b></center></div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['cenaf']->value>=1) {?><br><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[255];?>
 <?php echo $_smarty_tpl->tpl_vars['cenaf']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[256];?>
</b></center><br><?php }?>
<form action="" method="POST" enctype="multipart/form-data" name="upf">

<table>
<tr>
<td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value[257];?>
</td><td><input name="plik1" type="file" class="textbox"/> <br><small><?php echo $_smarty_tpl->tpl_vars['lang']->value[258];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[694];?>
: <?php echo $_smarty_tpl->tpl_vars['max_file_size']->value;?>
 MB</small></td>
</tr>
<tr>
<td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value[261];?>
</td>
<td><textarea name="opis" style="width:300px;height:50px"></textarea></td>
</table>

<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[698];?>
" name="upf">
</form>
<br>
<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value[262];?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==7) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[263];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==8) {?><div id="ukryj"><center><b style="color:green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[264];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==9) {?><div id="ukryj"><center><b style="color:green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[265];?>
</b></center></div><?php }?>
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

<table width="100%">
<tr>
<td colspan="2" align="left">
<a href="user/moje-zdjecia/del-<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[266];?>
</a> | <?php if ($_smarty_tpl->tpl_vars['fo_fm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]==$_smarty_tpl->tpl_vars['user_fotka']->value) {?><?php echo $_smarty_tpl->tpl_vars['lang']->value[269];?>
<?php } else { ?><a href="user/moje-zdjecia/g-<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[270];?>
</a><?php }?>
</td>
</tr>
<tr>
<td valign="top" width="5%">
<img src="upload/zdjecia/<?php echo $_smarty_tpl->tpl_vars['fo_fm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
">
</td>
<td valign="top" align="left">
<?php echo $_smarty_tpl->tpl_vars['fo_opis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>

</td>
</tr>
</table>
<hr>
<?php endfor; endif; ?>

<br>

<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[271];?>
</b></center>
<?php }?>

</p>
		



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
