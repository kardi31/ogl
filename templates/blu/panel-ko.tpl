{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		
				<h1 class="ng">{$lang[297]}</h1>
{if $user_id>=1}

{if $u_ko==1 or  ($u_ko==2 and $vipendd>=$vip_time)}


{if $aile==0}<center><b>{$lang[298]}</b></center>{/if}

{section name=id loop=$u_id}
<a href="profil/{$u_loginn[id]}/{$u_id[id]}/" style="text-decoration:none;"><b>{$u_login[id]}</b></a> {$lang[299]} <a href="profil/{$user_nickn}/{$user_id}/zdjecia-img{$ko_foto[id]}">{$lang[300]}</a>  {$lang[301]}  <b>{$ko_ocena[id]}</b> {$lang[302]}  {$ko_data[id]}<br>

{/section}




{if $podstron>1}
<center>
<table border="0">
<tr>


{section name=strona start=0 loop=$podstron step=1}

<td style="border: 1px solid #000000;width:15px;" align="center"><a href="user/kto-ocenial-zdjecia/{$smarty.section.strona.index+1}">{if $strona==$smarty.section.strona.index+1}<b>{$smarty.section.strona.index+1}</b>{else}{$smarty.section.strona.index+1}{/if}</a></td>

{/section}


</tr></table>
</center>
{/if}


  </p>

{else}
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[303]} </b>
</center>
{/if}

{else}
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[304]} </b>
</center>
{/if}
	


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}