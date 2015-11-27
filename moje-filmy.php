<?php 
include("subheader.php");

ini_set('upload_max_filesize','10M');
if($_GET['v']=="del")
{




     $up="DELETE FROM ".$pre."mov WHERE fo_id='".$_GET['id']."' and fo_user='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: /user/moje-filmy/7");
     exit();
}
if($_GET['v']=="prv")
{
     $up="UPDATE ".$pre."mov SET fo_prv=1 WHERE fo_id='".$_GET['id']."' and fo_user='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: /user/moje-filmy/8");
     exit();
}
if($_GET['v']=="all")
{
     $up="UPDATE ".$pre."mov SET fo_prv=0 WHERE fo_id='".$_GET['id']."' and fo_user='".$_SESSION['user_id']."'";
     db_query($up);
     header("Location: /user/moje-filmy/8");
     exit();
}


$Query='SELECT * FROM '.$pre.'user WHERE user_id="'.db_real_escape_string($_SESSION['user_id']).'"'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

$smarty->assign("user_fotka",$row['user_fotka']);

$user_moneyp=$row['user_money'];

}
if($_POST['film'])
{

     if($user_moneyp>=$ust['cenaf'] or $ust['cenaf']==0)
     {
        if($ust['cenaf']>=1)
        {
           $up="UPDATE ".$pre."user SET user_money=user_money-".$ust['cenaf']." WHERE user_id='".db_real_escape_string($_SESSION['user_id'])."'";  
           db_query($up);
        }

        $up="INSERT INTO ".$pre."mov(`fo_user`,`fo_fd`,`fo_fm`,`fo_data`,`fo_prv`,`fo_opis`,`fo_cena`)VALUES('".$_SESSION['user_id']."','".htmlspecialchars($_POST['nazwa'])."','".htmlspecialchars($_POST['film'])."',NOW(),'".htmlspecialchars($_POST['prv'])."','".htmlspecialchars($_POST['opis'])."','".htmlspecialchars($_POST['cena'])."')";
        db_query($up);
 
        header("Location: /user/moje-filmy/5");
        exit();
     }
     else
     {
        header("Location: /user/moje-filmy/19");
        exit();
     }
}

if(isset($_FILES['custom_file'])){
    if($user_moneyp>=$ust['cenaf'] or $ust['cenaf']==0)
     {
              
        $target_dir = "upload/filmy/".$_SESSION['user_id']."/";
        if(!is_dir($target_dir)){
            $oldmask = umask(0);
            mkdir($target_dir,0755);
            chmod($target_dir,0755);
            umask($oldmask);
        }
        $target_file = $target_dir . basename($_FILES["custom_file"]["name"]);

        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["custom_file"]["tmp_name"]);
            if($check !== false) {
                $msg = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $msg = "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $msg = "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if(!in_array($imageFileType,array("webm", "mp4", "ogv"))) {
            $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
//        var_dump($msg);exitl
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $msg = "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["custom_file"]["tmp_name"], $target_file)) {
                $msg = "The file ". basename( $_FILES["custom_file"]["name"]). " has been uploaded.";
                
                $filename = basename( $_FILES["custom_file"]["name"]);
        
                $filetypeExpl = explode('/',$_FILES['custom_file']['type']);
                $filetype = $filetypeExpl[1];


                $up="INSERT INTO ".$pre."mov(`fo_user`,`fo_fd`,`fo_fm`,`fo_data`,`fo_prv`,`fo_opis`,`fo_cena`,`fo_custom_file`,`fo_file_type`)VALUES('".$_SESSION['user_id']."','".htmlspecialchars($_POST['nazwa'])."','".$filename."',NOW(),'".htmlspecialchars($_POST['prv'])."','".htmlspecialchars($_POST['opis'])."','".htmlspecialchars($_POST['cena'])."',1,'".$filetype."')";
                db_query($up);

               if($ust['cenaf']>=1)
                {
                   $up="UPDATE ".$pre."user SET user_money=user_money-".$ust['cenaf']." WHERE user_id='".db_real_escape_string($_SESSION['user_id'])."'";  
                   db_query($up);
                }

                header("Location: /user/moje-filmy/5");
                exit();
                
            } else {
                $msg = "Sorry, there was an error uploading your file.";
            }
            
                header("Location: /user/moje-filmy/15");
                exit();
        }
        
     }
     else
     {
        header("Location: /user/moje-filmy/19");
        exit();
     }
}



$Query='SELECT * FROM '.$pre.'mov WHERE fo_user="'.db_real_escape_string($_SESSION['user_id']).'" order by fo_id DESC'; 
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{

    $fo_id[]=$row['fo_id'];
    $fo_fd[]=$row['fo_fd'];
    $fo_opis[]=$row['fo_opis'];
    $fo_prv[]=$row['fo_prv'];
    $fo_custom_file[]=$row['fo_custom_file'];
    $fo_cena[]=$row['fo_cena'];
    $fo_user[]=$row['fo_user'];
    if($row['fo_custom_file']==1){
        $fo_fm[]=$row['fo_fm'];
    }
    else{
        $fo_fm[]=get_you($row['fo_fm']);
    }
    $fo_thumb[]=$row['fo_thumb'];
    $fo_file_type[]=$row['fo_file_type'];

}
$smarty->assign("fo_id",$fo_id);
$smarty->assign("fo_fm",$fo_fm);
$smarty->assign("fo_fd",$fo_fd);
$smarty->assign("fo_cena",$fo_cena);
$smarty->assign("fo_opis",$fo_opis);
$smarty->assign("fo_prv",$fo_prv);
$smarty->assign("fo_user",$fo_user);
$smarty->assign("fo_thumb",$fo_thumb);
$smarty->assign("fo_file_type",$fo_file_type);
$smarty->assign("fo_custom_file",$fo_custom_file);
$smarty->assign("cenaf",$ust['cenaf']);

$smarty->assign("stan",$_GET['stan']);
$smarty->assign("title",'Panel użytkownika - '.$ust['nazwa']);

$smarty->display($ust['templates'].'/moje-filmy.tpl');

?>
