{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}

<div class="left">
		
		
		<h1 class="ng">{$lang[211]}</h1>
		<p>

{$kontaktt}

{if $fk==1}
<center>

{$lang[212]}<br /><br/>

{if $send=="ok"}
<div id="ukryj" style="color:green"><b>{$lang[213]}</b></div>
{/if}

{if $send=="error"}
<div id="ukryj" style="color:red"><b>{$lang[214]}</b></div><br>
{/if}

{if $error1=="pemail"}
<div style="color:red"><b>{$lang[215]}</b></div>
{/if}

{if $error2=="ppemail"}
<div  style="color:red"><b>{$lang[216]}</b></div>
{/if}

{if $error3=="pt"}
<div  style="color:red"><b>{$lang[217]}</b></div>
{/if}

{if $error4=="pw"}
<div  style="color:red"><b>{$lang[218]}</b></div>
{/if}

{if $error5=="pk"}
<div  style="color:red"><b>{$lang[219]}</b></div>
{/if}


	<form action="" method="post" name="submit">
		<table width="300" border="0">
			<tr>
			<td width="30%" valign="top"><b>{$lang[220]}</b></td></tr><tr>
			<td><input type="text"  value="{$eemail}" name="email" style="width: 390px;" /><br />	
			

			</td>
			</tr>
			<tr>
			<td width="30%" valign="top"><b>{$lang[221]}</b></td></tr><tr>
			<td><select name="subject">
<option>{$lang[222]}</option>
<option>{$lang[223]}</option>
<option>{$lang[224]}</option>
<option>{$lang[225]}</option>
<option>{$lang[226]}</option>
</select><br />


			</td>
			</tr>
			<tr>
			<td width="30%" valign="top"><b>{$lang[227]}</b></td></tr><tr>
			<td><textarea name="text" style="width: 390px; height: 140px;">{$wemail}</textarea><br />

			</td>
			</tr>
		
			<tr>
			<td width="30%" valign="top"><b>{$lang[228]}</b></td></tr><tr>
			<td>{$token_img}	
			

			</td>
			</tr>



		</table>
			<input type="submit" name="submit" value="{$lang[229]}" class="button"/>
	</form>
</center>

{/if}
</p>


	</div>
{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}