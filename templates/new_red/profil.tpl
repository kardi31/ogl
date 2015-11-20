{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">

<!----Reklama profil----->
{if $rprou==1 or ($rprou==2 and $user_id=="") or ($rprou==3 and $vipendd<=$vip_time)}
{$rpro}
{/if}		
<!----Reklama profil----->

{if $user_id>=1}
		<h1 class="ng">{$lang[21]} {$login} {if $profil_vip>=$gtime}{$lang[700]}{/if} <small style="font-size:12px;">{if $get_user_online>=1}<b style="color:green;">{$lang[22]}</b>{else}<b style="color:silver;">{$lang[23]}</b>{/if}</small> </h1>
		<p>
{if ($vip_p==1 and $vipendd>=$vip_time) or $vip_p==0 or $user_id==$id}
<table width="100%">
<tr>
<td valign="top" width="10%">
{if $user_img==""}{if $user_plec=="1"}<img src="{$site_url}images/women.jpg" alt="{$login}" />{else}<img src="{$site_url}images/men.jpg" alt="{$login}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$user_img}" alt="{$login}" />{/if}
<div class="profil-menu">{if $profil_ile_znajomi>=1}<a href="profil/{$loginn}/{$id}/znajomi">{$lang[24]} ({$profil_ile_znajomi})</a>{else}{$lang[24]} (0){/if}</div>
<div class="profil-menu">{if $profil_ile_galeria>=1}<a href="profil/{$loginn}/{$id}/zdjecia">{$lang[25]} ({$profil_ile_galeria})</a>{else}{$lang[25]} (0){/if}</div>
<div class="profil-menu">{if $profil_ile_filmy>=1}<a href="profil/{$loginn}/{$id}/filmy"><b>{$lang[658]} ({$profil_ile_filmy})</b></a>{else}<b>{$lang[658]} (0)</b>{/if}</div>
<div class="profil-menu">{if $profil_ile_imprezy>=1}<a href="profil/{$loginn}/{$id}/imprezy">{$lang[26]} ({$profil_ile_imprezy})</a>{else}{$lang[26]} (0){/if}</div>
{if $gift_on==1}<div class="profil-menu">{if $profil_ile_prezenty>=1}<a href="profil/{$loginn}/{$id}/prezenty">{$lang[27]} ({$profil_ile_prezenty})</a>{else}{$lang[27]} (0){/if}</div>{/if}
</td>
<td valign="top" align="left" >
<b>
<table width="100%">
<tr>
<td align="left" valign="top" width="50%" bgcolor="white"> 

{if $wiek>=1}<b style="color:blue;">{$lang[28]}</b> {$wiek}<br>{/if}
{if $profil_plec!=""}<b style="color:blue;">{$lang[29]}</b> {$profil_plec}<br>{/if}
{if $profil_stc!=""}<b style="color:blue;">{$lang[696]}</b> {$profil_stc}<br>{/if}
{if $profil_miasto!=""}<b style="color:blue;">{$lang[30]}</b> {$profil_miasto}<br>{/if}
{if $profil_woj!=""}<b style="color:blue;">{$lang[31]}</b> {$profil_woj}<br>{/if}
{if $datao!="0000-00-00 00:00:00"}<b style="color:blue;">{$lang[32]}</b> {$datao}<br>{/if}
</td>
<td align="left" valign="top" width="50%" bgcolor="white">
{if $profil_pale!=""}<b style="color:blue;">{$lang[33]}</b> {$profil_pale}<br>{/if}
{if $profil_alkochol!=""}<b style="color:blue;">{$lang[34]}</b> {$profil_alkochol}<br>{/if}
{if $profil_dzieci!=""}<b style="color:blue;">{$lang[35]}</b> {$profil_dzieci}<br>{/if}
{if $profil_wyks<>""}<b style="color:blue;">{$lang[695]}</b> {$profil_wyks}<br>{/if}
{if $profil_wzrost!="" and $profil_wzrost>0}<b style="color:blue;">{$lang[37]}</b> {$profil_wzrost} {$lang[38]}<br>{/if}
{if $profil_budowa_ciala!=""}<b style="color:blue;">{$lang[39]}</b> {$profil_budowa_ciala}<br>{/if}
{if $profil_kolor_oczu!=""}<b style="color:blue;">{$lang[40]}</b> {$profil_kolor_oczu}<br>{/if}
{if $profil_kolor_wlosu!=""}<b style="color:blue;">{$lang[41]}</b> {$profil_kolor_wlosu}<br>{/if}

</td>
</tr>
<tr>
<td colspan="2" align="left" valign="top" bgcolor="white"><br>
<table width="100%">
{if $profil_jestem_ile>=2}
<tr>
<td valign="top"><b style="color:blue;">{$lang[36]}</b></td>
<td width="100%">

{section name=id loop=$d_id}
  {if $d_typ[id]=="je" and in_array($d_id[id],$profil_jestem)}{$d_nazwa[id]}, {/if}
{/section}

</td>
</tr>
{/if}
{if $profil_szukam_ile>=2}
<tr>
<td valign="top"><b style="color:blue;">{$lang[42]}</b></td>
<td width="100%">

{section name=id loop=$d_id}
  {if $d_typ[id]=="sz" and in_array($d_id[id],$profil_szukam)}{$d_nazwa[id]}, {/if}
{/section}

</td>
</tr>
{/if}
</table>

</td>
</tr>

<tr>
{if $user_id!=$id}
<td bgcolor="white" colspan="2" align="right" valign="top" width="100%">
<br>
<table>
<tr>
<td class="td_hover"><a href="pw/send/{$id}">{$lang[50]}</a></td>
{if $gift_on==1}<td class="td_hover"><a href="prezent/user-{$id}"> {$lang[51]}</a> </a>{/if}
{if $czyzn==0}<td class="td_hover"><a href="dodaj-znajomego/user-{$id}"> {$lang[52]}</a> </td>{else}<td class="td_hover"><b style="color:green;">{$lang[53]}</b> </td>{/if}
<td class="td_hover"><a href="zgloszenie/user-{$id}"> {$lang[54]}</a></td>
</tr>
</table>

<br><br>
</td>{/if}
</tr>

</table>


</td>
</tr>
</table>

<table bgcolor="white" width="100%">
<tr>
<td  align="left">
<b>{$lang[55]}</b><br>
{$omnie}
</td>
</tr>
</table>

<br><br>
<h3>{$lang[56]}</h3>

{if ($vip_k==1 and $vipendd>=$vip_time) or $vip_k==0}

{section name=ile loop=$kom_nick}
<table width="100%" bgcolor="white">
<tr>
<td valign="top" width="60">
<img src="{$site_url}{$kom_foto[ile]}" width="60" />
</td>
<td valign="top">
{$lang[57]} <b>{if $kom_idu[ile]==""}{$kom_nick[ile]}{else}<a href="profil/{$kom_nickn[ile]}/{$kom_idu[ile]}">{$kom_nick[ile]}</a>{/if}</b> {$lang[58]} {$kom_data[ile]}<br>
{$kom_tresc[ile]}
</td>
</tr>
</table><br>

{/section}

<center>
{include file="$templa/komentarze.tpl"}
</center>
{else}

<center><b style="color:red;">{$lang[59]}</b></center>

{/if}
</p>

{else}

<center><b style="color:red;">{$lang[60]}</b></center>

{/if}

{else}

		<h1 class="ng">{$lang[21]} {$login}</h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[61]} <a href="register/">{$lang[62]}</a>. </b>
</center>
</p>

{/if}
	



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}