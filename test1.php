<?php
function printjson($obr){

	for($i=0; $i<count($obr['users']);$i++){
		echo $obr['users'][$i]['name'].", ";
		for($y=0; $y<count($obr['roles']);$y++){
			if($obr['roles'][$y]['id']==$obr['users'][$i]['role']){
				echo $obr['roles'][$y]['roleName'].", ";
			}
	}
	for($y=0; $y<count($obr['contacts']);$y++){
		if($obr['contacts'][$y]['user']==$obr['users'][$i]['id']){
			echo $obr['contacts'][$y]['firstName']." ".$obr['contacts'][$y]['lastName']." ";

		}
	}
	for($y=0; $y<count($obr['permissions']);$y++){
		if($obr['permissions'][$y]['id']==$obr['users'][$i]['permissions']){
			echo "-"." ".$obr['permissions'][$y]['value'];
		}
	}
	echo "<br>";
}}

$obr = ( json_decode(file_get_contents('./json.txt'),true));
printjson($obr);

?>