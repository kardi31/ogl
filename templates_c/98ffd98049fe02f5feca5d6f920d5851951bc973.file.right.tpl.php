<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 21:55:44
         compiled from "./templates/new_red/right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189339636656254ac0b80857-26928386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98ffd98049fe02f5feca5d6f920d5851951bc973' => 
    array (
      0 => './templates/new_red/right.tpl',
      1 => 1445282913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189339636656254ac0b80857-26928386',
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
    'menu_nazwa_r' => 0,
    'menu_tresc_r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254ac0b9fcd4_62105447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254ac0b9fcd4_62105447')) {function content_56254ac0b9fcd4_62105447($_smarty_tpl) {?></div>
<div class="site_body_right">
            <!----Reklama menu----->
<?php if ($_smarty_tpl->tpl_vars['rmenuu']->value==1||($_smarty_tpl->tpl_vars['rmenuu']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rmenuu']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rmenu']->value;?>

<?php }?>
<!----Reklama menu----->

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_nazwa_r']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<div class="site_body_right_blok">
			<div class="m_title"><?php if ($_smarty_tpl->tpl_vars['menu_nazwa_r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="Logowanie"&&$_smarty_tpl->tpl_vars['user_id']->value>=1) {?>Menu<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['menu_nazwa_r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
<?php }?></div>
			<div class="m_text"> <?php echo $_smarty_tpl->tpl_vars['menu_tresc_r']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</div>
		</div>
		<?php endfor; endif; ?>
	
		</div>
<?php }} ?>
