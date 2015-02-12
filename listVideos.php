<a href="index.php">Back</a>
<?php

require_once('lib/api.php');

try{
	$api = new BridApi(array('auth_token'=>'ENTER YOUR AUTH CODE HERE'));
	?>
	<h2>Json</h2>
	<?php 
	//Replace 11111 with real partner ID
	$return = $api->videos(1637);

	print_r($return);
	?>
	<h2>Php</h2>
	<?php 
	$return = $api->videos(1637, true);

	print_r($return);
	?>
	<h2>Invalid id</h2>
	<?php 
	$return = $api->videos(1637);

	print_r($return);
	?>
	<h2>Empty arguments</h2>
	<?php 
	$return = $api->videos();

	print_r($return);
	?>
	<br/><br/><br/>
	Use $_POST['apiQueryParams'] to submit pagination ( apiQueryParams=page:2 for page 2...).<br/>
	Response will return Pagination array that should be used for generating pagination requests.
	<?php
}catch(Exception $e){
	echo $e->getMessage();
}
?>

