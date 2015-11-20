{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[423]}</h1>
		<p>{if $user_id!=""}

{if $del=="ok"}<center><div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>{$lang[424]}</b></center></div></div></center>{/if}
{if $wyslano=="ok"}<center><div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>{$lang[425]}</b></center></div></div></center>{/if}

{if $ilepw>=1}

{section name=id loop=$pw_id}
<table width="100%">

<tr>

<td align="left"><b>{$lang[426]}</b> <a href="user/{$od_loginn[id]}/{$od[id]}">{$od_login[id]}</a></td>
<td align="center">{$data[id]}</td>
<td align="center" width="25%">{if $czyt[id]==0}<a href="zaproszenia/{$pw_id[id]}/zatwierdz">{$lang[427]}</a>{else}{$lang[428]}{/if}</td>
<td align="center" width="10%"><a href="zaproszenia/{$pw_id[id]}/delete-zaproszenie">{$lang[429]}</a></td>
</tr>
<tr>
<td colspan="4">
{$pw_tresc[id]}
</td>
</tr>
</table>
<br><hr>
{/section}
{else}
<center><b>{$lang[430]}</b></center>
{/if}

{else}
<center><b style="color:red;">{$lang[431]}</b></center>
{/if}
</p>
		



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}



