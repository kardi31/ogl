<?php 
if($indexphp!="ok"){exit();}

if($_GET['action']=="")
{

echo'<center>';

if($_GET['e']==1)
{
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['279'].'</b></center></div></div><br>';
}
if($_GET['e']==2)
{
echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$lang['280'].'</b></center></div></div><br>';
}
if($_GET['e']=="t")
{
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>'.$lang['281'].'</b></center></div></div><br>';
}
if($_GET['v']=="delete")
{
$del="DELETE FROM ".$pre."mov WHERE fo_id='".db_real_escape_string($_GET['id'])."'";
db_query($del);
echo'<div id="ukryj" ><div id="red" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#fde1e1;"><center><b>Film usunięty</b></center></div></div><br>';
}

echo'

<br>
<table width="90%" cellspacing="0" cellpadding="0" style="border: 1px solid #cccccc;">
<tr>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['285'].'</b></td>
<td width="45%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['286'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['287'].'</b></td>
<td width="25%" background="style/images/belka.gif" height="24" align="center"><b>Ikonka</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['288'].'</b></td>
<td width="5%" background="style/images/belka.gif" height="24" align="center"><b>'.$lang['289'].'</b></td>
</tr>';

$i=1;
$Query = "SELECT * FROM ".$pre."mov LEFt JOIN ".$pre."user ON user_id=fo_user ORDER by fo_id DESC";
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'<tr>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['fo_id'].'</td>
<td width="45%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.$row['fo_fd'].'</td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'.(int)$row['fo_cena'].'</td>';

 if($row['fo_custom_file']!=1){
     $youtubeId = get_you($row['fo_fm']);
//     echo '<td width="25%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><iframe width="120" height="90" src="http://www.youtube.com/embed/'.$youtubeId.'"></iframe></td>';
     echo '<td width="25%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><img src="http://i2.ytimg.com/vi/'.$youtubeId.'/default.jpg"></td>';
 }
 else{
//     echo '<td width="25%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center">'
//     . '<video controls width="120" height="90">
//        <source src="/upload/filmy/'.$row['fo_user'].'/'.$row['fo_fm'].'" type="video/'.$row['fo_file_type'].'">
//        <source src="/upload/filmy/'.$row['fo_user'].'/'.$row['fo_fm'].'" type="video/ogg">
//        Your browser does not support the video tag.
//      </video></td>';
     echo '<td width="25%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><img src="/upload/filmy/'.$row['fo_user'].'/'.$row['fo_thumb'].'"></td>';
     
 }
                                   
echo '
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=filmy&action=edit&id='.$row['fo_id'].'"><img src="style/images/edit.gif" title="'.$lang['290'].'"></a></td>
<td width="5%"'; if($i%2==0){echo' bgcolor="#dddddd" ';} echo' align="center"><a href="index.php?page=filmy&v=delete&id='.$row['fo_id'].'" onclick="return(potwierdz())"><img src="style/images/delete.png" title="'.$lang['291'].'"></a></td>
</tr>';
$i++;
}
echo'</table>';

}


if($_GET['action']=="edit")
{

$Query='SELECT * FROM '.$pre.'mov WHERE fo_id="'.db_real_escape_string($_GET['id']).'"  ORDER by fo_id DESC '; 
$result = db_query($Query) or die(db_error());
while($row=db_fetch($result))
{
echo'
<h2>Edytuj film</h2>

<form action="/admin/edit-film.php" method="POST" enctype="multipart/form-data">

<table>
<tr>
<td><b>'.$lang['292'].'</b></td>
<td><input type="text" name="nazwa" style="width:250px;" value="'.$row['fo_fd'].'"><br /></td>
</tr>';

echo'
<tr>
<td><b>'.$lang['293'].'</b></td>
<td><input type="text" name="cena" value="'.$row['fo_cena'].'" style="width:250px;"><br /></td>
</tr>
<tr>
<td valign="top"><b>Opis</b></td>
<td><textarea name="opis" style="width:250px;">'.$row['fo_opis'].'</textarea><br><br /><br /></td>
</tr>';

 if($row['fo_custom_file']!=1){
     $youtubeId = get_you($row['fo_fm']);
     echo '<tr><td><b>Film</b></td><td'; echo' align="center"><iframe width="360" height="240" src="http://www.youtube.com/embed/'.$youtubeId.'"></iframe><br /><br /></td></tr>';
     
     echo '<tr><td><b>Ikonka</b></td><td';  echo' align="center"><img src="http://i2.ytimg.com/vi/'.$youtubeId.'/default.jpg"> '; 
     echo '</td></tr>';
 }
 else{
     echo '<tr><td><b>Film</b></td><td';  echo' align="center">'
     . '<video controls width="360" height="240" datarel="'.$row['fo_id'].'" dataid="'.$row['fo_user'].'">
        <source src="/upload/filmy/'.$row['fo_user'].'/'.$row['fo_fm'].'" type="video/'.$row['fo_file_type'].'">
        <source src="/upload/filmy/'.$row['fo_user'].'/'.$row['fo_fm'].'" type="video/ogg">
        Your browser does not support the video tag.
      </video></td></tr>';
     echo '<tr><td><b>Ikonka</b></td><td '; echo' align="center"><img style="float:left;" class="filmMiniaturka" src="/upload/filmy/'.$row['fo_user'].'/'.$row['fo_thumb'].'">';
     
        echo '
   <br /><br />

   <button type="button" id="snap" class="btn btn-warning">Zmień miniaturke</button>
   <br /></td></tr>';
     
 }

echo '

</table>';


     echo '

<input type="hidden" value="'.$row['fo_id'].'" name="id">
<br /><br />
<input type="submit" class="btn btn-primary" value="'.$lang['296'].'" name="upcatg">
</form>


';
$idk=$row['gi_id'];
}
?>

<canvas></canvas>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    $(document).ready(function(){
         // Get handles on the video and canvas elements
            var video = document.querySelector('video');
            var canvas = document.querySelector('canvas');
            // Get a handle on the 2d context of the canvas element
            var context = canvas.getContext('2d');
            // Define some vars required later
            var w, h, ratio;

            // Add a listener to wait for the 'loadedmetadata' state so the video's dimensions can be read
//            video.addEventListener('loadedmetadata', function() {
//                    // Calculate the ratio of the video's width to height
//                    ratio = video.videoWidth / video.videoHeight;
//                    // Define the required width as 100 pixels smaller than the actual video's width
//                    w = video.videoWidth - 100;
//                    // Calculate the height based on the video's width and the ratio
//                    h = parseInt(w / ratio, 10);
//                    // Set the canvas width and height to the values just calculated
//                    canvas.width = w;
//                    canvas.height = h;			
//            }, false);*}
ratio = video.videoWidth / video.videoHeight;
			// Define the required width as 100 pixels smaller than the actual video's width
			w = 120;
			// Calculate the height based on the video's width and the ratio
			h = 90;
			// Set the canvas width and height to the values just calculated
			canvas.width = w;
			canvas.height = h;	

            // Takes a snapshot of the video
            $('#snap').on('click',function(){
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
                        var result = jQuery.parseJSON(o);
                        $('.filmMiniaturka').attr('src',result.url);
                        console.log('saved'); 
                        // If you want the file to be visible in the browser 
                        // - please modify the callback in javascript. All you
                        // need is to return the url to the file, you just saved 
                        // and than put the image in your browser.
                      });
            
            });
    })
           

</script>
<?php 

}


?>
<style>
    canvas{
        top:-10000px;
        position:fixed;
    }
</style>