<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 21:33:26
         compiled from "./templates/blu/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155158868456254586eb0d68-43141556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ef973f5490e39f3d7d49eb52a9fc2a42a49279b' => 
    array (
      0 => './templates/blu/top.tpl',
      1 => 1445282892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155158868456254586eb0d68-43141556',
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
  'unifunc' => 'content_56254586ee18a8_10080778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254586ee18a8_10080778')) {function content_56254586ee18a8_10080778($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['lang_on']->value=="1") {?>
<div name="flag" style="position: absolute; right: 20px;top:5px; z-index: 1;">
<div style="height:24px; width:65px;padding-top:4px;">
&nbsp;&nbsp;<a href="get_lang.php?lang=pl"><img src="lang/pl/flag.gif" key="pl"></a>&nbsp;&nbsp;<a href="get_lang.php?lang=en"><img src="lang/en/flag.gif" key="en"></a>
</div></div><?php }?>
<div id="templatemo_header_wrapper">

	<div id="templatemo_header">

    	<div id="site_logo"></div>
 
    
    </div> <!-- end of header -->

</div> <!-- end of header wrapper -->

<div id="templatemo_menu_wrapper">   
    
    <div id="templatemo_menu">
        <ul>
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
    </div> <!-- end of menu -->
</div> <!-- end of menu wrapper -->
<!----Reklama top----->
<?php if ($_smarty_tpl->tpl_vars['rtopu']->value==1||($_smarty_tpl->tpl_vars['rtopu']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rtopu']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rtop']->value;?>

<?php }?>
<!----Reklama top----->
<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">


     <div id="content_panel"><?php }} ?>
