{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[352]}</h1>
		<p>{if $user_id!=""}
<table>
{section name=id loop=$pw_id}
<tr>
<td align="left"><b>{$lang[353]}</b></td>
<td>{$temat[id]} - <a href="pw/{$pw_id[id]}/del" title="{$lang[354]}"><img src="templates/blu/images/delete.png" width="14"  style="vertical-align: middle;"></a> - <a href="pw/send/{$pw_id[id]}/odp" title="{$lang[355]}"><img src="templates/blu/images/edit.gif" width="14"  style="vertical-align: middle;"></a></td>
</tr>
<tr>
<td align="left"><b>{$lang[356]}</b></td>
<td >{if $od[id]==0}<b>{$lang[357]}</b>{else}<a href="user/{$od_loginn[id]}/{$od[id]}">{$od_login[id]}</a>{/if}</td>
</tr>
<tr>
<td><b>{$lang[358]}</b></td>
<td align="left">{$data[id]}</td>
</tr>
<tr>
<td><b>{$lang[359]}</b></td>
<td>{$tresc[id]}</td>
</tr>
{/section}
</table>

{else}
<center><b style="color:red;">{$lang[360]}</b></center>
{/if}
</p>
	



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}