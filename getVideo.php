<a href="index.php">Back</a>
<?php

require_once('lib/api.php');

try{
	$api = new BridApi(array('auth_token'=>'ENTER YOUR AUTH CODE HERE'));

	$videoId = 4519;
	$return = $api->video(4519);
	print_r($return);

}catch(Exception $e){
	echo $e->getMessage();
}
?>
