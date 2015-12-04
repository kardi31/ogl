</div>
<div class="site_body_right">
            <!----Reklama menu----->
{*{if $rmenuu==1 or ($rmenuu==2 and $user_id=="") or ($rmenuu==3 and $vipendd<=$vip_time)}
{$rmenu}
{/if}*}

<ul class="bxsliderRight bxslider">
    {foreach from=$rightads item=ad}
        <li><a href="{$ad['website']}" title='{$ad['name']}'><img title='{$ad['name']}' alt='{$ad['name']}' src='/images/ad/{$ad['file']}' /></a></li>
    {/foreach}
</ul>
<br />
<!----Reklama menu----->

		{section name=id loop=$menu_nazwa_r}
		<div class="site_body_right_blok">
			<div class="m_title">{if $menu_nazwa_r[id]=="Logowanie" and   $user_id>=1}Menu{else}{$menu_nazwa_r[id]}{/if}</div>
			<div class="m_text"> {$menu_tresc_r[id]}</div>
		</div>
		{/section}
	
		</div>
<script>
            $(document).ready(function(){
    $('.bxsliderRight').bxSlider({
        mode: 'fade',
        slideWidth: 210,
        auto: true,
        controls:false,
        pause: 12000,
        randomStart: true,
        captions: false,
        pager: false
    });
            });
</script>