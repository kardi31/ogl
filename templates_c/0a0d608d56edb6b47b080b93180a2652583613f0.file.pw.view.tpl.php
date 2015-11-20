<?php /* Smarty version Smarty-3.1.15, created on 2015-10-20 01:45:27
         compiled from "./templates/new_red/pw.view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:354377705562580973bf1d6-27358462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a0d608d56edb6b47b080b93180a2652583613f0' => 
    array (
      0 => './templates/new_red/pw.view.tpl',
      1 => 1445282912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '354377705562580973bf1d6-27358462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'pw_id' => 0,
    'temat' => 0,
    'od' => 0,
    'od_loginn' => 0,
    'od_login' => 0,
    'data' => 0,
    'tresc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_562580974456a5_71372933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562580974456a5_71372933')) {function content_562580974456a5_71372933($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[352];?>
</h1>
		<p><?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>
<table>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pw_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<td align="left"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[353];?>
</b></td>
<td><?php echo $_smarty_tpl->tpl_vars['temat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
 - <a href="pw/<?php echo $_smarty_tpl->tpl_vars['pw_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/del" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[354];?>
"><img src="templates/blu/images/delete.png" width="14"  style="vertical-align: middle;"></a> - <a href="pw/send/<?php echo $_smarty_tpl->tpl_vars['pw_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/odp" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value[355];?>
"><img src="templates/blu/images/edit.gif" width="14"  style="vertical-align: middle;"></a></td>
</tr>
<tr>
<td align="left"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[356];?>
</b></td>
<td ><?php if ($_smarty_tpl->tpl_vars['od']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]==0) {?><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[357];?>
</b><?php } else { ?><a href="user/<?php echo $_smarty_tpl->tpl_vars['od_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['od']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['od_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><?php }?></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[358];?>
</b></td>
<td align="left"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[359];?>
</b></td>
<td><?php echo $_smarty_tpl->tpl_vars['tresc']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td>
</tr>
<?php endfor; endif; ?>
</table>

<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[360];?>
</b></center>
<?php }?>
</p>
	



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
