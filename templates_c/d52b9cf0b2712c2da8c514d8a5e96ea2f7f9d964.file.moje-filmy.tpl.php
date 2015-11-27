<?php /* Smarty version Smarty-3.1.15, created on 2015-11-26 16:44:33
         compiled from ".\templates\new_red\moje-filmy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1312856549078e83ec8-14847780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd52b9cf0b2712c2da8c514d8a5e96ea2f7f9d964' => 
    array (
      0 => '.\\templates\\new_red\\moje-filmy.tpl',
      1 => 1448552671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1312856549078e83ec8-14847780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56549078f33b80_48477711',
  'variables' => 
  array (
    'lang' => 0,
    'user_id' => 0,
    'stan' => 0,
    'cenaf' => 0,
    'fo_id' => 0,
    'fo_custom_file' => 0,
    'fo_fm' => 0,
    'fo_thumb' => 0,
    'fo_user' => 0,
    'fo_file_type' => 0,
    'fo_fd' => 0,
    'fo_opis' => 0,
    'fo_cena' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56549078f33b80_48477711')) {function content_56549078f33b80_48477711($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




	<div class="left">
			<h1 class="ng"><?php echo $_smarty_tpl->tpl_vars['lang']->value[663];?>
</h1>
		<p>

<?php if ($_smarty_tpl->tpl_vars['user_id']->value!='') {?>

<h3 style="color:black;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[664];?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==19) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[665];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==6) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[666];?>
</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==5) {?><div id="ukryj"><center><b style="color:lime;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[667];?>
</b></center></div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['cenaf']->value>=1) {?><br><center><b><?php echo $_smarty_tpl->tpl_vars['lang']->value[669];?>
 <?php echo $_smarty_tpl->tpl_vars['cenaf']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[668];?>
</b></center><br><?php }?>
<form action="" method="POST" enctype="multipart/form-data" name="upf">

<table>
    <tr>
        <th colspan="2" valign="top">1. Podaj nazwę filmiku</th>
    </tr>
    <tr>
        <td colspan="2"><input required name="nazwa" type="text" style="width:450px;"/></td>
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
        <td colspan="2"><textarea required name="opis" style="width:450px;height:50px"></textarea></td>
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
<h3 style="color:black;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[675];?>
:</h3>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==7) {?><div id="ukryj"><center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[676];?>
.</b></center></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stan']->value==8) {?><div id="ukryj"><center><b style="color:green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[677];?>
.</b></center></div><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fo_id']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>

<table width="100%">
<tr>
<td colspan="2" align="left">
<a href="user/moje-filmy/del-<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[678];?>
</a> 

</td>
</tr>
<tr>
<td valign="top" width="5%">
    <?php if ($_smarty_tpl->tpl_vars['fo_custom_file']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]!=1) {?>
    
        <img src="http://i2.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['fo_fm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/default.jpg">
    
    <?php } else { ?>
        <?php if (!strlen($_smarty_tpl->tpl_vars['fo_thumb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']])) {?>
            <video width="120" height="90" datarel='<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
' dataid='<?php echo $_smarty_tpl->tpl_vars['fo_user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
'>
                <source src="/upload/filmy/<?php echo $_smarty_tpl->tpl_vars['fo_user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['fo_fm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" type="video/<?php echo $_smarty_tpl->tpl_vars['fo_file_type']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
">
                <source src="/upload/filmy/<?php echo $_smarty_tpl->tpl_vars['fo_user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['fo_fm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
" type="video/ogg">
                Your browser does not support the video tag.
              </video>
            <canvas></canvas>
        <?php } else { ?>
            <img src='/upload/filmy/<?php echo $_smarty_tpl->tpl_vars['fo_user']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
/<?php echo $_smarty_tpl->tpl_vars['fo_thumb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
' style='width:120px;height:90px;' />
        <?php }?>
    <?php }?>
</td>
<td valign="top" align="left">
<form  action="wyk/ezum.php"  method="POST">
    <table>
    <tr>
        <td>
            Nazwa: 
        </td>
        <td>
<input name="nazwa" type="text" style="width:450px;" value="<?php echo $_smarty_tpl->tpl_vars['fo_fd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"/> 
        </td>
    </tr>
    <tr>
        <td>
            Opis:
        </td>
        <td>
 <textarea name="opis" style="width:450px;height:30px;"><?php echo $_smarty_tpl->tpl_vars['fo_opis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</textarea>
        </td>
    </tr>
    <tr>
        <td>Koszt:</td>
        <td>
 <input name="cena" type="text" size="2" value="<?php echo $_smarty_tpl->tpl_vars['fo_cena']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"/>
        </td>
    </tr>
    </table>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['fo_id']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><input type="submit"  value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[681];?>
"></form>
</td>
</tr>
</table>
<hr>
<?php endfor; endif; ?>

<br>

<?php } else { ?>
<center><b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value[682];?>
</b></center>
<?php }?>

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

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templa']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
