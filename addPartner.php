<a href="index.php">Back</a><br/>
<?php

require_once('lib/api.php');

try{
	$api = new BridApi(array('auth_token'=>'ENTER YOUR AUTH CODE HERE'));
	?>
	<h2>Php</h2>
	<?php
	print_r($api->addPartner(array('domain'=> 'http://www.google.com/')));

	?>
	<h2>Json</h2>
	<?php
	//print_r($api->addPartner(array('domain'=> 'http://www.youtube.com/'), true));
	
}catch(Exception $e){
	echo $e->getMessage();
}
?>