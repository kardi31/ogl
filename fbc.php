<?php
session_start();
include("db_connect.php");
include("include/ust.php");
include("include/function.php");
include_once("include/Facebook/autoload.php");

if($ust['fb_on']=="1")
{
	if($_GET['login']=="fb") 
	{
		$_SESSION['user_bc']=$_SERVER['HTTP_REFERER'];
		
		if($_SESSION['user_id']=="")
		{
			
			$fb = new Facebook\Facebook([
			  'app_id' => $ust['fb_id'],
			  'app_secret' => $ust['fb_se'],
			  'default_graph_version' => 'v2.2',
			  ]);

			$helper = $fb->getRedirectLoginHelper();

			$permissions = ['email']; // Optional permissions
			$loginUrl = $helper->getLoginUrl($ust['adres'].'fbc.php', $permissions);
			header("Location: ".$loginUrl);
		}
		else
		{
			if($ad<>"")
			{
				header("Location: ".$ad."");
			}
			else
			{
				header("Location: ".$ust['adres']."");
			}
		}
	}
	else
	{
	 
	$fb = new Facebook\Facebook([
		  'app_id' => $ust['fb_id'],
		  'app_secret' => $ust['fb_se'],
	  'default_graph_version' => 'v2.2',
	  ]);

	$helper = $fb->getRedirectLoginHelper();

	try {
	  $accessToken = $helper->getAccessToken();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  // When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  // When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	if (! isset($accessToken)) {
	  if ($helper->getError()) {
		header('HTTP/1.0 401 Unauthorized');
		echo "Error: " . $helper->getError() . "\n";
		echo "Error Code: " . $helper->getErrorCode() . "\n";
		echo "Error Reason: " . $helper->getErrorReason() . "\n";
		echo "Error Description: " . $helper->getErrorDescription() . "\n";
	  } else {
		header('HTTP/1.0 400 Bad Request');
		echo 'Bad request';
	  }
	  exit;
	}

	// Logged in
	//echo '<h3>Access Token</h3>';
	//var_dump($accessToken->getValue());

	// The OAuth 2.0 client handler helps us manage access tokens
	$oAuth2Client = $fb->getOAuth2Client();

	// Get the access token metadata from /debug_token
	$tokenMetadata = $oAuth2Client->debugToken($accessToken);
	//echo '<h3>Metadata</h3>';
	//var_dump($tokenMetadata);

	// Validation (these will throw FacebookSDKException's when they fail)
	//$tokenMetadata->validateAppId($config['app_id']);
	// If you know the user ID this access token belongs to, you can validate it here
	//$tokenMetadata->validateUserId('me');
	$tokenMetadata->validateExpiration();

	if (! $accessToken->isLongLived()) {
	  // Exchanges a short-lived access token for a long-lived one
	  try {
		$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

	  } catch (Facebook\Exceptions\FacebookSDKException $e) {
		echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
		exit;
	  }

	  //echo '<h3>Long-lived</h3>';
	  //var_dump($accessToken->getValue());
	}
	try {
	  // Returns a `Facebook\FacebookResponse` object
	  $response = $fb->get('/me?fields=id,name,email', $accessToken->getValue());
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}
	$_SESSION['fb_access_token'] = (string) $accessToken;

	$user = $response->getGraphUser();

	if($user['id']>=1)
	{
		if(db_num_rows(db_query("SELECT user_fb FROM ".$pre."user WHERE user_fb='".db_real_escape_string($user['id'])."'"))>=1)
		{
		
		}
		else
		{
			$in="INSERT INTO ".$pre."user(`user_login`, `user_haslo`, `user_email`, `user_akt`, `user_data_r`, `user_kod`,`user_rip`,`user_fb`)VALUES('".htmlspecialchars($user['name'])."', '".md5($user['email'].$user['id']."asdf3f23")."', '".htmlspecialchars($user['email'])."', '1', NOW(), '','".user_ip()."','".$user['id']."')";
			db_query($in);
			$user_id=db_insert_id();
		}
		
		$Query='SELECT * FROM '.$pre.'user WHERE user_fb="'.db_real_escape_string($user['id']).'"'; 
		$result = db_query($Query) or die(db_error());
		while ($row = db_fetch($result)) 
		{
			$id=$row['user_id'];
			$_SESSION['user_nick'] = $row["user_login"];
			$_SESSION['user_id'] = $row["user_id"];
			$_SESSION['user_strona']=$ust['adres'];
			if($row['user_t']=="3"){$_SESSION['logadm']="adm";}
		}
			
		$up="UPDATE ".$pre."user SET user_data_o=NOW(),user_lip='".user_ip()."' WHERE user_id='".$id."'";
		db_query($up);
	}

	$ad=$_SESSION['user_bc'];
	$_SESSION['user_bc']="";

	if($ad<>"")
	{
		header("Location: ".$ad."");
	}
	else
	{
		header("Location: ".$ust['adres']."");
	}

	}
}
?>