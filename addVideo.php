<a href="index.php">Back</a><br/>
<?php

require_once('lib/api.php');

try{

	$api = new BridApi(array('auth_token'=>'ENTER YOUR AUTH CODE HERE'));
	
	$_data['mp4'] = 'http://techslides.com/demos/sample-videos/small.mp4'; //required
	$_data['channel_id'] = 52; //required
	$_data['partner_id'] = 1637; //required
	$_data['name'] = 'Enter video title'; //required
	$_data['description'] = 'Enter video description'; //optional
	$_data['image'] = 'http://i.ytimg.com/vi/TVmIAwSrT78/maxresdefault.jpg'; //optional
	$_data['tags'] = 'one,two'; //optional

	print_r($api->addVideo($_data));

}catch(Exception $e){
	echo $e->getMessage();
}



?>