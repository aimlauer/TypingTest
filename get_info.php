<?php
session_start();

// Holds the Google application Client Id, Client Secret and Redirect Url
require_once('settings.php');
require_once('db.php');
// Holds the various APIs involved as a PHP class. Download this class at the end of the tutorial
require_once('google-login-api.php');

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);

		// Access Tokem
		$access_token = $data['access_token'];
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($access_token);

		$gpUserData = array(
			'oauth_provider'=> 'google',
			'oauth_uid'     => $user_info['id'],
			'first_name'    => $user_info['displayName'],
			// No estoy seguro de como funciona emails, una cuenta puede tener varios emails a a la vez??
			'email'         => $user_info['emails'][0]['value'],
			'gender'        => '',
			'locale'        => $user_info['language'],
			'picture'       => $user_info['image']['url'],
			'link'          => $user_info['url']
		    );
	
		 $user = new User();
		 $userData = $user->checkUser($gpUserData);


         	// Now that the user is logged in you may want to start some session variable
		$_SESSION['logged_in'] = 1;
		$_SESSION['username'] = $user_info['displayName'];
		$_SESSION['picture'] = $gpUserData['picture'];
		$_SESSION['email'] = $gpUserData['email'] ;

		// Malo malo ...
		echo '<script>window.location.href="/es/_init.php"</script>';
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}

?>
