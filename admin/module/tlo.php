<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<?php 
if($indexphp!="ok"){exit();}


$Query='SELECT ust_background FROM randki_ustawienia'; 
$result = db_query($Query) or die(db_error());
$row=db_fetch($result);

$bgImages = glob("../images/bg/*.{jpg,png,gif}", GLOB_BRACE);
if($_GET['msg']=="dodane")
{

echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>Tło zmienione</b></center></div></div><br>';
}
if(isset($_GET['msg2']))
{

echo'<div id="ukryj" ><div id="green" style="border-style:solid;border-width:thin;width:400px;height:30px;text-align:center;display:table-cell;vertical-align:middle;border-color:black;background-color:#e9ffd3;"><center><b>'.$_GET['msg2'].'</b></center></div></div><br>';
}
?>
<form action="chooseBgImage.php" method="POST" class="chooseBgImage">
    <h2 style='text-align:left;'>Wybierz obrazek</h2>
<?php
foreach($bgImages as $key => $bgImage){ 
    $filename = basename($bgImage);
    $slug = preg_replace('/[\.\s\-]+/','-',$filename);
    ?>
    <label for="bgImage-<?= $slug; ?>" class="<?php if($filename==$row['ust_background']){ echo 'checked'; } ?>">
        <img src="../images/bg/<?= $filename; ?>" />
        <input type="radio" value="<?= $filename; ?>" name="bgImage" id="bgImage-<?= $slug; ?>" />
    </label>
    
    <?php 
    if($key==2){
        echo "<div class='clearfix'></div>";
    }
    
}

?>
    <div class='clearfix'></div>
    <button class='btn btn-success' type="submit" value="Zmień tło" name="submit" >Zmień tło</button> 
    
</form>
<script>
//    $(window).error(function(e){
//    e.preventDefault();
//});
$(document).ready(function(){
    $(window).error(function(e){
    e.preventDefault();
});
    $('.chooseBgImage label').on('click',function(){
        var label = $(this);
        var elem_for = $(this).attr('for');
        var elem = $('#'+elem_for);
        $('.chooseBgImage label').removeClass('checked');
        console.log(elem);
        console.log(elem.is(':checked'));
        console.log($('.chooseBgImage input:checked'));
        if(elem.is(':checked')){
            label.addClass('checked');
        }
    });
});
</script>
<div class='clearfix'></div>
<br />
<hr />
<form action="uploadBgImage.php" method="POST" class="uploadFileForm"  enctype="multipart/form-data">
    
    <h2 style='text-align:left;'>Dodaj nowy obrazek tła</h2> <br />
    <input type='file'  name="fileToUpload" id="fileToUpload" /> <br />
    <button type="submit"  class='btn btn-primary' value="Wgraj obrazek" name="submit" > Wgraj obrazek</button>
    
</form>