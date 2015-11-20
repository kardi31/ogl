{if $lang_on=="1"}
<div name="flag" style="position: absolute; right: 20px;top:5px; z-index: 1;">
<div style="height:24px; width:65px;padding-top:4px;">
&nbsp;&nbsp;<a href="get_lang.php?lang=pl"><img src="lang/pl/flag.gif" key="pl"></a>&nbsp;&nbsp;<a href="get_lang.php?lang=en"><img src="lang/en/flag.gif" key="en"></a>
</div></div>{/if}
<div id="templatemo_header_wrapper">

	<div id="templatemo_header">

    	<div id="site_logo"></div>
 
    
    </div> <!-- end of header -->

</div> <!-- end of header wrapper -->

<div id="templatemo_menu_wrapper">   
    
    <div id="templatemo_menu">
        <ul>
                       <li><a href="{$site_url}">{$lang[2]}</a></li>
			{if $user_id>="1"}<li><a href="grupy/">{$lang[526]}</a></li1>{else}<li><a href="register/">{$lang[3]}</a></li>{/if}
			<li><a href="{$site_url}news/">{$lang[4]}</a></li>
			<li><a href="online/">{$lang[5]}</a></li>
			<li><a href="kobiety/">{$lang[6]}</a></li>
			<li><a href="mezczyzni/">{$lang[7]}</a></li>
		
			<li><a href="faq/">{$lang[8]}</a></li>
			<li><a href="kontakt/">{$lang[9]}</a></li>     
        </ul>    	
    </div> <!-- end of menu -->
</div> <!-- end of menu wrapper -->
<!----Reklama top----->
{if $rtopu==1 or ($rtopu==2 and $user_id=="") or ($rtopu==3 and $vipendd<=$vip_time)}
{$rtop}
{/if}
<!----Reklama top----->
<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">


     <div id="content_panel">