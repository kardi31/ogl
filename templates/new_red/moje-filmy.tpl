{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}



	<div class="left">
			<h1 class="ng">{$lang[663]}</h1>
		<p>

{if $user_id!=""}

<h3 style="color:black;">{$lang[664]}</h3>
{if $stan==19}<div id="ukryj"><center><b style="color:red;">{$lang[665]}</b></center></div>{/if}
{if $stan==6}<div id="ukryj"><center><b style="color:red;">{$lang[666]}</b></center></div>{/if}
{if $stan==5}<div id="ukryj"><center><b style="color:lime;">{$lang[667]}</b></center></div>{/if}

{if $cenaf>=1}<br><center><b>{$lang[669]} {$cenaf} {$lang[668]}</b></center><br>{/if}
<form action="" method="POST" enctype="multipart/form-data" name="upf">

<table>
<tr>
<td valign="top">{$lang[670]}:</td><td><input name="nazwa" type="text" style="width:450px;"/></td>
</tr>
<tr>
<td valign="top">{$lang[671]}:</td><td><input name="film" type="text" style="width:450px;"/><br><small>np: http://www.youtube.com/watch?v=clltiQBBM08 lub http://youtu.be/clltiQBBM08 </small></td>
</tr>
<tr>
<td valign="top">{$lang[672]}:</td>
<td><input name="prv" type="checkbox" value="1"/> {$lang[673]}</td>
</tr>
<tr>
<td valign="top">{$lang[674]}:</td>
<td><textarea name="opis" style="width:450px;height:50px"></textarea></td>
</table>

<input type="submit" value="Dodaj" name="upf">
</form>
<br>
<h3 style="color:black;">{$lang[675]}:</h3>
{if $stan==7}<div id="ukryj"><center><b style="color:red;">{$lang[676]}.</b></center></div>{/if}
{if $stan==8}<div id="ukryj"><center><b style="color:green;">{$lang[677]}.</b></center></div>{/if}

{section name=id loop=$fo_id}

<table width="100%">
<tr>
<td colspan="2" align="left">
<a href="user/moje-filmy/del-{$fo_id[id]}">{$lang[678]}</a> | {if $fo_prv[id]==1}<a href="user/moje-filmy/all-{$fo_id[id]}">{$lang[679]}</a>{else}<a href="user/moje-filmy/prv-{$fo_id[id]}">{$lang[680]}</a>{/if} 
</td>
</tr>
<tr>
<td valign="top" width="5%">
<img src="http://i2.ytimg.com/vi/{$fo_fd[id]}/default.jpg">
</td>
<td valign="top" align="left">
<form  action="wyk/ezum.php"  method="POST">
<input name="nazwa" type="text" style="width:450px;" value="{$fo_fm[id]}"/>
<textarea name="opis" style="width:450px;height:30px;">{$fo_opis[id]}</textarea><br>
<input type="hidden" name="id" value="{$fo_id[id]}"><input type="submit"  value="{$lang[681]}"></form>
</td>
</tr>
</table>
<hr>
{/section}

<br>

{else}
<center><b style="color:red;">{$lang[682]}</b></center>
{/if}

</p>
		


</div>



{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}