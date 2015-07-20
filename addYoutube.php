<a href="index.php">Back</a><br/>
<?php

require_once('lib/api.php');

try{
	$api = new BridApi(array('auth_token'=>'a9554d8b9b279b8a461d9535c022ba9f0c650d08'));

	$youTubeUrl = 'https://www.youtube.com/watch?v=xE_7I3O0Kfw';

	$youtubeData = array('url'=> $youTubeUrl,'return'=>'php');
	//Prefetch YouTube data (title, tags, etc.)
	$_data = $api->checkUrl($youtubeData,true);

	//print_r($_data); die();

	if(!isset($_data->error)){

		$_data->channel_id = 52;	//required
		$_data->partner_id = 1792;	//required

		print_r($api->addVideo((array)$_data));
		?>
		<h2>Php</h2>
		<?php
		//print_r($api->addVideo((array)$_data));

		?>
		<h2>Json</h2>
		<?php
		//print_r($api->addVideo((array)$_data), true);

	}else{
		echo $_data->error;
	}
}catch(Exception $e){
	echo $e->getMessage();
}

?>

