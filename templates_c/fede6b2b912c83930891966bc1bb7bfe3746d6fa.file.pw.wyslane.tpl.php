<?php /* Smarty version Smarty-3.1.15, created on 2015-11-10 11:14:10
         compiled from "./templates/new_red/pw.wyslane.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18473510635641c37214b5c8-02147150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fede6b2b912c83930891966bc1bb7bfe3746d6fa' => 
    array (
      0 => './templates/new_red/pw.wyslane.tpl',
      1 => 1445282912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18473510635641c37214b5c8-02147150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'del' => 0,
    'ilepw' => 0,
    'pw_id' => 0,
    'czyt' => 0,
    'temat' => 0,
    'od_loginn' => 0,
    'od' => 0,
    'od_login' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5641c37222b7a6_15316885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641c37222b7a6_15316885')) {function content_5641c37222b7a6_15316885($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[361];?>
</h1>
		<p><?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>

<?php if ($_smarty_tpl->tpl_vars['del']->value=="ok") {?><center><div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[362];?>
</b></center></div></div></center><br><?php }?>

<?php if ($_smarty_tpl->tpl_vars['ilepw']->value>=1) {?>

<table width="100%">
<tr>
<td width="60%"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[363];?>
</b></td><td  align="center"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[364];?>
</b></td><td  align="center"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[365];?>
</b></td><td  align="center"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[366];?>
</b></td>
</tr>
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
<td><?php if ($_smarty_tpl->tpl_vars['czyt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]==0) {?><a href="pw/view/<?php echo $_smarty_tpl->tpl_vars['pw_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><b><?php echo $_smarty_tpl->tpl_vars['temat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b></a><?php } else { ?><a href="pw/view/<?php echo $_smarty_tpl->tpl_vars['pw_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['temat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><?php }?></td>
<td  align="center"><a href="user/<?php echo $_smarty_tpl->tpl_vars['od_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['od']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['od_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a></td>
<td  align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td>
<td  align="center"><a href="pw/wyslane/<?php echo $_smarty_tpl->tpl_vars['pw_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/del"><?php echo $_smarty_tpl->tpl_vars['lang']->value[367];?>
</a></td>
</tr>
<?php endfor; endif; ?>
</table>

<?php } else { ?>
<center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[368];?>
</b></center>
<?php }?>

<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[369];?>
</b></center>
<?php }?>
</p>
		



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
