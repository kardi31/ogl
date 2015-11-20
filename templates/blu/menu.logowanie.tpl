{if $user_id!=""}
<center>
{$lang[118]} <b style="color:blue;">{$user_nick}</b><br/>
{if $gift_on==1}

{$lang[119]} <b>{$user_ile_money}</b><br/>
{if $vipend>=1 and $vipendd>=$vip_time}{$lang[120]} <b>{$vipend}</b>{/if}

<br/>
<br/>
{/if}

<b>
<a href="user/panel/">{$lang[121]}</a>
<a href="profil/{$user_nickn}/{$user_id}">{$lang[131]}</a>
<a href="user/zmien-haslo/">{$lang[122]}</a>
{if $gift_on==1}<a href="doladuj-konto/">{$lang[123]}</a>{/if}
<a href="user/moje-zdjecia/">{$lang[124]}</a>
<a href="user/moje-filmy/">{$lang[657]}</a>
<a href="user/imprezy/">{$lang[125]}</a>
<a href="user/znajomi/">{$lang[126]}</a>
{if $u_kv>=1}<a href="user/kto-ogladal-profil/">{$lang[127]}</a>{/if}
{if $u_ko>=1}<a href="user/kto-ocenial-zdjecia/">{$lang[128]}</a>{/if}
<a href="pw/">{if $newpw>=1}<span style="color:red;">{$lang[129]} ({$newpw})</span>{else}{$lang[129]}{/if}</a>
<a href="zaproszenia/">{if $newzp>=1}<span style="color:red;">{$lang[130]} ({$newzp})</span>{else}{$lang[130]}{/if}</a>

{if $user_adm=="adm"}<a href="{$site_url}admin/">{$lang[653]}</a><br/>{/if}
<a href="logout.php">{$lang[132]}</a><br/>
</b>
</center>
<br/>
<h3>{$lang[133]} {if $oua>=1}({$oua}){/if}</h3>

{section name=id loop=$ou_id}
<a href="profil/{$ou_loginn[id]}/{$ou_id[id]}" class="">{$ou_login[id]}</a>
{/section}

{if $ouab=="0"}<center><b>{$lang[134]}</b></center>{/if}

<br/>
<h3>{$lang[135]}</h3>
<form action="dos.php" method="post">


<table>
<tr><td>{$lang[136]}

<select name="woj">
 <option value="">{$lang[137]}</option>
{section name=id loop=$pwojids}
  <option value="{$pwojids[id]}" >{$pwojs[id]}</option>
{/section}

</select>


</td></tr>
<tr><td>{$lang[138]} <input type="text" name="miasto"></td></tr>
<tr><td>{$lang[139]}

{$lang[140]} <select name="od">  <option value="">{$lang[142]}</option>
{section name=fooa start=$ust_wiek loop=$wiek_max step=1}
  <option value="{$smarty.section.fooa.index}">{$smarty.section.fooa.index}</option>
{/section}
</select>

{$lang[141]} <select name="do">  <option value="">{$lang[142]}</option>
{section name=foos start=$ust_wiek loop=$wiek_max step=1}
  <option value="{$smarty.section.foos.index}">{$smarty.section.foos.index}</option>
{/section}
</select>


</td></tr>
<tr><td>{$lang[143]}

<select name="plec">  <option value="">{$lang[137]}</option>
<option value="1">{$lang[144]}</option>
<option value="2">{$lang[145]}</option>
</select>

</td></tr>
<tr><td><input type="checkbox" name="online" value="1"> {$lang[146]} <input type="checkbox" name="img" value="1"> {$lang[147]}</td></tr>
</table>
<input type="submit" value="{$lang[148]}" name="szukaj">
</form>

{else}
{if $user_adm=="error"}<center><span id="ukryj" style="color:red;">{$lang[149]}</span></center>{/if}
<form action="" method="post">
<table>
<tr>
<td><b>{$lang[150]}</b></td>
<td><input type="text" name="login"/></td>
</tr>
<tr>
<td><b>{$lang[151]}</b></td>
<td><input type="password" name="haslo"/></td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" name="zamn" value="1"/> {$lang[152]}</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="{$lang[153]}" name="login_user"/></td>
</tr>
</table>

</form>
{if $fb_login=="1"}
<center>
	<a href="fbc.php?login=fb"><img src="images/facebook_zaloguj.png"></a>
<center>
{/if}
<br/>
<a href="register/"><b>{$lang[154]}</b></a>
<a href="zapomniane-haslo/">{$lang[155]}</a>

{/if}

<br/><br/>
{$lang[156]} {$online_user}<br/>
{$lang[157]} {$online_login_user}<br/>
{$lang[158]} {$user_ile_zar}<br/>
{$lang[159]} {$user_ile_women}<br/>
{$lang[160]} {$user_ile_men}