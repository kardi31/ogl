{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		{if $user_id>=1}
		
		
				<h1 class="ng">{$lang[230]} <b style="font-size:12px;"> już od 100 kredytów na 7 dni</b></h1>
{if $typ_p=="0" or $typ_p==""}
{$lang[451]}
{else}
		<p>

{if $stan==3}<div id="ukryj"><center><b style="color:red;">{$lang[607]}</b></center></div><br><br>{/if}
{if $stan==2}<div id="ukryj"><center><b style="color:red;">{$lang[608]}</b></center></div><br><br>{/if}
{if $stan==1}<div id="ukryj"><center><b style="color:green;">{$lang[609]}</b></center></div><br><br>{/if}
<center>

{if $get_id>=1}

{if $stan_pay=="2"}
<center><b style="color:lime;">{$lang[610]}</b></center>
{else}

{if $get_typ=="sms"}

<table width="100%">
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b>{$lang[611]}</b></center></td>
</tr>
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b>{$lang[612]} <b>{$dnidni}</b>{$lang[603]}</b></center></td>
</tr>
<tr>



<td width="50%" style="border:1px solid black;"><center>

<br><br>

{$lang[613]} <b>{$dninumer}</b> {$lang[614]} <b>{$dnitresc}</b>.<br>
{$lang[615]} <b>{$dnicenasms} PLN brutto</b>.
<br><br><br>
{if $dnipkt>=1}{$lang[617]} {$dnidni}{$lang[618]} <b>{$dnipkt}</b> {$lang[619]}.{/if}
<br><br>
{$pay_set.sms_info}
{$pay_set.sms_logo}
<br><br>
</td>
</tr>

<tr><td  style="font-size:14px;height:35px;border:1px solid black;"><center><b>{$lang[621]}</b></center></td></tr>
<tr><td  style="border:1px solid black;"><center>
<br><br>

{if $stan_pay=="1"}<div id="ukryj"><b style="color:red;">{$lang[622]}</b></div>{/if}

<table><tr><td><b>Podaj kod:&nbsp;</b></td><td> <form action="" method="POST"><input type="text" name="kod"><input type="submit" value="{$lang[623]}"></form></td></tr></table>
<br><br>



</center>
</td></tr>
<tr><td colspan="2" style="border:1px solid black;"><center><b><a href="kontakt/" style="text-decoration:none;">{$lang[624]} </a></b></center></td></tr>
</table>

{/if}
{if $get_typ=="pay"}

<table width="100%">
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b>{$lang[625]}</b></center></td>
</tr>
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b>{$lang[612]} <b>{$dnidni}</b>{$lang[603]}</b></center></td>
</tr>
<tr>
<td width="50%" style="border:1px solid black;"><center>
<br><br>
{$lang[626]} 
<br><br>
<a href="do_pay.php?id={$dniid}&p=v" style="font-weight:bold;font-size:14px;text-decoration:none;">{$lang[627]} </a>

<br><br>
{$lang[630]}  <b>{$dnicena}{$lang[616]}</b>.
<br><br><br>
{if $dnipkt>=1}{$lang[617]} {$dnidni}{$lang[618]} <b>{$dnipkt}</b> {$lang[619]}.{/if}
<br><br>
{$pay_set.p_info}
{$pay_set.p_logo}
<br><br>


</td>
</tr>

<tr><td colspan="2" style="border:1px solid black;"><center><b><a href="kontakt/" style="text-decoration:none;">{$lang[624]} </a></b></center></td></tr>
</table>


{/if}
{if $get_typ=="pkt"}

<table width="100%">
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b>{$lang[628]}</b></center></td>
</tr>
<tr>
<td width="50%" style="font-size:14px;height:35px;border:1px solid black;"><center><b>{$lang[612]} <b>{$dnidni}</b>{$lang[603]}</b></center></td>
</tr>
<tr>
<td width="50%" style="border:1px solid black;"><center>
{if $bum=="1"}<div id="ukryj"><br><center><b style="color:red;">{$lang[629]}</b></center></div>{/if}
<br><br>
{$lang[630]}  <b>{$dnicpkt} {$lang[631]}</b>.
<br><br>
{$lang[632]}: <b>{$um}</b> {$lang[633]} <br><br>

{if $ium=="ok"}
<a href="kup.php?id={$dniid}&typ=pkt&v=kup" style="font-weight:bold;font-size:14px;text-decoration:none;">{$lang[634]}</></a>
{else}
<b>{$lang[635]}</b>
{/if}
<br><br>

</td>
</tr>

<tr><td colspan="2" style="border:1px solid black;"><center><b><a href="kontakt/" style="text-decoration:none;">{$lang[624]} </a></b></center></td></tr>
</table>


{/if}
{/if}

{else}

<table>
<tr><td></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b>{$lang[636]}</b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b>{$lang[637]}</b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b>{$lang[638]}</b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b>{$lang[639]}</b></center></td>

</tr>
{section name=id loop=$dniid}
<tr>
<td></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b>{$dnidni[id]}</b></center></td>

{if $dnicena[id]<>""}

<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b>{if $dnicena[id]<>""}{$dnicena[id]}{$lang[640]}{/if}</b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b>{if $dnicena[id]<>""}<a href="kup.php?id={$dniid[id]}&typ=pay">{$lang[641]}</a>{/if}</b></center></td>

{else}

<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b>{$lang[642]}</b></center></td>

{/if}

{if $dnicenasms[id]<>""}

<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b>{if $dnicenasms[id]<>""}{$dnicenasms[id]}{$lang[640]}{/if}</b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b>{if $dnicenasms[id]<>""}<a href="kup.php?id={$dniid[id]}&typ=sms">{$lang[641]}</a>{/if}</b></center></td>

{else}

<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b>{$lang[642]}</b></center></td>

{/if}

{if $dnicpkt[id]<>""}

<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b>{if $dnicpkt[id]<>""}{$dnicpkt[id]}{/if}</b></center></td>
<td style="padding:5px 5px 5px 5px;border:1px solid black;"><center><b>{if $dnicpkt[id]<>""}<a href="kup.php?id={$dniid[id]}&typ=pkt">{$lang[641]}</a>{/if}</b></center></td>

{else}

<td style="padding:5px 5px 5px 5px;border:1px solid black;" colspan="2"><center><b>{$lang[642]}</b></center></td>

{/if}
</tr>
{/section}
</table>

{/if}
</center>


</p>
				<h1 class="ng">{$lang[243]}</h1>
<p>
<center>
{if $stan==11}<div id="ukryj"><center><b style="color:lime;">{$lang[244]}</b></center></div><br><br>{/if}
<b>{$lang[245]}
</b><br><br>

<form action="do_kup.php?p=pkt" method="POST">
{$lang[246]} <input type="text"  id="ilepkt" onkeyup="cena_pkt({$cenapkt})" value="0" name="ilepkt"><br>
<br><b><table><tr><td>{$lang[247]}</td><td> <div id="cenapkt">0.00</div> </td><td> {$lang[248]}</td></tr></table></b><br>
<input type="submit" value="{$lang[643]}" onMouseOver="cena_pkt({$cenapkt})" id="but"><p style="color:red;font-weight:bold;display:none;" id="per" >{$lang[644]} </p>
</form>
</center>
</p>	
{/if}
{else}

				<h1 class="ng">{$lang[249]}</h1><p>
		<p>
<center>
<br><img src="images/lock.png"><br><br>
<b>{$lang[250]}</b>
</center>
</p>

{/if}

	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}