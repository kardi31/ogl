{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">Moje ogłoszenia</h1>
		<p>

{if $user_id!=""}

<h3>Dodaj ogłoszenie</h3>

&nbsp;<b>Koszt dodania ogłoszenia: {$oglp} PKT</b>
<br><br>

{if $zampkt==1}<div id="ukryj"><center><b style="color:red;">Masz zamało punktów</b></center></div>{/if}
{if $addogl==1}<div id="ukryj"><center><b style="color:lime;">Dodano</b></center></div>{/if}
{if $uppol==1}<div id="ukryj"><center><b style="color:red;">Uzupełnij wszystkie pola</b></center></div>{/if}
<form action="panel-ogl.php" method="POST">

<table>

</td>
</tr>
<tr><td><b>Tytuł</b></td>
<td><input type="text" name="nazwa" style="width:500px;" value="{$p_nazwa}"></td></tr>
<tr>
<td valign="top"><b>Treść</b></td>
<td><textarea name="opis" style="width:500px;height:100px;" >{$p_opis}</textarea></td>
</tr>

</table>
<input type="submit" value="{$lang[292]}" name="zd">
</form>
<br>
<h3>Ogłoszenia:</h3>
{if $delc==1}<div id="ukryj"><center><b style="color:red;">{$lang[293]}</b></center></div>{/if}
{section name=id loop=$faq_id}

<b>{$faq_nazwa[id]}</b>  {$faq_data[id]}  <a style="float:right;" href="panel-ogl.php?del={$faq_id[id]}">{$lang[294]}</a> - <a style="float:right;margin-right:20px;" href="panel-ogl.php?promo={$faq_id[id]}">Promuj({$ust_ogloszenie_promo} PKT)</a><br>

{$faq_opis[id]}
<hr><br>
{/section}

<br><br>

{else}
<center><b style="color:red;">{$lang[296]}</b></center>
{/if}

</p>
		



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}