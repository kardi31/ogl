{if $lang_on=="1"}
<div name="flag" style="position: absolute; right: 90px;top:5px; z-index: 1;">
<div style="height:24px; width:65px;padding-top:4px;">
&nbsp;&nbsp;<a href="get_lang.php?lang=pl"><img src="lang/pl/flag.gif" key="pl"></a>&nbsp;&nbsp;<a href="get_lang.php?lang=en"><img src="lang/en/flag.gif" key="en"></a>
</div></div>{/if}



<div id="wrapper">
	<div id="top">
	</div>
    

	<div id="header">
            
            	<div id="sitetite">
                	<h1><a href="" ><img src="templates/red/images/logo.png" alt="" /></a></h1>
            	</div> <!-- end of site_title -->
            
                <ul class="navigation">
                           <li><a href="{$site_url}">{$lang[2]}</a></li>
			{if $user_id>="1"}<li><a href="grupy/">{$lang[526]}</a></li1>{else}<li><a href="register/">{$lang[3]}</a></li>{/if}
			<li><a href="{$site_url}news/">{$lang[8]}</a></li>
			<li><a href="online/">{$lang[5]}</a></li>
			<li><a href="kobiety/">{$lang[6]}</a></li>
			<li><a href="mezczyzni/">{$lang[7]}</a></li>
			<li><a href="ogloszenia/">Ogłoszenia</a></li>   
			<li><a href="kontakt/">{$lang[9]}</a></li>   
		</ul>
                
	</div>
<!----Reklama top----->
{if $rtopu==1 or ($rtopu==2 and $user_id=="") or ($rtopu==3 and $vipendd<=$vip_time)}
{$rtop}
{/if}
<!----Reklama top----->
    
<div class="scroll">
