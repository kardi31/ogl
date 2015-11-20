{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}


     
        	
            <div class="left">
{if $u_404=="404"}
<div id="ukryj" >
<br>
<center>
<div id="red" style="border-style:solid;border-width:thin;width:550px;height:40px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>{$lang[10]}</b></center></div>
</center><br></div>
{/if}	
		
{if $user_id>=1} 
<!-- Gdy zalogowany -->

		
		<h1 class="ng">{$lang[11]}</h1><p>

<center>
<table >
<tr>
{section name=id loop=$u_id}

<td class="profil-m">
<a href="profil/{$u_loginn[id]}/{$u_id[id]}/" style="text-decoration:none;" onmouseover="return overlib('{$lang[12]} {$u_wiek[id]}<br/>{$lang[13]} {$u_miasto[id]}<br/>{$lang[14]} {$u_woj[id]}<br/>{$lang[15]} {$u_plec[id]}', CAPTION, '<b><center>{$u_login[id]}</center>');" onmouseout="return nd();">{if $u_img[id]==""}{if $u_plecnr[id]=="1"}<img src="{$site_url}images/women.jpg" alt="{$u_login[id]}" />{else}<img src="{$site_url}images/men.jpg" alt="{$u_login[id]}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$u_img[id]}" alt="{$u_login[id]}" />{/if}<br/><center>{if $u_online[id]>=1}<img src="images/online.jpg" title="{$lang[16]}" key="On">{else}<img src="images/ofline.jpg" title="{$lang[17]}" key="Off">{/if}<b>{$u_login[id]}</b></center></a></td>{if $nrip++%5==0}</tr>{/if}

{/section}
</table>
</center>
		
		  </p>
		<h1 class="ng">{$lang[18]}</h1><p>

{if $bo>=1}
<center>
<table >
<tr>
{section name=id loop=$u_ido}

<td class="profil-m">
<a href="profil/{$u_loginno[id]}/{$u_ido[id]}/" style="text-decoration:none;" onmouseover="return overlib('{$lang[12]} {$u_wieko[id]}<br/>{$lang[13]} {$u_miastoo[id]}<br/>{$lang[14]} {$u_wojo[id]}<br/>{$lang[15]} {$u_pleco[id]}', CAPTION, '<b><center>{$u_logino[id]}</center>');" onmouseout="return nd();">{if $u_imgo[id]==""}{if $u_plecnro[id]=="1"}<img src="{$site_url}images/women.jpg" alt="{$u_logino[id]}" />{else}<img src="{$site_url}images/men.jpg" alt="{$u_logino[id]}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$u_imgo[id]}" alt="{$u_logino[id]}" />{/if}<br/><center>{if $u_onlineo[id]>=1}<img src="images/online.jpg" title="{$lang[16]}" key="On">{else}<img src="images/ofline.jpg" title="{$lang[17]}" key="Off">{/if}<b>{$u_logino[id]}</b></center></a></td>{if $nripp++%5==0}</tr>{/if}

{/section}
</table>
</center>
{else}
<center><b>{$lang[19]}</b></center>
{/if}
		
		  </p>

<!-- Gdy zalogowany -->
{else}
<!-- Gdy nie zalogowany -->

<p>{$in_txt}</p>

		<h1 class="ng">{$lang[20]}</h1><p>

<center>
<table >
<tr>
{section name=id loop=$u_id}

<td class="profil-m">
<a href="profil/{$u_loginn[id]}/{$u_id[id]}/" style="text-decoration:none;" onmouseover="return overlib('{$lang[12]} {$u_wiek[id]}<br/>{$lang[13]} {$u_miasto[id]}<br/>{$lang[14]} {$u_woj[id]}<br/>{$lang[15]} {$u_plec[id]}', CAPTION, '<b><center>{$u_login[id]}</center>');" onmouseout="return nd();">{if $u_img[id]==""}{if $u_plecnr[id]=="1"}<img src="{$site_url}images/women.jpg" alt="{$u_login[id]}" />{else}<img src="{$site_url}images/men.jpg" alt="{$u_login[id]}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$u_img[id]}" alt="{$u_login[id]}" />{/if}<br/><center>{if $u_online[id]>=1}<img src="images/online.jpg" title="{$lang[16]}" key="On">{else}<img src="images/ofline.jpg" title="{$lang[17]}" key="Off">{/if}<b>{$u_login[id]}</b></center></a></td>{if $nrip++%5==0}</tr>{/if}

{/section}
</table>
</center>
		
		  </p>


<!-- Gdy nie zalogowany -->
{/if}  
		  
		</div>
		

{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}