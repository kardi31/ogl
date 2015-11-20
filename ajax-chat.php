<?
session_start();
if($_SESSION['user_id']>=1)
{
include_once("db_connect.php");
include_once("include/ust.php");

$Querys='SELECT * FROM '.$pre.'user WHERE user_id='.$_SESSION['user_id'].''; 
$results = db_query($Querys) or die(db_error());
while ($rows = db_fetch($results)) 
{
	$ile_pkt=$rows['user_money'];
	
	if($rows['user_vip']>=time())
	{
		$czy_vp=1;
	}
}
?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Making an AJAX Web Chat With PHP, MySQL and jQuery | Tutorialzine Demo</title>

<link rel="stylesheet" type="text/css" href="js/jScrollPane/jScrollPane.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/chat.css" />

</head>

<body>

<div id="chatContainer">

    <div id="chatTopBar" class="rounded">
	<?
	if($_GET['id']>=1)
	{
		echo'<div style="margin:10px 0 0 10px;font-weight:bold;">Czat z '.$_GET['user'].'</div>';
	}
	else
	{
		echo'<a href="" class="glowny rounded" id="glowny">Głowny</a>';
	}
	?>
	<div id="logu"></div></div>
    
    <?
	if($_GET['id']>=1)
	{
		echo'<div id="chatLineHolder" class="chatLineHolder2"></div>';
	}
	else
	{
		echo'
		<div id="chatLineHolder"  class="chatLineHolder"></div>
		<div id="chatUsers" class="rounded"></div>';
	}
	?>
	
    <div id="chatBottomBar" class="rounded">
    	<div class="tip"></div>
        
        <form id="loginForm" method="post" action="">
            <input id="name" name="name" value="<?echo $_SESSION['user_nick'];?>" type="hidden" class="rounded" maxlength="16" />
            <input id="email" name="email" value="<?$_SESSION['user_email']?>"  type="hidden"class="rounded" />
            <input id="user" name="user"  value="<?echo $_SESSION['user_id'];?>" type="hidden" class="rounded" />
			<?
			
			if($czy_vp==1 or $ile_pkt>=$ust['chatp'] or $ust['chatp']==0)
			{
				echo'<input type="submit" class="blueButton" value="Dołącz" />';
				
				if($ust['chatp']>=1 and $czy_vp!=1){echo'<span style="color:black;">Koszt dołącznie do czatu to '.$ust['chatp'].' PKT</span>';}
			}
			else
			{
				echo'<span style="color:black;">Masz zamało punktów by dołączyć do czatu.</span>';
			}
			
			?>
        </form>
        
        <form id="submitForm" method="post" action="">
	        <input id="room" name="room" value="<?if($_GET['id']>=1){ echo $_GET['id'];}else{echo '0';}?>"  type="hidden" class="rounded" />
	        <input id="room_od" name="room_od" value="<?echo $_SESSION['user_id'];?>" type="hidden" class="rounded" />
            <input id="chatText" name="chatText" class="rounded" maxlength="255" autocomplete="off"/>
            <input type="submit" class="blueButton" value="Wyślij" />
          
        </form>
			<div id="chatTextemo" style="display:none;padding-top:20px;height:30px;">
				<a onclick="add_emo(':)')"><div class="emo_j" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(';)')"><div class="emo_d" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(':(')"><div class="emo_t" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(':o')"><div class="emo_c" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(';p')"><div class="emo_p" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(':pa')"><div class="emo_s" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(':hej')"><div class="emo_si" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(':*')"><div class="emo_o" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(':ok')"><div class="emo_9" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(':@')"><div class="emo_10" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(';d')"><div class="emo_12" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo('b)')"><div class="emo_13" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(':wnerw')"><div class="emo_14" style="cursor:pointer;margin-right:10px;"></div></a>
				<a onclick="add_emo(':zly')"><div class="emo_15" style="cursor:pointer;margin-right:10px;"></div></a>
			</div>
        
    </div>
    
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jScrollPane/jquery.mousewheel.js"></script>
<script src="js/jScrollPane/jScrollPane.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<?
}
else
{
	echo "<center><b style='color:red;'>Zaloguj się</b></center>";
}
?>
