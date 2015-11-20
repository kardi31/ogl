{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[416]}</h1>
		<p>

{if $akt==1}<center><b style="color:lime;">{$lang[417]}</b></center>{/if}
{if $akt==2}<center><b style="color:red;">{$lang[418]}</b></center>{/if}

<center>

<b>{$lang[419]}</b><br><br>
<form action="" method="POST">

<b>{$lang[420]}</b><input type="text" name="login">
<input type="submit" value="{$lang[421]}" name="nhzi">

</form>
</center>

</p>


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}