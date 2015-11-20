<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 22:02:41
         compiled from "./templates/new_red/grupy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193212055256254c61bf8457-55240911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abf18ad9dd50373756d37b91cb5fc65c3ad6ad04' => 
    array (
      0 => './templates/new_red/grupy.tpl',
      1 => 1445282907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193212055256254c61bf8457-55240911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'go' => 0,
    'user_id' => 0,
    'stan' => 0,
    'g_id' => 0,
    'g_nazwan' => 0,
    'g_nazwa' => 0,
    'g_data' => 0,
    'g_typ' => 0,
    'user_adm' => 0,
    'g_user' => 0,
    'g_del' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254c61c871a1_29687133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254c61c871a1_29687133')) {function content_56254c61c871a1_29687133($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<div class="left">

	<div class="post">
			<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[561];?>
</h1>
<div class="entry"><p>
<?php if ($_smarty_tpl->tpl_vars['go']->value=="del-g") {?>
<center><div id="ukryj"><b style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value[562];?>
</b></div></center>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['go']->value=="create") {?>
<a href="grupy/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[563];?>
</a> >> <a href="grupy/create/yes/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[564];?>
</a>
<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value=="dodano") {?><center><div id="ukryj"><b style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value[565];?>
</b></div></center><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value=="pn") {?><center><div id="ukryj"><b style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value[566];?>
</b></div></center><?php }?>
<form action="wyk/c_g.php" method="POST">
<table>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['lang']->value[567];?>
</td><td> <input type="text" name="nazwa"></td></tr><tr>
<td><?php echo $_smarty_tpl->tpl_vars['lang']->value[568];?>
</td><td> <select name="typ"><option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value[569];?>
</option><option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value[570];?>
</option></select></td></tr></table>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[571];?>
">
</form>
<hr>
<?php echo $_smarty_tpl->tpl_vars['lang']->value[572];?>

<?php } else { ?>
<center>
<br><img src="images/lock.png"><br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[573];?>
 </b>
</center>
<?php }?>

<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?><table  cellspacing="0"><tr><td class="td_hover"><a href="grupy/create/yes/" ><?php echo $_smarty_tpl->tpl_vars['lang']->value[574];?>
</a></td></tr></table><br><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['g_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<a href="grupa/<?php echo $_smarty_tpl->tpl_vars['g_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['g_nazwan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['g_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a>  <br>
<small><?php echo $_smarty_tpl->tpl_vars['lang']->value[575];?>
 <?php echo $_smarty_tpl->tpl_vars['g_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
 | <?php if ($_smarty_tpl->tpl_vars['g_typ']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]==1) {?><?php echo $_smarty_tpl->tpl_vars['lang']->value[576];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang']->value[577];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>| <a href="grupa/<?php echo $_smarty_tpl->tpl_vars['g_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['g_nazwan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
_add:user"><?php echo $_smarty_tpl->tpl_vars['lang']->value[578];?>
</a><?php }?></small>
<?php if ($_smarty_tpl->tpl_vars['user_adm']->value=="adm"||$_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['g_user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]) {?><br><small>

<a href="grupa/<?php echo $_smarty_tpl->tpl_vars['g_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['g_nazwan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
_user:view"><?php echo $_smarty_tpl->tpl_vars['lang']->value[579];?>
</a> | 
<a href="wyk/grupa.php?del=grupa&id=<?php echo $_smarty_tpl->tpl_vars['g_del']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[580];?>
</a>
</small><?php }?>
<hr>
<?php endfor; endif; ?>

<?php }?>



</p>
    </div>	<div class="meta"></div></div>

  
		  
		</div>
		
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
