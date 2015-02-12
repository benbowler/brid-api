<a href="index.php">Back</a><br/>
<?php

require_once('lib/api.php');

try{
	$api = new BridApi(array('auth_token'=>'ENTER YOUR AUTH CODE HERE'));
	$videoId = 4519;
	$partnerId = 1637;

	//Will append ad nodes on video
	$_data = array(
			'name' => 'ne brisi trt',
			'partner_id'=>1637,
			'id' =>$videoId,
			'Ad' => array(
						//Preroll (will be added into system if already not exists, or will be changed if it does exist)
						0 => array(
							'adType'=>0,
							'adTagUrl'=>'http://www.some-ad-tag.com/preroll2.xml',
							),
						//Midroll
						/*1 => array(
							'adType'=>1,
							'adTagUrl'=>'http://www.some-ad-tag.com/midroll.xml',
							'adTimeType'=>'s',//seconds
							'cuepoints'=> '10,20'//at 10/20 sec
							),
						//Overlay
						2 => array(
							'adType'=>3,
							'adTagUrl'=>'http://www.some-ad-tag.com/overlay.xml',
							'adTimeType'=>'s',
							'overlayStartAt'=>5,//seconds
							'overlayDuration'=> 10//at 10/20 sec
							),
						//Postroll
						3 => array(
							'adType'=>2,
							'adTagUrl'=>'http://www.some-ad-tag.com/postroll.xml',
							),*/

						)
					
		);
	print_r($api->editVideo($_data));

}catch(Exception $e){
	echo $e->getMessage();
}

	

?>

