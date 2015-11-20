{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[339]}</h1>
		<p>
{if $user_id!=""}



<table><tr>
<td class="td_hover"><a href="pw/send/"><b>{$lang[340]}</b></a></td>
<td class="td_hover"> <a href="pw/wyslane/"><b>{$lang[341]}</b></a></td>
</tr></table><br>
{if $del=="ok"}<center><div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>{$lang[342]}</b></center></div></div></center>{/if}
{if $wyslano=="ok"}<center><div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>{$lang[343]}</b></center></div></div></center>{/if}

{if $ilepw>=1}

<table width="100%">
<tr>
<td width="60%"><b>{$lang[344]}</b></td><td  align="center"><b>{$lang[345]}</b></td><td  align="center"><b>{$lang[346]}</b></td><td  align="center"><b>{$lang[347]}</b></td>
</tr>
{section name=id loop=$pw_id}
<tr>
<td>{if $czyt[id]==0}<a href="pw/view/{$pw_id[id]}"><b>{$temat[id]}</b></a>{else}<a href="pw/view/{$pw_id[id]}">{$temat[id]}</a>{/if}</td>
<td  align="center">{if $od[id]==0}<b>info</b>{else}<a href="user/{$od_loginn[id]}/{$od[id]}">{$od_login[id]}</a>{/if}</td>
<td  align="center">{$data[id]}</td>
<td  align="center"><a href="pw/{$pw_id[id]}/del">{$lang[348]}</a></td>
</tr>
{/section}
</table>

{else}
<center><b>{$lang[349]}</b></center>
{/if}

{else}
<center><b style="color:red;">{$lang[351]}</b></center>
{/if}
</p>
	



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}