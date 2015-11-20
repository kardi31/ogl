{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[361]}</h1>
		<p>{if $user_id!=""}

{if $del=="ok"}<center><div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>{$lang[362]}</b></center></div></div></center><br>{/if}

{if $ilepw>=1}

<table width="100%">
<tr>
<td width="60%"><b>{$lang[363]}</b></td><td  align="center"><b>{$lang[364]}</b></td><td  align="center"><b>{$lang[365]}</b></td><td  align="center"><b>{$lang[366]}</b></td>
</tr>
{section name=id loop=$pw_id}
<tr>
<td>{if $czyt[id]==0}<a href="pw/view/{$pw_id[id]}"><b>{$temat[id]}</b></a>{else}<a href="pw/view/{$pw_id[id]}">{$temat[id]}</a>{/if}</td>
<td  align="center"><a href="user/{$od_loginn[id]}/{$od[id]}">{$od_login[id]}</a></td>
<td  align="center">{$data[id]}</td>
<td  align="center"><a href="pw/wyslane/{$pw_id[id]}/del">{$lang[367]}</a></td>
</tr>
{/section}
</table>

{else}
<center><b>{$lang[368]}</b></center>
{/if}

{else}
<center><b style="color:red;">{$lang[369]}</b></center>
{/if}
</p>
		



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}