<?php /* Smarty version Smarty-3.1.15, created on 2015-10-26 00:25:48
         compiled from "./templates/new_red/faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30636747556254c7f6176e6-40646597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d478b711a147315fb8c871054e69347842c53c' => 
    array (
      0 => './templates/new_red/faq.tpl',
      1 => 1445815547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30636747556254c7f6176e6-40646597',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254c7f636f97_42865631',
  'variables' => 
  array (
    'faq_nazwa' => 0,
    'faq_user_loginn' => 0,
    'faq_user_id' => 0,
    'faq_user_login' => 0,
    'faq_data' => 0,
    'faq_img' => 0,
    'faq_plecnr' => 0,
    'site_url' => 0,
    'faq_opis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254c7f636f97_42865631')) {function content_56254c7f636f97_42865631($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="left">
		
		
		
				<h1 class="ng">Ogłoszenia</h1>
		<p>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['faq_nazwa']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<div style="border-bottom:1px solid #adadad;margin-bottom:15px;padding-bottom:10px;clear:both;">
	<b style="font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['faq_nazwa']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b>
	<div style="padding:4px 0 6px 0;">Dodał(a): <a href="profil/<?php echo $_smarty_tpl->tpl_vars['faq_user_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['faq_user_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><b><?php echo $_smarty_tpl->tpl_vars['faq_user_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</b></a> Dnia: <?php echo $_smarty_tpl->tpl_vars['faq_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</div>
	<div style="clear:both;height:110px;">
		<div style="float:left;width:115px;">
			<a href="profil/<?php echo $_smarty_tpl->tpl_vars['faq_user_loginn']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['faq_user_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php if ($_smarty_tpl->tpl_vars['faq_img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=='') {?><?php if ($_smarty_tpl->tpl_vars['faq_plecnr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]=="1") {?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/women.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['faq_user_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/men.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['faq_user_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php }?><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
upload/zdjecia/<?php echo $_smarty_tpl->tpl_vars['faq_img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['faq_user_login']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" /><?php }?></a>
		</div>
		<div style="float:left;width:560px;">
			<?php echo $_smarty_tpl->tpl_vars['faq_opis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>

		</div>
	</div>
</div>
<?php endfor; endif; ?>
</p>
	


	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
