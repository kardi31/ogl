{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[370]}</h1>
		<p>
{if $user_nick=="" and $rejestracja==1 and $regok!=1}
{if $l==1}<center><b style="color:red;">{$lang[371]}</b></center>{/if}
{if $ler==1}<center><b style="color:red;">{$lang[372]}</b></center>{/if}
{if $h==1}<center><b style="color:red;">{$lang[373]}</b></center>{/if}
{if $e==1}<center><b style="color:red;">{$lang[374]}</b></center>{/if}
{if $ei==1}<center><b style="color:red;">{$lang[699]}</b></center>{/if}
{if $e_plec==1}<center><b style="color:red;">{$lang[375]}</b></center>{/if}
{if $e_wiek==1}<center><b style="color:red;">{$lang[376]}</b></center>{/if}
{if $reg==1}<center><b style="color:red;">{$lang[377]}</b></center>{/if}
{if $t==1}<center><b style="color:red;">{$lang[378]}</b></center>{/if}
<br/>
<br/>
{if $givereg>=1}<center><b>{$lang[379]} <b style="color:red">{$givereg}</b> {$lang[380]}</b></center>{/if}
<br/>
<form action="" method="post">
<table>
<tr>
<td><b>{$lang[381]}</b></td>
<td><input type="text" name="login" value="{$lt}"/></td>
</tr>
<tr>
<td><b>{$lang[382]}</b></td>
<td><input type="password" name="haslo"/></td>
</tr>
<tr>
<td><b>{$lang[383]}</b></td>
<td><input type="text" name="email" value="{$et}"/></td>
</tr>
<tr>
<td><b>{$lang[384]}</b></td>
<td><select name="plec">
<option value="">{$lang[385]}</option>
<option value="1" {if $plec=="1"}selected="selected"{/if}>{$lang[386]}</option>
<option value="2" {if $plec=="2"}selected="selected"{/if}>{$lang[387]}</option>
</select>
</td>
</tr>
<tr>
<td><b>{$lang[388]}</b></td>
<td>
<select name="d">  <option value="">{$lang[389]}</option>
{section name=foo start=1 loop=32 step=1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$d} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}
</select>

<select name="m">  <option value="">{$lang[390]}</option>
{section name=foo start=1 loop=13 step=1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$m} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}
</select>

<select name="y">  <option value="">{$lang[391]}</option>
{section name=foo loop=$wiek_start max=$wiek_max step=-1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$y} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}
</select>
</td>
</tr>
<tr>
<td><b></b></td>
<td><input type="checkbox" name="regulamin" value="1" {if $regulamin==1} checked{/if}/> {$lang[393]} <a href="regulamin/">{$lang[394]}</a> {$lang[605]} <a href="polityka/">{$lang[606]}</a></td>
</tr>
{if $tokenr==1}

<tr>
<td><b>{$lang[395]}</b></td>
<td>{$token_img}</td>
</tr>
{/if}
<tr>
<td></td>
<td><input type="submit" value="{$lang[396]}" name="register"/></td>
</tr>
</table>

</form>
{/if}

{if $rejestracja==0}<center><b>{$lang[397]}</b></center>{/if}
{if $user_nick!=""}<center><b>{$lang[398]}</b></center>{/if}

{if $regok==1}<center><b style="color:lime;">{$lang[399]}</b></center>{/if}
{if $send==1}<center><b style="color:lime;">{$lang[400]}</b></center>{/if}
{if $send==2}<center><b style="color:lime;">{$lang[401]}</b></center>{/if}
</p>

	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}