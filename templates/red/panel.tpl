{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[63]}</h1>
		<p>

{if $user_id!=""}

<h3>{$lang[64]}</h3>
{if $stan==3}<div id="ukryj"><center><b style="color:red;">{$lang[65]}</b></center></div>{/if}
{if $stan==4}<div id="ukryj"><center><b style="color:lime;">{$lang[66]}</b></center></div>{/if}
<form action="wyk/zmien_dane.php" method="POST">

<table>
<tr>
<td><b>{$lang[67]} </b></td>
<td>
<select name="woj">
 <option value="">{$lang[68]}</option>
{section name=id loop=$pwojid}
  <option value="{$pwojid[id]}" {if $user_woj==$pwojid[id]} selected="selected"{/if}>{$pwoj[id]}</option>
{/section}

</select>
</td>
</tr>
<tr>
<td><b>{$lang[69]}</td>
<td><input type="text" name="miasto" value="{$miasto}"></td>
</tr>
<tr>
<td valign="top"><b>{$lang[70]}</b></td>
<td>
<table width="100%">
<tr>
{section name=id loop=$d_id}
  {if $d_typ[id]=="sz"}<td  width="33%" align="left"><input type="checkbox" name="szukam[{$iko}]" value="{$d_id[id]}" {if $szukam[$iko]==$d_id[id] or in_array($d_id[id],$szukam)}checked{/if}><b>{$d_nazwa[id]}</b></td>{if $iko++%3==0}</tr>{/if}{/if}
{/section}
</table>
</td>
</tr>
<tr>
<td valign="top"><b>{$lang[78]}:</b></td>
<td>
<table width="100%">
<tr>
{section name=id loop=$d_id}
  {if $d_typ[id]=="je"}<td  width="33%" align="left"><input type="checkbox" name="jestem[{$jko}]" value="{$d_id[id]}" {if $jestem[$jko]==$d_id[id] or in_array($d_id[id],$jestem)}checked{/if}><b>{$d_nazwa[id]}</b></td>{if $jko++%3==0}</tr>{/if}{/if}
{/section}
</table>
</td>
</tr>
<tr>
<td><b>{$lang[696]}</b></td>
<td>
<select name="stc">
  <option value="">{$lang[68]}</option>
  
	{section name=id loop=$d_id}
	{if $d_typ[id]=="st"}
		<option value="{$d_id[id]}" {if $stc==$d_id[id]} selected="selected"{/if}>{$d_nazwa[id]}</option>
	{/if}
	{/section}
 
</select>
</td>
</tr>
<tr>
<td><b>{$lang[84]}</b></td>
<td>
<select name="dzieci">
  <option value="">{$lang[68]}</option>
  
	{section name=id loop=$d_id}
	{if $d_typ[id]=="d"}
		<option value="{$d_id[id]}" {if $dzieci==$d_id[id]} selected="selected"{/if}>{$d_nazwa[id]}</option>
	{/if}
	{/section}
 
</select>
</td>
</tr>
<tr>
<td><b>{$lang[89]}</b></td>
<td>
<select name="sylwetka">
  <option value="">{$lang[68]}</option>
	{section name=id loop=$d_id}
	{if $d_typ[id]=="s"}
		<option value="{$d_id[id]}" {if $sylwetka==$d_id[id]} selected="selected"{/if}>{$d_nazwa[id]}</option>
	{/if}
	{/section}
</select>
</td>
</tr>
<tr>
<td><b>{$lang[695]}</b></td>
<td>
<select name="wyks">
  <option value="">{$lang[68]}</option>
	{section name=id loop=$d_id}
	{if $d_typ[id]=="w"}
		<option value="{$d_id[id]}" {if $wyks==$d_id[id]} selected="selected"{/if}>{$d_nazwa[id]}</option>
	{/if}
	{/section}
</select>
</td>
</tr>
<tr>
<td><b>{$lang[96]}</td>
<td><input type="text" name="koczy" value="{$koczy}"></td>
</tr>
<tr>
<td><b>{$lang[97]}</td>
<td><input type="text" name="kwlosy" value="{$kwlos}"></td>
</tr>
<tr>
<td><b>{$lang[98]}:</b></td>
<td>
<select name="papierosy">
  <option value="">{$lang[68]}</option>
  <option {if $papierosy==$lang[99]} selected="selected"{/if}>{$lang[99]}</option>
  <option {if $papierosy==$lang[100]} selected="selected"{/if}>{$lang[100]}</option>
  <option {if $papierosy==$lang[101]} selected="selected"{/if}>{$lang[101]}</option>
</select>
</td>
</tr>
<tr>
<td><b>{$lang[646]}:</b></td>
<td>
<select name="alkochol">
  <option value="">{$lang[68]}</option>
  <option {if $alkochol==$lang[102]} selected="selected"{/if}>{$lang[102]}</option>
  <option {if $alkochol==$lang[103]} selected="selected"{/if}>{$lang[103]}</option>
  <option {if $alkochol==$lang[104]} selected="selected"{/if}>{$lang[104]}</option>
</select>
</td>
</tr>
<tr>
<td><b>{$lang[105]}:</b></td>
<td>
<select name="wzrost">
 <option value="">{$lang[68]}</option>
{section name=foo start=55 loop=241 step=1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$wzrost} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}

</select> {$lang[106]}
</td>
</tr>
<tr>
<td><b>{$lang[107]}:</b></td>
<td>
<select name="plec">
  <option value="1" {if $plec==1} selected="selected"{/if}>{$lang[108]}</option>
  <option value="2" {if $plec==2} selected="selected"{/if}>{$lang[109]}</option>
</select>
</td>
</tr>
<tr>
<td><b>{$lang[110]}</b></td>
<td>
<select name="d">  <option value="">{$lang[111]}</option>
{section name=foo start=1 loop=32 step=1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$d} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}
</select>

<select name="m">  <option value="">{$lang[112]}</option>
{section name=foo start=1 loop=13 step=1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$m} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}
</select>

<select name="y">  <option value="">{$lang[113]}</option>
{section name=foo loop=$wiek_start max=$wiek_max step=-1}
  <option value="{$smarty.section.foo.index}" {if $smarty.section.foo.index==$y} selected="selected"{/if}>{$smarty.section.foo.index}</option>
{/section}
</select>
</td>
</tr>

<tr>
<td valign="top"><b>{$lang[114]}</b></td>
<td><textarea name="omnie" style="width:500px;height:100px;">{$omnie}</textarea></td>
</tr>

</table>
<input type="submit" value="{$lang[115]}" name="zd">
</form>

<br><br><br><br><br><br><br><br>
<center><table><tr><td class="td_hover"><a href="user/usun-konto/"><b style="color:red;">{$lang[116]}</b></a></td></tr></table></center>
{else}
<center><b style="color:red;">{$lang[117]}</b></center>
{/if}

</p>
		



	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}