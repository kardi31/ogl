<?php /* Smarty version Smarty-3.1.15, created on 2015-10-23 14:56:12
         compiled from "./templates/new_red/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1684282388562a2e6cbf45b7-63332915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892fec9967e3daab651c2373d98070cb2160fc71' => 
    array (
      0 => './templates/new_red/news.tpl',
      1 => 1445282909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684282388562a2e6cbf45b7-63332915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news_tytul' => 0,
    'news_tresc' => 0,
    'ocenianie' => 0,
    'user_nick' => 0,
    'lang' => 0,
    'ocena' => 0,
    'glosy' => 0,
    'komentowanie' => 0,
    'kom_nick' => 0,
    'kom_idu' => 0,
    'kom_nickn' => 0,
    'kom_data' => 0,
    'kom_tresc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_562a2e6cc8e4e9_04022336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562a2e6cc8e4e9_04022336')) {function content_562a2e6cc8e4e9_04022336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['news_tytul']->value;?>
</h1>
		<p>

<?php echo $_smarty_tpl->tpl_vars['news_tresc']->value;?>

</p>
		

<?php if ($_smarty_tpl->tpl_vars['ocenianie']->value==1||($_smarty_tpl->tpl_vars['ocenianie']->value==2&&$_smarty_tpl->tpl_vars['user_nick']->value!='')) {?>

<div id="welcome">

<p>
<center>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/ocenianie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[272];?>
 <?php echo $_smarty_tpl->tpl_vars['ocena']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[273];?>
 <?php echo $_smarty_tpl->tpl_vars['glosy']->value;?>
</b>
</center>
</p>

</div>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ocenianie']->value==2&&$_smarty_tpl->tpl_vars['user_nick']->value=='') {?>
<div id="welcome"><p><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[274];?>
</b></center></p></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['komentowanie']->value>=1) {?>
<br><br>
<b><?php echo $_smarty_tpl->tpl_vars['lang']->value[275];?>
</b><br><br>

<div id="example">

<p>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ile'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['name'] = 'ile';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kom_nick']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ile']['total']);
?>

<?php echo $_smarty_tpl->tpl_vars['lang']->value[276];?>
 <b><?php if ($_smarty_tpl->tpl_vars['kom_idu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']]=='') {?><?php echo $_smarty_tpl->tpl_vars['kom_nick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
<?php } else { ?><a href="user/<?php echo $_smarty_tpl->tpl_vars['kom_nickn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['kom_idu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['kom_nick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
</a><?php }?></b> <?php echo $_smarty_tpl->tpl_vars['lang']->value[277];?>
 <?php echo $_smarty_tpl->tpl_vars['kom_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['kom_tresc']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ile']['index']];?>
<br><br>

<?php endfor; endif; ?>

<center>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/komentarze.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</center>
</p>

</div>

<?php }?>


	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
