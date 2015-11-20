{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[440]}</h1>
		<p>

{if $user_id!=""}

<h3>{$lang[441]}</h3>

{if $stan==1}<div id="ukryj"><center><b style="color:red;">{$lang[442]}</b></center></div>{/if}
{if $stan==2}<div id="ukryj"><center><b style="color:lime;">{$lang[443]}</b></center></div>{/if}

<form action="wyk/zmien_haslo.php" method="POST">
<table>
<tr>
<td><b>{$lang[444]}</td>
<td><input type="password" name="sh"></td>
</tr>
<tr>
<td><b>{$lang[445]}</td>
<td><input type="password" name="nh"></td>
</tr>
</table>
<input type="submit" value="{$lang[446]}" name="zh">
</form>
<br>

{else}
<center><b style="color:red;">{$lang[447]}</b></center>
{/if}

</p>
	



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}