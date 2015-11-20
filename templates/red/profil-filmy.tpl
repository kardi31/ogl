{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}


		{if $user_id>=1}
		
		<div class="post">
			<h1 class="title">{$lang[659]}: <a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		<div class="entry"><p>
{if ($vip_p==1 and $vipendd>=$vip_time) or $vip_p==0 or $user_id==$user_loid}

{if $fopo==""}

<table><tr>
{section name=id loop=$fo_id}
<td class="profil-m">


{if $fo_prv[id]=="1" and $czyzn=="0" and $user_adm!="adm"}

{if $user_plec=="1"}

<img src="{$site_url}images/movr.jpg" title="{$lang[660]}" alt="key" />

{else}

<img src="{$site_url}images/movr.jpg" title="{$lang[661]}" alt="key" />

{/if}

{else}

<a href="profil/{$user_lon}/{$user_loid}/filmy-img{$fo_id[id]}" style="text-decoration:none;" ><img src="http://i2.ytimg.com/vi/{$fo_fd[id]}/default.jpg" title="{$fo_fm[id]}"></a>

{/if}

</td>{if $nrip++%5==0}</tr>{/if}

{/section}
</table>


{else}
<center>
<table><tr>
<td class="td_hover">{if $poz>0}<a href="profil/{$user_lon}/{$user_loid}/filmy-img{$poz}"><b>{$lang[321]}</b></a> {else}<b>{$lang[321]} </b>{/if} </b></td>
<td class="td_hover"><a href="profil/{$user_lon}/{$user_loid}/filmy"><b>{$lang[662]}</b></a> </b></td>
<td class="td_hover">{if $naz>0} <a href="profil/{$user_lon}/{$user_loid}/filmy-img{$naz}"><b>{$lang[323]}</b></a>{else} <b>{$lang[323]}</b>{/if}</b></td>
</tr></table>
<br>


<br><br>
<b>{$fofm}</b><br><br>

<iframe width="640" height="360" src="http://www.youtube.com/embed/{$fofd}" frameborder="0" allowfullscreen></iframe>

<br><br>{$fopoopis}</center>

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
		<div class="post">
			<h1 class="title">{$lang[659]}: <a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		<div class="entry"><p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[328]} </b>
</center>
</p>

{/if}
</div>
	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}