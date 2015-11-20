


	<div id="c_left">
 <!----Reklama menu----->
{if $rmenuu==1 or ($rmenuu==2 and $user_id=="") or ($rmenuu==3 and $vipendd<=$vip_time)}
{$rmenu}
{/if}
<!----Reklama menu----->
                {section name=id loop=$menu_nazwa_l}
		<div class="post">
	        	{$menu_tresc_l[id]}
		</div>
		{/section}
	</div>



	<div id="c_center">
		
		<div class="post">