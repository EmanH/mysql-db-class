<?php
	
	require_once("./db.class");
	
	// 5 arguments can be passed to the $db -> Q(""); function.
	// $db -> Q($query, $data, $boolean_return_results, $boolean_trim_result_array, $map_col_to_array_key);
	
	// Simple query, results returned in assoc array
	$results = $db -> Q("SELECT `first`,`last`,`email` FROM `people` WHERE `email`=?",array("joe@example.com"));
	
	// Simple insert query
	$db -> Q("INSERT INTO `people` (`first`,`last`,`email`)", array("Joe","Doe","joe@example.com"));
	
	// Return assoc array with a col set as array key
	$results = $db -> Q("SELECT `id`,`first`,`last`,`email` FROm `people` WHERE `last`=?",array("Doe"),true,false,'id');
	
?>