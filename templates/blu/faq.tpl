{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		
				<h1 class="ng">{$lang[178]}</h1>
		<p>
{section name=id loop=$faq_nazwa}
<b>{$faq_nazwa[id]}</b><br>
{$faq_tresc[id]}<br><br>
{/section}
</p>
	


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}