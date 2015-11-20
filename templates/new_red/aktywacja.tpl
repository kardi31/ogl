{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		
				<h1 class="ng">Aktywacja konta</h1>
		<p>

{if $akt==1}<center><b style="color:lime;">Witaj {$login}<br>Konto aktywowane</b></center>{/if}

{if $akt==0}

{if $akt_u==1}
<center><b style="color:lime;">Konto {$login} jest już aktywowane.</b></center>
{else}
<center><b style="color:red;">Wystąpił problem podczas aktywacji. Najprawdopodobniej podany kod jest błędny.</b></center>
{/if}

{/if}
</p>
	


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}