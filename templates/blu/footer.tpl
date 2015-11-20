            <div class="cleaner"></div>
            
        </div> <!-- end of content panel -->
        
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    
</div> <!-- end of content wrapper -->

<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
    	
        <div class="section_w368">
        
      
        
        <div class="section_w920">
<a href="regulamin/">{$lang[645]}</a> | <a href="polityka/">{$lang[600]}</a>
<br><br>
        {$lang[179]} {$lang[181]} {$lang[180]} | Templates: <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> 
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer -->
<!----Reklama stopka----->
{if $rfotu==1 or ($rfotu==2 and $user_id=="") or ($rfotu==3 and $vipendd<=$vip_time)}
{$rfot}
{/if}		
<!----Reklama profi----->

{include file="$templa/cookie-alert.tpl"}
</body>
</html>






