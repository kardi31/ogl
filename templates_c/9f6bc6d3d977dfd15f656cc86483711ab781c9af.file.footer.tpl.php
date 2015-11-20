<?php /* Smarty version Smarty-3.1.15, created on 2015-11-19 20:10:44
         compiled from ".\templates\new_red\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23476564e1eb4193c34-22035708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f6bc6d3d977dfd15f656cc86483711ab781c9af' => 
    array (
      0 => '.\\templates\\new_red\\footer.tpl',
      1 => 1447958276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23476564e1eb4193c34-22035708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'site_url' => 0,
    'rfotu' => 0,
    'user_id' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'rfot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564e1eb41bc9b2_38791055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e1eb41bc9b2_38791055')) {function content_564e1eb41bc9b2_38791055($_smarty_tpl) {?>
	</div>

</div>

<div class="site_footer">
	<div class="site_footer_left">
		<ul class="footer_menu">
			<li><a href="regulamin/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[645];?>
</a></li>
			<li><a href="polityka/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[600];?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
faq/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[8];?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
kontakt/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[9];?>
</a></li>
		</ul>
	</div>
	<div class="site_footer_right">&copy; &nbsp;2015 </div>
</div>

<div> <!----Reklama stopka----->
<?php if ($_smarty_tpl->tpl_vars['rfotu']->value==1||($_smarty_tpl->tpl_vars['rfotu']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rfotu']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rfot']->value;?>

<?php }?>		
<!----Reklama profi-----></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/cookie-alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>






<?php }} ?>
