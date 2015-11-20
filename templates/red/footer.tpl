</div>

	</div>


    <div id="c_d"></div>

    <div id="footer">
<a href="regulamin/">{$lang[645]}</a> | <a href="polityka/">{$lang[600]}</a> | <a href="faq/">{$lang[8]}</a>
<br><br>
        {$lang[179]} {$lang[181]} {$lang[180]} 
		<br><br>
		<!----Reklama stopka----->
{if $rfotu==1 or ($rfotu==2 and $user_id=="") or ($rfotu==3 and $vipendd<=$vip_time)}
{$rfot}
{/if}		
<!----Reklama profi----->
    </div>
</div>
 
   





    
</div>

{include file="$templa/cookie-alert.tpl"}

</body>
</html>

