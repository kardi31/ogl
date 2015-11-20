{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}


<div class="left">

	<div class="post">
			<h1 class="ng">{$lang[581]} {$gt_nazwa}</h1>
<div class="entry"><p>

{if $go=="del-p"}
<div id="ukryj"><center><b style="color:green">{$lang[582]}</b></center></div>
{/if}

<a href="grupy/">{$lang[583]}</a> >> <a href="grupa/{$g_id}/{$g_nazwan}">{$g_nazwa}</a> >> <a href="temat/{$gt_id}/{$gt_nazwan}">{$gt_nazwa}</a>
<br><br>
{if ($czlonek==1 and $g_typ==0 and $user_id>=1) or $g_typ==1 or $user_adm=="adm"}

<table width="100%" cellspacing="0">
{section name=ile loop=$kom_nick}
<tr>
<td valign="top" style="width:120px;border:1px solid;" align="center">
<a href="user/{$kom_nickn[ile]}/{$kom_idu[ile]}">{$kom_nick[ile]}</a><br>
<a href="user/{$kom_nickn[ile]}/{$kom_idu[ile]}"><img src="{$kom_nickf[ile]}"></a><br>
<br>
</td>
<td valign="top" style="border:1px solid;" align="left">
<small>{$lang[584]} {$kom_data[ile]}
{if ($user_adm=="adm" or $user_id==$kom_idu[ile] or $user_id==$g_user) and $kom_del[ile]<>""}
 | <a href="wyk/grupa.php?del=post&id={$kom_del[ile]}">{$lang[585]}</a>
{/if}
</small><hr>
{$kom_tresc[ile]}
</td>
</tr>
{/section}
</table>

{if ($czlonek==1 and $g_typ==0 and $user_id>=1) or ($g_typ==1 and $user_id>=1 and $czlonek=="1") or $user_adm=="adm"}

<br><hr>
<center>
<form action="" method="POST" name="addkom">
<p>
<table>
<tr>
<td align="left" valign="top"><b>{$lang[586]}</b></td><td>
<textarea style="width:450px;height:80px;" name="tresc">{$t_t}</textarea>
</td>
</tr>
</table>
<br />	
<input class="button" type="submit" value="{$lang[587]}" name="addkom"/>
		
</p>		
</form>	
</center>
{else}
{if $user_id>=1}
<br>
<center><b>{$lang[588]}</b></center>{/if}
{/if}
{else}
{if $go<>"add"}<br><br><center><b>{$lang[589]}</b></center>{/if}
{/if}


</p>
    </div>	<div class="meta"></div></div>

  
		  
		
		

</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}