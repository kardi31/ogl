{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}



		<div class="left">
		
		{if $user_id>=1}
		<h1 class="ng">{$lang[329]} <a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		
		<p>

<center>
{if $stan==7}<div id="ukryj"><center><b style="color:red;">{$lang[330]}</b></center></div>{/if}
<table >
<tr>
{section name=id loop=$u_id}

<td class="profil-m">
<a href="profil/{$u_loginn[id]}/{$u_id[id]}/" style="text-decoration:none;" onmouseover="return overlib('{$lang[12]} {$u_wiek[id]}<br/>{$lang[13]} {$u_miasto[id]}<br/>{$lang[14]} {$u_woj[id]}<br/>{$lang[15]} {$u_plec[id]}', CAPTION, '<b><center>{$u_login[id]}</center>');" onmouseout="return nd();">{if $u_img[id]==""}{if $u_plecnr[id]=="1"}<img src="{$site_url}images/women.jpg" alt="{$u_login[id]}" />{else}<img src="{$site_url}images/men.jpg" alt="{$u_login[id]}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$u_img[id]}" alt="{$u_login[id]}" />{/if}<br/><center>{if $u_online[id]>=1}<img src="images/online.jpg" title="{$lang[16]}" key="On">{else}<img src="images/ofline.jpg" title="{$lang[17]}" key="Off">{/if}<b>{$u_login[id]}</b></center></a></td>{if $nrip++%5==0}</tr>{/if}

{/section}
</table>
</center>





  </p>
		  
	{else}
<h1 class="ng">{$lang[329]} <a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[331]} </b>
</center>
</p>

{/if}	  
		</div>
		

{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}