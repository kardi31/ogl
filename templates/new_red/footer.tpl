
	</div>

</div>

<div class="site_footer">
	<div class="site_footer_left">
		<ul class="footer_menu">
			<li><a href="regulamin/">{$lang[645]}</a></li>
			<li><a href="polityka/">{$lang[600]}</a></li>
			<li><a href="{$site_url}faq/">{$lang[8]}</a></li>
			<li><a href="{$site_url}kontakt/">{$lang[9]}</a></li>
		</ul>
	</div>
	<div class="site_footer_right">&copy; &nbsp;2015 </div>
</div>

<div> <!----Reklama stopka----->
{if $rfotu==1 or ($rfotu==2 and $user_id=="") or ($rfotu==3 and $vipendd<=$vip_time)}
{$rfot}
{/if}		
<!----Reklama profi-----></div>
{include file="$templa/cookie-alert.tpl"}
</body>
</html>






