<?php /* Smarty version Smarty-3.1.15, created on 2015-12-01 13:35:17
         compiled from ".\templates\new_red\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6342564e1eb3e5f9e5-92834062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a62ca49d87a81ee637cb3194fa055ba387570ed' => 
    array (
      0 => '.\\templates\\new_red\\top.tpl',
      1 => 1448973191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6342564e1eb3e5f9e5-92834062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564e1eb3edeaa4_68365024',
  'variables' => 
  array (
    'site_nazwa' => 0,
    'lang_on' => 0,
    'user_id' => 0,
    'user_adm' => 0,
    'fb_login' => 0,
    'rtopu' => 0,
    'vipendd' => 0,
    'vip_time' => 0,
    'rtop' => 0,
    'lang' => 0,
    'str_in' => 0,
    't_in' => 0,
    'topads' => 0,
    'ad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e1eb3edeaa4_68365024')) {function content_564e1eb3edeaa4_68365024($_smarty_tpl) {?><div class="site_head">

	<div class="site_head_logo">
		<div class="site_head_logo_left"><a href="" class="site_head_logo_a" ><?php echo $_smarty_tpl->tpl_vars['site_nazwa']->value;?>
</a>
	<table style="font-size:12px;float:right;padding:0px;z-index:2000;">
<tr>

<td width="65">
<a href="http://youtube.pl"><img height="62" src="images/yt1.png"></a>
</td>
<td width="58">
<g:plusone size="tall" ></g:plusone>
</td>



<td width="80" valiggn="top">


<div class="fb-like" data-send="false" data-href="/"  data-layout="box_count"  data-show-faces="false"  ></div>

</td>




<td width="80">

    <a href="https://twitter.com/share" class="twitter-share-button"  data-lang="pl" data-related="anywhereTheJavascriptAPI" data-count="vertical"></a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	

</td>
<td width="80">
<a href="https://www.facebook.com/groups/697462953699939/"><img height="60" src="images/zfacebook.png"></a>
</td>




</tr></table>
		
		</div>
		<div class="site_head_logo_right">
	<?php if ($_smarty_tpl->tpl_vars['lang_on']->value=="1") {?>
<div name="flag" style="float:left;">
<div style="height:24px; width:65px;padding-top:4px;">
&nbsp;&nbsp;<a href="get_lang.php?lang=pl"><img src="lang/pl/flag.gif" key="pl"></a>&nbsp;&nbsp;<a href="get_lang.php?lang=en"><img src="lang/en/flag.gif" key="en"></a>
</div></div><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?>
			<?php } else { ?>
      			<div class="logowanie" style="float:right;">
				<form action="" method="POST">
				<table>
				<tr>
				<td><b>&nbsp;Login:</b></td>
				<td><input type="text" name="login" style="width:130px;"></td>
				</tr>
				<tr>
				<td><b>&nbsp;Hasło:</b></td>
				<td><input type="password" name="haslo"  style="width:130px;"></td>
				</tr>
				</table>
				<table width="90%"><tr><td width="50%" align="left"><input type="submit" value="Zaloguj" name="login_user"></td><td align="center"><?php if ($_smarty_tpl->tpl_vars['user_adm']->value=="error") {?><center><span id="ukryj" style="color:red;font-weight:bold;">Błędne dane!</span></center><?php }?></td></tr></table>
				</form>
				<?php if ($_smarty_tpl->tpl_vars['fb_login']->value=="1") {?>
				<center>
					<a href="fbc.php?login=fb"><img src="images/facebook_zaloguj.png"></a>
				<center>
				<?php }?>
			</div>
			<?php }?>
			
		</div>
	</div><!---
	<div class="site_head_menu">
		<ul class="top_menu">

		</ul>
	</div>--->

</div>
<!----Reklama top----->
<?php if ($_smarty_tpl->tpl_vars['rtopu']->value==1||($_smarty_tpl->tpl_vars['rtopu']->value==2&&$_smarty_tpl->tpl_vars['user_id']->value=='')||($_smarty_tpl->tpl_vars['rtopu']->value==3&&$_smarty_tpl->tpl_vars['vipendd']->value<=$_smarty_tpl->tpl_vars['vip_time']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['rtop']->value;?>

<?php }?>
<!----Reklama top----->
<div class="site_menu">
	<div class="site_head_m">
	<div class="site_head_menu">
		<ul class="top_menu">
						<li class="first_li"><a href="/"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value[2];?>
</span></a></li>
				<?php if ($_smarty_tpl->tpl_vars['user_id']->value>="1") {?><li class="next_li"><a href="/grupy/"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value[526];?>
</span></a></li1><?php } else { ?><?php }?>
				<li class="next_li"><a href="/news/"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value[8];?>
</span></a></li>
				<li class="next_li"><a href="/online/"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value[5];?>
</span></a></li>
				<li class="next_li"><a href="/kobiety/"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value[6];?>
</span></a></li>
				<li class="next_li"><a href="/mezczyzni/"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value[7];?>
</span></a></li>
				<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1) {?><li class="next_li"><a href="" id="chat_open">Czat <span id="ile_chat_user" style="color:black;"></span></a></li>	<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user_id']->value>=1&&$_smarty_tpl->tpl_vars['str_in']->value==1) {?><li class="next_li"><a href="/doladuj-konto/">Konto VIP/Kredyty<span></a></span></li><?php }?>
				<li class="next_li"><a href="/ogloszenia/">Ogłoszenia</a></li>
				<li class="next_li"><a href="/filmy/">Filmy</a></li>
				<li class="next_li"><a href="/kontakt/"><?php echo $_smarty_tpl->tpl_vars['lang']->value[9];?>
</a></li>
		
		</ul><?php if ($_smarty_tpl->tpl_vars['user_id']->value>="1") {?><?php } else { ?>
			<div style="text-align:right;">
			<a href="/register/"><div class="dodaj">	<?php echo $_smarty_tpl->tpl_vars['lang']->value[3];?>
</div></a>
		</div><?php }?>
	</div>

	
	</div>
</div>


<div class="site_body">
        
        <script>
            $(document).ready(function(){
            $('.bxsliderTop').bxSlider({
                mode: 'fade',
                slideWidth: 728,
                auto: true,
                pause: 12000,
                randomStart: true,
                captions: false,
                pager: false
            });
            });
</script>
<?php if ($_smarty_tpl->tpl_vars['t_in']->value=="tak"&&$_smarty_tpl->tpl_vars['user_id']->value=='') {?><div class="site_body_content_all"><?php } else { ?><div class="site_body_content"><?php }?>


    <ul class="bxsliderTop bxslider">
        <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['website'];?>
" title='<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
'><img title='<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
' alt='<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
' src='/images/ad/<?php echo $_smarty_tpl->tpl_vars['ad']->value['file'];?>
' /></a></li>
        <?php } ?>
    </ul>

        
















		












<?php }} ?>
