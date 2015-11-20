<?php /* Smarty version Smarty-3.1.15, created on 2015-10-19 21:55:44
         compiled from "./templates/new_red/cookie-alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188426582756254ac0bc2da1-16957077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145b9cb8f0ff5f0cb95b3f4f6212e2129ed2f44e' => 
    array (
      0 => './templates/new_red/cookie-alert.tpl',
      1 => 1445282906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188426582756254ac0bc2da1-16957077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cookie_on' => 0,
    'cookie_get' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56254ac0bcc818_71362312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56254ac0bcc818_71362312')) {function content_56254ac0bcc818_71362312($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cookie_on']->value=="1"&&$_smarty_tpl->tpl_vars['cookie_get']->value!="1") {?>

<script>


</script>

<div id="cookie_alert" style="z-index: 1030;position: fixed;bottom: 0px;background: #ffffff;border-top: 1px solid #aaaaaa;padding: 10px;text-align: center;font-size: 13px;line-height: 16px;width: 100%;">
<div style="width:1020px;margin: 0px auto;background: #ffffff;">
<div style="float:left;width:850px;text-align: left;line-height: 20px;color:black;font-size:12px;background: #ffffff;">
Na tej stronie są wykorzystywane pliki cookies. Stosujemy je w celach zapewnienia maksymalnej wygody przy korzystaniu z naszych serwisów.
<br>
Korzystając ze strony wyrażasz zgodę na używanie cookie, zgodnie z aktualnymi ustawieniami przeglądarki.
</div>
<div style="float:left;background: #ffffff;text-align:center;">
<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
coff.php" onclick="return(hide_cookie_alert())" title=""><div style="-webkit-border-top-left-radius:4px; -moz-border-radius-topleft:4px; border-top-left-radius:4px;-webkit-border-top-right-radius:4px; -moz-border-radius-topright:4px; border-top-right-radius:4px;-webkit-border-bottom-left-radius:4px; -moz-border-radius-bottomleft:4px; border-bottom-left-radius:4px;-webkit-border-bottom-right-radius:4px; -moz-border-radius-bottomright:4px; border-bottom-right-radius:4px;background:#252425;font-weight:bold;color:white;padding:5px 5px 5px 5px;width:60px;margin:5px 0 0 0;">Zamknij</div></a>
</div>
</div>
</div>
<?php }?><?php }} ?>
