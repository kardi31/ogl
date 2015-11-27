<?php 
include('subheader.php');
if($_SESSION['logadm'] == "adm")
{
//*****************************

$indexphp="ok";

if($_GET['page']=="ustawienia" or $_GET['page']=="")
{
//-----------------------------
include("module/ustawienia.php");
//-----------------------------
}
else if($_GET['page']=="reklama")
{
//-----------------------------
include("module/reklama.php");
//-----------------------------
}
else if($_GET['page']=="news")
{
//-----------------------------
include("module/news.php");
//-----------------------------
}
else if($_GET['page']=="filmy")
{
//-----------------------------
include("module/filmy.php");
//-----------------------------
}
else if($_GET['page']=="faq")
{
//-----------------------------
include("module/faq.php");
//-----------------------------
}
else if($_GET['page']=="artykuly")
{
//-----------------------------
include("module/artykuly.php");
//-----------------------------
}
else if($_GET['page']=="zgloszenia")
{
//-----------------------------
include("module/zgloszenia.php");
//-----------------------------
}
else if($_GET['page']=="zamowienia")
{
//-----------------------------
include("module/zamowienia.php");
//-----------------------------
}
else if($_GET['page']=="cat")
{
//-----------------------------
include("module/cat.php");
//-----------------------------
}
else if($_GET['page']=="strony")
{
//-----------------------------
include("module/strony.php");
//-----------------------------
}
else if($_GET['page']=="menu")
{
//-----------------------------
include("module/menu.php");
//-----------------------------
}
else if($_GET['page']=="komentarze")
{
//-----------------------------
include("module/komentarze.php");
//-----------------------------
}
else if($_GET['page']=="gift")
{
//-----------------------------
include("module/gift.php");
//-----------------------------
}
else if($_GET['page']=="user")
{
//-----------------------------
include("module/user.php");
//-----------------------------
}
else
{
//-----------------------------
echo'<center><b>'.$lang['35'].'</b></center>';
//-----------------------------
}

//*****************************
}
include('footer.php');
?>