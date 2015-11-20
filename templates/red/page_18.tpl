{include file="$templa/subheader.tpl"}


{if $lang_on=="1"}
<div name="flag" style="position: absolute; right: 20px;top:5px; z-index: 1;">
<div style="height:24px; width:65px;padding-top:4px;">
&nbsp;&nbsp;<a href="get_lang.php?lang=pl"><img src="lang/pl/flag.gif" key="pl"></a>&nbsp;&nbsp;<a href="get_lang.php?lang=en"><img src="lang/en/flag.gif" key="en"></a>
</div></div>{/if}
<div id="templatemo_header_wrapper"><div id="templatemo_header"><div id="site_logo"></div></div> </div> <div id="tempatemo_content_wrapper"><div id="templatemo_content">
<div id="content_panel">

<center>
<b><br><br>
{$lang[647]}
<br><br>
{$lang[648]}
<br><br>
{$lang[649]}
<br><br>

<table>
<tr>
<td><div class="td_hover" style="width:100px;text-align:center;"><a href="?enter=ok" style="color:green;font-weight:bold;font-size:16px;">{$lang[650]}</a></div></td>
<td><div class="td_hover" style="width:100px;text-align:center;"><a href="{$lang[652]}" style="color:orange;font-weight:bold;font-size:16px;">{$lang[651]}</a></div></td>
</tr>
</table>
<br><br>
</b>
</center>


{include file="$templa/footer.tpl"}