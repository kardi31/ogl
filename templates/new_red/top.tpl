<div class="site_head">

	<div class="site_head_logo">
		<div class="site_head_logo_left"><a href="" class="site_head_logo_a" >{$site_nazwa}</a>
	<table style="font-size:12px;float:right;padding:0px;z-index:2000;">
<tr>

<td width="65">
<a href="http://youtube.pl"><img height="62" src="images/yt1.png"></a>
</td>
<td width="58">
<g:plusone size="tall" ></g:plusone>
</td>



<td width="80" valiggn="top">
{literal}

<div class="fb-like" data-send="false" data-href="{/literal}/{literal}"  data-layout="box_count"  data-show-faces="false"  ></div>
{/literal}
</td>




<td width="80">
{literal}
    <a href="https://twitter.com/share" class="twitter-share-button"  data-lang="pl" data-related="anywhereTheJavascriptAPI" data-count="vertical"></a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
{/literal}
</td>
<td width="80">
<a href="https://www.facebook.com/groups/697462953699939/"><img height="60" src="images/zfacebook.png"></a>
</td>




</tr></table>
		
		</div>
		<div class="site_head_logo_right">
	{if $lang_on=="1"}
<div name="flag" style="float:left;">
<div style="height:24px; width:65px;padding-top:4px;">
&nbsp;&nbsp;<a href="get_lang.php?lang=pl"><img src="lang/pl/flag.gif" key="pl"></a>&nbsp;&nbsp;<a href="get_lang.php?lang=en"><img src="lang/en/flag.gif" key="en"></a>
</div></div>{/if}
			{if $user_id>=1}
			{else}
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
				<table width="90%"><tr><td width="50%" align="left"><input type="submit" value="Zaloguj" name="login_user"></td><td align="center">{if $user_adm=="error"}<center><span id="ukryj" style="color:red;font-weight:bold;">Błędne dane!</span></center>{/if}</td></tr></table>
				</form>
				{if $fb_login=="1"}
				<center>
					<a href="fbc.php?login=fb"><img src="images/facebook_zaloguj.png"></a>
				<center>
				{/if}
			</div>
			{/if}
			
		</div>
	</div><!---
	<div class="site_head_menu">
		<ul class="top_menu">

		</ul>
	</div>--->

</div>
<!----Reklama top----->
{if $rtopu==1 or ($rtopu==2 and $user_id=="") or ($rtopu==3 and $vipendd<=$vip_time)}
{$rtop}
{/if}
<!----Reklama top----->
<div class="site_menu">
	<div class="site_head_m">
	<div class="site_head_menu">
		<ul class="top_menu">
						<li class="first_li"><a href="/"><span>{$lang[2]}</span></a></li>
				{if $user_id>="1"}<li class="next_li"><a href="/grupy/"><span>{$lang[526]}</span></a></li1>{else}{/if}
				<li class="next_li"><a href="/news/"><span>{$lang[8]}</span></a></li>
				<li class="next_li"><a href="/online/"><span>{$lang[5]}</span></a></li>
				<li class="next_li"><a href="/kobiety/"><span>{$lang[6]}</span></a></li>
				<li class="next_li"><a href="/mezczyzni/"><span>{$lang[7]}</span></a></li>
				{if $user_id>=1}<li class="next_li"><a href="" id="chat_open">Czat <span id="ile_chat_user" style="color:black;"></span></a></li>	{/if}
				{if $user_id>=1 and $str_in==1}<li class="next_li"><a href="/doladuj-konto/">Konto VIP/Kredyty<span></a></span></li>{/if}
				<li class="next_li"><a href="/ogloszenia/">Ogłoszenia<span></a></span></li>
				<li class="next_li"><a href="/kontakt/"><span>{$lang[9]}</a></span></li>
		
		</ul>{if $user_id>="1"}{else}
			<div style="text-align:right;">
			<a href="/register/"><div class="dodaj">	{$lang[3]}</div></a>
		</div>{/if}
	</div>

	
	</div>
</div>


<div class="site_body">
{if $t_in=="tak" and $user_id==""}<div class="site_body_content_all">{else}<div class="site_body_content">{/if}



        
















		












