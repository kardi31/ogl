<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 22:19:08
         compiled from "./templates/new_red/pw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9601997515625503c5680e8-22247415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e96d61b4cc6fb51a5b3b535ced5ddc391ca7df0e' => 
    array (
      0 => './templates/new_red/pw.tpl',
      1 => 1445282912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9601997515625503c5680e8-22247415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'del' => 0,
    'wyslano' => 0,
    'ilepw' => 0,
    'pw_id' => 0,
    'czyt' => 0,
    'temat' => 0,
    'od' => 0,
    'od_loginn' => 0,
    'od_login' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625503c6276a8_42940493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625503c6276a8_42940493')) {function content_5625503c6276a8_42940493($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[339];?>
</h1>
		<p>
<?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>



<table><tr>
<td class="td_hover"><a href="pw/send/"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[340];?>
</b></a></td>
<td class="td_hover"> <a href="pw/wyslane/"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[341];?>
</b></a></td>
</tr></table><br>
<?php if ($_smarty_tpl->tpl_vars['del']->value=="ok") {?><center><div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[342];?>
</b></center></div></div></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['wyslano']->value=="ok") {?><center><div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[343];?>
</b></center></div></div></center><?php }?>

<?php if ($_smarty_tpl->tpl_vars['ilepw']->value>=1) {?>

<table width="100%">
<tr>
<td width="60%"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[344];?>
</b></td><td  align="center"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[345];?>
</b></td><td  align="center"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[346];?>
</b></td><td  align="center"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[347];?>
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
<td  align="center"><?php if ($_smarty_tpl->tpl_vars['od']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]==0) {?><b>info</b><?php } else { ?><a href="user/<?php echo $_smarty_tpl->tpl_vars['od_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['od']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['od_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><?php }?></td>
<td  align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</td>
<td  align="center"><a href="pw/<?php echo $_smarty_tpl->tpl_vars['pw_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/del"><?php echo $_smarty_tpl->tpl_vars['lang']->value[348];?>
</a></td>
</tr>
<?php endfor; endif; ?>
</table>

<?php } else { ?>
<center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[349];?>
</b></center>
<?php }?>

<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[351];?>
</b></center>
<?php }?>
</p>
	



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
