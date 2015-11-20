 <div id="column_w290">
            <!----Reklama menu----->
{if $rmenuu==1 or ($rmenuu==2 and $user_id=="") or ($rmenuu==3 and $vipendd<=$vip_time)}
{$rmenu}
{/if}
<!----Reklama menu----->
            	
                	{section name=id loop=$menu_nazwa_r}
                <div class="header_02">{if $user_id>=1}Menu{else}{$menu_nazwa_r[id]}{/if}</div>
                	
                <div class="column_w290_content">
                {$menu_tresc_r[id]}
				
                </div>    
    {/section}            
            </div> <!-- end of column 290 -->
	
