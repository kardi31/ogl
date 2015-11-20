{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[332]}</h1>
		<p>{if $user_id!=""}

{if ($vip_pw==1 and $vipendd>=$vip_time) or $vip_pw==0}

<form action="" method="POST">
<table>
<tr>
<td><b>{$lang[333]}</b></td>
<td><input type="text" name="temat" {if $temat!=""}value="RE: {$temat}"{/if} style="width:250px;"></td>
</tr>
<tr>
<td><b>{$lang[334]}</b></td>
<td><input type="text" name="do" {if $od_login!=""}value="{$od_login}"{/if}  style="width:150px;"></td>
</tr>
<tr>
<td valign="top"><b>{$lang[335]}</b></td>
<td><textarea name="tresc" style="width:300px;height:100px;"></textarea></td>
</tr>
</table>
<input type="submit" value="{$lang[336]}" name="send">
</form>

{else}

<center><b style="color:red;">{$lang[337]}</b></center>

{/if}

{else}
<center><b style="color:red;">{$lang[338]}</b></center>
{/if}
</p>
		



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}