<?php /* Smarty version Smarty-3.1.15, created on 2015-10-22 17:03:21
         compiled from "./templates/red/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11799713765628fab93a6d69-96067874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4279e22e316362be980af7d0c8d2c5496f387c80' => 
    array (
      0 => './templates/red/left.tpl',
      1 => 1445282931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11799713765628fab93a6d69-96067874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rmenuu' => 0,
    'user_id' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'rmenu' => 0,
    'menu_nazwa_l' => 0,
    'menu_tresc_l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5628fab93b6ae1_94724879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628fab93b6ae1_94724879')) {function content_5628fab93b6ae1_94724879($_smarty_tpl) {?>


	<div id="c_left">
 <!----Reklama menu----->
<?php if ($_smarty_tpl->tpl_vars['rmenuu']->value==1||($_smarty_tpl->tpl_vars['rmenuu']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rmenuu']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rmenu']->value;?>

<?php }?>
<!----Reklama menu----->
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_nazwa_l']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<div class="post">
	        	<?php echo $_smarty_tpl->tpl_vars['menu_tresc_l']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>

		</div>
		<?php endfor; endif; ?>
	</div>



	<div id="c_center">
		
		<div class="post"><?php }} ?>
