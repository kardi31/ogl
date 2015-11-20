{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}


<div class="left">

	<div class="post">
			<h1 class="ng">{$lang[527]} {$g_nazwa}</h1>
<div class="entry"><p>
{if $go=="g"}<center><div id="ukryj"><b style="color:green">{$lang[565]}</b></div></center>{/if}
{if $go=="del-t"}
<div id="ukryj"><center><b style="color:green">{$lang[528]}</b></center></div>
{/if}

<div style="float: left; ">
<a href="grupy/">{$lang[529]}</a> >> <a href="grupa/{$g_id}/{$g_nazwan}">{$g_nazwa}</a>
{if $go=="add"}
>> <a href="grupa/{$g_id}/{$g_nazwan}_add:user">{$lang[530]}</a>
{/if}
{if $go=="user"}
>> <a href="grupa/{$g_id}/{$g_nazwan}_user:view">{$lang[531]}</a>
{/if}
{if $go=="create"}
>> <a href="grupa/{$g_id}/{$g_nazwan}_create:topic">{$lang[532]}</a>
{/if}
 </div>
{if $go=="user" and $user_id==$g_user}
<br><br>
<table>
{section name=id loop=$u_id}
<tr><td><a href="profil/{$u_loginn[id]}/{$u_id[id]}/">{$u_login[id]}</a></td><td>{if $u_akt[id]=="1"}{$lang[533]}{else}<a href="wyk/u_zg.php?id={$u_cid[id]}">{$lang[534]}</a>{/if}</td><td><a href="wyk/u_dg.php?id={$u_cid[id]}">{$lang[535]}</a></td></tr>
{/section}
</table>
{/if}

{if $go=="add"}

{if $user_id>=1}
{if $stan=="dodano" and $g_typ=="1"}
<div id="ukryj"><br><br><center><b style="color:green">{$lang[536]}</b></center></div>{/if}
{if $stan=="dodano" and $g_typ=="0"}
<div id="ukryj"><br><br><center><b style="color:green">{$lang[537]}</b></center></div>{/if}

{if $czlonek=="1"}
<br><br><center><b>{$lang[538]}</b></center>
{else}


{if $stan=="pn"}<center><div id="ukryj"><br><br><b style="color:red">{$lang[539]}</b></div></center>{/if}
<center><br><br>
<b>
{$lang[540]} <b style="color:orange">{$g_nazwa}</b> {$lang[541]} <br><br>

<a href="wyk/add_g.php?id={$g_id}"><b style="font-size:14px;">{$lang[542]}</b></a><br><br>

{$lang[543]} <b style="color:orange">{$g_nazwa}</b> {$lang[544]} {if $g_typ=="1"}{$lang[545]}{else}{$lang[546]}{/if}.
</b>
</center>
{/if}
{else}
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[547]} </b>
</center>
{/if}
{/if}

{if ($czlonek==1 and $g_typ==0 and $user_id>=1) or $g_typ==1 or $user_adm=="adm"}
{if $go=="create"}<br><br>
{if $user_id>=1}
{if $stan=="dodano"}<center><div id="ukryj"><b style="color:green">{$lang[548]}</b></div></center>{/if}
{if $stan=="pn"}<center><div id="ukryj"><b style="color:red">{$lang[549]}</b></div></center>{/if}
<form action="wyk/c_t.php?nazwa={$g_nazwa}&id={$g_id}" method="POST">
<table>
<tr>
<td>{$lang[550]}</td><td> <input type="text" name="nazwa" style="width:300px;"></td></tr>
<td valign="top">{$lang[551]}</td><td> <textarea name="tresc" style="width:500px;height:200px;"></textarea></td></tr>
</table>
<input type="submit" value="{$lang[552]}">
</form>
<hr>

{else}
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[553]} </b>
</center>
{/if}

{elseif $go!="add" and $go!="user"}

{if $user_id>=1}<div style="float: right; ">{if $czlonek=="1"}<a href="grupa/{$g_id}/{$g_nazwan}_create:topic">{$lang[554]}</a> | <a href="wyk/op_g.php?id={$g_id}">{$lang[555]}</a>{/if}</div>{/if}
<br><hr>
{section name=id loop=$gt_id}
<a href="temat/{$gt_id[id]}/{$gt_nazwan[id]}">{$gt_nazwa[id]}</a>  <br>
<small>{$lang[556]} {$gt_data[id]} | {$lang[557]} {$gt_dataz[id]} | {$lang[558]} {$gt_ile[id]}
{if $user_adm=="adm" or $user_id==$gt_user[id] or $user_id==$g_user}
 | <a href="wyk/grupa.php?del=temat&id={$gt_del[id]}">{$lang[559]}</a>
{/if}
</small>
<hr>
{/section}

{/if}
{else}
{if $go<>"add"}<br><br><center><b>{$lang[560]}</b></center>{/if}
{/if}


</p>
    </div>	<div class="meta"></div></div>

  
		  
		
		</div>


{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}