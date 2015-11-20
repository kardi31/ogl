{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[251]}</h1>
		<p>

{if $user_id!=""}

<h3>Dodaj Zdjęcie</h3>
{if $stan==21}<div id="ukryj"><center><b style="color:red;">{$lang[683]}</b></center></div>{/if}
{if $stan==19}<div id="ukryj"><center><b style="color:red;">{$lang[252]}</b></center></div>{/if}
{if $stan==6}<div id="ukryj"><center><b style="color:red;">{$lang[253]}</b></center></div>{/if}
{if $stan==5}<div id="ukryj"><center><b style="color:lime;">{$lang[254]}</b></center></div>{/if}

{if $cenaf>=1}<br><center><b>{$lang[255]} {$cenaf} {$lang[256]}</b></center><br>{/if}
<form action="" method="POST" enctype="multipart/form-data" name="upf">

<table>
<tr>
<td valign="top">{$lang[257]}</td><td><input name="plik1" type="file" class="textbox"/> <br><small>{$lang[258]} {$lang[694]}: {$max_file_size} MB</small></td>
</tr>
<tr>
<td valign="top">{$lang[259]}</td>
<td><input name="prv" type="checkbox" value="1"/> {$lang[260]}</td>
</tr>
<tr>
<td valign="top">{$lang[261]}</td>
<td><textarea name="opis" style="width:300px;height:50px"></textarea></td>
</table>

<input type="submit" value="{$lang[698]}" name="upf">
</form>
<br>
<h3>{$lang[262]}</h3>
{if $stan==7}<div id="ukryj"><center><b style="color:red;">{$lang[263]}</b></center></div>{/if}
{if $stan==8}<div id="ukryj"><center><b style="color:green;">{$lang[264]}</b></center></div>{/if}
{if $stan==9}<div id="ukryj"><center><b style="color:green;">{$lang[265]}</b></center></div>{/if}
{section name=id loop=$fo_id}

<table width="100%">
<tr>
<td colspan="2" align="left">
<a href="user/moje-zdjecia/del-{$fo_id[id]}">{$lang[266]}</a> | {if $fo_prv[id]==1}<a href="user/moje-zdjecia/all-{$fo_id[id]}">{$lang[267]}</a>{else}<a href="user/moje-zdjecia/prv-{$fo_id[id]}">{$lang[268]}</a>{/if} | {if $fo_fm[id]==$user_fotka}{$lang[269]}{else}<a href="user/moje-zdjecia/g-{$fo_id[id]}">{$lang[270]}</a>{/if}
</td>
</tr>
<tr>
<td valign="top" width="5%">
<img src="upload/zdjecia/{$fo_fm[id]}">
</td>
<td valign="top" align="left">
{$fo_opis[id]}
</td>
</tr>
</table>
<hr>
{/section}

<br>

{else}
<center><b style="color:red;">{$lang[271]}</b></center>
{/if}

</p>
		



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}