{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[408]}</h1>
		<p>

{if $user_id!=""}



<center>
<b>
{$lang[409]}
</b>
<br><br>
{if $stan==1}<div id="ukryj"><center><b style="color:red;">{$lang[410]}</b></center></div>{/if}

<form action="wyk/usun-konto.php" method="POST">
<table>
<tr>
<td><b>{$lang[411]}</td>
<td><input type="password" name="sh"><input type="submit"  onclick="return(potwierdz())" value="{$lang[412]}" name="zh"></td>
</tr>
</table>
</center>
</form>
<br>

{else}

{if $stan==2}
<center><b>{$lang[413]}</b></center>
{else}
<center><b style="color:red;">{$lang[414]}</b></center>
{/if}
{/if}

</p>
	



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}