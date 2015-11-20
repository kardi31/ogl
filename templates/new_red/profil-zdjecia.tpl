{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		{if $user_id>=1}
		
		<h1 class="ng">{$lang[319]} <a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		<p>
{if ($vip_p==1 and $vipendd>=$vip_time) or $vip_p==0 or $user_id==$user_loid}

{if $fopo==""}

<table><tr>
{section name=id loop=$fo_id}
<td class="profil-m">


{if $fo_prv[id]=="1" and $czyzn=="0" and $user_adm!="adm"}

{if $user_plec=="1"}

<img src="{$site_url}images/women-key.jpg" title="{$lang[320]}" alt="key" />

{else}

<img src="{$site_url}images/men-key.jpg" title="{$lang[320]}" alt="key" />

{/if}

{else}

<a href="profil/{$user_lon}/{$user_loid}/zdjecia-img{$fo_id[id]}" style="text-decoration:none;" ><img src="{$site_url}upload/zdjecia/{$fo_fm[id]}" alt="Foto" /></a>

{/if}

</td>{if $nrip++%5==0}</tr>{/if}

{/section}
</table>


{else}
<center>
<table><tr>
<td class="td_hover">{if $poz>0}<a href="profil/{$user_lon}/{$user_loid}/zdjecia-img{$poz}"><b>{$lang[321]}</b></a> {else}<b>{$lang[321]} </b>{/if} </b></td>
<td class="td_hover"><a href="profil/{$user_lon}/{$user_loid}/zdjecia"><b>{$lang[322]}</b></a> </b></td>
<td class="td_hover">{if $naz>0} <a href="profil/{$user_lon}/{$user_loid}/zdjecia-img{$naz}"><b>{$lang[323]}</b></a>{else} <b>{$lang[323]}</b>{/if}</b></td>
</tr></table>
<br>
<img src="upload/zdjecia/{$fopo}" key="foto"><br><br>{$fopoopis}</center>


{if ($vip_o==1 and $vipendd>=$vip_time) or $vip_o==0}

<div id="welcome">

<p>
<center>
{include file="$templa/ocenianie.tpl"}
<b>{$lang[324]}{$ocena} {$lang[325]} {$glosy}</b>
</center>
</p>

</div>



{else}

<br><br>
<center><b style="color:red;">{$lang[326]}</b></center>
{/if}

{/if}


<br>


</p>
	
{else}

<center><b style="color:red;">{$lang[327]}</b></center>

{/if}	


{else}
<h1 class="ng">{$lang[319]} <a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[328]} </b>
</center>
</p>

{/if}

	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}