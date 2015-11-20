<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 21:33:26
         compiled from "./templates/blu/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3020282856254586e90db7-77625136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d00ccb3f4c29b4a139480a2f7a932b277b2f81a' => 
    array (
      0 => './templates/blu/subheader.tpl',
      1 => 1445282892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3020282856254586e90db7-77625136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'lang' => 0,
    'title' => 0,
    'meta_key' => 0,
    'omnie' => 0,
    'meta_desc' => 0,
    'templa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254586eaf614_38087163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254586eaf614_38087163')) {function content_56254586eaf614_38087163($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"/>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['lang']->value[0];?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_key']->value;?>
" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['omnie']->value!=''&&!is_array($_smarty_tpl->tpl_vars['omnie']->value)) {?><?php echo substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['omnie']->value),0,250);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['meta_desc']->value;?>
<?php }?>" />

<link href="templates/<?php echo $_smarty_tpl->tpl_vars['templa']->value;?>
/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/function.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jQuery2.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/overlib.js"><!-- overLIB (c) Erik Bosrup --></script>

</head>

<body><?php }} ?>
