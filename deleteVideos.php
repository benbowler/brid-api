<a href="index.php">Back</a>
<?php
require_once('lib/api.php');
try{
	$api = new BridApi(array('auth_token'=>'ENTER YOUR AUTH CODE HERE'));
	?>
	<h2>Json</h2>
	<?php 
	$post = array('partner_id'=>API_PARTNER_ID, 'ids'=>'1,2,3,4');
	
	$return = $api->deleteVideos(post);

	print_r($return);
	?>
	<h2>Php</h2>
	<?php 
	$return = $api->deleteVideos(post, true);

	print_r($return);
	
}catch(Exception $e){
	echo $e->getMessage();
}
?>
