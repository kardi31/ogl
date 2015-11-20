{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}


		<div class="left">
	
	
		
{section name=id loop=$news_id}
	
<h1 class="ng"><a href="news/{$news_id[id]}/{$news_tytul_n[id]}" style="color:white;">{$news_tytul[id]}</a></h1>
<p>
{$news_tresc[id]}
</p>
		
{/section}





	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}