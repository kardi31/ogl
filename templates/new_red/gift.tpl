{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}


		<div class="left">
		{if $user_id>=1}	
		
		<h1 class="ng">{$lang[191]}</h1><p>

{if $user_id_kogo>=1}
{if $stan==2}<div ><center><b style="color:red;">{$lang[192]}</b><b>
<br><br><a href="{$site_url}profil/{$user_zg}/{$user_id_kogo}">{$lang[697]}</a>
</b></center></div><br>{/if}
{if $stan==1}<div ><center><b style="color:lime;">{$lang[193]}</b><b>
<br><br><a href="{$site_url}profil/{$user_zg}/{$user_id_kogo}">{$lang[697]}</a>
</b></center></div><br>{/if}
<form action="give.php" method="POST">

<b>{$lang[194]} </b> <b style="color:green;">{$user_zg}</b><br><br>

<center>
<table >
<tr>
{section name=id loop=$gi_id}

<td class="profil-m">
<table cellspacing="0" height="100%" width="100%">
<tr><td><b>{$gi_nazwa[id]}</b></td></tr>
<tr><td height="100%"><img src="upload/gift/{$gi_img[id]}" {if $gi_money[id]>=1} title="{$lang[195]} {$gi_money[id]}"{/if}></td></tr>
<tr><td>{$lang[196]} {$gi_cena[id]}<br></td></tr>
<tr><td><input type="radio" name="id" value="{$gi_id[id]}"></td></tr>
</table>

</td>
{if $nrip++%5==0}</tr>{/if}

{/section}
</table>
</center>


<input type="hidden" value="{$user_id_kogo}" name="do">
<input type="submit" value="{$lang[197]}" name="zglos">
</form>

{else}
<center><b>{$lang[198]}</b></center>
{/if}


</p>
		
		{else}

				<h1 class="ng">{$lang[191]}</h1><p>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[199]} </b>
</center>
</p>

{/if}	


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}