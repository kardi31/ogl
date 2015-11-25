{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}



	<div class="left">
			<h1 class="ng">{$lang[663]}</h1>
		<p>

{if $user_id!=""}

<h3 style="color:black;">{$lang[664]}</h3>
{if $stan==19}<div id="ukryj"><center><b style="color:red;">{$lang[665]}</b></center></div>{/if}
{if $stan==6}<div id="ukryj"><center><b style="color:red;">{$lang[666]}</b></center></div>{/if}
{if $stan==5}<div id="ukryj"><center><b style="color:lime;">{$lang[667]}</b></center></div>{/if}

{if $cenaf>=1}<br><center><b>{$lang[669]} {$cenaf} {$lang[668]}</b></center><br>{/if}
<form action="" method="POST" enctype="multipart/form-data" name="upf">

<table>
    <tr>
        <th colspan="2" valign="top">1. Podaj nazwę filmiku</th>
    </tr>
    <tr>
        <td colspan="2"><input name="nazwa" type="text" style="width:450px;"/></td>
    </tr>
    
    <tr>
        <td colspan="2"><br /></td>
    </tr>
    <tr>
        <th colspan="2" valign="top">2. Dodaj filmik</th>
    </tr>
    <tr>
        <td valign="top"><h4 style="float:left;">Dodaj filmik z youtube</h4></td>
        <td>
            
            <input style="margin-top:5px;" name="film" type="text"/><br><small>np: http://www.youtube.com/watch?v=clltiQBBM08 lub http://youtu.be/clltiQBBM08 </small>
        </td>
    </tr>
    <tr>
        <td valign="top" colspan="2">lub</td>
    </tr>
    <tr>
        {*<td>
            <h3 style="">Lub</h3>
        </td>*}
        <td valign="top">
            <h4>Wrzuć własny film</h4>
        </td>
        <td>
            
            <input name="custom_file" type="file" value="1"/> 
        </td>
        <input name="prv" type="hidden" value="0"/>
    </tr>
    
    <tr>
        <td colspan="2"><br /></td>
    </tr>
    <tr>
        <th colspan="2" valign="top">3. Dodaj opis</th>
    </tr>
    <tr>
        <td colspan="2"><textarea name="opis" style="width:450px;height:50px"></textarea></td>
    </tr>
    <tr>
        <td colspan="2"><br /><br /></td>
    </tr>
    <tr>
        <th colspan="2" valign="top">4. Ustal cene (ilość kredytów)</th>
    </tr>
    <tr>
        <td colspan="2">
            Podaj liczbę kredytów, które musi Ci zapłacić użytkownik chcący obejrzeć filmik. Zostaw 0 jeżeli filmik ma być darmowy.</td>
    </tr>
    
    <tr>
        <td colspan="2"><br /></td>
    </tr>
    <tr>
        <td valign="top">
            Cena (ilośc kredytów)
        </td>
        <td>
            <input name="cena" type="text" value="0" size="2"/> <br />
        </td>
    </tr>
</table>

<input type="submit" value="Dodaj" name="upf">
</form>
<br>
<h3 style="color:black;">{$lang[675]}:</h3>
{if $stan==7}<div id="ukryj"><center><b style="color:red;">{$lang[676]}.</b></center></div>{/if}
{if $stan==8}<div id="ukryj"><center><b style="color:green;">{$lang[677]}.</b></center></div>{/if}

{section name=id loop=$fo_id}

<table width="100%">
<tr>
<td colspan="2" align="left">
<a href="user/moje-filmy/del-{$fo_id[id]}">{$lang[678]}</a> 
{*| {if $fo_prv[id]==1}<a href="user/moje-filmy/all-{$fo_id[id]}">{$lang[679]}</a>{else}<a href="user/moje-filmy/prv-{$fo_id[id]}">{$lang[680]}</a>{/if} *}
</td>
</tr>
<tr>
<td valign="top" width="5%">
    {if $fo_custom_file[id]!=1}
    
        <img src="http://i2.ytimg.com/vi/{$fo_fm[id]}/default.jpg">
    
    {else}
        {if !$fo_thumb[id]}
            <video width="120" height="90" datarel='{$fo_id[id]}' dataid='{$fo_user[id]}'>
                <source src="/upload/filmy/{$fo_user[id]}/{$fo_fm[id]}" type="video/mp4">
                <source src="/upload/filmy/{$fo_user[id]}/{$fo_fm[id]}" type="video/ogg">
                Your browser does not support the video tag.
              </video>
            <canvas></canvas>
        {else}
            <img src='/upload/filmy/{$fo_user[id]}/{$fo_thumb[id]}' style='width:120px;height:90px;' />
        {/if}
    {/if}
</td>
<td valign="top" align="left">
<form  action="wyk/ezum.php"  method="POST">
    <table>
    <tr>
        <td>
            Nazwa: 
        </td>
        <td>
<input name="nazwa" type="text" style="width:450px;" value="{$fo_fd[id]}"/> 
        </td>
    </tr>
    <tr>
        <td>
            Opis:
        </td>
        <td>
 <textarea name="opis" style="width:450px;height:30px;">{$fo_opis[id]}</textarea>
        </td>
    </tr>
    <tr>
        <td>Koszt:</td>
        <td>
 <input name="cena" type="text" size="2" value="{$fo_cena[id]}"/>
        </td>
    </tr>
    </table>
<input type="hidden" name="id" value="{$fo_id[id]}"><input type="submit"  value="{$lang[681]}"></form>
</td>
</tr>
</table>
<hr>
{/section}

<br>

{else}
<center><b style="color:red;">{$lang[682]}</b></center>
{/if}

</p>
		


</div>
<style>
    th{
    font-size:14px;}
    
    canvas{
        position:fixed;
        top:-1000px;
        
    }
</style>
	<script>
            $(document).ready(function(){
            setTimeout(
  function() 
  {
		// Get handles on the video and canvas elements
		var video = document.querySelector('video');
                
		var canvas = document.querySelector('canvas');
		// Get a handle on the 2d context of the canvas element
		var context = canvas.getContext('2d');
		// Define some vars required later
		var w, h, ratio;
		
		// Add a listener to wait for the 'loadedmetadata' state so the video's dimensions can be read
		
			// Calculate the ratio of the video's width to height
			ratio = video.videoWidth / video.videoHeight;
			// Define the required width as 100 pixels smaller than the actual video's width
			w = 120;
			// Calculate the height based on the video's width and the ratio
			h = 90;
			// Set the canvas width and height to the values just calculated
			canvas.width = w;
			canvas.height = h;			
		
                snap();
                
                
		// Takes a snapshot of the video
		function snap() {
			// Define the size of the rectangle that will be filled (basically the entire element)
			context.fillRect(0, 0, w, h);
			// Grab the image from the video
			context.drawImage(video, 0, 0, w, h);
                        var dataURL = canvas.toDataURL();
                        $.ajax({
                            type: "POST",
                            url: "/wyk/upload-image.php",
                            data: {
                                id: video.getAttribute("datarel"),
                                uid: video.getAttribute("dataid"),
                               imgBase64: dataURL
                            }
                        }).done(function(o) {
                            console.log('saved'); 
                            // If you want the file to be visible in the browser 
                            // - please modify the callback in javascript. All you
                            // need is to return the url to the file, you just saved 
                            // and than put the image in your browser.
                          });
		}
    //do something special
  }, 2000);
    })
		 
	</script>

{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}