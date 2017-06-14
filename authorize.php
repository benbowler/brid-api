<a href="index.php">Back</a><br/>
<?php

require_once('lib/api.php');

try{
	$api = new BridApi();

	$redirect_url = 'http://localhost/api/authorize.php';
	if($redirect_url==''){
		throw new Exception('Redirect url is empty, fill $r_url value with the url where this script is loacated (to be redirected to). E.g: "http://www.yoururl.com/test/authorize.php"');
	}

	?>

	This authorization should be executed only once to get tokens, not each time when api is used.<br/>
	<b>Please replace $redirect_url variable in authorize.php with a proper url redirect.</b><br/>
	<?php

	$url = $api->authorizationUrl($redirect_url);

	if(!isset($_GET['code']) && empty($_GET['code'])){
		?>
		Authorize "<?php echo $redirect_url; ?>" with Brid cms clicking on the link below:
		<br/>
		<a href="<?php echo $url; ?>">Authorize</a>

		<?php } else{ ?>

		<b>You should store these values (access_token, refresh_token and code) somewhere (into Database not Session) since those will be used app wide.</b><br/><br/>
		Click Link below to authorize your domain:<br/>

		Your code value is <b><?php echo $_GET['code']; ?></b> please store it.<br/>
		<?php

			$token = $api->accessToken(array('code'=>$_GET['code'], 'redirect_uri'=>$redirect_url));

			if (isset($response->error)) {
			    echo  "The following error occurred: ".$response->error;
			}
			if(isset($token->access_token)){
				?>
				Your Access Token (auth_token) is: <b><h3><?php echo $token->access_token; ?></h3></b>
				Your Refresh Token is: <b><?php echo $token->refresh_token; ?></b><br/>
				
				<?php
			}
	}
}catch(Exception $e){
	echo $e->getMessage();
}	?>