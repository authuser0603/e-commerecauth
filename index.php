<?php
$validate_key = '123456789';
if(isset($_REQUEST['key']) && $_REQUEST['key'] != ''{
	if($validate_key == $_REQUEST['key'])
		$RrtObj->validation = 'true';
}
else{
	$RrtObj->validation = 'false';
}

$reJSON = json_encode($RrtObj);

echo $reJSON;
?>