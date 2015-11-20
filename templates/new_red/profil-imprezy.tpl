{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		{if $user_id>=1}
		
		<h1 class="ng">{$lang[309]} <a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		<p>
{if ($vip_p==1 and $vipendd>=$vip_time) or $vip_p==0 or $user_id==$user_loid}
{if $i_a==0}<center><b>{$lang[310]}</b></center>{/if}

{section name=id loop=$i_id}

<b>{$i_nazwa[id]}</b> <br>
{$lanf[311]} {$i_y[id]}-{$i_m[id]}-{$i_d[id]}&nbsp;{$i_h[id]}:{$i_mi[id]}<br>
{$i_opis[id]}
<hr><br>
{/section}

<br><br>
</p>

{else}

<center><b style="color:red;">{$lang[312]}</b></center>

{/if}

{else}
<h1 class="ng">{$lang[309]}<a href="profil/{$user_lon}/{$user_loid}">{$user_lo}</a></h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[313]} </b>
</center>
</p>

{/if}


		



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}