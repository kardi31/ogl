{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$news_tytul}</h1>
		<p>

{$news_tresc}
</p>
		

{if $ocenianie==1 or ($ocenianie==2 and $user_nick!="")}

<div id="welcome">

<p>
<center>
{include file="$templa/ocenianie.tpl"}
<b>{$lang[272]} {$ocena} {$lang[273]} {$glosy}</b>
</center>
</p>

</div>

{/if}
{if $ocenianie==2 and $user_nick==""}
<div id="welcome"><p><center><b>{$lang[274]}</b></center></p></div>
{/if}

{if $komentowanie>=1}
<br><br>
<b>{$lang[275]}</b><br><br>

<div id="example">

<p>

{section name=ile loop=$kom_nick}

{$lang[276]} <b>{if $kom_idu[ile]==""}{$kom_nick[ile]}{else}<a href="user/{$kom_nickn[ile]}/{$kom_idu[ile]}">{$kom_nick[ile]}</a>{/if}</b> {$lang[277]} {$kom_data[ile]}<br>
{$kom_tresc[ile]}<br><br>

{/section}

<center>
{include file="$templa/komentarze.tpl"}
</center>
</p>

</div>

{/if}


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}