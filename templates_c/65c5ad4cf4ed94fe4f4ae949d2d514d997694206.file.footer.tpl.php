<?php /* Smarty version Smarty-3.1.15, created on 2015-10-22 17:03:21
         compiled from "./templates/red/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2679162385628fab93bb218-36515320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65c5ad4cf4ed94fe4f4ae949d2d514d997694206' => 
    array (
      0 => './templates/red/footer.tpl',
      1 => 1445282929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2679162385628fab93bb218-36515320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'rfotu' => 0,
    'user_id' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'rfot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5628fab93d1d42_77947299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628fab93d1d42_77947299')) {function content_5628fab93d1d42_77947299($_smarty_tpl) {?></div>

	</div>


    <div id="c_d"></div>

    <div id="footer">
<a href="regulamin/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[645];?>
</a> | <a href="polityka/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[600];?>
</a> | <a href="faq/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[8];?>
</a>
<br><br>
        <?php echo $_smarty_tpl->tpl_vars['lang']->value[179];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[181];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[180];?>
 
		<br><br>
		<!----Reklama stopka----->
<?php if ($_smarty_tpl->tpl_vars['rfotu']->value==1||($_smarty_tpl->tpl_vars['rfotu']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rfotu']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rfot']->value;?>

<?php }?>		
<!----Reklama profi----->
    </div>
</div>
 
   





    
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/cookie-alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html>

<?php }} ?>
