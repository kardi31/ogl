<?php /* Smarty version Smarty-3.1.15, created on 2015-10-20 02:42:02
         compiled from "./templates/new_red/pw.send.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180849807256258ddab0bb93-67442989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0dc53b959351b0ae60cf3760ba0059a0bd5944a' => 
    array (
      0 => './templates/new_red/pw.send.tpl',
      1 => 1445282912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180849807256258ddab0bb93-67442989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'vip_pw' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'temat' => 0,
    'od_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56258ddab8a094_50789323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56258ddab8a094_50789323')) {function content_56258ddab8a094_50789323($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[332];?>
</h1>
		<p><?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>

<?php if (($_smarty_tpl->tpl_vars['vip_pw']->value==1&&$_smarty_tpl->tpl_vars['vipendd']->value>=$_smarty_tpl->tpl_vars['vip_time']->value)||$_smarty_tpl->tpl_vars['vip_pw']->value==0) {?>

<form action="" method="POST">
<table>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[333];?>
</b></td>
<td><input type="text" name="temat" <?php if ($_smarty_tpl->tpl_vars['temat']->value!='') {?>value="RE: <?php echo $_smarty_tpl->tpl_vars['temat']->value;?>
"<?php }?> style="width:250px;"></td>
</tr>
<tr>
<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[334];?>
</b></td>
<td><input type="text" name="do" <?php if ($_smarty_tpl->tpl_vars['od_login']->value!='') {?>value="<?php echo $_smarty_tpl->tpl_vars['od_login']->value;?>
"<?php }?>  style="width:150px;"></td>
</tr>
<tr>
<td valign="top"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[335];?>
</b></td>
<td><textarea name="tresc" style="width:300px;height:100px;"></textarea></td>
</tr>
</table>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[336];?>
" name="send">
</form>

<?php } else { ?>

<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[337];?>
</b></center>

<?php }?>

<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[338];?>
</b></center>
<?php }?>
</p>
		



	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
