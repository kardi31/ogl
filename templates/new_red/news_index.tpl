{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}


		<div class="left">
	
	
                    <h1 style="font-size:22px;font-weight:bold;border-bottom:0px;">Aktualności</h1>
{section name=id loop=$news_id}
	
<h2 class="ng" ><a href="news/{$news_id[id]}/{$news_tytul_n[id]}">{$news_tytul[id]}</a></h2>
<p>
{$news_tresc[id]}
</p>
		
{/section}





	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}