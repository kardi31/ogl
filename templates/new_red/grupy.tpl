{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}



<div class="left">

	<div class="post">
			<h1 class="ng">{$lang[561]}</h1>
<div class="entry"><p>
{if $go=="del-g"}
<center><div id="ukryj"><b style="color:green">{$lang[562]}</b></div></center>
{/if}

{if $go=="create"}
<a href="grupy/">{$lang[563]}</a> >> <a href="grupy/create/yes/">{$lang[564]}</a>
{if $user_id>=1}
{if $stan=="dodano"}<center><div id="ukryj"><b style="color:green">{$lang[565]}</b></div></center>{/if}
{if $stan=="pn"}<center><div id="ukryj"><b style="color:red">{$lang[566]}</b></div></center>{/if}
<form action="wyk/c_g.php" method="POST">
<table>
<tr>
<td>{$lang[567]}</td><td> <input type="text" name="nazwa"></td></tr><tr>
<td>{$lang[568]}</td><td> <select name="typ"><option value="1">{$lang[569]}</option><option value="0">{$lang[570]}</option></select></td></tr></table>
<input type="submit" value="{$lang[571]}">
</form>
<hr>
{$lang[572]}
{else}
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[573]} </b>
</center>
{/if}

{else}

{if $user_id>=1}<table  cellspacing="0"><tr><td class="td_hover"><a href="grupy/create/yes/" >{$lang[574]}</a></td></tr></table><br>{/if}

{section name=id loop=$g_id}
<a style='    color: blue;
    font-weight: bold;
    font-size: 14px;' href="grupa/{$g_id[id]}/{$g_nazwan[id]}">{$g_nazwa[id]}</a>  <br>
<small>{$lang[575]} {$g_data[id]} | {if $g_typ[id]==1}{$lang[576]}{else}{$lang[577]}{/if} {if $user_id>=1}| <a href="grupa/{$g_id[id]}/{$g_nazwan[id]}_add:user">{$lang[578]}</a>{/if}</small>
{if $user_adm=="adm" or $user_id==$g_user[id]}<br><small>

<a href="grupa/{$g_id[id]}/{$g_nazwan[id]}_user:view">{$lang[579]}</a> | 
<a href="wyk/grupa.php?del=grupa&id={$g_del[id]}">{$lang[580]}</a>
</small>{/if}
<hr>
{/section}

{/if}



</p>
    </div>	<div class="meta"></div></div>

  
		  
		</div>
		
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}