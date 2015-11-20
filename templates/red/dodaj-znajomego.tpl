{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}


		<div class="left">
{if $user_id>=1}	
		
		<h1 class="ng">{$lang[165]}</h1><p>

{if $user_id_kogo>=1}
{if $zgl==1}
<center>
<b>{$lang[166]}</b>
<b>
<br><br><a href="{$site_url}profil/{$user_zg}/{$user_id_kogo}">{$lang[697]}</a>
</b>
</center>
{else}

<form action="wyk/dodajznajomego.php" method="POST">

<b>{$lang[167]} </b> <b style="color:green;">{$user_zg}</b><br><br>

<b>{$lang[168]}</b><br>

<textarea style="width:600px;height:70px;" name="tresc"></textarea><br>
<input type="hidden" value="{$user_id_kogo}" name="kogo">
<input type="submit" value="{$lang[169]}" name="zglos">
</form>
{/if}
{else}
<center><b>{$lang[170]}</b></center>
{/if}
</p>
		
	{else}

				<h1 class="ng">{$lang[165]}</h1><p>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[171]}</b>
</center>
</p>

{/if}	


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}