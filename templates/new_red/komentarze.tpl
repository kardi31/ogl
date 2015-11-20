{if $kom_ile==0}
<center><div><b>{$lang[202]}</b></div></center>
{/if}



{if $t_n==1}
<center><div id="ukryj"><div style="color:red"><b>{$lang[203]}</b></div></div></center>
{/if}
{if $k_n==1}
<center><div style="color:red"><b>{$lang[204]}</b></div></center>
{/if}
{if $k_add==1}
<center><div id="ukryj" style="color:green"><b>{$lang[205]}</b></div></center>
{/if}
{if ($komentowanie==1) or ($komentowanie==2 and $user_id>=1)}
<form action="" method="POST" name="addkom">
<p>
<table>
<!---
<tr>
<td><b>Nick:</b></td>
<td>
<input name="nick" {if $user_nick!=""} value="{$user_nick}" disabled="disabled" {/if} type="text" size="30" />
</td>
</tr>
--->
<tr>
<td align="left"><b>{$lang[206]}</b><br>
<textarea style="width:450px;height:80px;" name="tresc">{$t_t}</textarea>
</td>
</tr>
{if $token=="1"}
<tr>
<td>{$lang[207]}</td>
<td>
<img src="include/kod.php">
</td>
</tr>
<tr>
<td>{$lang[208]}</td>
<td>
<input type="text" name="kod" style="width:50px;">
</td>
</tr>
{/if}
</table>
<br />	<br>
<input class="button" type="submit" value="{$lang[209]}" name="addkom"/>
		
</p>		
</form>	
{/if}
{if $komentowanie==2 and $user_nick==""}
<p><center><b>{$lang[210]}</b></center></p>
{/if}

	