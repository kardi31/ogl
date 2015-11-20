{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		{if $user_id>=1}
		
		<h1 class="ng">{$lang[314]} <a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		<p>

{if ($vip_p==1 and $vipendd>=$vip_time) or $vip_p==0 or $user_id==$user_loid}

{if $i_a==0}<center><b>{$lang[315]}</b></center>{/if}

<center>
<table >
<tr>
{section name=id loop=$gi_id}

<td class="profil-m">
<table cellspacing="0" height="100%" width="100%">
<tr><td><b>{$gi_nazwa[id]}</b></td></tr>
<tr><td height="100%"><img src="upload/gift/{$gi_img[id]}" title=""><br>{$lang[316]} {$gi_od[id]}</td></tr>
</table>

</td>
{if $nrip++%5==0}</tr>{/if}

{/section}
</table>
</center>

<br><br>

{else}

<center><b style="color:red;">{$lang[317]}</b></center>

{/if}

</p>
{else}
		<h1 class="ng">Prezenty użytkownika: <a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[318]} </b>
</center>
</p>

{/if}


		



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}