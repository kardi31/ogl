<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 21:33:26
         compiled from "./templates/blu/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157498250056254586f05787-09032870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd27caa4b1ff0369276b2556b51b352afadda4188' => 
    array (
      0 => './templates/blu/footer.tpl',
      1 => 1445282885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157498250056254586f05787-09032870',
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
  'unifunc' => 'content_56254586f234b5_90237138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254586f234b5_90237138')) {function content_56254586f234b5_90237138($_smarty_tpl) {?>            <div class="cleaner"></div>
            
        </div> <!-- end of content panel -->
        
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    
</div> <!-- end of content wrapper -->

<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
    	
        <div class="section_w368">
        
      
        
        <div class="section_w920">
<a href="regulamin/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[645];?>
</a> | <a href="polityka/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[600];?>
</a>
<br><br>
        <?php echo $_smarty_tpl->tpl_vars['lang']->value[179];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[181];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[180];?>
 | Templates: <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> 
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer -->
<!----Reklama stopka----->
<?php if ($_smarty_tpl->tpl_vars['rfotu']->value==1||($_smarty_tpl->tpl_vars['rfotu']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rfotu']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rfot']->value;?>

<?php }?>		
<!----Reklama profi----->

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/cookie-alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>






<?php }} ?>
