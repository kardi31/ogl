{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		
				<h1 class="ng">{$lang[305]}</h1>
{if $user_id>=1}

{if $u_kv==1 or  ($u_kv==2 and $vipendd>=$vip_time)}

{if $aile==0}<center><b>{$lang[306]}</b></center>{/if}

<center>

<table >
<tr>
{section name=id loop=$u_id}

<td class="profil-m" valign="top">
<table height="100%">
<tr>
<td height="100%" valign="top">
<a href="profil/{$u_loginn[id]}/{$u_id[id]}/" style="text-decoration:none;">
{if $u_img[id]==""}{if $u_plecnr[id]=="1"}
<img src="{$site_url}images/women.jpg" alt="{$u_login[id]}" />
{else}
<img src="{$site_url}images/men.jpg" alt="{$u_login[id]}" />
{/if}
{else}
<img src="{$site_url}upload/zdjecia/{$u_img[id]}" alt="{$u_login[id]}" />
{/if}</a>
</td></tr><tr><td><center>
<a href="profil/{$u_loginn[id]}/{$u_id[id]}/" style="text-decoration:none;">
<b style="font-size:10px;">{$u_login[id]}</b>
</a>
<br>
{$kv_data[id]}
</center>
</td></tr></table>
</td>{if $nrip++%5==0}</tr>
{/if}
{/section}
</table>
</center>


{if $podstron>1}
<center>
<table border="0">
<tr>


{section name=strona start=0 loop=$podstron step=1}

<td style="border: 1px solid #000000;width:15px;" align="center"><a href="kto-ogladal-profil/{$smarty.section.strona.index+1}">{if $strona==$smarty.section.strona.index+1}<b>{$smarty.section.strona.index+1}</b>{else}{$smarty.section.strona.index+1}{/if}</a></td>

{/section}


</tr></table>
</center>
{/if}
{else}
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[307]} </b>
</center>
{/if}

{else}
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[308]}</b>
</center>
{/if}

  </p>


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}