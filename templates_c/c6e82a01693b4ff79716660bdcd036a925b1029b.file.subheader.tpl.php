<?php /* Smarty version Smarty-3.1.15, created on 2015-11-18 20:26:34
         compiled from "./templates/new_red/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114493209156254ac0b05663-78084699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6e82a01693b4ff79716660bdcd036a925b1029b' => 
    array (
      0 => './templates/new_red/subheader.tpl',
      1 => 1447874791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114493209156254ac0b05663-78084699',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254ac0b258e8_10041039',
  'variables' => 
  array (
    'site_url' => 0,
    'lang' => 0,
    'title' => 0,
    'meta_key' => 0,
    'omnie' => 0,
    'meta_desc' => 0,
    'templa' => 0,
    'czat_id' => 0,
    'czat_login' => 0,
    'user_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254ac0b258e8_10041039')) {function content_56254ac0b258e8_10041039($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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



<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/multiple-select-master/multiple-select.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<link href="templates/<?php echo $_smarty_tpl->tpl_vars['templa']->value;?>
/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jQuery2.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/overlib_red2.js"><!-- overLIB (c) Erik Bosrup --></script>

 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white',
 
 };
 </script>


	<script>
	var czat_url='<iframe frameborder="0" scrolling="no" width="800" height="680" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
ajax-chat.php?id=<?php echo $_smarty_tpl->tpl_vars['czat_id']->value;?>
&user=<?php echo $_smarty_tpl->tpl_vars['czat_login']->value;?>
"></iframe>';
	
		$(document).ready(function(){
			$('#chat_open').click(function (e) {
				$( "#dialog-modal" ).dialog({
					height: 620,
					width: 780,

					modal: true,
					open: function () {
					 $('#dialog-modal').css('overflow', 'hidden');
					  $("#dialog-modal").html(czat_url);
					setCookie("chat_akt","1",1);
					 $("#ile_chat_user").html("");
					 setCookie("chat_on","off",1);
					},
					  close: function () {
								$("#dialog-modal").html("");
								setCookie("chat_akt","0",1);
								setCookie("chat_0","off",1);
								var datat = Math.round((new Date()).getTime() / 1000);
								setCookie("chat_last",datat,1);
						},
									
				});
				e.preventDefault();
				e.stopPropagation(); 
			});
			$('#chat_open2').click(function (e) {
				$( "#dialog-modal" ).dialog({
					height: 620,
					width: 780,

					modal: true,
					open: function () {
					 $('#dialog-modal').html();
					 $('#dialog-modal').css('overflow', 'hidden');
					setCookie("chat_akt","1",1);
					 $("#dialog-modal").html(czat_url);
					 setCookie("chat_on","off",1);
					},
					  close: function () {
								 $("#dialog-modal").html("");
								setCookie("chat_akt","0",1);
								setCookie("chat_0","off",1);
								var datat = Math.round((new Date()).getTime() / 1000);
								setCookie("chat_last",datat,1);
						},
									
				});
				e.preventDefault();
				e.stopPropagation(); 
			});
		});
	</script>
	


<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
	
		<script>
			get_ile_chat();
			$(function(){
				setInterval(get_ile_chat, 60000);
			});
		</script>
	
<?php }?>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'pl'}
</script>

</head>

<body>

<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<div id="dialog-modal" title="Chat" style="display:none;background:#323232;">

</div><?php }} ?>
