{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		
				<h1 class="ng">Ogłoszenia</h1>
		<p>
{section name=id loop=$faq_nazwa}
<div style="border-bottom:1px solid #adadad;margin-bottom:15px;padding-bottom:10px;clear:both;">
	<b style="font-size:14px;">{$faq_nazwa[id]}</b>
	<div style="padding:4px 0 6px 0;">Dodał(a): <a href="profil/{$faq_user_loginn[id]}/{$faq_user_id[id]}"><b>{$faq_user_login[id]}</b></a> Dnia: {$faq_data[id]}</div>
	<div style="clear:both;height:110px;">
		<div style="float:left;width:115px;">
			<a href="profil/{$faq_user_loginn[id]}/{$faq_user_id[id]}">{if $faq_img[id]==""}{if $faq_plecnr[id]=="1"}<img src="{$site_url}images/women.jpg" alt="{$faq_user_login[id]}" />{else}<img src="{$site_url}images/men.jpg" alt="{$faq_user_login[id]}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$faq_img[id]}" alt="{$faq_user_login[id]}" />{/if}</a>
		</div>
		<div style="float:left;width:560px;">
			{$faq_opis[id]}
		</div>
	</div>
</div>
{/section}
</p>
	


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}