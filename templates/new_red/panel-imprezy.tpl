{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[280]}</h1>
		<p>

{if $user_id!=""}

<h3>{$lang[281]}</h3>
{if $stan==3}<div id="ukryj"><center><b style="color:red;">{$lang[282]}</b></center></div>{/if}
{if $stan==4}<div id="ukryj"><center><b style="color:lime;">{$lang[283]}</b></center></div>{/if}
<form action="wyk/panel-imprezy.php" method="POST">

<table>

<tr>
<td><b>{$lang[284]}</b></td>
<td>
<select name="id">  <option value="">{$lang[285]}</option>
{section name=foo start=1 loop=32 step=1}
  <option value="{$smarty.section.foo.index}">{$smarty.section.foo.index}</option>
{/section}
</select>

<select name="im">  <option value="">{$lang[286]}</option>
{section name=foo start=1 loop=13 step=1}
  <option value="{$smarty.section.foo.index}" >{$smarty.section.foo.index}</option>
{/section}
</select>

<select name="iy">  <option value="">{$lang[287]}</option>
{section name=foo start=0 loop=10  step=1}
  <option value="{$smarty.section.foo.index+2010}" >{$smarty.section.foo.index+2010}</option>
{/section}
</select>
&nbsp;&nbsp;&nbsp;
<select name="ih">  <option value="">{$lang[288]}</option>
{section name=foo start=0 loop=24 step=1}
  <option value="{$smarty.section.foo.index}" >{$smarty.section.foo.index}</option>
{/section}
</select>
:
<select name="imi">  <option value="">{$lang[289]}</option>
{section name=foo start=1 loop=60  step=1}
  <option value="{$smarty.section.foo.index}" >{$smarty.section.foo.index}</option>
{/section}
</select>

</td>
</tr>
<tr><td><b>{$lang[290]}</b></td>
<td><input type="text" name="nazwa"></td></tr>
<tr>
<td valign="top"><b>{$lang[291]}</b></td>
<td><textarea name="opis" style="width:300px;height:100px;"></textarea></td>
</tr>

</table>
<input type="submit" value="{$lang[292]}" name="zd">
</form>
<br>
<h3>Imprezy:</h3>
{if $delc==1}<div id="ukryj"><center><b style="color:red;">{$lang[293]}</b></center></div>{/if}
{section name=id loop=$i_id}

<b>{$i_nazwa[id]}</b> - <a href="user/imprezy/del-{$i_id[id]}">{$lang[294]}</a><br>
{$lang[295]} {$i_d[id]}.{$i_m[id]}.{$i_y[id]}&nbsp;{$i_h[id]}:{$i_mi[id]}<br>
{$i_opis[id]}
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