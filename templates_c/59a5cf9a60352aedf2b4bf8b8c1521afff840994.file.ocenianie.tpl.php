<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 22:26:06
         compiled from "./templates/new_red/ocenianie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:756787301562551de25b4c7-48884012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a5cf9a60352aedf2b4bf8b8c1521afff840994' => 
    array (
      0 => './templates/new_red/ocenianie.tpl',
      1 => 1445282909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756787301562551de25b4c7-48884012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oceniono' => 0,
    'id_gal' => 0,
    't' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_562551de27eed0_57813104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562551de27eed0_57813104')) {function content_562551de27eed0_57813104($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['oceniono']->value=='') {?>
<center>
<div id="oceniono">
<table align="center">
<tr>
</td><td style="width:30px;height:30px;padding:0px;margin:0px;">
<a href="ocen.php?id=<?php echo $_smarty_tpl->tpl_vars['id_gal']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
&ocena=1">
<div class="rating0" style="width:30px;height:30px;" id="6"  onmouseover="rating('1','1','6');" onclick="rating_send('1','1','6');">
<div id="b1" style="display:none;width:30px;height:30px;padding:0px;margin:0px;"></div></div>
</a>
</td>
</td><td style="width:30px;height:30px;padding:0px;margin:0px;">
<a href="ocen.php?id=<?php echo $_smarty_tpl->tpl_vars['id_gal']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
&ocena=2">
<div class="rating0" style="width:30px;height:30px;" id="6"  onmouseover="rating('1','2','6');" onclick="rating_send('1','2','6');">
<div id="b2" style="display:none;width:30px;height:30px;padding:0px;margin:0px;"></div></div>
</a>
</td>
</td><td style="width:30px;height:30px;padding:0px;margin:0px;">
<a href="ocen.php?id=<?php echo $_smarty_tpl->tpl_vars['id_gal']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
&ocena=3">
<div class="rating0" style="width:30px;height:30px;" id="6"  onmouseover="rating('1','3','6');" onclick="rating_send('1','3','6');">
<div id="b3" style="display:none;width:30px;height:30px;padding:0px;margin:0px;"></div></div>
</a>
</td>
</td><td style="width:30px;height:30px;padding:0px;margin:0px;">
<a href="ocen.php?id=<?php echo $_smarty_tpl->tpl_vars['id_gal']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
&ocena=4">
<div class="rating0" style="width:30px;height:30px;" id="6"  onmouseover="rating('1','4','6');" onclick="rating_send('1','4','6');">
<div id="b4" style="display:none;width:30px;height:30px;padding:0px;margin:0px;"></div></div>
</a>
</td><td style="width:30px;height:30px;padding:0px;margin:0px;">
<a href="ocen.php?id=<?php echo $_smarty_tpl->tpl_vars['id_gal']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
&ocena=5">
<div class="rating0" style="width:30px;height:30px;" id="6"  onmouseover="rating('1','5','6');" onclick="rating_send('1','5','6');">
<div id="b5" style="display:none;width:30px;height:30px;padding:0px;margin:0px;"></div></div>
</a>
</td><td style="width:30px;height:30px;padding:0px;margin:0px;">
<a href="ocen.php?id=<?php echo $_smarty_tpl->tpl_vars['id_gal']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
&ocena=6">
<div class="rating0" style="width:30px;height:30px;" id="6"  onmouseover="rating('1','6','6');" onclick="rating_send('1','6','6');">
<div id="b6" style="display:none;width:30px;height:30px;padding:0px;margin:0px;"></div></div>
</a>
</td></tr>
</table>
</div>
</center>
<?php } else { ?>
<center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[278];?>
</b></center>
<?php }?>
<?php }} ?>
