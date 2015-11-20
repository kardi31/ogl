{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
{if $user_id>=1}
		<h1 class="ng">{$lang[432]}</h1>
<p>
{if $user_id_kogo>=1}
{if $zgl==1}
<b>{$lang[433]}</b> <b style="color:red;">{$user_zg}</b> <b>{$lang[434]}</b>

{else}

<form action="wyk/zgloszenie.php" method="POST">

<b>{$lang[435]}</b> <b style="color:red;">{$user_zg}</b><br><br>

<b>{$lang[436]}</b><br>

<textarea style="width:600px;height:100px;" name="tresc"></textarea><br>
<input type="hidden" value="{$user_id_kogo}" name="kogo">
<input type="submit" value="{$lang[437]}" name="zglos">
</form>
{/if}
{else}
<center><b>{$lang[438]}</b></center>
{/if}
</p>
		
{else}

				<h1 class="ng">{$lang[432]}</h1>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[439]} </b>
</center>
</p>

{/if}		


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}