<a href="index.php">Back</a>
<?php
require_once('lib/api.php');
try{
	$api = new BridApi(array('auth_token'=>'ENTER YOUR AUTH CODE HERE'));
	?>
	<h2>Json</h2>
	<?php 
	$return = $api->channelsList();

	print_r($return);
	?>
	<h2>Php</h2>
	<?php 
	$return = $api->channelsList(true);

	print_r($return);
	
}catch(Exception $e){
	echo $e->getMessage();
}
?>
