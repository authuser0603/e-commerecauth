<?php
$validate_key = '123456789';
$RrtObj = new stdClass();
if(isset($_REQUEST['key']) && $_REQUEST['key'] != ''){
	if($validate_key == $_REQUEST['key']){
		$RrtObj->validate = 'Allow';
	}
	else{
		$RrtObj->validate = 'Disallow';
	}
}
else{
	$RrtObj->validate = 'Disallow';
}

$reJSON = json_encode($RrtObj);

echo $reJSON;
?>
