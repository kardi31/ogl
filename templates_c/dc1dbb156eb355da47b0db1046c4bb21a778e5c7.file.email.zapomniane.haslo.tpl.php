<?php /* Smarty version Smarty-3.1.15, created on 2015-11-01 01:42:05
         compiled from "./templates/new_red/email.zapomniane.haslo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52943303356355fdd281442-98492731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc1dbb156eb355da47b0db1046c4bb21a778e5c7' => 
    array (
      0 => './templates/new_red/email.zapomniane.haslo.tpl',
      1 => 1445282906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52943303356355fdd281442-98492731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'adres' => 0,
    'nazwa' => 0,
    'haslo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56355fdd2db2c5_62069929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56355fdd2db2c5_62069929')) {function content_56355fdd2db2c5_62069929($_smarty_tpl) {?><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[175];?>
</b><br>

<?php echo $_smarty_tpl->tpl_vars['lang']->value[176];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['nazwa']->value;?>
</a><br><br>

<?php echo $_smarty_tpl->tpl_vars['lang']->value[177];?>
 <b><?php echo $_smarty_tpl->tpl_vars['haslo']->value;?>
</b><?php }} ?>
