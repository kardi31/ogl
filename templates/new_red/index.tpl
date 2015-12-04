{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}


     
        	
            
{if $u_404=="404"}
<div class="left">
<div id="ukryj" >
<br>
<center>
<div id="red" style="border-style:solid;border-width:thin;width:550px;height:40px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>{$lang[10]}</b></center></div>
</center><br></div></div>
{/if}	
		
{if $user_id>=1} 
<!-- Gdy zalogowany -->
      <div class="left">
		
		<h1 class="ng">{$lang[11]}</h1>

<center>
<table >
<tr>
{section name=id loop=$u_id}

<td class="profil-m">
<a href="profil/{$u_loginn[id]}/{$u_id[id]}/" style="text-decoration:none;" onmouseover="return overlib('{$lang[12]} {$u_wiek[id]}<br/>{$lang[13]} {$u_miasto[id]}<br/>{$lang[14]} {$u_woj[id]}<br/>{$lang[15]} {$u_plec[id]}', CAPTION, '<b><center>{$u_login[id]}</center>');" onmouseout="return nd();">{if $u_img[id]==""}{if $u_plecnr[id]=="1"}<img src="{$site_url}images/women.jpg" alt="{$u_login[id]}" />{else}<img src="{$site_url}images/men.jpg" alt="{$u_login[id]}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$u_img[id]}" alt="{$u_login[id]}" />{/if}<br/><center>{if $u_online[id]>=1}<img src="images/online.jpg" title="{$lang[16]}" key="On">{else}<img src="images/ofline.jpg" alt="Offline" title="{$lang[17]}" key="Off">{/if}<b>{$u_login[id]}</b>{if $u_vip[id]>=$gtime}{$lang[700]}{/if}</center></a></td>
{if $nrip++%5==0}</tr><tr>{/if}
{/section}
{if $nrip%5!=0}</tr>{/if}
</table>
</center>
		
		<h1 class="ng">{$lang[18]}</h1>

{if $bo>=1}
<center>
<table >
<tr>
{section name=id loop=$u_ido}

<td class="profil-m">
<a href="profil/{$u_loginno[id]}/{$u_ido[id]}/" style="text-decoration:none;" onmouseover="return overlib('{$lang[12]} {$u_wieko[id]}<br/>{$lang[13]} {$u_miastoo[id]}<br/>{$lang[14]} {$u_wojo[id]}<br/>{$lang[15]} {$u_pleco[id]}', CAPTION, '<b><center>{$u_logino[id]}</center>');" onmouseout="return nd();">{if $u_imgo[id]==""}{if $u_plecnro[id]=="1"}<img src="{$site_url}images/women.jpg" alt="{$u_logino[id]}" />{else}<img src="{$site_url}images/men.jpg" alt="{$u_logino[id]}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$u_imgo[id]}" alt="{$u_logino[id]}" />{/if}<br/><center>{if $u_onlineo[id]>=1}<img src="images/online.jpg" title="{$lang[16]}" key="On">{else}<img src="images/ofline.jpg" alt="Offline" title="{$lang[17]}" key="Off">{/if}<b>{$u_logino[id]}</b>{if $u_vipo[id]>=$gtime}{$lang[700]}{/if}</center></a></td>
{if $nripp++%5==0}</tr><tr>{/if}

{if $nripp%5!=0}</tr>{/if}
{/section}
</table>
</center>
{else}
<center><b>{$lang[19]}</b></center>
{/if}
		
	</div>
<!-- Gdy zalogowany -->
{else}
<!-- Gdy nie zalogowany -->
<div class="site_body_content_all">
<div style="width:450px;float:left;text-align:center;">
    <h1 style="text-decoration: none;text-align:left;border:0px;">Poznaj swoją drugą połówkę</h1>
{if $in_txt<>""}<p>{$in_txt}</p>{/if}
<img src="templates/{$templa}/images/in_f.jpg" alt="Poznaj swoją drugą połówke" key="obrazek">
</div>

<div style="width:450px;float:left;">
<div class="post_all">
			<h2 class="title_all">Rejestracja</h2>
<div class="entry_all">
{if $user_nick=="" and $rejestracja==1 and $regok!=1}
<form action="{$site_url}register/" method="post">
<table>
<tr>
<td><b>{$lang[381]}</b></td>
<td><input type="text" name="login" value="{$lt}"/></td>
</tr>
<tr>
<td><b>{$lang[382]}</b></td>
<td><input type="password" name="haslo"/></td>
</tr>
<tr>
<td><b>{$lang[383]}</b></td>
<td><input type="text" name="email" value="{$et}"/></td>
</tr>
<tr>
<td><b>{$lang[384]}</b></td>
<td><select name="plec">
<option value="">{$lang[385]}</option>
<option value="1" {if $plec=="1"}selected="selected"{/if}>{$lang[386]}</option>
<option value="2" {if $plec=="2"}selected="selected"{/if}>{$lang[387]}</option>
</select>
</td>
</tr>
<tr>
<td><b>{$lang[388]}</b></td>
<td>
<select name="d">  <option value="">{$lang[389]}</option>
{section name=foo start=1 loop=32 step=1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$d} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}
</select>

<select name="m">  <option value="">{$lang[390]}</option>
{section name=foo start=1 loop=13 step=1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$m} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}
</select>

<select name="y">  <option value="">{$lang[391]}</option>
{section name=foo loop=$wiek_start max=$wiek_max step=-1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$y} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}
</select>
</td>
</tr>
<tr>
<td><b></b></td>
<td><input type="checkbox" name="regulamin" value="1" {if $regulamin==1} checked{/if}/> {$lang[393]} <a href="regulamin/">{$lang[394]}</a> {$lang[605]} <a href="polityka/">{$lang[606]}</a></td>
</tr>
{if $tokenr==1}

<tr>
<td><b>{$lang[395]}</b></td>
<td>{$token_img}</td>
</tr>
{/if}
<tr>
<td></td>
<td><input type="submit" value="{$lang[396]}" name="register"/></td>
</tr>
</table>

</form>
{/if}
</div>
</div>
</div>	


<div style="width:100%;float:left;">
		<h2 class="ng">{$lang[20]}</h2>

<center>
<table >
<tr>
{foreach from=$u_id key=k item=id}
<td class="profil-m">
<a href="profil/{$u_loginn[$k]}/{$u_id[$k]}/" style="text-decoration:none;" onmouseover="return overlib('{$lang[12]} {$u_wiek[id]}<br/>{$lang[13]} {$u_miasto[id]}<br/>{$lang[14]} {$u_woj[id]}<br/>{$lang[15]} {$u_plec[id]}', CAPTION, '<b><center>{$u_login[id]}</center>');" onmouseout="return nd();">{if $u_img[$k]==""}{if $u_plecnr[$k]=="1"}<img src="{$site_url}images/women.jpg" alt="{$u_login[$k]}" />{else}<img src="{$site_url}images/men.jpg" alt="{$u_login[$k]}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$u_img[$k]}" alt="{$u_login[$k]}" />{/if}<br/><center>{if $u_online[$k]>=1}<img src="images/online.jpg" title="{$lang[16]}" key="On">{else}<img src="images/ofline.jpg"  alt="Offline" title="{$lang[17]}" key="Off">{/if}<b>{$u_login[$k]}</b>{if $u_vip[$k]>=$gtime}{$lang[700]}{/if}</center></a></td>
{if $k%5==4}</tr>{/if}
{if $k%5==4&&$k!=14}<tr>{/if}


{/foreach}
{if $k%5!=4}</tr>{/if}
</table>
</center>
		</div>

</div>
<!-- Gdy nie zalogowany -->
{/if}  
		  
	
		

{if $user_id>=1}{include file="$templa/right.tpl"}{else}</div>{/if}
{include file="$templa/footer.tpl"}