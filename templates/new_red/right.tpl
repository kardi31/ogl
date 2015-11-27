</div>
<div class="site_body_right">
            <!----Reklama menu----->
{if $rmenuu==1 or ($rmenuu==2 and $user_id=="") or ($rmenuu==3 and $vipendd<=$vip_time)}
{*{$rmenu}*}
{/if}
<!----Reklama menu----->

		{section name=id loop=$menu_nazwa_r}
		<div class="site_body_right_blok">
			<div class="m_title">{if $menu_nazwa_r[id]=="Logowanie" and   $user_id>=1}Menu{else}{$menu_nazwa_r[id]}{/if}</div>
			<div class="m_text"> {$menu_tresc_r[id]}</div>
		</div>
		{/section}
	
		</div>
