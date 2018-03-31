<?php
$validate_key = '123456789';
$RrtObj = new stdClass();
if(isset($_REQUEST['key']) && $_REQUEST['key'] != ''){
	if($validate_key == $_REQUEST['key']){
		$RrtObj->success = 'Allow';
	}
	else{
		$RrtObj->success = 'Disallow';
	}
}
else{
	$RrtObj->success = 'Disallow';
}

$reJSON = json_encode($RrtObj);

echo $reJSON;
?>
