<?php /* Smarty version Smarty-3.1.15, created on 2015-10-22 17:03:21
         compiled from "./templates/red/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9914863345628fab9382735-61554886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45524a3453dfa32fd629a1b6ea64385dae1fbfbf' => 
    array (
      0 => './templates/red/top.tpl',
      1 => 1445282937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9914863345628fab9382735-61554886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_on' => 0,
    'site_url' => 0,
    'lang' => 0,
    'user_id' => 0,
    'rtopu' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'rtop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5628fab93a5569_94655871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628fab93a5569_94655871')) {function content_5628fab93a5569_94655871($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['lang_on']->value=="1") {?>
<div name="flag" style="position: absolute; right: 90px;top:5px; z-index: 1;">
<div style="height:24px; width:65px;padding-top:4px;">
&nbsp;&nbsp;<a href="get_lang.php?lang=pl"><img src="lang/pl/flag.gif" key="pl"></a>&nbsp;&nbsp;<a href="get_lang.php?lang=en"><img src="lang/en/flag.gif" key="en"></a>
</div></div><?php }?>



<div id="wrapper">
	<div id="top">
	</div>
    

	<div id="header">
            
            	<div id="sitetite">
                	<h1><a href="" ><img src="templates/red/images/logo.png" alt="" /></a></h1>
            	</div> <!-- end of site_title -->
            
                <ul class="navigation">
                           <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[2];?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['user_id']->value>="1") {?><li><a href="grupy/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[526];?>
</a></li1><?php } else { ?><li><a href="register/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[3];?>
</a></li><?php }?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
news/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[4];?>
</a></li>
			<li><a href="online/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[5];?>
</a></li>
			<li><a href="kobiety/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[6];?>
</a></li>
			<li><a href="mezczyzni/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[7];?>
</a></li>
			<li><a href="faq/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[8];?>
</a></li>   
			<li><a href="kontakt/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[9];?>
</a></li>   
		</ul>
                
	</div>
<!----Reklama top----->
<?php if ($_smarty_tpl->tpl_vars['rtopu']->value==1||($_smarty_tpl->tpl_vars['rtopu']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rtopu']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rtop']->value;?>

<?php }?>
<!----Reklama top----->
    
<div class="scroll">
<?php }} ?>
